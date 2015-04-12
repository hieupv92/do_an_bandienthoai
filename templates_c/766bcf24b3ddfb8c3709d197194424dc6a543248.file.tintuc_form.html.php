<?php /* Smarty version Smarty-3.1.14, created on 2013-12-04 03:24:47
         compiled from "..\templates\admin\danhmuc\tintuc_form.html" */ ?>
<?php /*%%SmartyHeaderCode:10284529deea2d53551-99300782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '766bcf24b3ddfb8c3709d197194424dc6a543248' => 
    array (
      0 => '..\\templates\\admin\\danhmuc\\tintuc_form.html',
      1 => 1386127482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10284529deea2d53551-99300782',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529deea2d85963_66613932',
  'variables' => 
  array (
    'id' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529deea2d85963_66613932')) {function content_529deea2d85963_66613932($_smarty_tpl) {?>
<style>
tr{ border-left:0;border-right:0;}
td{ border-left:0;border-right:0;}
</style>


<form name="form1" id="form1" method="post" action="" enctype="multipart/form-data">
<h1 align="center">Quản lý tin tức</h1>
  <table width="100%" border="0" cellspacing="5" cellpadding="5">
    <tr>
      <td>Tiêu đề</td>
      <td><input name="txttieude" type="text" size="50" class="validate[required]" <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['tintuc_tieude'];?>
" <?php }?>></td>
    </tr>
    <tr>
      <td>Tóm tắt</td>
      <td><textarea name="txttomtat" id="txttomtat" cols="45" rows="5" class="validate[required]"><?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> <?php echo $_smarty_tpl->tpl_vars['detail']->value['tintuc_tomtat'];?>
<?php }?></textarea></td>
    </tr>
    <tr>
      <td>Nội dung</td>
      <td><textarea name="txtnoidung" id="txtnoidung" class="ckeditor"><?php if ($_smarty_tpl->tpl_vars['id']->value>0){?><?php echo $_smarty_tpl->tpl_vars['detail']->value['tintuc_noidung'];?>
<?php }?></textarea></td>
    </tr>
    <tr>
      <td>Trạng thái</td>
      <td>
          <input type="radio" name="rdtrangthai" value="1" id="RadioGroup1_0" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['tintuc_trangthai']==1){?> checked="checked" <?php }?> />Hoạt động
       
          <input type="radio" name="rdtrangthai" value="0" id="RadioGroup1_1" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['tintuc_trangthai']==0){?> checked="checked" <?php }?> />Khóa
      </td>
    </tr>
    <tr>
      <td>Hình ảnh
      <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?></br><img src="<?php echo $_smarty_tpl->tpl_vars['detail']->value['tintuc_link'];?>
" width="100" /></td><?php }?>
      <td>
      <input name="anh" type="file" id="anh" />
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      		<?php if ($_smarty_tpl->tpl_vars['id']->value>0){?>
            <input name="btnthem" type="submit" value="Cập nhật" class="btn1">
            <?php }else{ ?>
            <input name="btnthem" type="submit" value="Thêm mới" class="btn1">
            <?php }?>
            <input name="btnnhaplai" type="reset" value="Nhập lại" class="btn1">
      </td>
    </tr>
  </table>
</form>
<?php }} ?>