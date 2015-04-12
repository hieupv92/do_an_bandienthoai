<?php
//Ví dụ: Tạo mã bảo mật
session_start();//Khởi động session
//Code lập trình sinh ra mã bảo mật
//Sử dụng hàm rand(): sinh ra ngẫu nhiên 1 số
//echo rand();
//echo '<br>'.time();//Trả về tổng số giây tính từ năm 1970
//echo '<br>'.$_SERVER['REMOTE_ADDR'];//Lấy ra địa chỉ IP của người dùng khi truy cập
//md5: hàm mã hóa trả về 32 ký tự
$ma=md5($_SERVER['REMOTE_ADDR'].time().rand());
//echo '<br>'.$ma;
//Lấy mã bảo mật là 6 ký tự trong tổng số 32 ký tự trên: sử dụng hàm cắt chuỗi
//Hàm cắt chuỗi 32ky tự trên thành 6 ký tự và lấy từ ký tự thứ 13 
$code=substr($ma,13,6);
//echo '<br>'.$code;
//Lưu mã bảo mật bên trên vào biến session
$_SESSION['sercode']=$code;//Biến này sẽ dùng để so sánh vs dữ liệu người dùng nhập form

//Sử dụng PHP để vẽ ra 1 bức ảnh
//B1: lệnh tạo đối tượng ảnh: từ 1 ảnh GIF đã có
$img=imagecreatefromgif('cross.gif');
//B2: Vẽ mã bảo mật lên đối ảnh đã tạo
$font='Gabriola.ttf';//Khai báo font
//Khai báo màu dành cho chuỗi mã bảo mật sẽ vẽ
$red=imagecolorallocate($img,150,160,50);
//Vẽ chuỗi lên đối tượng ảnh đã có
imagettftext($img,25,5,5,25,$red,$font,$code);
//Cấu hình biến file PHP này trở thành file ảnh: PNG
header('Content-type: image/png');
//Tạo ra ảnh mới từ đối tượng ảnh bên trên
imagepng($img);
//Hủy biến $img (giải phóng biến)
imagedestroy($img);


?>