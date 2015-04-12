<?php
ob_start();
session_start();
require('../libs/Smarty.class.php');
require('../model/thuvien.php');
$smarty=new Smarty;//Khởi tạo Smarty
//Khai báo lại đường dẫn cho 4 thư mục ứng với trang quản trị
$smarty->template_dir='../templates/admin/';//Đường dẫn tầng giao diện
$smarty->compile_dir='../templates_c/';//Đường dẫn thư mục biên dịch
$smarty->config_dir='../configs/';//Đường dẫn thư mục cấu hình
$smarty->cache_dir='../cache/';//Đường dẫn thư mục cache (file tạm)
$smarty->configLoad('config.cf');//Đọc file cấu hình
$ch=$smarty->getConfigVars();//Lấy ra toàn bộ biến cấu hình
$lib=new LIB($ch);//Khởi tạo đối tượng LIB và truyền vào thông tin cấu hình
$smarty->assign('lib',$lib);//Khai báo biến lib tầng View (giá trị là đối tượng $lib)

$strtc="select * from tbloaithongso";
$danhsachtc=$lib->selectall($strtc,false);
$smarty->assign('danhsachtc',$danhsachtc);

if(isset($_POST['btnlog'])){
	$user=$_POST['txtuser'];
	$pass=md5($_POST['txtpass']);
	//Chạy PT checklogin để kiểm tra đăng nhập tài khoản
	$stt=$lib->checklogin($user,$pass,true);
	if(!$stt)$smarty->assign('thongbao','Tên đăng nhập hoặc mật khẩu sai!');	
}

if(isset($_GET['out']))unset($_SESSION['adminlog']);
if(isset($_SESSION['adminlog'])){
	$smarty->assign('info',$_SESSION['adminlog']);
$smarty->display('dau.html');
if(isset($_GET["mod"])) $module=$_GET["mod"]; else $module="";
switch($module)
{
	case "giohang":
	require('giohang/giohang.php');
	break;
	
	case "taikhoan":
	require('taikhoan/taikhoan.php');
	break;
	
	case "thongso":
	require('thongso/thongso.php');
	break;
	
	case "lienhe":
	require('lienhe/lienhe.php');
	break;
	case "sp":
	require('sanpham/sanpham.php');
	break;
	case "nsx":
	require('nsx/nsx.php');
	break;
	case "gioithieu":
	require('gioithieu.php');
	break;
	case "news":
	require('tintuc/tintuc.php');
	break;
	
	default:
	$smarty->display('home.html');
}
$smarty->display('cuoi.html');
}else{
	$smarty->display('login.html');
}
?>