<?php /* Smarty version Smarty-3.1.14, created on 2014-07-26 03:34:53
         compiled from "..\templates\admin\sanpham\sanpham_danhsach.html" */ ?>
<?php /*%%SmartyHeaderCode:15585529feb5e258f29-43250390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '736862b374234938b30c34518a413710972bc4c7' => 
    array (
      0 => '..\\templates\\admin\\sanpham\\sanpham_danhsach.html',
      1 => 1406345598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15585529feb5e258f29-43250390',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529feb5e363cc6_27443735',
  'variables' => 
  array (
    'danhsachsp' => 0,
    'item' => 0,
    'lib' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529feb5e363cc6_27443735')) {function content_529feb5e363cc6_27443735($_smarty_tpl) {?><form id="form1" name="form1" method="post" action="?mod=sp&act=xoa">
<h1 align="center">Danh sách sản phẩm</h1>
<a href="?mod=sp&act=them" class="them">Thêm mới sản phẩm</a>
<input type="submit" name="btnxoa" id="btnxoa" class="xoamucchon" value="Xóa mục chọn" onclick="return confirm('Bạn có chắc muốn xóa không?')" />
<table width="100%" border="0" cellspacing="0" class="danhsach">
  <tr class="tieude">
    <td>ID</td>
    <td>Tên</td>
    <td>Hình ảnh</td>
    <td>Giá</td>
    <td>Số lượng</td>
    <td>Trạng thái</td>
    <td>Thao tác</td>
    <td>
      <input type="checkbox" id="cball" />
   	</td>
  </tr>
  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danhsachsp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_ten'];?>
</td>
    <td><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_link'];?>
" width="100px" /></td>
    <td><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['sanpham_gia']);?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_soluong'];?>
</td>
    <td>
	<a onClick="document.location='?mod=sp&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_id'];?>
&tt=<?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_trangthai'];?>
'" href="#">
	<?php if ($_smarty_tpl->tpl_vars['item']->value['sanpham_trangthai']==1){?>
    <img src='../templates/admin/images/yes.png' />
    <?php }else{ ?>
    <img src='../templates/admin/images/no.png' />
    <?php }?>
    </a>
    </td>
    <td>
    	<a href="?mod=sp&act=sua&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_id'];?>
"><img src="../templates/admin/images/edit.png" /></a>
        <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="?mod=sp&act=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_id'];?>
"><img src="../templates/admin/images/delete.png" /></a>
    </td>
   	<td>
      <input type="checkbox" name="cbxoa[]" id="cbxoa" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_id'];?>
">  
    </td>
  </tr>
  <?php } ?>
</table>
</form>
<div class="pageduoi"><?php echo $_smarty_tpl->tpl_vars['lib']->value->viewpage('?mod=sp&n=');?>
</div><?php }} ?>