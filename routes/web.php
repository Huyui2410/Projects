<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\user;
use App\Http\Controllers\user\PagesController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\user\LoginController as UseLoginController;
use App\Http\Controllers\CartController;

// Định nghĩa các tuyến đường (route) cho phần quản trị viên (admin)
Route::resource('panel/loaisanpham', admin\LoaiSPController::class); // Quản lý loại sản phẩm
Route::resource('panel/sanpham', admin\SanPhamController::class); // Quản lý sản phẩm
Route::resource('panel/hoadon', admin\HoaDonController::class); // Quản lý hóa đơn
Route::resource('panel/chitiethoadon', admin\ChiTietHoaDonController::class); // Quản lý chi tiết hóa đơn
Route::resource('panel/danhmuc', admin\DanhMucController::class); // Quản lý danh mục
Route::resource('panel/user', admin\UserController::class); // Quản lý người dùng

// Nhóm các route yêu cầu đăng nhập admin mới có thể truy cập
Route::group(['middleware' => 'CheckAdminLogin', 'prefix' => 'panel'], function() {
    Route::resource('loaisanpham', admin\LoaiSPController::class);
    Route::resource('sanpham', admin\SanPhamController::class);
    Route::resource('hoadon', admin\HoaDonController::class);
    Route::resource('chitiethoadon', admin\ChiTietHoaDonController::class);
    Route::resource('danhmuc', admin\DanhMucController::class);
    Route::resource('user', admin\UserController::class);

    // Trang chủ admin
    Route::get('home', [HomeController::class, 'index'])->name('admin.home');
});

// Route truy cập danh sách người dùng admin
Route::get('panel/user', [admin\UserController::class, 'index'])->name('panel/index');

// Route trang chủ của người dùng
Route::get('/', [user\PagesController::class, 'index'])->name('user.index');

// Nhóm các route dành cho người dùng
Route::group(['prefix' => 'user'], function() {
    Route::get('/', [PagesController::class, 'index'])->name('user.index'); // Trang chủ
    Route::get('index', [PagesController::class, 'index'])->name('user.index'); // Trang chủ
    Route::get('shop', [PagesController::class, 'shop'])->name('user.shop'); // Trang cửa hàng
    Route::get('about', [PagesController::class, 'about'])->name('user.about'); // Giới thiệu
    Route::get('checkout', [PagesController::class, 'checkout'])->name('user.checkout'); // Thanh toán
    Route::get('cart', [PagesController::class, 'cart'])->name('user.cart'); // Giỏ hàng
    Route::get('gallery', [PagesController::class, 'gallery'])->name('user.gallery'); // Bộ sưu tập
    Route::get('single/{id}', [PagesController::class, 'single'])->name('user.single'); // Chi tiết sản phẩm

    // Đăng nhập / Đăng xuất
    Route::get('login', [UseLoginController::class, 'getLogin'])->name('getLogin');
    Route::post('login', [UseLoginController::class, 'postLogin'])->name('postLogin');
    Route::get('logout', [UseLoginController::class, 'getLogout'])->name('getLogout');

    // Quản lý tài khoản cá nhân
    Route::get('myaccount', [UseLoginController::class, 'myAccount'])->name('myAccount');
    Route::put('myaccount/{id}', [UseLoginController::class, 'updateAccount'])->name('updateAccount');

    // Bình luận
    Route::post('comment', [PagesController::class, 'postComment'])->name('postComment');

    // Quản lý hóa đơn của người dùng
    Route::get('mybill/{id}', [PagesController::class, 'myBill'])->name('myBill'); // Danh sách hóa đơn
    Route::get('/myDetailBill/{id}', [PagesController::class, 'myDetailBill'])->name('myDetailBill'); // Chi tiết hóa đơn
    Route::put('mybill/{id}', [PagesController::class, 'cancelBill'])->name('cancelBill'); // Hủy hóa đơn

    // Tìm kiếm
    Route::get('search', [PagesController::class, 'search'])->name('search');
});

// Đăng ký tài khoản người dùng
Route::get('user/register', [user\LoginController::class, 'Register'])->name('register');
Route::post('user/register', [user\LoginController::class, 'postRegister'])->name('postRegister');

// Xử lý thanh toán và đơn hàng
Route::post('checkout', [CartController::class, 'postBillandDetail'])->name('postBillandDetail');

// Chức năng giỏ hàng
Route::get('/add-cart/{id}', [CartController::class, 'AddCart'])->name('addtocart'); // Thêm vào giỏ hàng
Route::get('cart', [user\PagesController::class, 'cart'])->name('user.cart'); // Xem giỏ hàng
Route::get('/delete-item-cart/{id}', [CartController::class, 'DeleteCart'])->name('deleteitemcart'); // Xóa sản phẩm khỏi giỏ hàng
