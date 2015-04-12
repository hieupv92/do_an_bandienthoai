<?php
require_once('connect.php');
$user=$_GET['user'];
//Kiểm tra biến user trong CSDL
$re=$lib->pdo->query("SELECT * FROM tbtaikhoan WHERE taikhoan_user='$user'");
if($re->rowCount()>0) echo false;
else echo true;
?>
