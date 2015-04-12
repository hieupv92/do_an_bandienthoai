<?php
if(isset($_POST['btnthem']))
		{//Kiểm tra đã bấm nút thêm mới hay chưa
			$txtuser=$_POST['txtuser'];
			$txtpass=$_POST['txtpass'];
			$txtemail=$_POST['txtemail'];
			$txtten=$_POST['txtten'];
			$txtdt=$_POST['txtdt'];
			$txtdiachi=$_POST['txtdiachi'];
			$rdgender=$_POST['rdgender'];
			$rdtrangthai=$_POST['rdtrangthai'];
			$rdquyen=$_POST['rdquyen'];
			//Xử ly cập nhật dữ liệu vào CSDL
			$stradd="INSERT INTO tbtaikhoan (taikhoan_user, taikhoan_pass, taikhoan_email, taikhoan_hoten, taikhoan_phone,taikhoan_diachi,taikhoan_gioitinh,taikhoan_date, taikhoan_trangthai,taikhoan_loai) VALUES (?,?,?,?,?,?,?,now(),?,?)";
			$re=$lib->pdo->prepare($stradd);
			//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
			$re->bindParam(1,$txtuser);
			$re->bindParam(2,$txtpass);
			$re->bindParam(3,$txtemail);
			$re->bindParam(4,$txtten);
			$re->bindParam(5,$txtdt);
			$re->bindParam(6,$txtdiachi);
			$re->bindParam(7,$rdgender);
			$re->bindParam(8,$rdtrangthai);
			$re->bindParam(9,$rdquyen);
			$re->execute();//Chạy câu lệnh thêm dữ liệu
			header('Location:index.php?mod=taikhoan');
		}
	$smarty->assign('id',0);
	$smarty->display('taikhoan/taikhoan_form.html');
?>