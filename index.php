<?php
require_once('connect.php');


if(isset($_POST['btndangnhap'])){
	$user = $_POST['txtuser'];
	$pass = md5($_POST['txtpass']);
	$stt = $lib->checklogin($user,$pass,false);
	$thongbao = "Loi sai ten hoac tai khoan !";
	if(!$stt){
		$smarty->assign('thongbao',$thongbao);
	}else{
		echo "<script>";
			echo "alert('dang nhap thanh cong !');";
			echo "location.assign('index.php');";
		echo "</script>";
		
	};
}
if(isset($_SESSION['weblog'])){
	$smarty->assign('info',$_SESSION['weblog']);

}

if(isset($_GET['out']) && $_GET['out']==1){
	unset($_SESSION['weblog']);
}

$strlay="SELECT * FROM tbnhasanxuat";//Xây dựng câu lệnh SQL
$nhanhieu=$lib->selectall($strlay);//Gọi Phương thức selectall và truyền vào SQL
$smarty->assign('nhanhieu',$nhanhieu);//Khai báo mảng danh sách tầng View

//$strlay="SELECT * FROM tbthongso where thongso_loai=1";
//$mucgia=$lib->selectall($strlay);
//$smarty->assign('mucgia',$mucgia);

//$strlay="SELECT * FROM tbthongso where thongso_loai=2";//Xây dựng câu lệnh SQL
//$kieudang=$lib->selectall($strlay);//Gọi Phương thức selectall và truyền vào SQL
//$smarty->assign('kieudang',$kieudang);//Khai báo mảng danh sách tầng View

//$strlay="SELECT * FROM tbthongso where thongso_loai=3";
//$hedieuhanh=$lib->selectall($strlay);
//$smarty->assign('hedieuhanh',$hedieuhanh);

if(isset($_GET['mod'])) $mod=$_GET['mod']; else $mod='';
$smarty->display("dau.html");
switch($mod){

	case "dangnhap":
		require('control/dangnhap.php');
		break;
	
	case "giohang":
		require('control/giohang/giohang.php');
		break;
	case "dangky":
		require('control/dangky/dangky.php');
		break;
	case "lienhe":
		require('control/lienhe.php');
		break;
	case "tintuc":
		require('control/tintuc/tintuc.php');
		break;
	case "sp":
		require('control/sanpham/sanpham.php');
		break;
	case "gt":
		require('control/gioithieu.php');
		break;
	default:
		require('control/home.php');
}


$strlay="SELECT * FROM tbtintuc order by tintuc_id DESC";//Xây dựng câu lệnh SQL
$tinmoi=$lib->selectall($strlay,true,'tinmoi');//Gọi Phương thức selectall và truyền vào SQL
$smarty->assign('tinmoi',$tinmoi);//Khai báo mảng danh sách tầng View

$smarty->display("cuoi.html")
?>