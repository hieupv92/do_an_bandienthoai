<?php
if(isset($_GET['idloai']))
{
	$idloai=$_GET['idloai'];
	$strlay="select * from tbthongso where thongso_loai=$idloai";
	$danhsach=$lib->selectall($strlay,false);
	$smarty->assign('danhsach',$danhsach);
	$smarty->assign('idloai',$idloai);
	$smarty->display('thongso/thongso_danhsach.html');
}
?>