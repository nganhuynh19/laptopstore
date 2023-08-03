<?php
$sql = "select * from cart_detail,cart,sanpham where cart_detail.cart_id=cart.id and sanpham.idsanpham=cart_detail.product_id and cart_id='$_GET[id]' ";
$row=mysql_query($sql);
$dong=mysql_fetch_array($row);
 ?>
<div class="button_themsp">
<a href="index.php?quanly=hoadon&ac=lietke">Xem hóa đơn</a> 
</div>
<form action="modules/quanlyhoadon/xuly.php?id=<?php echo $dong['cart_id'] ?>" method="post" enctype="multipart/form-data">
<h3>&nbsp;</h3>
<table width="600" border="1" style="background-color:white; border: black;">
  <tr>
    <td colspan="2"  style="text-align:center;font-size:25px;">In hóa đơn</td>
  </tr>
  <tr>
    <td width="97">Tên khách hàng</td>
    <td width="87" ><input style="background-color: white;" type="text" name="tenkhachhang" readonly="True" value="<?php echo $dong['fullname'] ?>"></td>
  </tr>
  <tr>
    <td>Mã đơn hàng</td>
    <td><input style="background-color: white;" type="text" name="madonhang" readonly="True" value="<?php echo $dong['cart_id'] ?>"></td>
  </tr>
  <tr>
    <td>Tên sản phẩm</td>
    <td><input style="background-color: white;" type="text" name="tensp" readonly="True" value="<?php echo $dong['tensp'] ?>"></td>
  </tr>
  <tr>
    <td>Hình sản phẩm</td>
    <td> <img src="modules/quanlysanpham/uploads/<?php echo $dong['hinhanh'] ?>" width="80" height="80"></td>
  </tr>
  
  
  <tr>
    <td>Số lượng</td>
    <td><input style="background-color: white;" type="text" name="soluong" readonly="True" value="<?php echo $dong['quantity'] ?>"/></td>
  </tr>
  <tr>
    <td>Đơn giá</td>
    <td><input style="background-color: white;" type="text" name="dongia" readonly="True" value="<?php echo $dong['price'] ?>" ></td>
  </tr>
 	<tr>
    <td>Ngày đặt</td>
    <td><input style="background-color: white;" type="text" name="ngaydat" readonly="True" value="<?php echo $dong['createdate'] ?>"></td>
  </tr>
 
 
  <!--<tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" value="Sửa sản phẩm">
    </div></td>
  </tr>-->
</table>
</form>


