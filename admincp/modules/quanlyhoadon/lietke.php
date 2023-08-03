<?php
	$sql_lietkesp="select * from cart_detail,cart where cart_detail.cart_id=cart.id
	
	 order by cart_detail.cart_id desc ";
	$row_lietkesp=mysql_query($sql_lietkesp);

?>



<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Mã đơn hàng</td>
    <td>Tên khách hàng</td>
    <td>Số lượng hàng</td>
    <td>Giá trị đơn hàng</td>
   	 <td>Ngày đặt</td>
  
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=1;
  while($dong=mysql_fetch_array($row_lietkesp)){

  ?>
  <tr>
    
    <td><?php  echo $i;?></td>
    <td><?php echo $dong['cart_id'] ?></td> 
    
   <td> <?php echo $dong['fullname']?> </td>
   

    <td><?php echo $dong['quantity'] ?></td>
    <td><?php echo $dong['price'] ?></td>
     <td><?php echo $dong['createdate'] ?></td>
 	
    
    <td><a  href="index.php?quanly=hoadon&ac=xem&id=<?php echo $dong['cart_id'] ?>"><center><img src="../imgs/readonly.png" width="30" height="30" /></center></a></td>
    <td><a class="delete_link" href="modules/quanlyhoadon/xuly.php?id=<?php echo $dong['cart_id']?>"><center><img src="../imgs/delete.png" width="30" height="30" /></center></a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
