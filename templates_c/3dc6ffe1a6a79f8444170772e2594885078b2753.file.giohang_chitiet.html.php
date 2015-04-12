<?php /* Smarty version Smarty-3.1.14, created on 2014-12-14 09:31:22
         compiled from "..\templates\admin\giohang\giohang_chitiet.html" */ ?>
<?php /*%%SmartyHeaderCode:1116453c89561570823-74171468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dc6ffe1a6a79f8444170772e2594885078b2753' => 
    array (
      0 => '..\\templates\\admin\\giohang\\giohang_chitiet.html',
      1 => 1406345562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1116453c89561570823-74171468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c895615a7325_30468087',
  'variables' => 
  array (
    'danhsach' => 0,
    'item' => 0,
    'tongtien' => 0,
    'thanhtien' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c895615a7325_30468087')) {function content_53c895615a7325_30468087($_smarty_tpl) {?><h1>Chi tiết đơn hàng</h1>
<table width="100%" border="0" cellspacing="0" cellpadding="3" class="danhsach">
  <tr class="tieude">
    <td>ID</td>
    <td>Tên sản phẩm</td>
    <td>Hình ảnh</td>
    <td>Đơn giá</td>
    <td>Số lượng</td>
    <td>Thanh tiền</td>
  </tr>
  <?php $_smarty_tpl->tpl_vars['tongtien'] = new Smarty_variable(0, null, 0);?>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danhsach']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  <?php $_smarty_tpl->tpl_vars['thanhtien'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['donhang_giasanpham']*$_smarty_tpl->tpl_vars['item']->value['donhang_soluong'], null, 0);?>
  <?php $_smarty_tpl->tpl_vars['tongtien'] = new Smarty_variable($_smarty_tpl->tpl_vars['tongtien']->value+$_smarty_tpl->tpl_vars['thanhtien']->value, null, 0);?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_ten'];?>
</td>
    <td><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_link'];?>
" width="100px" /></td>
    <td><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['donhang_giasanpham']);?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['donhang_soluong'];?>
</td>
    <td><?php echo number_format($_smarty_tpl->tpl_vars['thanhtien']->value);?>
</td>
  </tr>
  
  <?php } ?>
</table>
<div style="padding-left:10px; color:#66CC66; font-weight:bold; font-size:14px; float:left">Tổng tiền :</div>
<div style="color:#F00; font-size:16px; font-weight:bold"><?php echo number_format($_smarty_tpl->tpl_vars['tongtien']->value);?>
 VNĐ </div><?php }} ?>