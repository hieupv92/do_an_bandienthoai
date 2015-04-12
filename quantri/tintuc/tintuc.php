<?php
$action="";
if(isset($_GET["act"])) $action=$_GET["act"];
switch($action)
{
	
	case "them":
	require('tintuc/tintuc_them.php');
	break;
	
	case "sua":
	require('tintuc/tintuc_sua.php');
	break;
	
	case "xoa":
	require('tintuc/tintuc_xoa.php');
	break;
	
	
	default:
	require('tintuc/tintuc_danhsach.php');
	
}
?>