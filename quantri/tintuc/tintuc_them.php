<?php
if(isset($_POST['btnthem']))
		{//Kiểm tra đã bấm nút thêm mới hay chưa
			//Chạy lệnh Upload File
			$val=$lib->upload('anh','../upload/news/');
			//var_dump($val);
			if(is_array($val)){//Nếu trả về là dạng mảng: tức là có upload file
				if($val[0]) $hinhanh=$val[1];
				else  $hinhanh='';
			}else $hinhanh='';
			//var_dump($hinhanh);
			$txttieude=$_POST['txttieude'];
			$txttomtat=$_POST['txttomtat'];
			$txtnoidung=$_POST['txtnoidung'];
			$rdtrangthai=$_POST['rdtrangthai'];
			//Xử ly cập nhật dữ liệu vào CSDL
			$stradd="INSERT INTO tbtintuc (tintuc_tieude, tintuc_tomtat, tintuc_link, tintuc_noidung, tintuc_date, tintuc_trangthai) VALUES (?,?,?,?,now(),?)";
			$re=$lib->pdo->prepare($stradd);
			//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
			$re->bindParam(1,$txttieude);
			$re->bindParam(2,$txttomtat);
			$re->bindParam(3,$hinhanh);
			$re->bindParam(4,$txtnoidung);
			$re->bindParam(5,$rdtrangthai);
			$re->execute();//Chạy câu lệnh thêm dữ liệu
			header('Location:index.php?mod=news');
		}
	$smarty->assign('id',0);
	$smarty->display('tintuc/tintuc_form.html');
?>