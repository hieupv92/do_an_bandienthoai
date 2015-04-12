<?php
if(isset($_GET["id"])) $id=$_GET["id"];
$strct="select *,
(select thongso_ten from tbthongso where thongso_id=sanpham_kieudang) as kieudang,
(select thongso_ten from tbthongso where thongso_id=sanpham_mucgia) as mucgia,
(select thongso_ten from tbthongso where thongso_id=sanpham_hedieuhanh) as hedieuhanh,
(select thongso_ten from tbthongso where thongso_id=sanpham_kichthuoc) as kichthuoc,
(select thongso_ten from tbthongso where thongso_id=sanpham_tinhnang) as tinhnang,
(select thongso_ten from tbthongso where thongso_id=sanpham_card) as card,
(select thongso_ten from tbthongso where thongso_id=sanpham_manhinh) as manhinh,
(select thongso_ten from tbthongso where thongso_id=sanpham_ram) as ram,
(select thongso_ten from tbthongso where thongso_id=sanpham_ocung) as ocung,
(select thongso_ten from tbthongso where thongso_id=sanpham_vixuly) as vixuly
 from tbsanpham where sanpham_id=$id";
$chitiet=$lib->selectone($strct);
$smarty->assign('chitiet',$chitiet);
$smarty->display('sanpham/sanpham_chitiet.html');
?>