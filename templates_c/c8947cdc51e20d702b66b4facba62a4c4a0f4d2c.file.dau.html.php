<?php /* Smarty version Smarty-3.1.14, created on 2014-07-26 03:07:04
         compiled from "..\templates\admin\dau.html" */ ?>
<?php /*%%SmartyHeaderCode:9994529ddae0e4d694-03915915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8947cdc51e20d702b66b4facba62a4c4a0f4d2c' => 
    array (
      0 => '..\\templates\\admin\\dau.html',
      1 => 1406344022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9994529ddae0e4d694-03915915',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529ddae0e86ea9_47795006',
  'variables' => 
  array (
    'info' => 0,
    'danhsachtc' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529ddae0e86ea9_47795006')) {function content_529ddae0e86ea9_47795006($_smarty_tpl) {?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>BTL PHP</title>
<link rel="stylesheet" type="text/css" href="../templates/admin/css/style.css">
<link rel="stylesheet" type="text/css" href="../templates/admin/js/validationEngine.jquery.css"/> <!-- css check form -->
<link rel="stylesheet" type="text/css" href="../templates/admin/css/jquery-ui.css">
<!-- js phần check form -->
<script src="../templates/admin/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../templates/admin/js/jquery.validationEngine.js" ></script>
<script type="text/javascript" src="../templates/admin/js/jquery.validationEngine-vi.js" ></script>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../admin/ckeditor/config.js"></script>
<link rel="stylesheet" type="text/css" href="../ckeditor/sample.css"/>
<script type="text/javascript" src="../ckeditor/sample.js"></script>


<script type="text/javascript">
$(document).ready(function(e) {
    $("#form1").validationEngine({
		validationEventTrigger:'keyup',
		showOneMessage:true,
		maxErrorsPerField:true,
		promptPosition:'bottomRight'
	});
});
</script>


<script>
		//Select ALL CHECKBOX
		$(document).ready(function(e) {
			//Tham chiếu đến Check box all: bắt sự kiện click chuột
            $("#cball").click(function(e) {
				//Lấy ra giá trị của thuộc tính checked
                var stt=$(this).attr('checked');
				//Kiểm tra biến stt: nếu bằng checked: thì tất cả form check sẽ đc đánh dấu
				if(stt=='checked') $('input[type=checkbox]').attr('checked',true);
				else  $('input[type=checkbox]').attr('checked',false);
				
            });
        });
</script>


</head>
<body>

<div class="wapper">
	<div class="bgshadow">
    	<div class="search">
    	<h1>Trang quản lý website</h1>
        <div class="formsearch">
        	<form name="form2" id="form2" method="post" action="">
            	<input name="txttimten" type="text" class="keyword">
                <input name="btntimkiem" type="submit" class="btnsearch" value="Tìm kiếm">
            </form>
        </div>
    </div>
   	<span style="font-weight:bold; padding-left:10px">Xin chào :</span>
    <a href="#" style="color:#00F; text-decoration:none"><?php echo $_smarty_tpl->tpl_vars['info']->value['taikhoan_hoten'];?>
</a>
    <a href="index.php?out=1" style="color:#F00;text-decoration:none">[Đăng xuất]</a>
    <!-- BOX LEFT -->
    	<div class="content1">
     		<div class="boxleft1">
    			<!--Category-->
    			<div class="boxcol1">
        			<div class="boxhead1">
            			<p>Quản trị</p>
           		 	</div>
        			<ul class="category1">
                        <li>
                        	<img src="../templates/admin/images/home.jpg" />
                            <a href="index.php" class="title">Trang chủ</a> 
                        </li>
                        <li>
                        	<img src="../templates/admin/images/new.png" />
                            <a href="?mod=news" class="title">Tin tức</a>                   
                        </li>
                        <li>
                        	<img src="../templates/admin/images/pro.png" />
                            <a href="?mod=sp" class="title">Sản phẩm</a>                   
                        </li>
                        <li>
                        	<img src="../templates/admin/images/pro.png" />
                            <a href="?mod=thongso" class="title">Thông số sản phẩm</a>
                            <ul>
                            	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danhsachtc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            	<li>
                            	<a href="?mod=thongso&act=thongso&idloai=<?php echo $_smarty_tpl->tpl_vars['item']->value['loaithongso_id'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['item']->value['loaithongso_ten'];?>
</a>                   
                        		</li>
                                <?php } ?>
                            </ul>                   
                        </li>
                        <li>
                        	<img src="../templates/admin/images/shop.jpg" />
                            <a href="?mod=giohang" class="title">Giỏ hàng</a>                   
                        </li>
                        <li>
                        	<img src="../templates/admin/images/nsx.png" />
                            <a href="?mod=nsx" class="title">Nhà sản xuất</a>                   
                        </li>
                        <li>
                        	<img src="../templates/admin/images/contact.png" />
                            <a href="?mod=lienhe" class="title">Liên hệ</a>                   
                        </li>
                        <li>
                        	<img src="../templates/admin/images/help.png" />
                            <a href="?mod=pro&act=pronsx" class="title">Hỗ trợ</a>                   
                        </li>
                        <li>
                        	<img src="../templates/admin/images/money.jpg" />
                            <a href="?mod=revenue" class="title">Doanh thu</a>                   
                        </li>
                        <li>
                        	<img src="../templates/admin/images/intro.jpg" />
                            <a href="?mod=gioithieu" class="title">Giới thiệu</a>                   
                        </li>
                        <li>
                        	<img src="../templates/admin/images/user.jpg" />
                            <a href="?mod=taikhoan" class="title">Tài khoản</a>                   
                        </li>
                	</ul> 
        		</div>
			</div>
            <div class="phai">
            	<div class="boxcol1">
        			<div class="boxhead1">
            			<p>Nội dung quản trị</p>
           		 	</div>
        			<div class="noidungphai"><?php }} ?>