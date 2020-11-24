# 
```php
 Website quản lý danh sánh GLB
 ```
------------
### SEO4-Nhom14.2

## Giới thiệu

1. **Khái quát chung về website**

    * Đây là một trang web dùng để quản lý các file có phần mở rộng là GLB - file thu gọn của các file có phần mở rộng là GLTF - một định dạng tệp tiêu chuẩn biểu diễn các cảnh hay mô hình 3 chiều.
    * Website này tạo như một thư viện riêng của người dùng nơi người dùng có thể thêm, quản lý, sửa,xóa và có thể tìm hiểu chi tiết về mô hình 3D đó.

2. **Chi tiết chức năng Website**

    * Bạn có thể upload một hay nhiều file 3D (file.*glb*) lên Website của chúng tôi
    * Bạn có thể xem chi tiết từng file 3D như :Mã sản phẩm,tên sản phẩm, kích thước, danh sách animation, tốc độ animation...
    * Bạn có thể xóa 1 hay nhiều file.*glb* khi có nhu cầu.

## Công nghệ 

1. **Js** và thư viện **Three.js**
    Dùng js để loader file **.GLB** lấy từ thư viện **Three.js** lên server:
        - Sau khi đã có được các file .GLB chúng tôi đã tạo ra giao diện để cho file GLb khi load lên có thể hiển thị, sau đó dùng **js** để viết hàm load đưa file .GLb lên server
2. **HTML,CSS** và **PHP**
    - Thiết kế giao diện website bằng **HTML và CSS**. Sau đó sử dụng **PHP** để tạo ra các controler điểu khiển tương tác giữa model và view, đưa file được up lên và Database

## Tác giả

1. [Hoàng Thị Mai](https://github.com/kaioz11)
2. [Vũ Thị Phương](https://github.com/phuongvu0909)
3. [Đinh Thị Thắm](https://github.com/rubik18)
4. [Trần Thị Thúy Nga](https://github.com/thuynga2705)

## Tài liệu tham khảo

- Định nghĩa file: [GLB](https://f4vnn.com/tep-glb-la-gi.html)
- Thư viện cung cấp file 3D:[Three.js](https://threejs.org/)


