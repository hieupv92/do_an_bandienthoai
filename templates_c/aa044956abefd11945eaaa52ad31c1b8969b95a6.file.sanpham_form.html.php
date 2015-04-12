<?php /* Smarty version Smarty-3.1.14, created on 2014-07-25 05:29:34
         compiled from "..\templates\admin\sanpham\sanpham_form.html" */ ?>
<?php /*%%SmartyHeaderCode:8198529ff39b84d6e4-83757474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa044956abefd11945eaaa52ad31c1b8969b95a6' => 
    array (
      0 => '..\\templates\\admin\\sanpham\\sanpham_form.html',
      1 => 1406266174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8198529ff39b84d6e4-83757474',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529ff39b87f9a9_49301046',
  'variables' => 
  array (
    'id' => 0,
    'detail' => 0,
    'mucgia' => 0,
    'mg' => 0,
    'nsx' => 0,
    'hang' => 0,
    'kieudang' => 0,
    'kd' => 0,
    'hedieuhanh' => 0,
    'hdh' => 0,
    'kichthuoc' => 0,
    'kt' => 0,
    'tinhnang' => 0,
    'tn' => 0,
    'card' => 0,
    'ca' => 0,
    'manhinh' => 0,
    'mh' => 0,
    'ram' => 0,
    'ra' => 0,
    'ocung' => 0,
    'oc' => 0,
    'vixuly' => 0,
    'vi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529ff39b87f9a9_49301046')) {function content_529ff39b87f9a9_49301046($_smarty_tpl) {?><form name="form1" id="form1" method="post" action="" enctype="multipart/form-data">
<h1 align="center">Quản lý sản phẩm</h1>
  <table width="100%" border="0" cellspacing="5" cellpadding="5">
    <tr>
      <td>Tên</td>
      <td><input name="txtten" type="text" class="validate[required]" <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['sanpham_ten'];?>
" <?php }?>></td>
    </tr>
    <tr>
      <td>Số lượng</td>
      <td><input name="txtsoluong" type="text" class="validate[required,custom[onlyNumberSp]]" <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['sanpham_soluong'];?>
" <?php }?>></td>
    </tr>
    <tr>
      <td>Chi tiết</td>
      <td><textarea name="txtnoidung" id="txtnoidung" class="ckeditor"><?php if ($_smarty_tpl->tpl_vars['id']->value>0){?><?php echo $_smarty_tpl->tpl_vars['detail']->value['sanpham_chitiet'];?>
<?php }?></textarea></td>
    </tr>
    <tr>
      <td>Giá</td>
      <td><input name="txtgia" type="text" class="validate[required,custom[onlyNumberSp]]" <?php if ($_smarty_tpl->tpl_vars['id']->value>0){?> value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['sanpham_gia'];?>
" <?php }?>></td>
    </tr>
    <tr>
      <td>Mức giá</td>
      <td>
      	<select name="slmucgia">
        	<option value="">Mức giá</option>
            <?php  $_smarty_tpl->tpl_vars['mg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mucgia']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mg']->key => $_smarty_tpl->tpl_vars['mg']->value){
$_smarty_tpl->tpl_vars['mg']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['mg']->value['thongso_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['sanpham_mucgia']==$_smarty_tpl->tpl_vars['mg']->value['thongso_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['mg']->value['thongso_ten'];?>
</option>
            <?php } ?>
        </select>	
      </td>
    </tr>
    <tr>
      <td>Hãng sản xuất</td>
      <td>
      	<select name="slnsx">
        	<option value="">Hãng sản xuất</option>
            <?php  $_smarty_tpl->tpl_vars['hang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nsx']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hang']->key => $_smarty_tpl->tpl_vars['hang']->value){
$_smarty_tpl->tpl_vars['hang']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['hang']->value['nhasanxuat_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['sanpham_nhasanxuat']==$_smarty_tpl->tpl_vars['hang']->value['nhasanxuat_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['hang']->value['nhasanxuat_ten'];?>
</option>
            <?php } ?>
        </select>	
      </td>
    </tr>
    <tr>
      <td>Kiểu dáng</td>
      <td>
      	<select name="slkieudang">
        	<option value="">Kiểu dáng</option>
            <?php  $_smarty_tpl->tpl_vars['kd'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kd']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kieudang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kd']->key => $_smarty_tpl->tpl_vars['kd']->value){
$_smarty_tpl->tpl_vars['kd']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['kd']->value['thongso_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['sanpham_kieudang']==$_smarty_tpl->tpl_vars['kd']->value['thongso_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['kd']->value['thongso_ten'];?>
</option>
            <?php } ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Hệ điều hành</td>
      <td>
      	<select name="slhdh">
        	<option value="">Hệ điều hành</option>
            <?php  $_smarty_tpl->tpl_vars['hdh'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hdh']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hedieuhanh']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hdh']->key => $_smarty_tpl->tpl_vars['hdh']->value){
$_smarty_tpl->tpl_vars['hdh']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['hdh']->value['thongso_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['sanpham_hedieuhanh']==$_smarty_tpl->tpl_vars['hdh']->value['thongso_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['hdh']->value['thongso_ten'];?>
</option>
            <?php } ?>
        </select>	
      </td>
    </tr>
    <tr>
      <td>Kích thước</td>
      <td>
      	<select name="slkichthuoc">
        	<option value="">Kích thước</option>
            <?php  $_smarty_tpl->tpl_vars['kt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kichthuoc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kt']->key => $_smarty_tpl->tpl_vars['kt']->value){
$_smarty_tpl->tpl_vars['kt']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['kt']->value['thongso_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['sanpham_kichthuoc']==$_smarty_tpl->tpl_vars['kt']->value['thongso_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['kt']->value['thongso_ten'];?>
</option>
            <?php } ?>
        </select>	
      </td>
    </tr>
    <tr>
      <td>Tính năng</td>
      <td>
      	<select name="sltinhnang">
        	<option value="">Tính năng</option>
            <?php  $_smarty_tpl->tpl_vars['tn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tn']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tinhnang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tn']->key => $_smarty_tpl->tpl_vars['tn']->value){
$_smarty_tpl->tpl_vars['tn']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['tn']->value['thongso_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['sanpham_tinhnang']==$_smarty_tpl->tpl_vars['tn']->value['thongso_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['tn']->value['thongso_ten'];?>
</option>
            <?php } ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Card đồ họa</td>
      <td>
      	<select name="slcard">
        	<option value="">Card đồ họa</option>
            <?php  $_smarty_tpl->tpl_vars['ca'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ca']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['card']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ca']->key => $_smarty_tpl->tpl_vars['ca']->value){
$_smarty_tpl->tpl_vars['ca']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['ca']->value['thongso_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['sanpham_card']==$_smarty_tpl->tpl_vars['ca']->value['thongso_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ca']->value['thongso_ten'];?>
</option>
            <?php } ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Màn hình</td>
      <td>
      	<select name="slmanhinh">
        	<option value="">Màn hình</option>
            <?php  $_smarty_tpl->tpl_vars['mh'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mh']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manhinh']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mh']->key => $_smarty_tpl->tpl_vars['mh']->value){
$_smarty_tpl->tpl_vars['mh']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['mh']->value['thongso_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['sanpham_manhinh']==$_smarty_tpl->tpl_vars['mh']->value['thongso_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['mh']->value['thongso_ten'];?>
</option>
            <?php } ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Ram</td>
      <td>
      	<select name="slram">
        	<option value="">Ram</option>
            <?php  $_smarty_tpl->tpl_vars['ra'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ra']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ram']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ra']->key => $_smarty_tpl->tpl_vars['ra']->value){
$_smarty_tpl->tpl_vars['ra']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['ra']->value['thongso_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['sanpham_ram']==$_smarty_tpl->tpl_vars['ra']->value['thongso_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ra']->value['thongso_ten'];?>
</option>
            <?php } ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Dung lượng ổ cứng</td>
      <td>
      	<select name="slocung">
        	<option value="">Dung lượng ổ cứng</option>
            <?php  $_smarty_tpl->tpl_vars['oc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ocung']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oc']->key => $_smarty_tpl->tpl_vars['oc']->value){
$_smarty_tpl->tpl_vars['oc']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['oc']->value['thongso_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['sanpham_ocung']==$_smarty_tpl->tpl_vars['oc']->value['thongso_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['oc']->value['thongso_ten'];?>
</option>
            <?php } ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Bộ vi xử lý</td>
      <td>
      	<select name="slvixuly">
        	<option value="">Bộ vi xử lý</option>
            <?php  $_smarty_tpl->tpl_vars['vi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vixuly']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vi']->key => $_smarty_tpl->tpl_vars['vi']->value){
$_smarty_tpl->tpl_vars['vi']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['vi']->value['thongso_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['sanpham_vixuly']==$_smarty_tpl->tpl_vars['vi']->value['thongso_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['vi']->value['thongso_ten'];?>
</option>
            <?php } ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>Trạng thái</td>
      <td>
          <input type="radio" name="rdtrangthai" value="1" id="RadioGroup1_0" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['sanpham_trangthai']==1){?> checked <?php }?> />Hoạt động
       
          <input type="radio" name="rdtrangthai" value="0" id="RadioGroup1_1" <?php if ($_smarty_tpl->tpl_vars['id']->value>0&&$_smarty_tpl->tpl_vars['detail']->value['sanpham_trangthai']==0){?> checked <?php }?> />Khóa
      </td>
    </tr>
    <tr>
      <td>Hình ảnh<br />
      	<?php if ($_smarty_tpl->tpl_vars['id']->value>0){?><img src="<?php echo $_smarty_tpl->tpl_vars['detail']->value['sanpham_link'];?>
" width="100px" /><?php }?>
      </td>
      <td><input name="anh" type="file" id="anh" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      		<?php if ($_smarty_tpl->tpl_vars['id']->value>0){?>
            <input name="btnthem" type="submit" value="Cập nhật" class="btn1">
            <?php }else{ ?>
            <input name="btnthem" type="submit" value="Thêm mới" class="btn1">
            <?php }?>
            <input name="btnnhaplai" type="reset" value="Nhập lại" class="btn1">
      </td>
    </tr>
  </table>
</form>
<?php }} ?>