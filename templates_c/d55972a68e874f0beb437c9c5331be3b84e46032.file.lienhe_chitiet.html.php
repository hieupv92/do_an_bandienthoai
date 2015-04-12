<?php /* Smarty version Smarty-3.1.14, created on 2013-12-11 14:29:47
         compiled from "..\templates\admin\lienhe\lienhe_chitiet.html" */ ?>
<?php /*%%SmartyHeaderCode:322052a84864737168-87764570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd55972a68e874f0beb437c9c5331be3b84e46032' => 
    array (
      0 => '..\\templates\\admin\\lienhe\\lienhe_chitiet.html',
      1 => 1386760754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322052a84864737168-87764570',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a848647c2818_86459413',
  'variables' => 
  array (
    'detail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a848647c2818_86459413')) {function content_52a848647c2818_86459413($_smarty_tpl) {?><h1>Chi tiết liên hệ</h1>
<a href="?mod=lienhe" style="color:#0085a4; font-weight:bold; padding-bottom:10px; float:left">Quay lại danh sách</a>
<table width="100%" border="1" cellspacing="0" style="border:#CCC 1px solid; text-align:center">
  <tr>
    <td>ID</td>
    <td>Tên</td>
    <td>Địa chỉ</td>
    <td>Điện thoại</td>
    <td>Ngày gửi</td>
    <td>Trạng thái</td>
    <td>Thao tác</td>
  </tr>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['lienhe_id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['lienhe_ten'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['lienhe_diachi'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['lienhe_dienthoai'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['detail']->value['lienhe_ngaygui'];?>
</td>
    <td><a onClick="if(confirm('Bạn có chắc chắn không?')) document.location='?mod=lienhe&id=<?php echo $_smarty_tpl->tpl_vars['detail']->value['lienhe_id'];?>
&tt=<?php echo $_smarty_tpl->tpl_vars['detail']->value['lienhe_trangthai'];?>
'" href="#">
	<?php if ($_smarty_tpl->tpl_vars['detail']->value['lienhe_trangthai']==1){?>
    <img src='../templates/admin/images/yes.png' />
    <?php }else{ ?>
    <img src='../templates/admin/images/contact.jpg' />
    <?php }?>
    </a>
    </td>
    <td><a href="?mod=lienhe&act=xoa&id=<?php echo $_smarty_tpl->tpl_vars['detail']->value['lienhe_id'];?>
"><img src="../templates/admin/images/delete.png" /></a></td>
  </tr>
  <tr>
    <td colspan="7"><font color="#FF0000">Nội dung: </font><?php echo $_smarty_tpl->tpl_vars['detail']->value['lienhe_noidung'];?>
</td>
  </tr>
</table>
<?php }} ?>