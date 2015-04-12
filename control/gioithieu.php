<?php

$strlay="select * from tbgioithieu where gioithieu_id=1";
$gioithieu=$lib->selectone($strlay);
$smarty->assign('gioithieu',$gioithieu);
$smarty->display('gioithieu.html');
?>