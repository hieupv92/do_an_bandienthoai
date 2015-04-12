<?php /* Smarty version Smarty-3.1.14, created on 2014-03-24 04:50:40
         compiled from ".\templates\lienhe.html" */ ?>
<?php /*%%SmartyHeaderCode:18753532d152c433835-17920799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b7b782df502816b6f45c6a05461eaad22af7ad2' => 
    array (
      0 => '.\\templates\\lienhe.html',
      1 => 1395636636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18753532d152c433835-17920799',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_532d152c46cda7_72148072',
  'variables' => 
  array (
    'thongbao' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532d152c46cda7_72148072')) {function content_532d152c46cda7_72148072($_smarty_tpl) {?><div class="boxcol">
	<div class="boxhead">
		<p>Liên hệ</p>
	</div>
	<div class="home2">
        <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
          <h1 align="center">Thông tin liên hệ</h1>
          <div style="color:#00F; padding-left:10px; font-size:14px;"><?php if (isset($_smarty_tpl->tpl_vars['thongbao']->value)){?><?php echo $_smarty_tpl->tpl_vars['thongbao']->value;?>
<?php }?></div>
          <table width="100%" border="0" cellpadding="5" cellspacing="5">
            <tr>
              <td>Tên *</td>
              <td><input type="text" name="txtten" class="text-input small-size validate[required]" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['txtten'])){?> value="<?php echo $_smarty_tpl->tpl_vars['data']->value['txtten'];?>
" <?php }?>/></td>
            </tr>
            <tr>
              <td>Địa chỉ</td>
               <td><input type="text" name="txtdiachi" id="txtdiachi" class="text-input small-size validate[required,maxSize[32]]" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['txtdiachi'])){?> value="<?php echo $_smarty_tpl->tpl_vars['data']->value['txtdiachi'];?>
" <?php }?>></td>
            </tr>
            <tr>
              <td>Điện thoại *</td>
              <td><input type="text" name="txtdienthoai" class="text-input small-size validate[required,custom[onlyNumberSp]]"
              <?php if (isset($_smarty_tpl->tpl_vars['data']->value['txtdienthoai'])){?> value="<?php echo $_smarty_tpl->tpl_vars['data']->value['txtdienthoai'];?>
" <?php }?> /></td>
            </tr>
            <tr>
              <td>Tin nhắn</td>
              <td><textarea name="txtnoidung" cols="50" rows="10" id="Content" class="validate[required]"><?php if (isset($_smarty_tpl->tpl_vars['data']->value['txtdiachi'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['txtdiachi'];?>
<?php }?></textarea></td>
            </tr>
            <tr>
                <td>Mã bảo mật</td>
                <td><input name="txtser" type="text" id="txtser" size="5" class="text-input">
        		<img src="control/capcha.php" id="capcha" alt="ser">
        		<img src="templates/images/refresh.png" alt="refresh" id="rfimg" style="cursor:pointer" />
       			 <script>
        			$(document).ready(function(e) {
            		$("#rfimg").click(function(e) {
                	$("#capcha").attr('src','control/capcha.php');
            		});
        		});
        		</script>
                </td>
			</tr
            ><tr>
              <td>&nbsp;</td>
              <td><input type="submit" name="btnthem" value="Send" class="btn1" /></td>
            </tr>
          </table>
        </form>
	</div>
</div><?php }} ?>