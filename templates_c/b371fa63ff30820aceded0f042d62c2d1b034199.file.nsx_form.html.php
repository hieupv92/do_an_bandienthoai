<?php /* Smarty version Smarty-3.1.14, created on 2013-12-04 14:37:38
         compiled from "..\templates\admin\nsx\nsx_form.html" */ ?>
<?php /*%%SmartyHeaderCode:22169529f33e36afd46-98349205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b371fa63ff30820aceded0f042d62c2d1b034199' => 
    array (
      0 => '..\\templates\\admin\\nsx\\nsx_form.html',
      1 => 1386167858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22169529f33e36afd46-98349205',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529f33e36eb2e7_13200265',
  'variables' => 
  array (
    'id' => 0,
    'detail' => 0,
    'danhsach' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529f33e36eb2e7_13200265')) {function content_529f33e36eb2e7_13200265($_smarty_tpl) {?><form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <h1 align="center">Quản lý nhà sản xuất</h1>
  <table width="391" border="0" align="center">
    <tr>
      <td width="81" align="center">Tên:</td>
      <td width="310"><input type="text" name="txtten" class="validate[required]" <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['nhasanxuat_ten'];?>
" <?php }?> /></td>
    </tr>
    <tr>
      <td align="center">Địa chỉ:</td>
      <td>
    	<select name="sldiachi">
    		<option value="">Vùi lòng chọn</option>
          	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danhsach']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['diachi_ten'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['diachi_ten'];?>
</option>
           	<?php } ?>
    	</select>
    </td>
    </tr>
    <tr>
      <td align="center">Điện thoại:</td>
      <td><input type="text" name="txtdienthoai" class="validate[required,custom[onlyNumberSp]]" <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['nhasanxuat_dienthoai'];?>
" <?php }?> /></td>
    </tr>
    <tr>
      <td align="center">Fax</td>
      <td><input type="text" name="txtfax" class="validate[required,custom[onlyNumberSp]]" <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['nhasanxuat_fax'];?>
" <?php }?> /></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td>
      <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?>
      	<input type="submit" name="btnthem" value="Cập nhật" class="btn1" />
      <?php }else{ ?>
      	<input type="submit" name="btnthem" value="Thêm mới" class="btn1" />
      <?php }?>
        <input type="reset" name="btnre" value="Nhập lại" class="btn1" />
      </td>
    </tr>
  </table>
</form><?php }} ?>