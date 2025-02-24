<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\Cart;
use App\Models\HoaDon;
use App\Models\ChiTietHoaDon;
use Illuminate\Support\Facades\Validator;
use session;
class CartController extends Controller
{
    //
    public function AddCart(Request $req, $id){
        $sanpham = SanPham::find($id);
        if($sanpham!=null){
            if ($req->session()->has('cart')) {
                //
                $nowcart=$req->session()->get('cart');

            } else{
                $nowcart=null;
            }
                $newcart = new Cart($nowcart);
                $newcart->AddCart($sanpham, $id);
                $req->session()->put('cart', $newcart);

        }
        return view('user.pages.total_cart');
    }
    public function DeleteCart(Request $request, $id){
        if ($request->session()->has('cart')) {
            //
            $nowcart=$request->session()->get('cart');

        } else{
            $nowcart=null;
        }
            $newcart = new Cart($nowcart);
            $newcart->DeleteItemCart($id);
            if(count($newcart->products)>0){
                $request->session()->put('cart', $newcart);//nếu còn sp trong giả hàng put lại
            }
            else{
                $request->session()->forget('cart' ); // nếu k còn sản phẩm xóa luôn giỏ hàng
            }

            return view('user.pages.cart-list',compact('newcart'));
    }
    public function postBillandDetail(Request $request)
    {
        $cart = $request->session()->get('cart');

        $request->validate([
            'hoten' => 'required',
            'sdt' => 'required',
            'diachi' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //                      ->withErrors($validator)
        //                      ->withInput();
        // }

        $hoadon = new HoaDon();
        $hoadon->user_id = $request->id_user;
        $hoadon->hoten = $request->hoten;
        $hoadon->sdt = $request->sdt;
        $hoadon->diachi = $request->diachi;
        $hoadon->thanhtien = $request->thanhtien;
        $hoadon->trangthai ="Đã đặt";
        $hoadon->save();


        foreach($cart->products as $key =>$value){

            $chitiethoadon = new ChiTietHoaDon();
            $chitiethoadon->id_hoadon =  $hoadon->id;
            $chitiethoadon->ProductId =  $value['productInfo']->id;
            $chitiethoadon->SoLuong = $value['quantity'];
            $chitiethoadon->Gia = $value['price'];
            $chitiethoadon->ThanhTien = $value['quantity'] *  $value['price'];
            // $chitiethoadon->TrangThai ="Đã đặt hàng";
            $chitiethoadon->save();
            $request->session()->forget('cart');
        }

        return redirect()->route('user.index')->with('status', 'Đăt hàng thành công');
    }
}
