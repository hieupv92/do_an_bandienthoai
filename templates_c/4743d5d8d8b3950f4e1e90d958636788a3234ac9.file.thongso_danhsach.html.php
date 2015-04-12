<?php /* Smarty version Smarty-3.1.14, created on 2014-07-16 11:30:01
         compiled from "..\templates\admin\thongso\thongso_danhsach.html" */ ?>
<?php /*%%SmartyHeaderCode:88552a86e89b50b50-27699835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4743d5d8d8b3950f4e1e90d958636788a3234ac9' => 
    array (
      0 => '..\\templates\\admin\\thongso\\thongso_danhsach.html',
      1 => 1398569782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88552a86e89b50b50-27699835',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a86e89bd0466_50778728',
  'variables' => 
  array (
    'idloai' => 0,
    'danhsach' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a86e89bd0466_50778728')) {function content_52a86e89bd0466_50778728($_smarty_tpl) {?><form id="form1" name="form1" method="post" action="">
    <h1 align="center">Danh sách thông số sản phẩm</h1>
    <a class="them" href="?mod=thongso&act=themtc&idloai=<?php echo $_smarty_tpl->tpl_vars['idloai']->value;?>
">Thêm mới thông số sản phẩm</a>
    <input type="submit" name="btnxoa" id="btnxoa" class="xoamucchon" value="Xóa mục chọn" 
        onclick="return confirm('Bạn có chắc muốn xóa không?')"/>
    <table width="100%" border="1" cellpadding="5" cellspacing="0" style="border:#CCC 1px solid; text-align:center">
      <tr style="color:#0085a4; font-weight:bold; background:#E8E8E8;">
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
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['thongso_id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['thongso_ten'];?>
</td>
        <td>
        <a href="?mod=thongso&act=sua&idloai=<?php echo $_smarty_tpl->tpl_vars['idloai']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['thongso_id'];?>
"><img src="../templates/admin/images/edit.png" /></a>
        <a href="?mod=thongso&act=xoa&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['thongso_id'];?>
&idloai=<?php echo $_smarty_tpl->tpl_vars['item']->value['thongso_loai'];?>
"><img src="../templates/admin/images/delete.png" /></a>
        </td>
        <td>
          <input type="checkbox" name="cbxoa[]" id="cbxoa" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['thongso_id'];?>
">  
        </td>
      </tr>
      <?php } ?>
    </table>
</form><?php }} ?>