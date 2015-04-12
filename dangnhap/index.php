<?php
	mysql_connect('localhost','root','');
	mysql_select_db('dangnhap');
?>
<?php
	if(isset($_POST[['submit'])){
		$sql=mysql_query('select* from user where username="'.$_POST['user'].'" and password="'.$_POST['pass'].'"')
		if(mysql_num_rows($sql)>0){
			echo"Ban da dang nhap thanh cong, xin chao".$_POST['user'];
		}else{
			echo "User hoac pass khong dung";	
		}
?>

<form action="index.php" method="post">
		Username: <input type="text" name="user"/><br/>
		Password: <input type="password" name="pass"/><br/>
  <input type="submit" value="Đăng nhập" name="submit"/>
</form>   
