<?php /* Smarty version Smarty-3.1.14, created on 2014-07-27 04:07:33
         compiled from "..\templates\admin\giohang\giohang_danhsach.html" */ ?>
<?php /*%%SmartyHeaderCode:2659853c7565857d649-73257786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa23ecdb76f934e62938e4072a01b1a5ba5213ed' => 
    array (
      0 => '..\\templates\\admin\\giohang\\giohang_danhsach.html',
      1 => 1406345574,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2659853c7565857d649-73257786',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53c756585bbe54_64277933',
  'variables' => 
  array (
    'danhsach' => 0,
    'item' => 0,
    'lib' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c756585bbe54_64277933')) {function content_53c756585bbe54_64277933($_smarty_tpl) {?><h1>Danh sách khách hàng</h1>
<table width="100%" border="0" cellpadding="3" cellspacing="0" class="danhsach">
  <tr class="tieude">
    <td>ID</td>
    <td>Tên khách hàng</td>
    <td>Điện thoại</td>
    <td>Địa chỉ nhận</td>
    <td>Ngày mua</td>
    <td>Trạng thái</td>
    <td>Chi tiết</td>
    <td>Xóa</td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danhsach']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['khach_id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['khach_ten'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['khach_dienthoai'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['khach_diachinhan'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['khach_ngaymua'];?>
</td>
    <td><a onClick="document.location='?mod=giohang&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['khach_id'];?>
&tt=<?php echo $_smarty_tpl->tpl_vars['item']->value['khach_trangthai'];?>
'" href="#">
	<?php if ($_smarty_tpl->tpl_vars['item']->value['khach_trangthai']==1){?>
    <img src='../templates/admin/images/yes.png' />
    <?php }else{ ?>
    <img src='../templates/admin/images/no.png' />
    <?php }?>
    </a>
    </td>
    <td><a href="?mod=giohang&act=chitiet&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['khach_id'];?>
"><img src='../templates/admin/images/chitiet.jpg' style="padding-top:5px" /></a></td>
    <td><a href="?mod=giohang&act=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['khach_id'];?>
" onclick="return confirm('Bạn có muốn xóa không?')"><img src="../templates/admin/images/delete.png" /></a></td>
  </tr>
  <?php } ?>
</table>
<div class="pageduoi"><?php echo $_smarty_tpl->tpl_vars['lib']->value->viewpage('?mod=giohang&n=');?>
</div><?php }} ?>