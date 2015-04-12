<?php
if(isset($_GET['id']))
		{	
			$id=$_GET['id'];//Lấy ID tin tức trên URL
			if(isset($_POST['btnthem']))
			{//Kiểm tra đã bấm nút thêm mới hay chưa
				//Chạy lệnh Upload File
				$val=$lib->upload('anh','../upload/product/');
				if(is_array($val) && $val[0]==true)//Nếu trả về là dạng mảng: tức là có upload file
				{ 
					$stradd="UPDATE tbsanpham SET sanpham_link=? WHERE sanpham_id=?";
					$re=$lib->pdo->prepare($stradd);
					//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
					$re->bindParam(1,$val[1]);
					$re->bindParam(2,$id);
					$re->execute();//Chạy câu lệnh thêm dữ liệu
				}
				$txtten=$_POST['txtten'];
				$txtsoluong=$_POST['txtsoluong'];
				$txtnoidung=$_POST['txtnoidung'];
				$txtgia=$_POST['txtgia'];
				$slmucgia=$_POST['slmucgia'];
				$slnsx=$_POST['slnsx'];
				$slkieudang=$_POST['slkieudang'];
				$slhdh=$_POST['slhdh'];
				$slkichthuoc=$_POST['slkichthuoc'];
				$sltinhnang=$_POST['sltinhnang'];
				$slcard=$_POST['slcard'];
				$slmanhinh=$_POST['slmanhinh'];
				$slram=$_POST['slram'];
				$slocung=$_POST['slocung'];
				$slvixuly=$_POST['slvixuly'];
				$rdtrangthai=$_POST['rdtrangthai'];
				//Xử ly cập nhật dữ liệu vào CSDL
				$stradd="UPDATE tbsanpham SET sanpham_ten=?, sanpham_soluong=?, sanpham_chitiet=?, sanpham_gia=?,sanpham_nhasanxuat=?,sanpham_kieudang=?,sanpham_mucgia=?,sanpham_hedieuhanh=?,sanpham_kichthuoc=?,sanpham_tinhnang=?,sanpham_card=?,sanpham_manhinh=?,sanpham_ram=?,sanpham_ocung=?,sanpham_vixuly=?,sanpham_trangthai=? WHERE sanpham_id=?";
				$re=$lib->pdo->prepare($stradd);
				//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
				$re->bindParam(1,$txtten);
				$re->bindParam(2,$txtsoluong);
				$re->bindParam(3,$txtnoidung);
				$re->bindParam(4,$txtgia);
				$re->bindParam(5,$slnsx);
				$re->bindParam(6,$slkieudang);
				$re->bindParam(7,$slmucgia);
				$re->bindParam(8,$slhdh);
				$re->bindParam(9,$slkichthuoc);
				$re->bindParam(10,$sltinhnang);
				$re->bindParam(11,$slcard);
				$re->bindParam(12,$slmanhinh);
				$re->bindParam(13,$slram);
				$re->bindParam(14,$slocung);
				$re->bindParam(15,$slvixuly);
				$re->bindParam(16,$rdtrangthai);
				$re->bindParam(17,$id);
				$re->execute();//Chạy câu lệnh thêm dữ liệu
				header('Location: index.php?mod=sp');
			}
			
			
			$strkd="select * from tbthongso where thongso_cha=55";
$strhdh="select * from tbthongso where thongso_cha=56";
$strkt="select * from tbthongso where thongso_cha=57";
$strtn="select * from tbthongso where thongso_cha=58";
$strmg="select * from tbthongso where thongso_cha=54";
$strnsx="select * from tbnhasanxuat";
$strcard="select * from tbthongso where thongso_cha=59";
$strmanhinh="select * from tbthongso where thongso_cha=60";
$strocung="select * from tbthongso where thongso_cha=62";
$strram="select * from tbthongso where thongso_cha=61";
$strvixuly="select * from tbthongso where thongso_cha=63";
			
			$kieudang=$lib->selectall($strkd);
			$hedieuhanh=$lib->selectall($strhdh);
			$kichthuoc=$lib->selectall($strkt);
			$tinhnang=$lib->selectall($strtn);
			$mucgia=$lib->selectall($strmg);
			$nsx=$lib->selectall($strnsx);
			$card=$lib->selectall($strcard);
			$manhinh=$lib->selectall($strmanhinh);
			$ocung=$lib->selectall($strocung);
			$ram=$lib->selectall($strram);
			$vixuly=$lib->selectall($strvixuly);
			
			$smarty->assign('kieudang',$kieudang);
			$smarty->assign('hedieuhanh',$hedieuhanh);
			$smarty->assign('kichthuoc',$kichthuoc);
			$smarty->assign('tinhnang',$tinhnang);
			$smarty->assign('mucgia',$mucgia);
			$smarty->assign('nsx',$nsx);
			$smarty->assign('card',$card);
			$smarty->assign('manhinh',$manhinh);
			$smarty->assign('ocung',$ocung);
			$smarty->assign('ram',$ram);
			$smarty->assign('vixuly',$vixuly);

			
			
			//Lấy thông tin tin tức ứng với id có đc
			$detail=$lib->selectone("SELECT * FROM tbsanpham WHERE sanpham_id=$id");	
			//Khai báo biến ra tầng View
			$smarty->assign('id',$id);
			$smarty->assign('detail',$detail);	
			$smarty->display('sanpham/sanpham_form.html');
		}
?>