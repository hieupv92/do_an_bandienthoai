<?php
$action="";
if(isset($_GET["act"])) $action=$_GET["act"];
switch($action)
{
	case "xoa":
	require('thongso/thongso_xoa.php');
	break;
	case "sua":
	require('thongso/thongso_sua.php');
	break;
	case "themtc":
	require('thongso/thongso_them.php');
	break;

	case "thongso":
	require('thongso/thongso_danhsach.php');
	break;
	
	default:
	require('thongso/loaithongso_danhsach.php');
	
}
?>