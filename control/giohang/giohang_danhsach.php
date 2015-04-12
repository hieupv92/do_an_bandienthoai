<?php

//lấy biến ID trên URL xuống
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$lib->shopping($id,1);
}elseif(isset($_POST['btnupdate'])){
	//nếu có bấm nút cập nhật
	//Sử dụng vòng lặp để lấy ra từng phần tử trong mảng giỏ hàng
	foreach($_SESSION['giohang'] as $item)	
	{
		//Mỗi vòng lặp thì biến $item mang thông tin của 1 sản phẩm: ID và số lượng
		//Lấy số lượng mới từ form lên
		$slmoi=$_POST['sl'.$item[0]];
		//Gọi phương thức cập nhật số lượng mới cho sản phẩm tương ứng
		//Truyền đối số thứ 3 là true: Gọi kiểu update số lượng là dạng thay thế
		$lib->shopping($item[0],$slmoi,true);
	}
}
// xóa sản phẩm khỏi giỏ hàng
if(isset($_GET['id']) && isset($_GET['xoa'])){
	$id=$_GET['id'];
	$lib->shopping($id,0);
}






if(!isset($_SESSION['giohang']))$_SESSION['giohang']=array();
$smarty->assign('cart',$_SESSION['giohang']);
$smarty->display("giohang/giohang.html");
?>