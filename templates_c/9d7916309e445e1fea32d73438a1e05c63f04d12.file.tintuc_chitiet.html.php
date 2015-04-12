<?php /* Smarty version Smarty-3.1.14, created on 2014-03-09 11:22:20
         compiled from ".\templates\tintuc\tintuc_chitiet.html" */ ?>
<?php /*%%SmartyHeaderCode:25503531c47a4f0ee79-40858910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d7916309e445e1fea32d73438a1e05c63f04d12' => 
    array (
      0 => '.\\templates\\tintuc\\tintuc_chitiet.html',
      1 => 1394364140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25503531c47a4f0ee79-40858910',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531c47a500a175_36798091',
  'variables' => 
  array (
    'chitiet' => 0,
    'danhsach' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531c47a500a175_36798091')) {function content_531c47a500a175_36798091($_smarty_tpl) {?><div class="cttintuc">
      	<div class="newshead"><?php echo $_smarty_tpl->tpl_vars['chitiet']->value['tintuc_tieude'];?>
</div>
       	<div class="newscontent">
		<?php echo $_smarty_tpl->tpl_vars['chitiet']->value['tintuc_noidung'];?>

        </div>
</div>
<div class="tinkhac">
	<h3>Các tin khác</h3>
	<ul>
    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danhsach']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    	<li><a href="?mod=tintuc&act=chitiet&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['tintuc_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['tintuc_tieude'];?>
</a>
        <span class="date"><?php echo substr($_smarty_tpl->tpl_vars['item']->value['tintuc_date'],5,2);?>
/<?php echo substr($_smarty_tpl->tpl_vars['item']->value['tintuc_date'],0,4);?>
</span>
        </li>
		<?php } ?>
    </ul>
</div>
<?php }} ?>