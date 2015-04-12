<?php
$strlay="select * from tbtintuc order by tintuc_id desc";
$tintuc=$lib->selectall($strlay);
$smarty->assign('tintuc',$tintuc);
$smarty->display("tintuc/tintuc.html");
?>