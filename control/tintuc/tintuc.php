<?php
if(isset($_GET['act'])) $act=$_GET['act']; else $act='';
switch($act){
	
	
	case "chitiet":
		require('tintuc_chitiet.php');
		break;
	default:
		require('tintuc_danhsach.php');
}

?>