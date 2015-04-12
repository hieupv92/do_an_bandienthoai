<?php
if(isset($_GET["tt"]))
	{
	   $tt = $_GET["tt"]=="0"?"1":"0";
	   $sql ="update tblienhe set lienhe_trangthai=? where lienhe_id=?";
	   $re=$lib->pdo->prepare($sql);
					//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
					$re->bindParam(1,$tt);
					$re->bindParam(2,$_GET["id"]);
					$re->execute();//Chạy câu lệnh thêm dữ liệu
	} 

$strlay="select * from tblienhe order by lienhe_trangthai ASC";
$danhsach=$lib->selectall($strlay,true,'lienhe');
$smarty->assign('danhsach',$danhsach);
$smarty->display('lienhe/lienhe_danhsach.html');
?>