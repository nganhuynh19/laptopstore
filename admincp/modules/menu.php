<?php
	if(isset($_POST['logout'])){
		unset($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>
<div class="menu">
    	<ul>
        	 <li><a href="index.php?quanly=sanpham&ac=them">Quản lý sản phẩm</a></li>           
        	<li><a href="index.php?quanly=loaisp&ac=them">Loại sản phẩm</a></li>
             <li><a href="index.php?quanly=hieusp&ac=them">Hiệu sản phẩm</a></li>         
            <li><a href="index.php?quanly=hoadon&ac=lietke">Danh sách hóa đơn</a></li>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="submit" name="logout" value="Đăng xuất" style="background-color:#06F;color:#000;width:200px;height:30px;margin-left:180px;" />
            </form>
        </ul>
       
    </div>

 <form action="index.php?quanly=timkiem&ac=sp" method="post" enctype="multipart/form-data">
     <p><input type="text" name="masp" placeholder="Nhập mã sản phẩm..." id="timkiem" required="required" />
        <input type="submit" id="button_timkiem" name="timkiem" value="Tìm sản phẩm" />
        </p>
        </form>