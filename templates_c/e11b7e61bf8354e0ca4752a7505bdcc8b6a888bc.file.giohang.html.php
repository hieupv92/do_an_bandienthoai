<?php /* Smarty version Smarty-3.1.14, created on 2015-01-11 11:25:15
         compiled from ".\templates\giohang\giohang.html" */ ?>
<?php /*%%SmartyHeaderCode:1315534e00f256bfe2-88161063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e11b7e61bf8354e0ca4752a7505bdcc8b6a888bc' => 
    array (
      0 => '.\\templates\\giohang\\giohang.html',
      1 => 1420971906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1315534e00f256bfe2-88161063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_534e00f25aa893_88406128',
  'variables' => 
  array (
    'cart' => 0,
    'item' => 0,
    'lib' => 0,
    'detail' => 0,
    'tongtien' => 0,
    'tonggia' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534e00f25aa893_88406128')) {function content_534e00f25aa893_88406128($_smarty_tpl) {?><div class="boxcol">
	<div class="boxhead">
		<p>Giỏ hàng</p>
	</div>
	<div class="home2">
        <form name="form1" id="form1" method="post" action="index.php?mod=giohang"><td valign="top">
        <table width="100%" border="0" cellspacing="0" cellpadding="5" class="tbgiohang">
          <tr bgcolor="#d9f575" class="tieude">
            <td>STT</td>
            <td>Sản phẩm</td>
            <td>Hình ảnh</td>
            <td>Số lượng</td>
            <td>Đơn giá</td>
            <td>Thành tiền</td>
            <td>&nbsp;</td>
          </tr>
          <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
          <?php $_smarty_tpl->tpl_vars['tongtien'] = new Smarty_variable(0, null, 0);?>
          <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
          <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value[0], null, 0);?>
          <?php $_smarty_tpl->tpl_vars['detail'] = new Smarty_variable($_smarty_tpl->tpl_vars['lib']->value->selectone("SELECT * FROM tbsanpham WHERE sanpham_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), null, 0);?>
          <?php $_smarty_tpl->tpl_vars['tonggia'] = new Smarty_variable($_smarty_tpl->tpl_vars['detail']->value['sanpham_gia']*$_smarty_tpl->tpl_vars['item']->value[1], null, 0);?>
          <?php $_smarty_tpl->tpl_vars['tongtien'] = new Smarty_variable($_smarty_tpl->tpl_vars['tongtien']->value+$_smarty_tpl->tpl_vars['tonggia']->value, null, 0);?>
          <tr>
            <td style="color:#999"><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
            <td style="color:#0085a4"><?php echo $_smarty_tpl->tpl_vars['detail']->value['sanpham_ten'];?>
</td>
            <td><img src="<?php echo substr($_smarty_tpl->tpl_vars['detail']->value['sanpham_link'],3);?>
" width="60px" /></td>
            <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
" name="sl<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
"  size="3" class="validate[custom[onlyNumberSp],min[1]]" /></td>
            <td class="gia"><?php echo number_format($_smarty_tpl->tpl_vars['detail']->value['sanpham_gia']);?>
 VND</td>
            <td class="gia"><?php echo number_format($_smarty_tpl->tpl_vars['tonggia']->value);?>
 VND</td>
            <td><a href="index.php?mod=giohang&xoa=true&id=<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
">Xóa</a></td>
          </tr>
          <?php } ?>
          <tr>
            <td colspan="7" align="right" style="border-top:#CCC 1px solid">
            <a href="?mod=pro">Mua hàng tiếp</a> || <a href="?mod=giohang&act=info">Nhập thông tin khách hàng</a>
            <span class="update"><input type="submit" name="btnupdate" id="btnupdate" class="btn1" value="Cập nhật"></span></td>
            </tr>
          <tr>
            <td colspan="7" align="right" height="25"><b style="color:#6C0">Tổng tiền:<?php echo number_format($_smarty_tpl->tpl_vars['tongtien']->value);?>
</b> <font style="font-weight:bold; color:#F00"> VNĐ</font></td>
          </tr>
	</table>
        </form>
	</div>
</div><?php }} ?>