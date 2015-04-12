<?php /* Smarty version Smarty-3.1.14, created on 2014-04-11 04:24:26
         compiled from "..\templates\admin\thongso\thongso_form.html" */ ?>
<?php /*%%SmartyHeaderCode:1109852a871b7876145-18722583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af4f25bf587c69e263add8cd0281aa85e6c01ac8' => 
    array (
      0 => '..\\templates\\admin\\thongso\\thongso_form.html',
      1 => 1397190268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1109852a871b7876145-18722583',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a871b78d6c56_87024645',
  'variables' => 
  array (
    'detail1' => 0,
    'id' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a871b78d6c56_87024645')) {function content_52a871b78d6c56_87024645($_smarty_tpl) {?><h2 style="padding-left:10px"><?php echo $_smarty_tpl->tpl_vars['detail1']->value['loaithongso_ten'];?>
</h2>
<form name="form1" id="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="5" cellpadding="5">
    <tr>
      <td>Tên thông số</td>
      <td><input name="txtten" type="text" <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['thongso_ten'];?>
" <?php }?>></td>
    </tr>
    <tr>
     <td>Trạng thái</td>
     <td>
     	 <input type="radio" name="rdtrangthai" value="1" id="rdtrangthai_0" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['thongso_trangthai']==1){?> checked <?php }?> />Hoạt động
         <input type="radio" name="rdtrangthai" value="0" id="rdtrangthai_1" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['thongso_trangthai']==0){?> checked <?php }?> />Khóa 	
     </td>
    </tr>
     <tr>
      <td>&nbsp;</td>
      <td><input name="btnthem" class="btn1" type="submit" value="Thêm mới" /></td>
    </tr>
  </table>
</form><?php }} ?>