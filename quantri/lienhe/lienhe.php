<?php
$action="";
if(isset($_GET["act"])) $action=$_GET["act"];
switch($action)
{
	case "xoa":
	require('lienhe/lienhe_xoa.php');
	break;
	
	case "chitiet":
	require('lienhe/lienhe_chitiet.php');
	break;
	

	
	default:
	require('lienhe/lienhe_danhsach.php');
	
}
?>