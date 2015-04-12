<?php
if(isset($_GET["tt"]))
	{
	   $tt = $_GET["tt"]=="0"?"1":"0";
	   $sql ="update tbtaikhoan set taikhoan_trangthai=? where taikhoan_id=?";
	   $re=$lib->pdo->prepare($sql);
					//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
					$re->bindParam(1,$tt);
					$re->bindParam(2,$_GET["id"]);
					$re->execute();//Chạy câu lệnh thêm dữ liệu
	} 
	
	$strlay="SELECT * FROM tbtaikhoan ORDER BY taikhoan_loai DESC";//Câu lệnh SQL
	$danhsach=$lib->selectall($strlay);//Chạy câu lệnh và lấy về danh sách
	$smarty->assign('danhsach',$danhsach);//Khai báo biến danh sách tầng View
	$smarty->display('taikhoan/taikhoan_danhsach.html');
?>