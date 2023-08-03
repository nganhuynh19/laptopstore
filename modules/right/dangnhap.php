<?php
	@session_start();
	
	if(isset($_POST['dangnhap'])){
		$tenkh=$_POST['user'];
		$pass=$_POST['pass'];
		
    	$pass= md5($pass);
		$sql=mysql_query("select * from dangky where tenkhachhang='$tenkh' and matkhau='$pass' limit 1");
		$count=mysql_num_rows($sql);
		if($count>0){
			$tendangnhap=$_SESSION['dangnhap']=$tenkh;	
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Bạn đã đăng nhập thành công.</p>';
			echo '<a href="index.php?quanly=dathang" style="font-size:20px;">Quay lại để mua hàng và thanh toán</a>';
		}else{
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Tên khách hàng hoặc Tài khoản bị sai</p>';
		}
	}
?>
<div class="tieude">
Chào mừng bạn !!!
</div>

<div class="dangky">
  <p style="font-size:18px; color:red;margin:5px;">Các mục dấu * là bắt buộc tối thiểu. Vui lòng điền đầy đủ và chính xác.</p>
  <form action="" method="post" enctype="multipart/form-data">
	<table width="100%" border="1" style="border-collapse:collapse;">
  <tr>
    <td width="40%">Tên Khách Hàng : <strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="text" name="user" size="50"></td>
  </tr>
    <td>Mật khẩu : <strong style="color:red;"> (*)</strong></td>
   <td width="60%"><input type="password" name="pass" size="50"></td>
  </tr>
  <tr>
    <td colspan="2" >
    	 
           <p ><input style ="background-color:skyblue; height:40px;" type="submit" name="dangnhap" value="Gửi thông tin"/></p>
         
    </td>
    </tr>
</table>
</form>

</div>

	<h3><a href="?quanly=dangkymoi" style="text-decoration:none;color:#FFF;margin:10px;border-radius:10px;padding:5px;background:skyblue;float:right;" >Đăng ký tài khoản để mua hàng.</a></h3>

