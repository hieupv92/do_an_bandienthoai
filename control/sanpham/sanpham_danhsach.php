<?php
$where='';
if(isset($_POST['btntimkiem'])){
	if(isset($_POST['txttimten'])) $keyword = $_POST['txttimten'];
	$where .= " AND sanpham_ten LIKE '%" .$keyword. "%' "; 
}
$strlay="select * from tbsanpham where sanpham_trangthai=1".$where." order by sanpham_id DESC";

if(isset($_GET["idnsx"])){
$idnsx=$_GET["idnsx"];
$strlay="select * from tbsanpham where sanpham_nhasanxuat=$idnsx".$where;
}

if(isset($_GET["idmg"])){
$idmg=$_GET["idmg"];
$strlay="select * from tbsanpham where sanpham_mucgia=$idmg".$where;
}

if(isset($_GET["idkd"])){
$idkd=$_GET["idkd"];
$strlay="select * from tbsanpham where sanpham_kieudang=$idkd".$where;
}

if(isset($_GET["idhdh"])){
$idhdh=$_GET["idhdh"];
$strlay="select * from tbsanpham where sanpham_hedieuhanh=$idhdh".$where;
}
$sanpham=$lib->selectall($strlay,true,'sp');
$smarty->assign('sanpham',$sanpham);
$smarty->display("sanpham/sanpham.html");
?>