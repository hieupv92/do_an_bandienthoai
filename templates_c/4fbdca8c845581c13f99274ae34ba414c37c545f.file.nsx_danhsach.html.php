<?php /* Smarty version Smarty-3.1.14, created on 2014-07-26 03:35:13
         compiled from "..\templates\admin\nsx\nsx_danhsach.html" */ ?>
<?php /*%%SmartyHeaderCode:19610529f31dca47ed1-96671187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fbdca8c845581c13f99274ae34ba414c37c545f' => 
    array (
      0 => '..\\templates\\admin\\nsx\\nsx_danhsach.html',
      1 => 1406345592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19610529f31dca47ed1-96671187',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529f31dcaf63a8_42216693',
  'variables' => 
  array (
    'danhsach' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529f31dcaf63a8_42216693')) {function content_529f31dcaf63a8_42216693($_smarty_tpl) {?>
<h1 align="center">Danh mục nhà sản xuất</h1>
<a href="?mod=nsx&act=them" class="them">Thêm mới nhà sản xuất</a>
<form name="form1" id="form1" method="post" action="?mod=nsx&act=xoa">
<input type="submit" name="btnxoa" id="btnxoa" class="xoamucchon" value="Xóa mục chọn" 
    onclick="return confirm('Bạn có chắc muốn xóa không?')"/>
<table width="100%" border="0" cellpadding="3" cellspacing="0" class="danhsach">
  <tr class="tieude">
    <td>ID</td>
    <td>Tên</td>
    <td>Địa chỉ</td>
    <td>Điện thoại</td>
    <td>Fax</td>
    <td>Thao tác</td>
    <td><input type="checkbox" name="cball" id="cball"  /></td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danhsach']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nhasanxuat_id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nhasanxuat_ten'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nhasanxuat_diachi'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nhasanxuat_dienthoai'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nhasanxuat_fax'];?>
</td>
    <td class="suaxoa">
        <a href="?mod=nsx&act=sua&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['nhasanxuat_id'];?>
"><img src="../templates/admin/images/edit.png" /></a></a>
        <a href="?mod=nsx&act=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['nhasanxuat_id'];?>
"><img src="../templates/admin/images/delete.png" /></a>
    </td>
    <td><input type="checkbox" name="cbxoa[]" id="cbxoa" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['nhasanxuat_id'];?>
" /></td>
  </tr>
  <?php } ?>
</table>
</form><?php }} ?>