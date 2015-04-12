<?php /* Smarty version Smarty-3.1.14, created on 2014-02-26 11:23:40
         compiled from ".\templates\sanpham.html" */ ?>
<?php /*%%SmartyHeaderCode:27675530dcc5a0ca325-80284410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b909dc5b4644e177dc99b692785229a5dda66921' => 
    array (
      0 => '.\\templates\\sanpham.html',
      1 => 1393413818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27675530dcc5a0ca325-80284410',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530dcc5a203629_21572322',
  'variables' => 
  array (
    'sanpham' => 0,
    'item' => 0,
    'lib' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530dcc5a203629_21572322')) {function content_530dcc5a203629_21572322($_smarty_tpl) {?>        <div class="boxcol">
            	<div class="boxhead">
                	<p>Sản phẩm tiêu biểu</p>
                </div>
				<div class="home2">
  			
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sanpham']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <div class="product">    	
                <a href="#">
                    <img src="<?php echo substr($_smarty_tpl->tpl_vars['item']->value['sanpham_link'],3);?>
" class="sp" />
                </a><br>
                <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_ten'];?>
</a><br>
                <span class="price"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['sanpham_gia']);?>
 VNĐ</span>
                <a style="text-decoration:underline;cursor:pointer" onClick="#">
                <img src="templates/images/button/cart-1.gif" class="giohang" /></a>
            </div>
            <?php } ?>
            <div class="pageduoi"><?php echo $_smarty_tpl->tpl_vars['lib']->value->viewpage('?mod=sp&n=');?>
</div>
				</div>
		</div><?php }} ?>