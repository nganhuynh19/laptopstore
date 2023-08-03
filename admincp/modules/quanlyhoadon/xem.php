<?php
$sql = "select * from cart_detail,cart,sanpham where cart_detail.cart_id=cart.id and sanpham.idsanpham=cart_detail.product_id and cart_id='$_GET[id]' ";
$row=mysql_query($sql);
$dong=mysql_fetch_array($row);
 ?>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-container">
  <h2>W3.CSS Modal</h2>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-blue">In hóa đơn</button>
 <!--<div class="button_themsp">
 <a  href="index.php?quanly=hoadon&ac=in&id=<?php echo $dong['cart_id'] ?>"><center><span>In hóa đơn</sapan></center></a>
</div>-->
<div class="button_themsp" style= "background-color:blue;" >
<a href="index.php?quanly=hoadon&ac=lietke" style= "font-size:13px;color:white;">Xem hóa đơn</a> 
</div>
<form action="modules/quanlyhoadon/xuly.php?id=<?php echo $dong['cart_id'] ?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="600" border="1">
  <tr>
    <td colspan="2"  style="text-align:center;font-size:25px;">Xem hóa đơn</td>
  </tr>
  <tr>
    <td width="97">Tên khách hàng</td>
    <td width="87"><input style="border:0;" type="text" name="tenkhachhang" readonly="True" value="<?php echo $dong['fullname'] ?>"></td>
  </tr>
  <tr>
    <td>Mã đơn hàng</td>
    <td><input style="border:0;" type="text" name="madonhang" readonly="True" value="<?php echo $dong['cart_id'] ?>"></td>
  </tr>
  <tr>
    <td>Tên sản phẩm</td>
    <td><input style="border:0;" type="text" name="tensp" readonly="True" value="<?php echo $dong['tensp'] ?>"></td>
  </tr>
  <tr>
    <td>Hình sản phẩm</td>
    <td> <img src="modules/quanlysanpham/uploads/<?php echo $dong['hinhanh'] ?>" width="80" height="80"></td>
  </tr>
  
  
  
  <tr>
    <td>Số lượng</td>
    <td><input  type="text" name="soluong" readonly="True" value="<?php echo $dong['quantity'] ?>"/></td>
  </tr>
  <tr>
    <td>Đơn giá</td>
    <td><input style="border:0;" type="text" name="dongia" readonly="True" value="<?php echo $dong['price'] ?>" ></td>
  </tr>
 	<tr>
    <td>Ngày đặt</td>
    <td><input style="border:0;" type="text" name="ngaydat" readonly="True" value="<?php echo $dong['createdate'] ?>"></td>
  </tr>
 
 
  <!--<tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" value="Sửa sản phẩm">
    </div></td>
  </tr>-->
</table>
</form>


  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <form action="modules/quanlyhoadon/xuly.php?id=<?php echo $dong['cart_id'] ?>" method="post" enctype="multipart/form-data">

        <table width="400" border="0" style="background-color:white; border: black;">
<tr>
    <td style="text-align:left;font-size:15px;"width="350">
    <input style="background-color: white;border:0;" type="text" name="ngaydat" readonly="True" value="<?php echo $dong['createdate'] ?>">
      
    </td>
    <td >
    <p style="text-align:left;font-size:25px;">In hóa đơn</p>
    </td>
  </tr>

</table>



<table width="400" border="01" style="background-color:white; border: black;">
<br>

<tr>
    <td colspan="2"  style="text-align:left;font-size:15px;">
      <p>laptopstore</p>
      <span>273 An Dương Vương,Phường 3, Quận 5, Hồ Chí Minh, Việt Nam</span>
      <p >0987654359</p>
    </td>
  </tr>
  <tr>
    
    <td>Mã đơn hàng</td>
    <td><input style="background-color: white;border:0;" type="text" name="madonhang" readonly="True" value="<?php echo $dong['cart_id'] ?>"></td>
  </tr>
  <tr>
    <td width="97">Tên khách hàng</td>
    <td width="87" ><input style="background-color: white; border:0;" type="text" name="tenkhachhang" readonly="True" value="<?php echo $dong['fullname'] ?>"></td>
  </tr>
  <tr> 
    <td>Địa chỉ nhận hàng</td>
    <td><input style="background-color: white;border:0;" type="text" name="madonhang" readonly="True" value="05 Nguyễn Trãi, HCM"></td>
  </tr>
  <tr> 
    <td>Số điện thoại</td>
    <td><input style="background-color: white;border:0;" type="text" name="madonhang" readonly="True" value="0987654321"></td>
  </tr>
  <tr>
    <td>Phương thức giao hàng</td>
    <td><input style="background-color: white;border:0;" type="text" name="madonhang" readonly="True" value="Vận chuyển miễn phí"></td>
  </tr>
  <tr>
    <td>Tên sản phẩm</td>
    <td><input style="background-color: white;border:0;" type="text" name="tensp" readonly="True" value="<?php echo $dong['tensp'] ?>"></td>
  </tr>
  <tr>
    <td>Giá</td>
    <td><input style="background-color: white;border:0;" type="text" name="dongia" readonly="True" value="<?php echo $dong['price'] ?>" ></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input style="background-color: white;border:0;" type="text" name="soluong" readonly="True" value="<?php echo $dong['quantity'] ?>"/></td>
  </tr>
  
  <tr>
    <td>Tổng</td>
    <td><input style="background-color: white;border:0;" type="text" name="dongia" readonly="True" value="<?php echo $dong['price'] ?>" ></td>
  </tr>
 
</table>
<br>
<br>
</form>
      </div>
    </div>
  </div>







</div>

<br>
<br>