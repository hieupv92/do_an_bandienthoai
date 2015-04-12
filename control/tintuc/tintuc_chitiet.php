<?php
if(isset($_GET["id"])) $id=$_GET["id"];
$strct="select * from tbtintuc where tintuc_id=$id";
$chitiet=$lib->selectone($strct);
$smarty->assign('chitiet',$chitiet);

$strlay="select * from tbtintuc where tintuc_id!=$id order by tintuc_id desc";
$danhsach=$lib->selectall($strlay);
$smarty->assign('danhsach',$danhsach);
$smarty->display("tintuc/tintuc_chitiet.html");
?>