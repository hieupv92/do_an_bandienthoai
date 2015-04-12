<?php
$action="";
if(isset($_GET["act"])) $action=$_GET["act"];
switch($action)
{
	case "sua":
	require('taikhoan/taikhoan_sua.php');
	break;
	
	case "them":
	require('taikhoan/taikhoan_them.php');
	break;
	
	case "xoa":
	require('taikhoan/taikhoan_xoa.php');
	break;
	
	
	default:
	require('taikhoan/taikhoan_danhsach.php');
	
}
?>