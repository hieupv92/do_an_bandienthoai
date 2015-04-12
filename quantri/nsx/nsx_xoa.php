<?php
if(isset($_GET['id'])){
			$id=$_GET['id'];
			//Thực hiện xóa dữ liệu ứng với ID có được 
			$lib->pdo->exec("DELETE FROM tbnhasanxuat WHERE nhasanxuat_id=$id");
			header('Location: index.php?mod=nsx');
		}else if(isset($_POST['cbxoa'])){
			$list=$_POST['cbxoa'];
			foreach($list as $id){
			$lib->pdo->exec("DELETE FROM tbnhasanxuat WHERE nhasanxuat_id=$id");
			header('Location: index.php?mod=nsx');	
			}
		}
?>