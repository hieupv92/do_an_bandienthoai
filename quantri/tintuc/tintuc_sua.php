<?php
if(isset($_GET['id']))
		{	
			$id=$_GET['id'];//Lấy ID tin tức trên URL
			if(isset($_POST['btnthem']))
			{//Kiểm tra đã bấm nút thêm mới hay chưa
				//Chạy lệnh Upload File
				$val=$lib->upload('anh','../upload/news/');
				if(is_array($val) && $val[0]==true)//Nếu trả về là dạng mảng: tức là có upload file
				{ 
					$stradd="UPDATE tbtintuc SET tintuc_link=? WHERE tintuc_id=?";
					$re=$lib->pdo->prepare($stradd);
					//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
					$re->bindParam(1,$val[1]);
					$re->bindParam(2,$id);
					$re->execute();//Chạy câu lệnh thêm dữ liệu
				}
				$txttieude=$_POST['txttieude'];
				$txttomtat=$_POST['txttomtat'];
				$txtnoidung=$_POST['txtnoidung'];
				$rdtrangthai=$_POST['rdtrangthai'];
				//Xử ly cập nhật dữ liệu vào CSDL
				$stradd="UPDATE tbtintuc SET tintuc_tieude=?, tintuc_tomtat=?, tintuc_noidung=?, tintuc_trangthai=? WHERE tintuc_id=?";
				$re=$lib->pdo->prepare($stradd);
				//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
				$re->bindParam(1,$txttieude);
				$re->bindParam(2,$txttomtat);
				$re->bindParam(3,$txtnoidung);
				$re->bindParam(4,$rdtrangthai);
				$re->bindParam(5,$id);
				$re->execute();//Chạy câu lệnh thêm dữ liệu
				header('Location: index.php?mod=news');
			}
			
			//Lấy thông tin tin tức ứng với id có đc
			$detail=$lib->selectone("SELECT * FROM tbtintuc WHERE tintuc_id=$id");	
			//Khai báo biến ra tầng View
			$smarty->assign('id',$id);
			$smarty->assign('detail',$detail);	
			$smarty->display('tintuc/tintuc_form.html');
		}
?>