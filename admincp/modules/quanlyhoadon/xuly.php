<?php
	include('../config.php');
	$tenkhachhang=$_POST['tenkhachhang'];
	$madonhang=$_POST['madonhang'];
	$soluong=$_POST['soluong'];
	
	$dongia=$_POST['dongia'];
	
	if(isset($_POST['sua'])){
		//sua
		$sql_sua = "update cart_detail set cart_id='$madonhang',quantity='$soluong',price='$dongia' where cart_id='$_GET[id]'";
		mysql_query($sql_sua);
		header('location:../../index.php?quanly=hoadon&ac=lietke');
	}else{
		$sql_xoa = "delete from cart_detail where cart_detail.cart_id = $_GET[id]";
		mysql_query($sql_xoa);
		header('location:../../index.php?quanly=hoadon&ac=lietke');
	}
?>
