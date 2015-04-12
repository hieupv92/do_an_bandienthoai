<?php /* Smarty version Smarty-3.1.14, created on 2013-12-03 14:41:14
         compiled from "tintuc.php" */ ?>
<?php /*%%SmartyHeaderCode:21544529dec6ec56df6-97860769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f726debe848fbaea538c3739603816dba865d67' => 
    array (
      0 => 'tintuc.php',
      1 => 1386081674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21544529dec6ec56df6-97860769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529dec6ec8ee19_52398486',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529dec6ec8ee19_52398486')) {function content_529dec6ec8ee19_52398486($_smarty_tpl) {?><<?php ?>?php
$action="";
if(isset($_GET["act"])) $action=$_GET["act"];
switch($action)
{
	
	
	default:
	$smarty->display('tintuc_danhsach.html');
}
?<?php ?>><?php }} ?>