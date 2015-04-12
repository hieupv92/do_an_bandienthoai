<?php /* Smarty version Smarty-3.1.14, created on 2014-12-21 15:23:51
         compiled from ".\templates\dangnhap.html" */ ?>
<?php /*%%SmartyHeaderCode:29745496d1f4aa6600-68922367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '513f5a1ddd46041c81652c724b4393a3099ff63f' => 
    array (
      0 => '.\\templates\\dangnhap.html',
      1 => 1419171814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29745496d1f4aa6600-68922367',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5496d1f4add111_04661374',
  'variables' => 
  array (
    'thongbao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5496d1f4add111_04661374')) {function content_5496d1f4add111_04661374($_smarty_tpl) {?><div class="boxcol">
	<div class="boxhead">
		<p>Đăng ký tài khoản</p>
	</div>
	<div class="home2">
    
		<form action="" method="post" name="form1" id="form2">
        	<span style="color:#F00; font-weight:bold; padding:10px 0px 0px 10px;float:left"><?php if (isset($_smarty_tpl->tpl_vars['thongbao']->value)){?>
<?php echo $_smarty_tpl->tpl_vars['thongbao']->value;?>
<?php }?>    		</span>
            <h1 align="center">Đăng nhập tài khoản</h1>
            <table width="80%" border="0" cellpadding="5" cellspacing="0" class="tbdangnhap" style=" text-align:center;border:0; margin:0px auto">
              <tr>
                <td width="20%">Tài khoản</td>
                <td width="60%">
                  <input type="text" name="txtuser" id="txtuser" class="text-input small-size validate[required,maxSize[32],custom[onlyLetterNumber]]" placeholder="Username">
                </td>
              </tr>
              <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="txtpass" id="txtpass"
                 class="text-input small-size validate[required,maxSize[32],custom[onlyLetterNumber]]" placeholder="Password">
              					
              <tr>
                <td>&nbsp;</td>
                <td style="float:left;text-align:left">
                  <span class="update"><input type="submit" name="btndangnhap" id="btndangnhap" class="button-input" value="Đăng nhập"></span>
                  <span class="update"><input type="reset" name="btnreset" id="btnreset" class="button-input" value="Nhập lại"></span>
                </td>
              </tr>
            </table>
		</form>
       
	</div>
</div>
<?php }} ?>