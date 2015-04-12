<?php
$strlay="select * from tbnhasanxuat";
$danhsach=$lib->selectall($strlay);
$smarty->assign('danhsach',$danhsach);
$smarty->display('nsx/nsx_danhsach.html');
?>