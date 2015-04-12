<?php /* Smarty version Smarty-3.1.14, created on 2013-12-03 14:32:29
         compiled from "danhmuc\index.php" */ ?>
<?php /*%%SmartyHeaderCode:2866529deb31293434-89520820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7aa54ca9c1e1b55bb25ee14ebc70691ca5039171' => 
    array (
      0 => 'danhmuc\\index.php',
      1 => 1386081150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2866529deb31293434-89520820',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529deb312c9b42_16345730',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529deb312c9b42_16345730')) {function content_529deb312c9b42_16345730($_smarty_tpl) {?><<?php ?>?php
//require_once('../connect.php');
$action="";
if(isset($_GET["act"])) $action=$_GET["act"];
switch($action)
{
	
	
	default:
	$smarty->display('danhmuc/tintuc_danhsach.php');
}
?<?php ?>><?php }} ?>