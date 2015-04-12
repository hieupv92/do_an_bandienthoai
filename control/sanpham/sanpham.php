<?php
if(isset($_GET['act'])) $act=$_GET['act']; else $act='';
switch($act){
	
	
	case "chitiet":
		require('sanpham_chitiet.php');
		break;
	default:
		require('sanpham_danhsach.php');
}

?>