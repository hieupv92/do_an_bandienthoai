<?php
if(isset($_GET["tt"]))
	{
	   $tt = $_GET["tt"]=="0"?"1":"0";
	   $sql ="update tbkhachhang set khach_trangthai=? where khach_id=?";
	   $re=$lib->pdo->prepare($sql);
					//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
					$re->bindParam(1,$tt);
					$re->bindParam(2,$_GET["id"]);
					$re->execute();//Chạy câu lệnh thêm dữ liệu
	} 



$strlay="select * from tbkhachhang order by khach_trangthai asc";
$danhsach=$lib->selectall($strlay,true,'giohang');
$smarty->assign('danhsach',$danhsach);
$smarty->display("giohang/giohang_danhsach.html");
?>