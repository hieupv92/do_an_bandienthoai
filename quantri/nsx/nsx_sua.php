<?php
if(isset($_GET['id']))
		{	
			$id=$_GET['id'];//Lấy ID tin tức trên URL
			if(isset($_POST['btnthem']))
			{//Kiểm tra đã bấm nút thêm mới hay chưa
				
				$txtten=$_POST['txtten'];
				$sldiachi=$_POST['sldiachi'];
				$txtdienthoai=$_POST['txtdienthoai'];
				$txtfax=$_POST['txtfax'];
				//Xử ly cập nhật dữ liệu vào CSDL
				$stradd="UPDATE tbnhasanxuat SET nhasanxuat_ten=?, nhasanxuat_diachi=?, nhasanxuat_dienthoai=?, nhasanxuat_fax=? WHERE nhasanxuat_id=?";
				$re=$lib->pdo->prepare($stradd);
				//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
				$re->bindParam(1,$txtten);
				$re->bindParam(2,$sldiachi);
				$re->bindParam(3,$txtdienthoai);
				$re->bindParam(4,$txtfax);
				$re->bindParam(5,$id);
				$re->execute();//Chạy câu lệnh thêm dữ liệu
				header('Location: index.php?mod=nsx');
			}
			
			//Lấy thông tin tin tức ứng với id có đc
			$detail=$lib->selectone("SELECT * FROM tbnhasanxuat WHERE nhasanxuat_id=$id");	
			//Khai báo biến ra tầng View
			$smarty->assign('id',$id);
			$smarty->assign('detail',$detail);
			
			$strlay="select * from tbdiachi";
			$danhsach=$lib->selectall($strlay);
			$smarty->assign('danhsach',$danhsach);	
			
			$smarty->display('nsx/nsx_form.html');
		}
?>