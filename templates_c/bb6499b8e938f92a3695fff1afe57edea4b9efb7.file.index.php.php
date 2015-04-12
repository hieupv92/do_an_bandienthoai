<?php /* Smarty version Smarty-3.1.14, created on 2013-12-03 14:30:12
         compiled from "index.php" */ ?>
<?php /*%%SmartyHeaderCode:485529deaf484a165-80081216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb6499b8e938f92a3695fff1afe57edea4b9efb7' => 
    array (
      0 => 'index.php',
      1 => 1386080918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '485529deaf484a165-80081216',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529deaf4881104_46078119',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529deaf4881104_46078119')) {function content_529deaf4881104_46078119($_smarty_tpl) {?><<?php ?>?php
require_once('../connect.php');


$smarty->display('dau.html');
$module="";
if(isset($_GET["mod"])) $module=$_GET["mod"];
switch($module)
{
	case "news":
	$smarty->display('index.php');
	break;
	
	default:
	$smarty->display('home.html');
}
$smarty->display('cuoi.html');
?<?php ?>><?php }} ?>