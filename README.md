# webdocsach_manguonmothayHoang
1.	Webiste được xây dựng với 4 đối tượng chính:
2.	Khách vãng lai.
3.	Khách là thành viên của hệ thống.
4.	Admin (quản lý toàn bộ hệ thống).
2. Chức năng hệ thống
	2.1. Đối với khách vãng lai
	Xem thông tin sách
Miêu tả	Chức năng xem thông tin cho phép khách vãng lai có thể xem thông tin tên sách, tên nhà xuất bản, nhà phát hành, bìa sách, nội dung sách …
Đầu vào	Người dùng click vào sách muốn xem chi tiết.
Xử lý	Tìm kiếm sách trong CSDL.
Xuất	Hiển thị ra thông tin chi tiết của sách cho người dùng.
	
2.2. Đối với Manager
	Đăng nhập vào hệ thống quản trị Admin
Miêu tả	Chức năng đăng nhập vào hệ thống quản trị  Manger dành cho những ai có tài khoản Manger. Chức năng cho phép người quản trị có thể đăng nhập vào giao diện quản trị của website.
Đầu vào	Khi người dùng mở trang quản trị, form đăng nhập hiện ra, người thực hiện điền thông tin vào form bao gồm username và password.
Xử lý	Hệ thống  thực hiện việc kiểm tra dữ liệu đầu vào đã đúng định dạng chưa, các trường bắt nhập đã nhập chưa..
Tiếp đó hệ thống sẽ kiểm tra xem có thông tin của admin  nào tương ứng vơi username và password người dùng nhập hay không, nếu có thì thực hiện đăng nhập cho người dùng, nếu sai thông báo kết quả cho người dùng.
Xuất	Thông báo kết quả cho người dùng  và thực hiện đăng nhập vào giao diện Manger của  hệ thống .

3. Phân tích cơ sở dữ liệu
	3.1. Từ điển cơ sở dữ liệu
Bảng sách
Tên cột	Kiểu dữ liệu	Ràng buộc	Mô tả
idsach	int	Primary key;
Auto_increment	
tensach	Varchar(250)		Tên sách
hinhanh	Varchar(250)		Hình ảnh sách
Pdf	Varchar(250)		Nội dung sách
idtheloai	Varchar(250)		Thể loại sách
idtacgia	int	Foreign key	Tác giả
idnxb	Int	Foreign key	Nhà xuất bản

Bảng thể loại
Tên cột	Kiểu dữ liệu	Ràng buộc	Mô tả
idtheloai	int	Primary key;
Auto_increment	
Tentheloai	Varchar(250)		Thể loại sách

Bảng Tác giả
Tên cột	Kiểu dữ liệu	Ràng buộc	Mô tả
Idtacgia	int	Primary key;
Auto_increment	
Tacgia	Varchar(250)		Tác giả


Bảng Nhà xuất bản
Tên cột	Kiểu dữ liệu	Ràng buộc	Mô tả
Idnxb	int	Primary key;
Auto_increment	
nxb	Varchar(250)		Nhà xuất bản

Bảng quản trị
Tên cột	Kiểu dữ liệu	Ràng buộc	Mô tả
Idqt	int	Primary key;
Auto_increment	
taikhoan	Varchar(250)		Tài khoản
mk	Varchar(250)		Mật khẩu


