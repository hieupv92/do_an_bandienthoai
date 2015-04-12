<?php
if(isset($_GET['id'])){
			$id=$_GET['id'];
			$idloai=$_GET['idloai'];
			//Thực hiện xóa dữ liệu ứng với ID có được 
			$lib->pdo->exec("DELETE FROM tbthongso WHERE thongso_id=$id");
			header('Location: index.php?mod=thongso&act=thongso&idloai=$idloai');
		}
?>