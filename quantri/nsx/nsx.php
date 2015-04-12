<?php
$action="";
if(isset($_GET["act"])) $action=$_GET["act"];
switch($action)
{
	
	case "them":
	require('nsx/nsx_them.php');
	break;
	
	case "sua":
	require('nsx/nsx_sua.php');
	break;
	
	case "xoa":
	require('nsx/nsx_xoa.php');
	break;
	
	
	default:
	require('nsx/nsx_danhsach.php');
	
}
?>