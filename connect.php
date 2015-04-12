<?php
session_start();//khởi động session
ob_start();
require_once('libs/Smarty.class.php');
require_once('model/thuvien.php');
require_once('model/openid.php');
$smarty=new Smarty;//Khởi tạo Smarty
$smarty->configLoad('config.cf');//Đọc file cấu hình
$ch=$smarty->getConfigVars();//Lấy ra toàn bộ biến cấu hình
$lib=new LIB($ch);//Khởi tạo đối tượng LIB và truyền vào thông tin cấu hình
$smarty->assign('lib',$lib);//Khai báo biến lib tầng View (giá trị là đối tượng $lib)
?>