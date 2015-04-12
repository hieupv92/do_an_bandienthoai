<?php /* Smarty version Smarty-3.1.14, created on 2013-12-04 03:39:42
         compiled from "..\templates\admin\danhmuc\tintuc_danhsach.html" */ ?>
<?php /*%%SmartyHeaderCode:13633529dedf2ac1760-48934762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cfd6cd03217bc530284bec84c1fc4e87993a554' => 
    array (
      0 => '..\\templates\\admin\\danhmuc\\tintuc_danhsach.html',
      1 => 1386128380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13633529dedf2ac1760-48934762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529dedf2af2ea0_71497360',
  'variables' => 
  array (
    'danhsach' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529dedf2af2ea0_71497360')) {function content_529dedf2af2ea0_71497360($_smarty_tpl) {?>
<form id="form1" name="form1" method="post" action="index.php?mod=news&act=xoa">
<h1 align="center">Danh mục tin tức</h1>
<a href="?mod=news&act=them" class="them">Thêm mới</a>
<table width="100%" border="1" cellpadding="3" cellspacing="0" style="border:#CCC 1px solid; text-align:center">
  <tr align="center" style="color:#0085a4; font-weight:bold; background:#E8E8E8">
    <td>ID</td>
    <td>Tiêu đề</td>
    <td>Hình ảnh</td>
    <td>Trạng thái</td>
    <td>
    <input type="submit" name="btnxoa" id="btnxoa" class="btn1" value="Xóa" onclick="return confirm('Bạn có chắc muốn xóa không?')" />
    </td>
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
" width="80px" /></td>
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
</form><?php }} ?>