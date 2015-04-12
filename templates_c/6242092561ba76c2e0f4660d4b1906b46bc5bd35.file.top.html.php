<?php /* Smarty version Smarty-3.1.14, created on 2014-02-22 11:06:37
         compiled from ".\templates\top.html" */ ?>
<?php /*%%SmartyHeaderCode:548530884bd189e74-88646166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6242092561ba76c2e0f4660d4b1906b46bc5bd35' => 
    array (
      0 => '.\\templates\\top.html',
      1 => 1393066982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '548530884bd189e74-88646166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_530884bd221e19_32418297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530884bd221e19_32418297')) {function content_530884bd221e19_32418297($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BUYPLUS</title>
<link rel="stylesheet" type="text/css" href="templates/css/style.css"/>
<link rel="stylesheet" type="text/css" href="templates/css/validationEngine.jquery.css"/>
<script type="text/javascript" src="templates/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="templates/js/jquery.validationEngine-vi.js"></script>
<script type="text/javascript" src="templates/js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="templates/js/jquery.cycle.all.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	//Di chuột hiển thị sub menu trên HEAD
    $(".boxhead ul li").hover(function(e) {
        $(this).find("ul:first").show("fast");
    },function(e) {
        $(this).find("ul:first").css("display","none");
    });
});
</script>
</head>

<body>

<!--HEAD-->
<div class="head">
   	<div class="boxhead">
    	<p>Buyplus - Sự lựa chọn cho tương lai</p>
        <ul>
        	<li><a href="#">Trang chủ</a></li>
        	<li><a href="#">Tin tức</a>
            	<ul>
                	<li><a href="#">Tin khuyến mãi</a></li>
                    <li><a href="#">Tin công ty</a></li>
                    <li><a href="#">Tin thị trường</a></li>
                    <li><a href="#">Chia sẻ kinh nghiệm</a></li>
                </ul>
            </li>
            <li><a href="#">Trợ giúp</a>
            	<ul>
                	<li><a href="#">Hướng dẫn đặt hàng</a></li>
                    <li><a href="#">Hướng dẫn thanh toán</a></li>
                    <li><a href="#">Quy định chung</a></li>
                </ul>
            </li>
            <li><a href="#">Hỗ trợ</a>
            	<ul>
                	<li><a href="#">Yahoo</a></li>
                    <li><a href="#">Skype</a></li>
                    <li><a href="#">Email</a></li>
                    <li><a href="#">Mobile</a></li>
                </ul>
            </li>
            <li><a href="#">Liên hệ</a>
            	<ul>
                	<li><a href="#">Thông tin liên hệ</a></li>
                    <li><a href="#">Gửi liên hệ</a></li>
                </ul>
            </li>
            <li><a href="#">Site map</a></li>
            <li><a href="#">Diễn đàn</a></li>
        </ul>
    </div> 
</div>
<!--END HEAD-->
<div class="wapper">
  <!--BANNER-->
  <div class="banner">
  	<div class="logo">BUYPLUS.VN</div>
    <div class="search">
    	<form action="index.php?prog=8" method="post">
        	<div class="bgsearch">
            	<p class="ipsearch"><input name="keyword" id="keyword" type="text"  /></p>
                <p class="btnsearch"><input type="image" src="templates/images/btnsearch.jpg" /></p>
            </div>
        </form>
        <script>
		$(document).ready(function(e) {
            //THam chiếu đến form keyword: Bắt sự kiện khi phím nhẩy lên
			$("#keyword").keyup(function(e) {
				$("#result").html('<div style="float:left;width:780px; text-align:center;padding-top:100px;"><progress style="width:200px; height:30px"></progress></div>');
				//Lấy ra từ khóa vừa gõ trên form
				var tukhoa=$(this).val();
				//Gọi Ajax đường link sanpham.php với dữ liệu truyền sang là từ khóa
				$.get('sanpham.php?keyword=' + tukhoa,function(data){
					//Hiển thị dữ liệu lấy đc từ file sanpham.php lên Thẻ Div mang id result
					$("#result").html(data);
				});
                
            });
        });
		</script>
    </div>
  </div>
  <!--END BANNER-->
  
  <!-- BOX ACC-->
  <div class="boxacc">
  	<div class="boracc">
        <!--MENU-->
        <div class="menu">	
        	<ul>
            	<li class="active"><p class="mleft"></p><p class="mcen"><a href="trang-chu.html">Trang chủ</a></p><p class="mright"></p></li>
                <li><p class="mleft"></p><p class="mcen"><a href="gioi-thieu.html">Giới thiệu</a></p><p class="mright"></p></li>
                <li><p class="mleft"></p><p class="mcen"><a href="san-pham-moi.html">Sản phẩm mới</a></p><p class="mright"></p></li>
                <li><p class="mleft"></p><p class="mcen"><a href="#">Sản phẩm tiêu biểu</a></p><p class="mright"></p></li>
                <li><p class="mleft"></p><p class="mcen"><a href="#">Quảng cáo</a></p><p class="mright"></p></li>
                 <li><p class="mleft"></p><p class="mcen"><a href="tin-tuc.html">Tin tức</a></p><p class="mright"></p></li>
            </ul>
        </div>
        <!--END MENU-->
        
        <!-- ĐĂNG KÝ ĐĂNG NHẬP-->
        <div class="login">
        <?php if (isset($_smarty_tpl->tpl_vars['login']->value)){?>
        	<a href="#">Xin chào <?php echo $_smarty_tpl->tpl_vars['login']->value['taikhoan_email'];?>
</a>
            <a href="#">Thay đổi mật khẩu</a>
            <a href="#">Quản lý đơn hàng</a>
            <a href="dang-rao-vat.html">Đăng tin rao vặt</a>
            <a href="index.php?prog=7" onclick="return confirm('Bạn có chắc muốn đăng xuất?')">Đăng xuất!</a>
        <?php }else{ ?>
        	<form action="index.php" method="post">
            Tài khoản <input name="txtuser" type="text" />
            Mật khẩu <input name="txtpass" type="password" />
            <input name="cbrem" type="checkbox" value="1" /> Nhớ mật khẩu
            <input name="btnlog" type="submit" class="btnut" value="Đăng nhập" />
            </form>
            <a href="#">Quên mật khẩu?</a>
            <a href="index.php?prog=5">Đăng ký tài khoản?</a> 
            <a href="google.html?abc=1"><img src="templates/images/g.jpg" alt="google" /></a>
              
		<?php }?>
        </div>
        <!-- END ĐĂNG KÝ ĐĂNG NHẬP-->
        
      
        
  	</div>
  </div>
  <!-- BOX ACC-->
  
    <!--main-->
    <div class="main">
    <div id="result"><?php }} ?>