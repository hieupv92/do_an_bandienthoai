<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	if(isset($_POST['btnthem'])){
		$txtemail=$_POST['txtemail'];
		$txtten=$_POST['txtten'];
		$txtdt=$_POST['txtdt'];
		$txtdiachi=$_POST['txtdiachi'];
		$rdgender=$_POST['rdgender'];
		$rdtrangthai=$_POST['rdtrangthai'];
		$rdquyen=$_POST['rdquyen'];
		//Xử ly cập nhật dữ liệu vào CSDL
		$stradd="UPDATE tbtaikhoan set taikhoan_email=?, taikhoan_hoten=?, taikhoan_phone=?,taikhoan_diachi=?,taikhoan_gioitinh=?, taikhoan_trangthai=?,taikhoan_loai=? where taikhoan_id=$id";
		$re=$lib->pdo->prepare($stradd);
		//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
		$re->bindParam(1,$txtemail);
		$re->bindParam(2,$txtten);
		$re->bindParam(3,$txtdt);
		$re->bindParam(4,$txtdiachi);
		$re->bindParam(5,$rdgender);
		$re->bindParam(6,$rdtrangthai);
		$re->bindParam(7,$rdquyen);
		$re->execute();//Chạy câu lệnh thêm dữ liệu
		header('Location:index.php?mod=taikhoan');
	
	}
	$detail=$lib->selectone("SELECT * FROM tbtaikhoan WHERE taikhoan_id=$id");	
	$smarty->assign('detail',$detail);
	
	$smarty->assign('id',$id);
	$smarty->display('taikhoan/taikhoan_form.html');
}
?>