<?php /* Smarty version Smarty-3.1.14, created on 2014-02-22 11:06:37
         compiled from ".\templates\home1.html" */ ?>
<?php /*%%SmartyHeaderCode:4493530884bd33fb16-57745106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0a023c794244ce9ce53ca579f93c8db8b2a7c54' => 
    array (
      0 => '.\\templates\\home1.html',
      1 => 1393067026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4493530884bd33fb16-57745106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lib' => 0,
    'banchay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530884bd391ae7_76392968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530884bd391ae7_76392968')) {function content_530884bd391ae7_76392968($_smarty_tpl) {?><!-- LEFT-->
    	<div class="col">
        	<div class="head">
            	<p class="hleft"></p>
                <p class="hcen">Danh mục sản phẩm</p>
                <p class="hright"></p>
            </div>
            <div class="colbox listcate">
            	<?php echo $_smarty_tpl->tpl_vars['lib']->value->loadmenu();?>

            </div>
            <!-- QUANG CAO-->
            <div class="adv"><img src="upload/adv/4.jpg" width="198" alt="" /></div>
            <div class="adv"><img src="upload/adv/5.jpg" width="198" alt="" /></div>			<!-- END QUANG CAO-->
        </div>	
        <!-- END LEFT-->
        
        <!--CHANGE CONTENT-->
    	<div class="content">
        	<!--SLIDER-->
        	<script type="text/javascript" >
				$(document).ready(function(e) {
					//Slider voi hieu ung
					//$("#img1").cycle("zoom");
					$("#img1").cycle({
						fx:"scrollUp,fadeZoom",
						speed:1000,
						pager: "#page",
						pagerEvent: "mouseover"
					});
				});
				
				</script>
                <div class="slider">
                    <div id="page"></div>
                    <div id="img1">
                    <img src="upload/slider/1.jpg" alt="anh 1" />
                    <img src="upload/slider/2.jpg"  alt="anh 2" />
                    <img src="upload/slider/3.jpg" alt="anh 3" />
                    <img src="upload/slider/4.jpg" alt="anh 4" />
                    </div>
                </div>
           <!--END SLIDER-->
           
           <!--HOME PRODUCT-->
           <div class="product">
           		<div class="head">
                    <p class="hleft"></p>
                    <p class="hcen">Sản phẩm bán chạy</p>
                    <p class="hright"></p>
                </div>
                <?php $_smarty_tpl->tpl_vars['danhsachsp'] = new Smarty_variable($_smarty_tpl->tpl_vars['banchay']->value, null, 0);?>
           		<?php echo $_smarty_tpl->getSubTemplate ("listsp.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

           </div>
           
           <!--END PRODUCT-->
        </div>	
        <!-- END CHANGE CONTENT--><?php }} ?>