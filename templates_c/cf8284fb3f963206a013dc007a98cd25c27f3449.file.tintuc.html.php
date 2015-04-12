<?php /* Smarty version Smarty-3.1.14, created on 2014-03-15 04:28:21
         compiled from ".\templates\tintuc\tintuc.html" */ ?>
<?php /*%%SmartyHeaderCode:22181531c43f4ca30a7-31920599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf8284fb3f963206a013dc007a98cd25c27f3449' => 
    array (
      0 => '.\\templates\\tintuc\\tintuc.html',
      1 => 1394593876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22181531c43f4ca30a7-31920599',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_531c43f4cd9f12_18869743',
  'variables' => 
  array (
    'tintuc' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531c43f4cd9f12_18869743')) {function content_531c43f4cd9f12_18869743($_smarty_tpl) {?><div class="boxcol">
        <div class="boxhead">
            <p>Danh mục tin tức</p>
        </div>
        
        <div class="home2">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tintuc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        		<div class="tintuc">
                    <div class="img">
                        <img src="<?php echo substr($_smarty_tpl->tpl_vars['item']->value['tintuc_link'],3);?>
" class="image"/>
                    </div>
    
                    <div class="right">
                        <a class="newshead" href="index.php?mod=tintuc&act=chitiet&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['tintuc_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['tintuc_tieude'];?>
</a>
                        <span class="date"><?php echo substr($_smarty_tpl->tpl_vars['item']->value['tintuc_date'],5,2);?>
/<?php echo substr($_smarty_tpl->tpl_vars['item']->value['tintuc_date'],0,4);?>
</span>
                        <div class="newscontent"><?php echo $_smarty_tpl->tpl_vars['item']->value['tintuc_tieude'];?>
<br>
                        <img src="templates/images/icon-xemtiep.gif" class="iconxem" /><a href="#" class="xemtiep">Xem tiếp</a>
                        </div>      
                    </div>
				</div>
       <?php } ?>
       </div>
</div> <?php }} ?>