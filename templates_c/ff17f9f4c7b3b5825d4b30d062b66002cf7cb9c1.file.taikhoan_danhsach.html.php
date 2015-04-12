<?php /* Smarty version Smarty-3.1.14, created on 2014-07-26 03:35:01
         compiled from "..\templates\admin\taikhoan\taikhoan_danhsach.html" */ ?>
<?php /*%%SmartyHeaderCode:2719252a98271f0d6c9-81332836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff17f9f4c7b3b5825d4b30d062b66002cf7cb9c1' => 
    array (
      0 => '..\\templates\\admin\\taikhoan\\taikhoan_danhsach.html',
      1 => 1406345608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2719252a98271f0d6c9-81332836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a982720aa450_37192324',
  'variables' => 
  array (
    'danhsach' => 0,
    'item' => 0,
    'lib' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a982720aa450_37192324')) {function content_52a982720aa450_37192324($_smarty_tpl) {?>
<form id="form1" name="form1" method="post" action="?mod=taikhoan&act=xoa">
<h1 align="center">Danh mục tài khoản</h1>
<a href="?mod=taikhoan&act=them" class="them">Thêm mới tài khoản</a>
<input type="submit" name="btnxoa" id="btnxoa" class="xoamucchon" value="Xóa mục chọn" onclick="return confirm('Bạn có chắc muốn xóa không?')" />
<table width="100%" border="0" cellpadding="5" cellspacing="0" class="danhsach">
  <tr class="tieude">
    <td>ID</td>
    <td>Tài khoản</td>
    <td>Email</td>
    <td>Họ tên</td>
    <td>Điện thoại</td>
    <td>Giới tính</td>
    <td>Loại</td>
    <td>Trạng thái</td>
    <td width="80px">Thao tác</td>
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
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['taikhoan_id'];?>
</td>
    <td><span style="color:#00F"><?php echo $_smarty_tpl->tpl_vars['item']->value['taikhoan_user'];?>
</span></td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['taikhoan_email'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['taikhoan_hoten'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['taikhoan_phone'];?>
</td>
    <td>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['taikhoan_gioitinh']==1){?>
    <img src="../templates/admin/images/male.png"  />
    <?php }else{ ?>
    <img src="../templates/admin/images/female.png"  />
    <?php }?>
    </td>
    <td>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['taikhoan_loai']==1){?>
	<span style="color:#00F">Quản trị</span>
    <?php }else{ ?>
   	<span style="color:#F00">Người dùng</span>
    <?php }?>
    </td>
   	<td>
    	<a onclick="document.location='index.php?mod=taikhoan&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['taikhoan_id'];?>
&tt=<?php echo $_smarty_tpl->tpl_vars['item']->value['taikhoan_trangthai'];?>
'" href="#">
    	<?php if ($_smarty_tpl->tpl_vars['item']->value['taikhoan_trangthai']==1){?>
    	<img src="../templates/admin/images/yes.png"  />
        <?php }else{ ?>
        <img src="../templates/admin/images/no.png"  />
        <?php }?>
    	</a>
    </td>
    <td>
    	<a href="?mod=taikhoan&act=sua&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['taikhoan_id'];?>
"><img src="../templates/admin/images/edit.png" /></a>
    	<a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="?mod=taikhoan&act=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['taikhoan_id'];?>
"><img src="../templates/admin/images/delete.png" /></a><br />
    	<a href="#" style="text-decoration:none;color:#F00">Đổi mật khẩu</a>
    </td>
    <td>
      <input type="checkbox" name="cbxoa[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['taikhoan_id'];?>
">  
    </td>
  </tr>
  <?php } ?> 
</table>
</form>
<div class="pageduoi"><?php echo $_smarty_tpl->tpl_vars['lib']->value->viewpage('?mod=taikhoan&n=');?>
</div><?php }} ?>