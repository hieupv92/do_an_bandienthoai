<?php
$action="";
if(isset($_GET["act"])) $action=$_GET["act"];
switch($action)
{
	
	
	case "sua":
	if(isset($_POST['btnup'])){
	$txtnoidung=$_POST['txtnoidung'];
	$stradd="UPDATE tbgioithieu SET gioithieu_noidung=?";
	$re=$lib->pdo->prepare($stradd);
	//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
	$re->bindParam(1,$txtnoidung);
	//$re->bindParam(2,1);
	$re->execute();//Chạy câu lệnh thêm dữ liệu
	header('Location: index.php?mod=gioithieu');
	}
	break;
	
	
	default:
	$strlay="select * from tbgioithieu where gioithieu_id=1";
	$gioithieu=$lib->selectone($strlay);
	$smarty->assign('gioithieu',$gioithieu);
	$smarty->display('gioithieu.html');
	
}
?>