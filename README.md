# 🚀 FreshShop - Ứng Dụng Bán Rau Củ Quả Tươi

## 📌 Giới thiệu
FreshShop là một ứng dụng web được xây dựng bằng PHP/Laravel dành cho các cửa hàng kinh doanh rau củ quả tươi. Dự án này giúp người dùng dễ dàng mua sắm thực phẩm sạch trực tuyến, đồng thời hỗ trợ quản trị viên trong việc quản lý sản phẩm, đơn hàng và khách hàng.

## 📋 Yêu Cầu Hệ Thống
Trước khi bắt đầu, bạn cần cài đặt các công cụ sau:

- **[Git](https://git-scm.com/)**: Quản lý mã nguồn.
- **[PHP](https://www.php.net/)**: Laravel yêu cầu PHP >= 8.0.
- **[Composer](https://getcomposer.org/)**: Trình quản lý phụ thuộc cho PHP.
- **[Xampp](https://www.apachefriends.org/download.html)**: Chạy local.

## 📖 Mục lục
- [📌 Giới thiệu](#-giới-thiệu)
- [📋 Yêu Cầu Hệ Thống](#-yêu-cầu-hệ-thống)
- [📂 Cấu trúc dự án](#-cấu-trúc-dự-án)
- [🚀 Các Bước Cài Đặt Dự Án](#-các-bước-cài-đặt-dự-án)
- [🎮 Một số trang demo](#-một-số-trang-demo)
- [📜 Giấy phép](#-giấy-phép)

## 📂 Cấu trúc dự án
```
FreshShop/
├── 📁 app/                # Code chính của ứng dụng Laravel
├── 📁 bootstrap/          # Tệp khởi động
├── ⚙️ config/             # Cấu hình ứng dụng
├── 📁 database/           # Cấu trúc cơ sở dữ liệu
├── 🌍 public/             # Thư mục chứa tài nguyên công khai (CSS, JS, hình ảnh...)
├── 🎨 resources/          # Giao diện người dùng (Blade templates, CSS, JS...)
├── 🔀 routes/             # Định tuyến ứng dụng
├── 🗄️ storage/            # Thư mục chứa dữ liệu tạm thời, cache, logs...
├── ✅ tests/              # Kiểm thử ứng dụng
├── 📄 .env.example        # Mẫu tệp cấu hình môi trường
├── 🎵 composer.json       # Quản lý thư viện PHP
└── 📖 README.md           # Tài liệu hướng dẫn sử dụng dự án
```

## 🚀 Các Bước Cài Đặt Dự Án

### 1️⃣ Clone Dự Án Từ GitHub
1. Truy cập vào [GitHub Repository](https://github.com/Huyui2410/Projects).
2. Nhấn vào nút **"Code"** và sao chép đường dẫn **HTTPS**.
3. Mở terminal và di chuyển đến thư mục bạn muốn clone dự án vào.
4. Chạy lệnh sau để clone dự án:
   ```bash 
   git clone https://github.com/Huyui2410/Projects.git
   ```
5. Di chuyển vào thư mục dự án:
   ```bash
   cd FreshShop
   ```

### 2️⃣ Cài Đặt Các Phụ Thuộc
1. Cài đặt các thư viện PHP:
   ```bash
   composer install
   composer update
   ```

### 3️⃣ Cấu Hình Cơ Sở Dữ Liệu
1. Tạo File `.env` từ file mẫu `.env.example` bằng lệnh:
   ```bash
   cp .env.example .env
   ```
2. Cấu Hình Kết Nối Cơ Sở Dữ Liệu
   Mở file `.env` và cấu hình các thông tin kết nối cơ sở dữ liệu như sau:
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=freshshop_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```
3. Import File SQL
   ```bash
   mysql -u root -p freshshop_db < freshshop.sql
   ```

### 4️⃣ Tạo Khóa Ứng Dụng
1. Chạy lệnh sau để tạo khóa ứng dụng:
   ```bash
   php artisan key:generate
   ```

### 5️⃣ Chạy Ứng Dụng
1. Chạy ứng dụng trên server phát triển:
   ```bash
   php artisan serve
   ```
   Ứng dụng của bạn sẽ chạy tại `http://localhost:8000`.

## 🛠 Hướng Dẫn Debug Lỗi
- **Lỗi thiếu file `.env`**: Chạy `cp .env.example .env` rồi `php artisan key:generate`.
- **Lỗi quyền truy cập thư mục `storage` hoặc `bootstrap/cache`**:
  ```bash
  chmod -R 777 storage bootstrap/cache
  ```
- **Lỗi không kết nối được MySQL**: Kiểm tra lại thông tin `.env` hoặc đảm bảo MySQL đang chạy.

## 🎮 Một số trang demo
### 📌 Trang chủ
![image](https://github.com/user-attachments/assets/21dbabea-e4de-4a3e-a8d8-3be9f8bd03d7)

### 🛒 Trang giỏ hàng
![image](https://github.com/user-attachments/assets/917a475c-52ce-4599-a255-fac272cc305b)

### 🔐 Trang đăng kí tài khoản
![image](https://github.com/user-attachments/assets/3201fc4a-0032-4be2-a226-25942d4b5e96)

### 🛠️ Trang CRUD sản phẩm
![image](https://github.com/user-attachments/assets/3ab86ed2-ab82-4f31-8955-be3ee2a93238)

## 📜 Giấy phép
Dự án này tuân theo giấy phép MIT.

📝 Chúc bạn thành công với việc triển khai FreshShop! 🥦🥕

