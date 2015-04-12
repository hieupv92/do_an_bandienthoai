<?php /* Smarty version Smarty-3.1.14, created on 2014-02-23 10:25:54
         compiled from ".\templates\ajraovat.html" */ ?>
<?php /*%%SmartyHeaderCode:31966530889df5f56d8-39924316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99e2e17b8c775bb0bf4a428edef96e3468f1696b' => 
    array (
      0 => '.\\templates\\ajraovat.html',
      1 => 1393072776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31966530889df5f56d8-39924316',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530889df676b29_59716299',
  'variables' => 
  array (
    'raovatmoi' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530889df676b29_59716299')) {function content_530889df676b29_59716299($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['raovatmoi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<li><a href="#" class="img"><img  alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['raovat_tieude'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['raovat_hinhanh'];?>
"  /></a><a href="#" class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['raovat_tieude'];?>
</a>
<br><span>Giá: <?php echo number_format($_smarty_tpl->tpl_vars['item']->value['raovat_gia']);?>
 VND</span>
</li>
<?php } ?><?php }} ?>