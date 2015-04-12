<?php /* Smarty version Smarty-3.1.14, created on 2014-07-25 03:35:47
         compiled from ".\templates\sanpham\sanpham.html" */ ?>
<?php /*%%SmartyHeaderCode:25872531c4fc27a0b60-13001617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4ac4864f142373033f8d11f348c7e335b007ac8' => 
    array (
      0 => '.\\templates\\sanpham\\sanpham.html',
      1 => 1406259344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25872531c4fc27a0b60-13001617',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531c4fc2904098_75700671',
  'variables' => 
  array (
    'sanpham' => 0,
    'item' => 0,
    'lib' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531c4fc2904098_75700671')) {function content_531c4fc2904098_75700671($_smarty_tpl) {?>        	<div class="boxcol">
            	<div class="boxhead">
                	<p>Sản phẩm tiêu biểu</p>
                </div>
				<div class="home2">
  					<ul class="product">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sanpham']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                        <span class="price"><?php echo number_format($_smarty_tpl->tpl_vars['item']->value['sanpham_gia']);?>
 VNĐ</span>
						<div><a href="index.php?mod=giohang&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['sanpham_id'];?>
"  class="giohang">Đặt mua</a></div>
                    </li>
                    <?php } ?>
                    </ul>
				</div>
            	<div class="pageduoi"><?php echo $_smarty_tpl->tpl_vars['lib']->value->viewpage('?mod=sp&n=');?>
</div>
			</div><?php }} ?>