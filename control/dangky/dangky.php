<?php
if(isset($_POST['btndangky']))
		{//Kiểm tra đã bấm nút thêm mới hay chưa
			
			$txtten=$_POST['txtten'];
			$txtuser=$_POST['txtuser'];
			$txtpass=md5($_POST['txtpass']);
			$txtemail=$_POST['txtemail'];
			$txtdt=$_POST['txtdt'];
			$txtdiachi=$_POST['txtdiachi'];
			$rdgender=$_POST['rdgender'];
			$ser=$_POST['txtser'];

			if($ser==$_SESSION['sercode']){
			$code=md5(time().$_SERVER['REMOTE_ADDR'].rand());//Sinh ra mã bảo mật cho link kích hoạt
	
			//Xử ly cập nhật dữ liệu vào CSDL
			$stradd="INSERT INTO tbtaikhoan (taikhoan_user, taikhoan_pass, taikhoan_email, taikhoan_hoten, taikhoan_phone, taikhoan_diachi, taikhoan_gioitinh, taikhoan_date, taikhoan_trangthai,taikhoan_loai) VALUES (?,?,?,?,?,?,?,now(),0,0)";
			$re=$lib->pdo->prepare($stradd);
			//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
			$re->bindParam(1,$txtuser);
			$re->bindParam(2,$txtpass);
			$re->bindParam(3,$txtemail);
			$re->bindParam(4,$txtten);
			$re->bindParam(5,$txtdt);
			$re->bindParam(6,$txtdiachi);
			$re->bindParam(7,$rdgender);
			if($re->execute()){
					$thongbao="<a>Đăng ký tài khoản thành công !</a>";
					$id = $lib->pdo->lastInsertId();
					$sql="SELECT * FROM tbtaikhoan WHERE taikhoan_id=$id";
					$re=$lib->selectone($sql);
					if(!$re) die('Error:'.$sql);//Kiểm tra biến $re
					//Truyền lần lượt các tham số cho câu truy vấn SQL
					$_SESSION['weblog'] = $re;
						if(isset($_SESSION['weblog'])){
						$smarty->assign('info',$_SESSION['weblog']);

					}
						
					header('location:index.php');
			}//Chạy câu lệnh thêm dữ liệu
			
			
			}else{
				$smarty->assign('data',$_POST);
				$thongbao='Mã bảo mật sai!';		
			}
		}
if(!isset($thongbao))$thongbao='';
$smarty->assign('thongbao',$thongbao);
$smarty->display("dangky/dangky.html")
?>