<?php
if(isset($_POST['btnthem']))
		{//Kiểm tra đã bấm nút thêm mới hay chưa
			
			$txtten=$_POST['txtten'];
			$txtdiachi=$_POST['txtdiachi'];
			$txtdienthoai=$_POST['txtdienthoai'];
			$txtnoidung=$_POST['txtnoidung'];
			$ser=$_POST['txtser'];

			if($ser==$_SESSION['sercode']){
			$code=md5(time().$_SERVER['REMOTE_ADDR'].rand());//Sinh ra mã bảo mật cho link kích hoạt
	
			//Xử ly cập nhật dữ liệu vào CSDL
			$stradd="INSERT INTO tblienhe (lienhe_ten, lienhe_diachi, lienhe_dienthoai, lienhe_noidung, lienhe_ngaygui, lienhe_trangthai) VALUES (?,?,?,?,now(),0)";
			$re=$lib->pdo->prepare($stradd);
			//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
			$re->bindParam(1,$txtten);
			$re->bindParam(2,$txtdiachi);
			$re->bindParam(3,$txtdienthoai);
			$re->bindParam(4,$txtnoidung);
			$re->execute();//Chạy câu lệnh thêm dữ liệu
			$thongbao="<a>Liên hệ thành công !</a>";
			
			}else{
				$smarty->assign('data',$_POST);
				$thongbao='Mã bảo mật sai!';		
			}
		}
if(!isset($thongbao))$thongbao='';
$smarty->assign('thongbao',$thongbao);
$smarty->display("lienhe.html");
?>