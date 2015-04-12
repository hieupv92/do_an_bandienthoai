<?php /* Smarty version Smarty-3.1.14, created on 2014-07-26 03:34:57
         compiled from "..\templates\admin\lienhe\lienhe_danhsach.html" */ ?>
<?php /*%%SmartyHeaderCode:564652a8450ee32210-86746371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2daba48cbd67e82abb040e8c1b2bc1c1d4205596' => 
    array (
      0 => '..\\templates\\admin\\lienhe\\lienhe_danhsach.html',
      1 => 1406345584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '564652a8450ee32210-86746371',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a8450eecbfd2_52716812',
  'variables' => 
  array (
    'danhsach' => 0,
    'item' => 0,
    'lib' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a8450eecbfd2_52716812')) {function content_52a8450eecbfd2_52716812($_smarty_tpl) {?><h1 align="center">Danh sách liên hệ</h1>
<form id="form1" name="form1" method="post" action="?mod=lienhe&act=xoa">
<input type="submit" name="btnxoa" id="btnxoa" class="xoamucchon" value="Xóa mục chọn" 
    onclick="return confirm('Bạn có chắc muốn xóa không?')"/>
<table width="100%" border="0" cellpadding="5" cellspacing="0" class="danhsach">
  <tr class="tieude">
    <td>ID</td>
    <td>Tên</td>
    <td>Địa chỉ</td>
    <td>Điện thoại</td>
    <td>Ngày gửi</td>
    <td>Trạng thái</td>
    <td>Thao tác</td>
    <td>
      <input type="checkbox" id="cball" />
   </td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danhsach']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['lienhe_id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['lienhe_ten'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['lienhe_diachi'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['lienhe_dienthoai'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['lienhe_ngaygui'];?>
</td>
    <td><a onClick="document.location='?mod=lienhe&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['lienhe_id'];?>
&tt=<?php echo $_smarty_tpl->tpl_vars['item']->value['lienhe_trangthai'];?>
'" href="#">
	<?php if ($_smarty_tpl->tpl_vars['item']->value['lienhe_trangthai']==1){?>
    <img src='../templates/admin/images/yes.png' />
    <?php }else{ ?>
    <img src='../templates/admin/images/no.png' />
    <?php }?>
    </a>
    </td>
    <td>
    <a href="?mod=lienhe&act=chitiet&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['lienhe_id'];?>
"><img src="../templates/admin/images/read.png" /></a>
    <a href="?mod=lienhe&act=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['lienhe_id'];?>
"><img src="../templates/admin/images/delete.png" /></a>
    </td>
    <td>
      <input type="checkbox" name="cbxoa[]" id="cbxoa" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['lienhe_id'];?>
">  
    </td>
  </tr>
  <?php } ?>
</table>
</form>
<div class="pageduoi"><?php echo $_smarty_tpl->tpl_vars['lib']->value->viewpage('?mod=lienhe&n=');?>
</div><?php }} ?>