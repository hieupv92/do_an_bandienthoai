<?php
if(isset($_GET['id'])){
			$id=$_GET['id'];
			//Thực hiện xóa dữ liệu ứng với ID có được 
			$lib->pdo->exec("DELETE FROM tbtintuc WHERE tintuc_id=$id");
			header('Location: index.php?mod=news');
		}elseif(isset($_POST['cbxoa'])){
			$list=$_POST['cbxoa'];//Trả về dạng mảng
			foreach($list as $id)
			$lib->pdo->exec("DELETE FROM tbtintuc WHERE tintuc_id=$id");
			header('Location: index.php?mod=news');
		}
?>