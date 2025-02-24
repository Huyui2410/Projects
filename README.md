# Hướng Dẫn Clone Dự Án Laravel và Cấu Hình

## 📋 Yêu Cầu Hệ Thống
Trước khi bắt đầu, bạn cần cài đặt các công cụ sau:

- **[Git](https://git-scm.com/)**: Quản lý mã nguồn.
- **[PHP](https://www.php.net/)**: Laravel yêu cầu PHP >= 8.0.
- **[Composer](https://getcomposer.org/)**: Trình quản lý phụ thuộc cho PHP.
- **[Xampp](https://www.apachefriends.org/download.html)**: Chạy local.

## 🚀 Các Bước Cài Đặt Dự Án

### 1. Clone Dự Án Từ GitHub
1. Truy cập vào [GitHub Repository](https://github.com/Huyui2410/Projects).
2. Nhấn vào nút **"Code"** và sao chép đường dẫn **HTTPS**.
3. Mở terminal và di chuyển đến thư mục bạn muốn clone dự án vào.
4. Chạy lệnh sau để clone dự án:
   ```bash 
   git clone https://github.com/Huyui2410/Projects.git
5. Di chuyển vào thư mục dự án:
    ```bash
    cd Projects
### 2. Cài Đặt Các Phụ Thuộc
1. Cài đặt các thư viện PHP: Trong thư mục dự án, chạy lệnh sau:
    ```bash
    composer install
### 3. Cấu Hình Cơ Sở Dữ Liệu
1. Tạo File .env từ file mẫu .env.example bằng lệnh:
    ```bash
    cp .env.example .env
2. Cấu Hình Kết Nối Cơ Sở Dữ Liệu
Mở file .env và cấu hình các thông tin kết nối cơ sở dữ liệu như sau:
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
3. Import File SQL
Tải lên file SQL mà bạn đã tải lên (freshop (2).sql) vào cơ sở dữ liệu của bạn(import).
Bạn có thể sử dụng phpMyAdmin hoặc MySQL Workbench để import file này.Nếu sử dụng dòng lệnh MySQL, chạy:
    ```bash
    mysql -u your_database_username -p your_database_name < /path/to/freshop\ (2).sql

#### Thay /path/to/ bằng đường dẫn thực tế đến file SQL.

### 4. Tạo Khóa Ứng Dụng
1. Chạy lệnh sau để tạo khóa ứng dụng:
    ```bash
    php artisan key:generate
### 5. Chạy Ứng Dụng
1. Chạy ứng dụng trên server phát triển:
    ```bash
    php artisan serve
Ứng dụng của bạn sẽ chạy tại http://localhost:8000.

⚠️ Lưu Ý
Nếu dự án yêu cầu các dữ liệu khác hoặc cấu hình thêm, bạn có thể tham khảo tài liệu đi kèm trong repository hoặc yêu cầu thêm trợ giúp.

Kiểm tra kỹ thông tin kết nối cơ sở dữ liệu trong file .env để đảm bảo không bị lỗi kết nối.

📝 Chúc bạn thành công với việc triển khai dự án Laravel này! 🎉

# Một số trang demo
## Trang chủ
![alt text](image.png)


## Trang giỏ hàng sau khi thêm sản phẩm 
![alt text](image-2.png)

## Trang đăng kí tài khoản
![alt text](image-4.png)

## Trang đặt đơn hàng
![alt text](image-6.png)

## Trang hóa đơn đặt hàng và chi tiết 

![alt text](image-8.png)

# Trang panel của admin (chỉ tài khoản admin mới vào được)
### Email: admin@gmail.com
### Password: 12345678
![alt text](image-10.png)

## Trang CRUD sản phẩm
![alt text](image-11.png)

# 📝Và còn nhiều trang khác nữa đang chờ bạn khám phá!

