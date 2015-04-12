<?php
if(isset($_GET['idloai'])){
	$idloai=$_GET['idloai'];
	if(isset($_POST['btnthem']))
			{//Kiểm tra đã bấm nút thêm mới hay chưa
				
				$txtten=$_POST['txtten'];
				$rdtrangthai=$_POST['rdtrangthai'];
				//Xử ly cập nhật dữ liệu vào CSDL
				$stradd="INSERT INTO tbthongso (thongso_ten, thongso_loai, thongso_trangthai) VALUES (?,?,?)";
				$re=$lib->pdo->prepare($stradd);
				//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
				$re->bindParam(1,$txtten);
				$re->bindParam(2,$idloai);
				$re->bindParam(3,$rdtrangthai);
				$re->execute();//Chạy câu lệnh thêm dữ liệu
				header('Location:index.php?mod=thongso');
			}
}
		
$smarty->assign('id',0);
$strlay="select * from tbloaithongso where loaithongso_id=$idloai";
$detail1=$lib->selectone($strlay);
$smarty->assign('detail1',$detail1);
$smarty->display('thongso/thongso_form.html');
?>