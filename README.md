# 🚀 FreshShop - Ứng Dụng Bán Rau Củ Quả Tươi

## 📌 Giới thiệu
FreshShop là một nền tảng thương mại điện tử chuyên biệt dành cho các cửa hàng bán rau củ quả tươi. Với giao diện trực quan, dễ sử dụng, FreshShop giúp khách hàng dễ dàng đặt mua thực phẩm sạch chỉ với vài cú nhấp chuột. Ngoài ra, hệ thống còn cung cấp công cụ quản lý sản phẩm, đơn hàng, khách hàng một cách hiệu quả, hỗ trợ các chủ cửa hàng trong việc tối ưu hóa quy trình kinh doanh. 

Bạn đang tìm kiếm một giải pháp bán hàng online cho thực phẩm sạch? FreshShop chính là lựa chọn hoàn hảo để bạn tiếp cận khách hàng nhanh chóng, chuyên nghiệp và tiện lợi hơn bao giờ hết! 🥦🍅

## 🎮 Sử dụng
### 👥 Người dùng
- 🏷️ Xem danh mục sản phẩm, tìm kiếm, xem giỏ hàng.
- 🔐 Đăng ký, đăng nhập để đặt hàng, xem lịch sử đơn hàng.

### 🛡️ Quản trị viên
- 🔑 Đăng nhập vào hệ thống quản trị bằng tài khoản admin.
- 🛒 Quản lý sản phẩm, danh mục, loại sản phẩm, hóa đơn, ...

## 🚀 Công nghệ sử dụng
- **🖥️ Backend**: Laravel PHP
- **🎨 Frontend**: Blade, Bootstrap, jQuery
- **🗄️ Database**: MySQL

# 🌟🌟 Hướng Dẫn Clone Dự Án Laravel và Cấu Hình 🌟🌟

## 👋🌟 Yêu Cầu Hệ Thống 🌟👋
Trước khi bắt đầu, bạn cần cài đặt các công cụ sau:

- **[Git](https://git-scm.com/)** 🛠️: Quản lý mã nguồn.
- **[PHP](https://www.php.net/)** 🌟: Laravel yêu cầu PHP >= 8.0.
- **[Composer](https://getcomposer.org/)** 💪: Trình quản lý phụ thuộc cho PHP.
- **[Xampp](https://www.apachefriends.org/download.html)** 🌱: Chạy local.

## 🚀🎉 Các Bước Cài Đặt Dự Án 🎉🚀

### 1. Clone Dự Án Từ GitHub 💾
1. Truy cập vào [GitHub Repository](https://github.com/Huyui2410/Projects). 
2. Nhấn vào nút **"Code"** 🔒 và sao chép đường dẫn **HTTPS**.
3. Mở terminal 💻 và di chuyển đến thư mục bạn muốn clone dự án vào.
4. Chạy lệnh sau để clone dự án:
   
```bash
   git clone https://github.com/Huyui2410/Projects.git
```
5. Di chuyển vào thư mục dự án:
```bash
    cd Projects
```

### 2. Cài Đặt Các Phụ Thuộc 🏢
1. Cài đặt các thư viện PHP: Trong thư mục dự án, chạy lệnh sau:
    
```bash
    composer install
```

### 3. Cấu Hình Cơ Sở Dữ Liệu 🏠
1. Tạo File .env từ file mẫu .env.example bằng lệnh:
```bash
    cp .env.example .env
```
2. Cấu Hình Kết Nối Cơ Sở Dữ Liệu 🏦
Mở file `.env` và cấu hình các thông tin kết nối cơ sở dữ liệu như sau:
    
```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
```
3. Import File SQL 🌟
Tải lên file SQL mà bạn đã tải lên (`freshop (3).sql`) vào cơ sở dữ liệu của bạn (import).
Bạn có thể sử dụng **phpMyAdmin** hoặc **MySQL Workbench** để import file này. Nếu sử dụng dòng lệnh MySQL, chạy:
```bash
    mysql -u your_database_username -p your_database_name < /path/to/freshop\ (3).sql
```
#### Thay `/path/to/` bằng đường dẫn thực tế đến file SQL.

### 4. Tạo Khóa Ứng Dụng 🔑
1. Chạy lệnh sau để tạo khóa ứng dụng:
    
```bash
    php artisan key:generate
```

### 5. Chạy Ứng Dụng 🚀
1. Chạy ứng dụng trên server phát triển:
```bash
    php artisan serve
```
Ứng dụng của bạn sẽ chạy tại **http://localhost:8000** 🌟.

## ⚠️🛠️ Lưu Ý 🛠️⚠️
- Nếu dự án yêu cầu các dữ liệu khác hoặc cấu hình thêm, bạn có thể tham khảo tài liệu đi kèm trong repository hoặc yêu cầu thêm trợ giúp.
- Kiểm tra kỹ thông tin kết nối cơ sở dữ liệu trong file `.env` để đảm bảo không bị lỗi kết nối.

## 🎉 Một Số Trang Demo 🎉

### 🏠 Trang chủ
![image](https://github.com/user-attachments/assets/21dbabea-e4de-4a3e-a8d8-3be9f8bd03d7)

### 🛍 Trang giỏ hàng sau khi thêm sản phẩm 
![image](https://github.com/user-attachments/assets/917a475c-52ce-4599-a255-fac272cc305b)

### 👤 Trang đăng kí tài khoản
![image](https://github.com/user-attachments/assets/3201fc4a-0032-4be2-a226-25942d4b5e96)

### 💼 Trang đặt đơn hàng
![image](https://github.com/user-attachments/assets/33acfd96-3b6d-4beb-99a7-f068a5baacdf)

### 🌟 Trang hóa đơn đặt hàng và chi tiết 
![image](https://github.com/user-attachments/assets/5724bc9b-a022-4bb8-bb58-ba50b8e081dc)

## 👨‍💼 Trang panel của admin (chỉ tài khoản admin mới vào được)
### 👤 Email: **admin@gmail.com**
### 🔑 Password: **12345678**
![image](https://github.com/user-attachments/assets/9b41a9e2-8d50-4c72-9af2-ed9e89b791be)

## 📚 Trang CRUD sản phẩm
![image](https://github.com/user-attachments/assets/3ab86ed2-ab82-4f31-8955-be3ee2a93238)

---

# 💃🌟 Và Còn Nhiều Trang Khác Đang Chờ Bạn Khám Phá! 🌟💃
------------------



## 🤝 Đóng góp
Nếu bạn muốn đóng góp cho dự án, hãy fork repository và gửi pull request.

## 📜 Giấy phép
Dự án này tuân theo giấy phép MIT.

📝 Chúc bạn thành công với việc triển khai dự án Laravel này! 🎉


