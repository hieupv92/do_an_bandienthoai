<?php /* Smarty version Smarty-3.1.14, created on 2014-07-31 11:48:37
         compiled from "..\templates\admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:5153d232796df682-96648122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c8507793936847915a087ea9682acc665cb32af' => 
    array (
      0 => '..\\templates\\admin\\login.html',
      1 => 1406434630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5153d232796df682-96648122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_53d232798007c0_40431469',
  'variables' => 
  array (
    'thongbao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d232798007c0_40431469')) {function content_53d232798007c0_40431469($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<style>
body{ margin:0; font-size:12px; font-family:Arial; background:#000;}
.boxlogin{ width:200px; height:250px;box-shadow:0 0 30px #fff;border:#ccc 1px solid;
border-radius:10px;padding:10px 40px; margin:150px auto;
background:-webkit-gradient(linear,left top,left bottom,from(#FFF),to(#EEE));}
</style>
</head>
<body>
<div class="boxlogin">
    <form action="index.php" method="post">
        <h2>Đăng nhập quản trị</h2>
        <?php if (isset($_smarty_tpl->tpl_vars['thongbao']->value)){?><h4 style="color:#F00"><?php echo $_smarty_tpl->tpl_vars['thongbao']->value;?>
</h4><?php }?>
        <p>Tên đăng nhập</p>
        <p><input type="text" name="txtuser"  /></p>
        <p>Mật khẩu</p>
        <p><input type="password" name="txtpass"  /></p>
        <p><input type="submit" value="Đăng nhập" name="btnlog" /></p>
    </form>
</div>
</body>
</html>
<?php }} ?>