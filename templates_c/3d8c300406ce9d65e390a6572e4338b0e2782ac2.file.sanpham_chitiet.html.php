<?php /* Smarty version Smarty-3.1.14, created on 2014-07-26 03:23:41
         compiled from ".\templates\sanpham\sanpham_chitiet.html" */ ?>
<?php /*%%SmartyHeaderCode:18566531fcf0e3a0ad8-65193004%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d8c300406ce9d65e390a6572e4338b0e2782ac2' => 
    array (
      0 => '.\\templates\\sanpham\\sanpham_chitiet.html',
      1 => 1406344992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18566531fcf0e3a0ad8-65193004',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531fcf0e406b80_76565150',
  'variables' => 
  array (
    'chitiet' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531fcf0e406b80_76565150')) {function content_531fcf0e406b80_76565150($_smarty_tpl) {?><div class="boxcol">
	<div class="boxhead">
	<p>Chi tiết sản phẩm</p>
	</div>
	<div class="home2" style="text-align:center">
        <img src="<?php echo substr($_smarty_tpl->tpl_vars['chitiet']->value['sanpham_link'],3);?>
" class="imgspct" /><br />
        <span class="tensp"><?php echo $_smarty_tpl->tpl_vars['chitiet']->value['sanpham_ten'];?>
</span><br>
        <span class="price">Giá : <?php echo number_format($_smarty_tpl->tpl_vars['chitiet']->value['sanpham_gia']);?>
 VNĐ</span><br />
        <a style="text-decoration:underline;cursor:pointer" onClick="#">
		<a class="giohang" href="index.php?mod=giohang&id=<?php echo $_smarty_tpl->tpl_vars['chitiet']->value['sanpham_id'];?>
">Mua ngay</a>
        <?php echo $_smarty_tpl->tpl_vars['chitiet']->value['sanpham_chitiet'];?>

        <h2>Thông số sản phẩm</h2>
        <table class="chitiet" width="75%" border="0" cellspacing="0" cellpadding="13" align="center">
          <tr class="maukhac">
            <td>Kiểu dáng</td>
            <td><?php echo $_smarty_tpl->tpl_vars['chitiet']->value['kieudang'];?>
</td>
          </tr>
          <tr>
            <td>Mức giá</td>
            <td><?php echo $_smarty_tpl->tpl_vars['chitiet']->value['mucgia'];?>
</td>
          </tr>
          <tr class="maukhac">
            <td>Hệ điều hành</td>
            <td><?php echo $_smarty_tpl->tpl_vars['chitiet']->value['hedieuhanh'];?>
</td>
          </tr>
          <tr>
            <td>Kích thước</td>
            <td><?php echo $_smarty_tpl->tpl_vars['chitiet']->value['kichthuoc'];?>
</td>
          </tr>
          <tr class="maukhac">
            <td>Tính năng</td>
            <td><?php echo $_smarty_tpl->tpl_vars['chitiet']->value['tinhnang'];?>
</td>
          </tr>
          <tr>
            <td>Card</td>
            <td><?php echo $_smarty_tpl->tpl_vars['chitiet']->value['card'];?>
</td>
          </tr>
          <tr class="maukhac">
            <td>Màn hinh</td>
            <td><?php echo $_smarty_tpl->tpl_vars['chitiet']->value['manhinh'];?>
</td>
          </tr>
          <tr>
            <td>Ram</td>
            <td><?php echo $_smarty_tpl->tpl_vars['chitiet']->value['ram'];?>
</td>
          </tr>
          <tr class="maukhac">
            <td>Ô cứng</td>
            <td><?php echo $_smarty_tpl->tpl_vars['chitiet']->value['ocung'];?>
</td>
          </tr>
          <tr>
            <td>Vi xử lý</td>
            <td><?php echo $_smarty_tpl->tpl_vars['chitiet']->value['vixuly'];?>
</td>
          </tr>
        </table>

	</div>
</div><?php }} ?>