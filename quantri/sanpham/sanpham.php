<?php
$action="";
if(isset($_GET["act"])) $action=$_GET["act"];
switch($action)
{
	
	case "them":
	require('sanpham/sanpham_them.php');
	break;
	
	case "sua":
	require('sanpham/sanpham_sua.php');
	break;
	
	case "xoa":
	require('sanpham/sanpham_xoa.php');
	break;
	
	
	default:
	require('sanpham/sanpham_danhsach.php');
	
}
?>