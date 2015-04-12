<?php /* Smarty version Smarty-3.1.14, created on 2014-07-25 10:26:26
         compiled from ".\templates\cuoi.html" */ ?>
<?php /*%%SmartyHeaderCode:260675306d3543390c5-36946675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da0ba4606b845e31812eef8f8308358a26080bfe' => 
    array (
      0 => '.\\templates\\cuoi.html',
      1 => 1406283986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260675306d3543390c5-36946675',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5306d35433c058_14604873',
  'variables' => 
  array (
    'tinmoi' => 0,
    'item' => 0,
    'raovatmoi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5306d35433c058_14604873')) {function content_5306d35433c058_14604873($_smarty_tpl) {?></div>
    </div>
	<!-- BOX RIGHT --> 
        <div class="boxright">
        	<div class="boxcol">
            	<div class="boxhead">
                	<p>Giỏ hàng</p>
                </div>
                <div class="categorys">
                <p class="total">Total:</p>
					<!--<a href="index.php?mod=giohang"><img src="templates/images/shop.jpg" style="width:160px; padding-left:10px" /></a> -->
                </div>
			</div>
        	<div class="boxcol">
            	<div class="boxhead">
                	<p>Tin tức mới nhất</p>
                </div>
                    <ul class="categorys">
                    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tinmoi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        
                   		<li>
                        <img src="<?php echo substr($_smarty_tpl->tpl_vars['item']->value['tintuc_link'],3);?>
" class="imgnews" />
                        <a href="?mod=tintuc&act=chitiet&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['tintuc_id'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['tintuc_tieude'];?>
</a>
                        </li>
                        <?php } ?>
                	</ul> 
                </div>
                
            <!--<div class="boxcol newscol">
            	<div class="boxhead">
                	<p>Rao vặt mới nhất</p>
                </div>
                    <ul class="categorys">
                    	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['raovatmoi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            			<li><a href="#" class="img"><img  alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['raovat_tieude'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['raovat_hinhanh'];?>
"  /></a><a href="#" class="titles"><?php echo $_smarty_tpl->tpl_vars['item']->value['raovat_tieude'];?>
</a>
                <br><span>Giá: <?php echo number_format($_smarty_tpl->tpl_vars['item']->value['raovat_gia']);?>
 VND</span>
                		</li>
                		<?php } ?>
                	</ul>
                    <p class="pageright"><a id="readagain">&laquo; Trước </a>
            <a id="readmore">Tiếp &raquo;</a></p>
            <script>
			$(document).ready(function(e) {
				var page=1;
                $("#readmore").click(function(e) {
					page++;
					$('.newscol ul').html('<li style="text-align:center"><progress></progress></li>');
                    $.get('ajraovat.php?n='+page,function(data){
						$('.newscol ul').html(data);
					});
                });
				 $("#readagain").click(function(e) {
					page--;
					$('.newscol ul').html('<li style="text-align:center"><progress></progress></li>');
                    $.get('ajraovat.php?n='+page,function(data){
						$('.newscol ul').html(data);
					});
                });
				
            });
			</script> 
                </div> -->
            
            
            <div class="boxcol">
            	<div class="boxhead">
                	<p>Tổng đài tư vấn</p>
                </div>
                <div class="categorys" style="text-align:center; color:#0085a4">
                 	<p>Hotline -> 01663809415</p>
					<p>Hotline -> 01663809415</p>
                    <p>Hotline -> 01663809415</p>
                    <p>Hotline -> 01663809415</p>
                    <p>Hotline -> 01663809415</p>
				</div>
			</div>
        </div>
	</div>
    <!-- END BOX RIGHT -->
    </div>
</div>
<footer>
    	<div class="boxfoot">
    <p>Địa chỉ:  269 Phố Xã Đàn (Kim Liên Mới) - Đống Đa - Hà nội Tel : (04) 3.557.3888</p>
    <p>56 Phố Yên Lạc - Hai Bà Trưng - Hà nội Tel : (04) 3.974 11 66 ; 165C Xuân Thuỷ-Cầu Giấy-Hà Nội Tel: (04) 3 767 5388</p> 
	<p>Copyright ©2004-2009 Dienthoai.com.vn  E-mail: info@dienthoai.com.vn</p>
		</div>
    </footer>>
</body>
</html><?php }} ?>