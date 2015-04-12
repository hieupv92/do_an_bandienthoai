<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$lib->pdo->exec("DELETE FROM tbkhachhang WHERE khach_id=$id");
	$lib->pdo->exec("DELETE FROM tbdonhang WHERE donhang_khach=$id");
	header('Location: index.php?mod=giohang');	
}
?>