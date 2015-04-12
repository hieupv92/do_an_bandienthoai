<?php /* Smarty version Smarty-3.1.14, created on 2015-01-11 11:51:43
         compiled from ".\templates\giohang\giohang_form_khach.html" */ ?>
<?php /*%%SmartyHeaderCode:1511654b255bfa57676-16397048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a9b6121a65567deda599632a73e85203b18468c' => 
    array (
      0 => '.\\templates\\giohang\\giohang_form_khach.html',
      1 => 1420973407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1511654b255bfa57676-16397048',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54b255bfaa1a07_99999344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b255bfaa1a07_99999344')) {function content_54b255bfaa1a07_99999344($_smarty_tpl) {?><div class="boxcol">
	<div class="boxhead">
		<p>Thông tin khách hàng</p>
	</div>
	<div class="home2">
        <form name="form1" id="form1" action="" method="post">
                    <div class="tieu-de"><p>Thông tin khách hàng</p></div>
                    <table width="100%" border="0" cellspacing="0" cellpadding="5">
                      <tr>
                        <td width="25%">Họ và Tên</td>
                        <td><input name="txtten" type="text" class="text-input small-size validate[required]" /></td>
                      </tr>
                      <tr>
                        <td>Địa chỉ</td>
                        <td><input name="txtdiachi" type="text" class="text-input medium-size validate[required]" /></td>
                      </tr>
                      <tr>
                        <td>Địa chỉ nhận</td>
                        <td><input name="txtdiachinhan" type="text" class="text-input medium-size validate[required]" /></td>
                      </tr>
                      <tr>
                        <td>Điện thoai</td>
                        <td><input name="txtdienthoai" type="text" class="text-input small-size validate[required,custom[onlyNumberSp]]" /></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td align="left">
                            <input name="btngui" class="button" type="submit" value="Gửi đơn hàng" />
                            <input name="btnre" class="button" type="reset" value="Nhập lại" />
                        </td>
                      </tr>
                    </table> 
                </form>
                </div></div><?php }} ?>