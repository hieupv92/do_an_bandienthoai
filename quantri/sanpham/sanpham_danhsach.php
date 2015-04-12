<?php
if(isset($_GET["tt"]))
	{
	   $tt = $_GET["tt"]=="0"?"1":"0";
	   $sql ="update tbsanpham set sanpham_trangthai=? where sanpham_id=?";
	   $re=$lib->pdo->prepare($sql);
					//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
					$re->bindParam(1,$tt);
					$re->bindParam(2,$_GET["id"]);
					$re->execute();//Chạy câu lệnh thêm dữ liệu
	} 

$strlay="select * from tbsanpham order by sanpham_id DESC";
$danhsachsp=$lib->selectall($strlay,true,'news');
$smarty->assign('danhsachsp',$danhsachsp);
$smarty->display('sanpham/sanpham_danhsach.html');
?>