<?php /* Smarty version Smarty-3.1.14, created on 2014-12-21 16:17:09
         compiled from ".\templates\dau.html" */ ?>
<?php /*%%SmartyHeaderCode:39525306d2ff1b49a0-54723479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '609e6ffbe9f16da18affc6f81d8137dea9b74933' => 
    array (
      0 => '.\\templates\\dau.html',
      1 => 1419175017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39525306d2ff1b49a0-54723479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5306d2ff22e298_90046127',
  'variables' => 
  array (
    'info' => 0,
    'nhanhieu' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5306d2ff22e298_90046127')) {function content_5306d2ff22e298_90046127($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BTL PHP</title>
<link rel="stylesheet" type="text/css" href="templates/css/style.css">
<link rel="stylesheet" type="text/css" href="templates/css/validationEngine.jquery.css"/>
<script type="text/javascript" src="templates/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="templates/js/jquery.validationEngine.js" ></script>
<script type="text/javascript" src="templates/js/jquery.validationEngine-vi.js" ></script>
<script type="text/javascript" src="templates/js/slideshow.js"></script>
<script type="text/javascript">
// kiem tra tai lieu da san sang
$(document).ready(function(e) {
    $("#slide").slides();
	// phan nay la khi di chuot vao thi hien anh luon
	$('.slides-pagination li').mouseover(function(e) {
		$('.slides-pagination li').removeClass("selected");
        $(this).addClass("selected");
		$(this).find("a").click();
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(e) {
    $("#form1").validationEngine({
		validationEventTrigger:'keyup',
		showOneMessage:true,
		maxErrorsPerField:true,
		promptPosition:'bottomRight'
		/*
		custom_error_messages:{
			'#txtuser':{ 
				'required':{ 
				message:'Sư huynh chưa nhập tên đăng nhập'},
				'minSize':{ 
				message:'Tên đăng nhập tối thiểu 3 ký tự'},
				}
			}
			*/
	});
});
</script>
<body>
<!--HEAD-->
    <header>
    	<div class="boxhead">
        	<p>Thế giới di động - Sự lựa chọn cho tương lai</p>
            <ul>
            	<li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?mod=tintuc">Tin tức</a>
                	<ul>
                    	<li><a href="?mod=news">Tin khuyến mãi</a></li>
                        <li><a href="?mod=news">Tin mới nhất</a></li>
                        <li><a href="?mod=news">Tin thị trường</a></li>
                        <li><a href="?mod=news">Chia sẻ kinh nghiệm</a></li>
                   </ul>
                </li>
                <li><a href="index.php?mod=sp">Sản phẩm</a></li>
                <li><a href="index.php?mod=lienhe">Liên hệ</a></li>
                <li><a href="index.php?mod=gt">Giới thiệu</a></li>
              	<li><a href="index.php?mod=giohang">Giỏ hàng</a></li>
                <li><a href="index.php?mod=help">Hỗ trợ</a></li>
            </ul>
        </div>
    </header>
    <!--END HEAD-->
<div class="wapper">
	<div class="bgshadow">
    <!-- Banner -->
    <div class="search">
    	<h1>dienthoai.com</h1>
        <div class="formsearch">
            <form name="form2" id="form2" method="post" action="index.php?mod=sp">
            	<input name="txttimten" type="text" class="keyword"
                 value="">
                <input name="btntimkiem" type="submit" class="btnsearch" value="Tìm kiếm">
            </form>
        </div>
    </div>
   
    <!-- END Banner -->
    
    <!-- Box login -->
    	<div class="login">
        	<div class="boxlogin">      
            	<ul>
                	<li class="selected"><a href="#">Trang chủ</a></li>
                    <li><a href="?mod=gt">Giới thiệu</a></li>
                    <li><a href="#">Quảng cáo</a></li>
                    <li><a href="?mod=pro">Sản phẩm tiêu biểu</a></li>
                </ul>
                <?php if (!isset($_smarty_tpl->tpl_vars['info']->value)){?>
             	<form action="" method="post">
                	<a href="index.php?mod=dangnhap">Đăng nhập</a>
					<a href="?mod=dangky&act=quenmk">Quên mật khẩu?</a>
					<a href="?mod=dangky">Đăng ký tài khoản?</a>
             	</form>
                <?php }else{ ?>
                    <span style="color:#FFF;padding: 12px;margin-top: -3px;float: left; font-size:13px">xin chao: <?php echo $_smarty_tpl->tpl_vars['info']->value['taikhoan_user'];?>

                    <a href="index.php?out=1" style="color:#FFF;">Thoat</a></span>
                <?php }?>
            </div>
            <div style=" font: normal bold 30px Times; margin-right:20px; float:right">
            <script src="templates/js/hieuungchu.js"></script>
			</div>
        </div> 
    <!-- END Box log gin -->
    <!-- BOX LEFT -->
    <div class="content">
     	<div class="boxleft">
    <!--Category-->
    	<div class="boxcol">
        	<div class="boxhead">
            	<p>Hàng theo nhãn hiệu</p>
            </div>
        		<ul class="category">
                	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nhanhieu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                	<li><a href="index.php?mod=sp&idnsx=<?php echo $_smarty_tpl->tpl_vars['item']->value['nhasanxuat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nhasanxuat_ten'];?>
</a></li>
                    <?php } ?>
                </ul> 
        </div>
        
      	
             <div class="adv"><img src="upload/adv/4.jpg" width="200" alt="" /></div>
             <div class="adv"><img src="upload/adv/5.jpg" width="200" alt="" /></div>
          </div>
    <!-- END BOX LEFT -->
    <div class="center">
		<div class="banner">
        	<div id="slide" data-skip="false" data-auto="2000" data-autostop="false" data-loop="true" data-transition="crossfade">
            	<ul class="carousel">
                	
                	<li class="slide">
                    	<img src="upload/news/8.jpg" alt="" width="604" height="220" />
                    </li>
                    <li class="slide">
                    	<img src="upload/news/17.jpg" alt="" width="604" height="220" />
                    </li>
                    <li class="slide">
                    	<img src="upload/news/38.jpg" alt="" width="604" height="220" />
                    </li>
                    <li class="slide">
                    	<img src="upload/news/64.jpg" alt="" width="604" height="220" />
                    </li>
            	</ul>
        	</div>
    	</div>
    <div class="home"><?php }} ?>