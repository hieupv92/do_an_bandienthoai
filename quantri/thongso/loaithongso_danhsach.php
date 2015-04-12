<?php

$strlay="select * from tbloaithongso";
$danhsach=$lib->selectall($strlay);
$smarty->assign('danhsach',$danhsach);

$smarty->display('thongso/loaithongso_danhsach.html');
?>