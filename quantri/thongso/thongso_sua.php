<?php
if(isset($_GET['id']) && isset($_GET['idloai']))
		{	
			$idloai=$_GET['idloai'];
			$id=$_GET['id'];//Lấy ID tin tức trên URL
			if(isset($_POST['btnthem']))
			{//Kiểm tra đã bấm nút thêm mới hay chưa
				
				$txtten=$_POST['txtten'];
				//$txttenrieng=$_POST['txttenrieng'];
				//$txttenchung=$_POST['txttenchung'];
				$rdtrangthai=$_POST['rdtrangthai'];
				//Xử ly cập nhật dữ liệu vào CSDL
				$stradd="UPDATE tbthongso SET thongso_ten=?, thongso_loai=?, thongso_trangthai=? WHERE thongso_id=?";
				$re=$lib->pdo->prepare($stradd);
				//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
				$re->bindParam(1,$txttenrieng);
				$re->bindParam(2,$txttenchung);
				$re->bindParam(3,$slthongso);
				$re->bindParam(4,$rdtrangthai);
				$re->bindParam(5,$id);
				$re->execute();//Chạy câu lệnh thêm dữ liệu
				header('Location: index.php?mod=thongso');
			}
			
			// lấy ra tên loại thông số
			$strlay="select * from tbloaithongso where loaithongso_id=$idloai";
			$detail1=$lib->selectone($strlay);
			$smarty->assign('detail1',$detail1);
			
			$detail=$lib->selectone("SELECT * FROM tbthongso WHERE thongso_id=$id");	
			//Khai báo biến ra tầng View
			$smarty->assign('id',$id);
			$smarty->assign('detail',$detail);	
			$smarty->display('thongso/thongso_form.html');
		}
?>