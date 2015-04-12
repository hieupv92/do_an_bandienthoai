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

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$strlay="select * from tblienhe where lienhe_id=$id";
	$detail=$lib->selectone($strlay);
	$smarty->assign('detail',$detail);
	$smarty->display('lienhe/lienhe_chitiet.html');
}
?>