<?php /* Smarty version Smarty-3.1.14, created on 2014-07-25 03:37:58
         compiled from ".\templates\home.html" */ ?>
<?php /*%%SmartyHeaderCode:9625306d3542df3e6-31035998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68ab31bf7b6c5ed0d021984e9faa76586af9cb6e' => 
    array (
      0 => '.\\templates\\home.html',
      1 => 1406259464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9625306d3542df3e6-31035998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5306d35431e1f3_34981170',
  'variables' => 
  array (
    'sanphamtb' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5306d35431e1f3_34981170')) {function content_5306d35431e1f3_34981170($_smarty_tpl) {?>        <div class="boxcol">
            	<div class="boxhead">
                	<p>Sản phẩm tiêu biểu</p>
                </div>
				<div class="home2">
  			<ul class="product">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sanphamtb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li>    	
                <a href="#">
                    <img src="<?php echo substr($_smarty_tpl->tpl_vars['item']->value['sanpham_link'],3);?>
" class="sp" />
                </a><br>
                <a href="index.php?mod=sp&act=chitiet&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_id'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_ten'];?>
</a><br>
                <span class="price">Giá: <?php echo number_format($_smarty_tpl->tpl_vars['item']->value['sanpham_gia']);?>
 VNĐ</span>
                <div style="padding-top:5px"><a href="index.php?mod=giohang&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_id'];?>
"  class="giohang">Đặt mua</a></div>
            </li>
            <?php } ?>
            </ul>
				</div>
		</div><?php }} ?>