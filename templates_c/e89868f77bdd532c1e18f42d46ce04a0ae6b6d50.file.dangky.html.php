<?php /* Smarty version Smarty-3.1.14, created on 2014-07-26 03:42:08
         compiled from ".\templates\dangky\dangky.html" */ ?>
<?php /*%%SmartyHeaderCode:27311533cccd9258ee0-34673759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e89868f77bdd532c1e18f42d46ce04a0ae6b6d50' => 
    array (
      0 => '.\\templates\\dangky\\dangky.html',
      1 => 1406346128,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27311533cccd9258ee0-34673759',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_533cccd92f3124_45167880',
  'variables' => 
  array (
    'thongbao' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533cccd92f3124_45167880')) {function content_533cccd92f3124_45167880($_smarty_tpl) {?><div class="boxcol">
	<div class="boxhead">
		<p>Đăng ký tài khoản</p>
	</div>
	<div class="home2">
    
		<form action="" method="post" name="form1" id="form1">
        	<span style="color:#F00; font-weight:bold; padding:10px 0px 0px 10px;float:left">
			<?php if (isset($_smarty_tpl->tpl_vars['thongbao']->value)){?><?php echo $_smarty_tpl->tpl_vars['thongbao']->value;?>
<?php }?>
    		</span>
            <h1 align="center">Đăng ký thông tin tài khoản</h1>
            <table width="100%" border="0" cellpadding="5" cellspacing="0" class="chitiet">
              <tr>
                <td width="25%">Họ và tên</td>
                <td width="75%"><input type="text" name="txtten" class="text-input medium-size" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['txtten'])){?> value="<?php echo $_smarty_tpl->tpl_vars['data']->value['txtten'];?>
" <?php }?>></td>
              </tr>
              <tr>
                <td>Tài khoản *</td>
                <td><input type="text" name="txtuser" id="txtuser"
                 class="text-input small-size validate[required,maxSize[32],custom[onlyLetterNumber]]" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['txtuser'])){?> value="<?php echo $_smarty_tpl->tpl_vars['data']->value['txtuser'];?>
" <?php }?> placeholder="Username">
                 
                 <label id="lbuser" style="padding:7px 0px 0px 7px; float:left"></label>
					<script>
                    $(document).ready(function(e) {
                        //bắt sự kiện phím nhẩy lên trên Form user
                        $("#txtuser").keyup(function(e) {
                            var u=$(this).val();//Lấy ra tên đăng nhập trên form user
								//$("#lbuser").html('<img src="images/loading.gif">');       
								//Nếu tồn tại user Gọi Hàm ajax qua phương thức get truyền dữ liệu đến  checkreg.php
							if(u!=''){
								$.get('checkreg.php?user='+u,function(data){
									//Nhận giá trị trả về của file checkreg.php và hiển thị trong phần label
									if(data){
										$("#lbuser").html('Bạn có thể dùng tài khoản này !').css("color","#0F0");
										$("#btndangky").removeClass('disabled');
										$("#btndangky").removeAttr('disabled');
									}else{
										$("#lbuser").html('Tài khoản đã tồn tại !').css("color","#F00");
										$("#btndangky").addClass('disabled');
										$("#btndangky").attr('disabled','disabled');
									}
								})
							} else $("#lbuser").html('');
                        });
                    });
                    </script>
                 </td>
              </tr>
              <tr>
                <td>Mật khẩu *</td>
                <td><input type="password" name="txtpass" id="txtpass" class="text-input small-size validate[required,minSize[6],maxSize[32],custom[onlyLetterNumber]]" placeholder="Password" /></td>
              </tr>
              <tr>
                <td>Xác nhận mật khẩu *</td>
                <td><input type="password" name="txtrepass" id="txtrepass" class="text-input small-size validate[required,equals[txtpass]]" /></td>
              </tr>
              <tr>
                <td>Email *</td>
                <td><input type="text" name="txtemail" class="text-input medium-size validate[required,custom[email]]" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['txtemail'])){?> value="<?php echo $_smarty_tpl->tpl_vars['data']->value['txtemail'];?>
" <?php }?>></td>
              </tr>
              <tr>
                <td>Số điện thoại</td>
                <td><input type="text" name="txtdt" class="text-input small-size validate[custom[onlyNumberSp]]" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['txtdt'])){?> value="<?php echo $_smarty_tpl->tpl_vars['data']->value['txtdt'];?>
" <?php }?>></td>
              </tr>
              <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="txtdiachi" id="txtdiachi" class="text-input small-size validate[maxSize[32]]" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['txtdiachi'])){?> value="<?php echo $_smarty_tpl->tpl_vars['data']->value['txtdiachi'];?>
" <?php }?>></td>
              </tr>
              <tr>
                <td>Giới tính</td>
                <td>
					<input type="radio" name="rdgender" value="1" id="rdgender_0" checked="checked">Nam
                    <input type="radio" name="rdgender" value="0" id="rdgender_1">Nữ        
                </td>
              </tr>
               <tr>
                <td>Mã bảo mật</td>
                <td><input name="txtser" type="text" id="txtser" size="5" class="text-input">
        <img src="control/capcha.php" id="capcha" alt="ser">
        <img src="templates/images/refresh.png" alt="refresh" id="rfimg" style="cursor:pointer" />
        <script>
        $(document).ready(function(e) {
            $("#rfimg").click(function(e) {
                $("#capcha").attr('src','control/capcha.php');
            });
        });
        </script>
                </td>
      </tr>
              <tr>
                <td>&nbsp;</td>
                <td>
                  <span class="update"><input type="submit" name="btndangky" id="btndangky" class="button-input" value="Đăng ký"></span>
                  <span class="update"><input type="reset" name="btnreset" id="btnreset" class="button-input" value="Nhập lại"></span>
                </td>
              </tr>
            </table>
		</form>
        <h4 align="center">Các trường có dấu (*) bắt buộc phải nhập !</h4>
	</div>
</div>
<?php }} ?>