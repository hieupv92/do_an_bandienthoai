<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$lib->pdo->exec("delete from tbsanpham where sanpham_id=$id");
	header("location:index.php?mod=sp");
	}else if(isset($_POST["cbxoa"])){
	$list=$_POST["cbxoa"];
	foreach($list as $id)
	$lib->pdo->exec("delete from tbsanpham where sanpham_id=$id");
	header("location:index.php?mod=sp");
}
?>