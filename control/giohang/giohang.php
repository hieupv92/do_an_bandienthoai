<?php

if(isset($_GET['act'])) $act=$_GET['act']; else $act='';
switch($act){
	
	
	case "info":
		require('giohang_form_khach.php');
		break;
	default:
		require('giohang_danhsach.php');
}


?>