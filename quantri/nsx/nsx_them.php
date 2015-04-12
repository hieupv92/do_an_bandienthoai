<?php
if(isset($_POST['btnthem']))
		{//Kiểm tra đã bấm nút thêm mới hay chưa
			//Chạy lệnh Upload File
			
			$txtten=$_POST['txtten'];
			$sldiachi=$_POST['sldiachi'];
			$txtdienthoai=$_POST['txtdienthoai'];
			$txtfax=$_POST['txtfax'];
			//Xử ly cập nhật dữ liệu vào CSDL
			$stradd="INSERT INTO tbnhasanxuat (nhasanxuat_ten, nhasanxuat_diachi, nhasanxuat_dienthoai, nhasanxuat_fax) VALUES (?,?,?,?)";
			$re=$lib->pdo->prepare($stradd);
			//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
			$re->bindParam(1,$txtten);
			$re->bindParam(2,$sldiachi);
			$re->bindParam(3,$txtdienthoai);
			$re->bindParam(4,$txtfax);
			$re->execute();//Chạy câu lệnh thêm dữ liệu
			header('Location:index.php?mod=nsx');
		}
$strlay="select * from tbdiachi";
$danhsach=$lib->selectall($strlay);
$smarty->assign('danhsach',$danhsach);
$smarty->assign('id',0);
$smarty->display('nsx/nsx_form.html');
?>