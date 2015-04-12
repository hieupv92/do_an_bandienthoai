<?php
if(isset($_GET['act'])) $act=$_GET['act']; else $act='';
switch($act){
	case "xoa":
	require('giohang_xoa.php');
	break;

	
	case "chitiet":
	require('giohang_chitiet.php');
	break;
	
	default:
	require('giohang_danhsach.php');	
}
?>