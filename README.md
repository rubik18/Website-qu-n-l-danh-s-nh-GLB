# ``` Website quản lý danh sánh GLB ```
------------
### SEO4-Nhom14.2
[![git]](https://github.com/phuongvu0909/SEO4-Nhom14.2)

## Giới thiệu

1. **Khái quát chung về website**

    * Đây là một trang web dùng để quản lý các file có phần mở rộng là GLB - file thu gọn của các file có phần mở rộng là GLTF - một định dạng tệp tiêu chuẩn biểu diễn các cảnh hay mô hình 3 chiều.
    * **Website quản lý danh sách glb** được coi như một thư viện về các file 3D của riêng người dùng, đó là nơi người dùng có thể dễ dàng hơn trong việc quản lý, đưa vào và xem chi tiết các file 3d mà mình đang có trong thư viện.

2. **Chi tiết chức năng Website**

    <!-- * Bạn có thể upload một hay nhiều file 3D (file.*glb*) lên Website của chúng tôi
    * Bạn có thể xem chi tiết từng file 3D như :Mã sản phẩm,tên sản phẩm, kích thước, danh sách animation, tốc độ animation...
    * Bạn có thể xóa 1 hay nhiều file.*glb* khi có nhu cầu. -->
    **Các chức năng có trên thanh công cụ**
    * [*Chức năng đăng nhập, đăng xuất*](https://github.com/phuongvu0909/SEO4-Nhom14.2/blob/readme/Functional%20images/login.png): để có thể bảo mật về tài nguyên của người dùng, chức năng **login** khi người dùng truy cập vào trang web giúp người dùng có thể quản lý đúng file GLB của mình cũng như đảm bảo quyền riêng tư về dữ liệu, ngoài ra chức năng **logout** sẽ đi kèm .
    * [*Chức năng tải file 3d lên website*](https://github.com/phuongvu0909/SEO4-Nhom14.2/blob/readme/Functional%20images/upload.png): Người dùng chọn chức năng **Upload File** ở trên thanh công cụ, sau khi điền đủ các trường và nhấn **chấp nhận** là người dùng đã upload 1 file 3d(glb) thành công.
    * [*Chức năng xem danh sách các file 3d đã upload lên*](https://github.com/phuongvu0909/SEO4-Nhom14.2/blob/readme/Functional%20images/listView.png): Khi kích chuột chọn chức năng **List file GLB** màn hình sẽ hiện lên danh sách các file glb đã được upload lên dưới dạng bảng với các trường thông tin là thông tin của file GLB đó.
    
    *Chức năng hiển thị file GLB*: Để có thể xem được chi tiết của file GLB người dùng chọn mục **Show view GLB**.
    
    * [*Chức năng xem thông tin trang web*](https://github.com/phuongvu0909/SEO4-Nhom14.2/blob/readme/Functional%20images/help.png) : thông tin của trang web được nói đến trong phần **help**.
    * [*Thanh hiển thị list gồm tên các file GLB*](https://github.com/phuongvu0909/SEO4-Nhom14.2/blob/readme/Functional%20images/thanhlist.png): Bên cạnh chức năng **Show view GLB** thì **thanh hiển thị list file GLB** thiết kế nằm dọc ngay bên trái trang web giúp người dùng có thể dễ dàng quan  sát tổng quát các file GLB hiện mình đang có.

    **Chức năng chỉnh sửa các thuộc tính của các file GLB khi xem chi tiết**
    
     
    * **Chức năng Material**:
    1. *Chức năng chọn màu(color)* giúp người dùng chỉnh màu theo hệ màu hexa.
    2. *Chức năng thay đổi textture material*
    ![alt text](https://media.giphy.com/media/spirWBgjPfer0tR8pI/giphy.gif)  
    * **Chức năng plane**:
    1. Chức năng chỉnh: *tạo bóng (enable plane)* và *tắt bóng(disable plane)* 
    2. Chức năng chỉnh: *tạo lưới(enable grib)* và *tắt lưới(disable grib)*
    ![alt text](https://media.giphy.com/media/mYYbvPWlxR556HMIZO/giphy.gif)
    * **Chức năng plane direction**:Thay đổi vị trí của plane
    1. *Plane direction x*
    2. *Plane direction y*
    3. *Plane direction z*
    4. *Grib direction x*
    5. *Grib direction y*
    6. *Grib derection z*
    ![alt text](https://media.giphy.com/media/aoe23yAYoFO3uYGnwH/giphy.gif)
    * **Chức năng light color**:
    1. Chức năng  chỉnh (*Directional Light*):- ánh sáng vật thể 
    2. Chức năng chỉnh (*Ambient Light*)- ánh sáng môi trường xung quanh 
    3. *Light color*:chọn màu cho lưới 
    ![alt text](https://media.giphy.com/media/WJdSwDtkfX9rUtX9YZ/giphy.gif)
    * **Light direction**:
    1. *Light direction x*
    2. *Light direction y*
    3. *Light direction z*
    ![alt text](https://media.giphy.com/media/5jQJUnN4yiS4GWk1qa/giphy.gif)
    * **Chức năng tạm dừng hoặc tiếp tục để animation hoạt động** -*Pausing/Continued*
    ![alt text](https://media.giphy.com/media/cIh36sLCVBgI64zEZS/giphy.gif)
    * **Chức năng tạo panorama**:
    1. *Cube*: chọn ảnh 360 độ 
    2. *Eqiuretangular*
    3. *Envinronment*
    ![alt text](https://media.giphy.com/media/z3EiPc4sO947lLhXIA/giphy.gif)
    ![alt text](https://media.giphy.com/media/z2v8JiJNwdEOkHeJxE/giphy.gif)
    ![alt text](https://media.giphy.com/media/cIh36sLCVBgI64zEZS/giphy.gif)


    
## Cài đặt
Trước tiên yêu cầu máy dùng để chạy Website phải có máy chủ Websever,ở đây chúng tôi hướng dẫn người dùng sử dụng Xampp:
    * Trước hết bạn cần tải code từ github: [Website quản lý GLB](https://github.com/phuongvu0909/SEO4-Nhom14.2) dưới dạng file *.zip* hoặc clone code về repo local của máy nếu bạn có sử dụng *git*.
    * Sau khi giải nén file: 
    1. Import CSDL vào SQL: tạo một CSDL có tên *model3d*(cùng tên với tên dữ liệu sẽ import vào)
    sau đó thực hiện import vào CSDL đó.
    2. Đưa các file còn lại vào thư mục htdoc trong Xampp.
    3. Truy cập 1 công cụ tìm kiếm bất kỳ có kết nối intenet và truy cập vào Website bằng đường dẫn: **http://localhost:8080/SEO4-Nhom14.2/webserver/web.php**

## Công nghệ - Công cụ - Thư viện

1. Thư viện **Three.js** 
    - Dùng thư viện **Three.js** của **JavaScript** để tạo và hiển thị hoạt hình đồ họa 3D
2. **HTML,CSS** và **PHP**
    - Thiết kế giao diện website bằng **HTML và CSS**. Sau đó sử dụng **PHP** kết nối dữ liệu vào cơ sở dữ liệu.

## Tác giả

1. [Hoàng Thị Mai](https://github.com/kaioz11)
2. [Vũ Thị Phương](https://github.com/phuongvu0909)
3. [Đinh Thị Thắm](https://github.com/rubik18)
4. [Trần Thị Thúy Nga](https://github.com/thuynga2705)

## Tài liệu tham khảo

- Định nghĩa file: [GLB](https://f4vnn.com/tep-glb-la-gi.html)
- Thư viện cung cấp file 3D:[Three.js](https://threejs.org/)


