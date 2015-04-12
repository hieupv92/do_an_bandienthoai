<?php
$id=$_GET["id"];
$strlay="select sanpham_id,sanpham_ten,sanpham_link,donhang_giasanpham,donhang_soluong from tbsanpham,tbdonhang where donhang_sanpham=sanpham_id and donhang_khach=$id";
$danhsach=$lib->selectall($strlay);
$smarty->assign('danhsach',$danhsach);
$smarty->display('giohang/giohang_chitiet.html');
?>