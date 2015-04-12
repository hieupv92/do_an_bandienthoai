<?php

$strlay="select * from tbsanpham order by sanpham_id DESC";
$sanphamtb=$lib->selectall($strlay);
$smarty->assign('sanphamtb',$sanphamtb);

$smarty->display("home.html");
?>