<?php

if(isset($_POST['btngui'])){
    //insert vao bang tbkhachhang
    $ten=$_POST['txtten'];
    $diachi=$_POST['txtdiachi'];
    $dienthoai=$_POST['txtdienthoai'];
    $diachinhan=$_POST['txtdiachinhan'];
	
    
	
	$sql = "INSERT INTO tbkhachhang(khach_ten,khach_diachi,khach_dienthoai,khach_diachinhan,khach_ngaymua,khach_trangthai) values(?,?,?,?,now(),0)" ;
    $re=$lib->pdo->prepare($sql);
	
    //Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
    $re->bindParam(1,$ten);
    $re->bindParam(2,$diachi);
    $re->bindParam(3,$dienthoai);
    $re->bindParam(4,$diachinhan);
	
	
    $re->execute();
    //lấy id vừa insert
    $idkhach=$lib->pdo->lastInsertId();   
	if(isset($_SESSION['giohang'])){
		foreach($_SESSION['giohang'] as $item){
				$idsp=$item[0];
				$slsp=$item[1];
				$chitiet=$lib->selectone("SELECT sanpham_gia FROM tbsanpham WHERE sanpham_id=$idsp");
				$gia=$chitiet['sanpham_gia'];
				$sql="insert into tbdonhang(donhang_khach,donhang_sanpham,donhang_giasanpham,ctdonhang_soluong) values($idkhach,$idsp,$gia,$slsp)";
				$re=$lib->pdo->prepare($sql);
				//Truyền từng Đối số vào vị trí của dấu hỏi chấm (?)
				
				$re->execute();
	
		}
		 //huy don hang
		 unset($_SESSION["giohang"]);
		//$smarty->assign('thongbao','Mua hàng thành công !');
		echo "<script>";
		echo "alert('Mua hàng thành công !');";
    	echo "</script>";
	}
   
   
    }


$smarty->display('giohang/giohang_form_khach.html');
?>