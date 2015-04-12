<?php /* Smarty version Smarty-3.1.14, created on 2014-07-23 13:59:04
         compiled from "..\templates\admin\taikhoan\taikhoan_form.html" */ ?>
<?php /*%%SmartyHeaderCode:2649752a985a072e615-17226705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf82602c1b0092bb2c54198d3b6abbb8c659f2e0' => 
    array (
      0 => '..\\templates\\admin\\taikhoan\\taikhoan_form.html',
      1 => 1406123944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2649752a985a072e615-17226705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a985a0772661_96855834',
  'variables' => 
  array (
    'id' => 0,
    'detail' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a985a0772661_96855834')) {function content_52a985a0772661_96855834($_smarty_tpl) {?>		<form action="" method="post" name="form1" id="form1">
            <h1 align="center">Quản lý tài khoản</h1>
            <table width="100%" border="0" cellpadding="5" cellspacing="5">
              <tr>
                <td width="25%">Họ và tên</td>
                <td width="75%"><input type="text" name="txtten" class="text-input medium-size" <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['taikhoan_hoten'];?>
"<?php }?>></td>
              </tr>
              <tr>
                <td>Tài khoản *</td>
                <td><input type="text" name="txtuser" id="txtuser"
                 class="text-input small-size validate[required,maxSize[32],custom[onlyLetterNumber]]" <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['taikhoan_user'];?>
" disabled<?php }?>>
                 
                 <label id="lbuser" style="padding:7px 0px 0px 7px; float:left"></label>
					<script>
                    $(document).ready(function(e) {
                        //bắt sự kiện phím nhẩy lên trên Form user
                        $("#txtuser").keyup(function(e) {
                            var u=$(this).val();//Lấy ra tên đăng nhập trên form user
								//$("#lbuser").html('<img src="images/loading.gif">');       
								//Nếu tồn tại user Gọi Hàm ajax qua phương thức get truyền dữ liệu đến  checkreg.php
							if(u!=''){
								$.get('../checkreg.php?user='+u,function(data){
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
              <?php if ($_smarty_tpl->tpl_vars['id']->value<=0){?>
              <tr>
                <td>Mật khẩu *</td>
                <td><input type="password" name="txtpass" id="txtpass" class="text-input small-size validate[required,minSize[6],maxSize[32],custom[onlyLetterNumber]]" <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['taikhoan_pass'];?>
"<?php }?> /></td>
              </tr>
              <tr>
                <td>Xác nhận mật khẩu *</td>
                <td><input type="password" name="txtrepass" id="txtrepass" class="text-input small-size validate[required,equals[txtpass]]" <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['taikhoan_pass'];?>
"<?php }?> /></td>
              </tr>
              <?php }?>
              <tr>
                <td>Email *</td>
                <td><input type="text" name="txtemail" class="text-input medium-size validate[required,custom[email]]" <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['taikhoan_email'];?>
"<?php }?> ></td>
              </tr>
              <tr>
                <td>Số điện thoại</td>
                <td><input type="text" name="txtdt" class="text-input small-size validate[custom[onlyNumberSp]]" <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['taikhoan_phone'];?>
"<?php }?> ></td>
              </tr>
              <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="txtdiachi" id="txtdiachi" class="text-input small-size validate[required,maxSize[32]]" <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['taikhoan_diachi'];?>
"<?php }?>></td>
              </tr>
              <tr>
                <td>Giới tính</td>
                <td>
					<input type="radio" name="rdgender" value="1" id="rdgender_0" checked="checked" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['taikhoan_gioitinh']==1){?> checked<?php }?>>Nam
                    <input type="radio" name="rdgender" value="0" id="rdgender_1" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['taikhoan_gioitinh']==0){?> checked<?php }?>>Nữ        
                </td>
              </tr>
              <tr>
                <td>Trạng thái</td>
                <td>
					<input type="radio" name="rdtrangthai" value="1" id="rdgender_0" checked="checked" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['taikhoan_trangthai']==1){?> checked<?php }?>>Hoạt động
                    <input type="radio" name="rdtrangthai" value="0" id="rdgender_1" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['taikhoan_trangthai']==0){?> checked<?php }?>>Khóa        
                </td>
              </tr>
              <tr>
                <td>Quyền</td>
                <td>
					<input type="radio" name="rdquyen" value="1" id="rdgender_0" checked="checked" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['taikhoan_loai']==1){?> checked<?php }?>>Quản trị
                    <input type="radio" name="rdquyen" value="0" id="rdgender_1" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['taikhoan_loai']==0){?> checked<?php }?>>Người dùng        
                </td>
              </tr>
               <tr>
                <td>Mã bảo mật</td>
                <td><input name="txtser" type="text" id="txtser" size="5" class="text-input">
        <img src="../control/capcha.php" id="capcha" alt="ser">
        <img src="../templates/images/refresh.png" alt="refresh" id="rfimg" style="cursor:pointer" />
        <script>
        $(document).ready(function(e) {
            $("#rfimg").click(function(e) {
                $("#capcha").attr('src','../control/capcha.php');
            });
        });
        </script>
                </td>
      </tr>
              <tr>
                <td>&nbsp;</td>
                <td>
                <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?>
				<span class="update"><input type="submit" name="btnthem" id="btnthem" class="button-input" value="Cập nhật"></span>
				<?php }else{ ?>
                <span class="update"><input type="submit" name="btnthem" id="btnthem" class="button-input" value="Đăng ký"></span>
                <?php }?>  
                <span class="update"><input type="reset" name="btnreset" id="btnreset" class="button-input" value="Nhập lại"></span>
                </td>
              </tr>
            </table>
		</form>
        <h4 align="center">Các trường có dấu (*) bắt buộc phải nhập !</h4><?php }} ?>