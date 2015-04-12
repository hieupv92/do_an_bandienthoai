<?php /* Smarty version Smarty-3.1.14, created on 2014-07-26 03:34:48
         compiled from "..\templates\admin\tintuc\tintuc_danhsach.html" */ ?>
<?php /*%%SmartyHeaderCode:18944529ea83b243c15-49471798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf10859e755ef8fb9277b181080bacaee71f538' => 
    array (
      0 => '..\\templates\\admin\\tintuc\\tintuc_danhsach.html',
      1 => 1406345686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18944529ea83b243c15-49471798',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529ea83b2ec1c2_93375047',
  'variables' => 
  array (
    'danhsach' => 0,
    'item' => 0,
    'lib' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529ea83b2ec1c2_93375047')) {function content_529ea83b2ec1c2_93375047($_smarty_tpl) {?>
<form id="form1" name="form1" method="post" action="?mod=news&act=xoa">
<h1 align="center">Danh mục tin tức</h1>
<a href="?mod=news&act=them" class="them">Thêm mới tin tức</a>
<input type="submit" name="btnxoa" id="btnxoa" class="xoamucchon" value="Xóa mục chọn" onclick="return confirm('Bạn có chắc muốn xóa không?')" />
<table width="100%" border="0" cellpadding="3" cellspacing="0" class="danhsach">
  <tr class="tieude">
    <td>ID</td>
    <td>Tiêu đề</td>
    <td>Hình ảnh</td>
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
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['tintuc_id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['tintuc_tieude'];?>
</td>
    <td><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['tintuc_link'];?>
" width="80px" style="margin-top:5px" /></td>
   	<td>
    	<a onclick="document.location='index.php?mod=news&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['tintuc_id'];?>
&tt=<?php echo $_smarty_tpl->tpl_vars['item']->value['tintuc_trangthai'];?>
'" href="#">
    	<?php if ($_smarty_tpl->tpl_vars['item']->value['tintuc_trangthai']==1){?>
    	<img src="../templates/admin/images/yes.png"  />
        <?php }else{ ?>
        <img src="../templates/admin/images/no.png"  />
        <?php }?>
    	</a>
    </td>
    <td><a href="?mod=news&act=sua&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['tintuc_id'];?>
"><img src="../templates/admin/images/edit.png" /></a>
    <a onclick="return confirm('Bạn có chắc muốn xóa không?')" href="?mod=news&act=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['tintuc_id'];?>
"><img src="../templates/admin/images/delete.png" /></a></td>
    <td>
      <input type="checkbox" name="cbxoa[]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['tintuc_id'];?>
">  
    </td>
  </tr>
  <?php } ?> 
</table>
</form>
<div class="pageduoi"><?php echo $_smarty_tpl->tpl_vars['lib']->value->viewpage('?mod=news&n=');?>
</div><?php }} ?>