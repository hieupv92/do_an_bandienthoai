<?php /* Smarty version Smarty-3.1.14, created on 2013-12-04 04:25:30
         compiled from "..\templates\admin\gioithieu.html" */ ?>
<?php /*%%SmartyHeaderCode:24734529eabe8a31fa0-05348689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3db634ae9d323cfa5c522b86b60ea655083fb984' => 
    array (
      0 => '..\\templates\\admin\\gioithieu.html',
      1 => 1386131130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24734529eabe8a31fa0-05348689',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529eabe8a70373_70603283',
  'variables' => 
  array (
    'gioithieu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529eabe8a70373_70603283')) {function content_529eabe8a70373_70603283($_smarty_tpl) {?><form action="?mod=gioithieu&act=sua" method="post" name="form1" id="form1">

  <table width="100%" border="0" cellpadding="5" cellspacing="0">
    <tr>
      <td width="10%" align="center" style="color:#0085a4; font-weight:bold">Nội dung</td>
      <td width="90%">
	  <textarea name="txtnoidung" id="Content" class="ckeditor"> 
	  <?php echo $_smarty_tpl->tpl_vars['gioithieu']->value['gioithieu_noidung'];?>

	  </textarea></td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td><input type="submit" name="btnup" value="Cập nhật" class="btn1" /></td>
    </tr>
  </table>
</form>

<?php }} ?>