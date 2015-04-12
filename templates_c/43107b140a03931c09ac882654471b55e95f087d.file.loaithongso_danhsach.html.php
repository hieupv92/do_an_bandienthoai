<?php /* Smarty version Smarty-3.1.14, created on 2014-07-27 04:07:31
         compiled from "..\templates\admin\thongso\loaithongso_danhsach.html" */ ?>
<?php /*%%SmartyHeaderCode:2361252a9786f28db43-92583164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43107b140a03931c09ac882654471b55e95f087d' => 
    array (
      0 => '..\\templates\\admin\\thongso\\loaithongso_danhsach.html',
      1 => 1406345632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2361252a9786f28db43-92583164',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a9786f304167_46038799',
  'variables' => 
  array (
    'danhsach' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a9786f304167_46038799')) {function content_52a9786f304167_46038799($_smarty_tpl) {?><form id="form1" name="form1" method="post" action="">
    <h1 align="center">Danh sách thông số sản phẩm</h1>
    <a class="them" href="#">Thêm mới thông số sản phẩm</a>
    <input type="submit" name="btnxoa" id="btnxoa" class="xoamucchon" value="Xóa mục chọn" 
        onclick="return confirm('Bạn có chắc muốn xóa không?')"/>
    <table width="100%" border="0" cellpadding="5" cellspacing="0" class="danhsach">
      <tr class="tieude">
        <td>ID</td>
        <td>Tên thông số</td>
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
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['loaithongso_id'];?>
</td>
        <td><a class="tenthongso" href="?mod=thongso&act=thongso&idloai=<?php echo $_smarty_tpl->tpl_vars['item']->value['loaithongso_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['loaithongso_ten'];?>
</a></td>
        <td>
        <a href="?mod=thongso&act=sua&idloai=<?php echo $_smarty_tpl->tpl_vars['item']->value['loaithongso_id'];?>
"><img src="../templates/admin/images/edit.png" /></a>
        <a href="?mod=thongso&act=xoa&idloai=<?php echo $_smarty_tpl->tpl_vars['item']->value['loaithongso_id'];?>
"><img src="../templates/admin/images/delete.png" /></a>
        </td>
        <td>
          <input type="checkbox" name="cbxoa[]" id="cbxoa" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['loaithongso_id'];?>
">  
        </td>
      </tr>
      <?php } ?>
    </table>
</form><?php }} ?>