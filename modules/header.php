<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>     
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@361&display=swap" rel="stylesheet">

      </head>
    <body>
    <div class="site-branding">
      <div class="container">
        <div class="row">
          <!--  <div class="col-lg-4 col-md-4 col-sm-4 site-logo">        
                <a href="index.php">
                  <img src="imgs/Capture.PNG" height="65px">
                  <span class="d-none d-sm-inline-block d-md-inline-block logo-name"></span>
                </a>            
            </div>-->
            <div class="col-lg-6 col-md-6 col-sm-6 search-box">            
                <span>
                  <img src="imgs/CaptHure.PNG" height="65px">
                </span>                     
            </div>    
            <div class="col-lg-6 col-md-6 col-sm-6 search-box">            
            
                            <div id="search" style="float:left;" >
                                <input class="form-control" id="search" type="text" placeholder="Tìm kiếm..." style="margin-top: 10px" >
                            </div>    
            </div>                 
        </div>                     
      </div>
    </div> 
    <!--Navigation website's Header--> 
       
         <nav class="navbar navbar-expand-md navbar-light bd-light sticky-top" style="background:#blue" >  
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" style="background:#f06">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
              <li class="nav-item">
                 <a class="nav-link active" style="font-size:14px;" href="index.php"><b>TRANG CHỦ</b></a>
              </li>
              <!--dropdown artist -->
              <?php
				$sql_loai="select * from loaisp order by idloaisp asc";
				$row_loai=mysql_query($sql_loai);
				?>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="font-size:14px;"><b>LOẠI SẢN PHẦM</b></a>
             	
				<?php
				while($dong_loai=mysql_fetch_array($row_loai))
				{
				?>	
          	<div class="dropdown-menu">
             <a class="dropdown-item" href="index.php?quanly=loaisp&id=<?php echo $dong_loai['idloaisp'] ?>"><?php echo $dong_loai['tenloaisp'] ?></a>       
              <?php
				}
				 ?>
               </div>
              </li>
              <!--ket thuc dropdown artist -->
              
              
              <li class="nav-item">
                  <a class="nav-link active" href="?quanly=dangkymoi" style="font-size:14px;"><b>ĐĂNG KÍ</b></a>
              </li><li class="nav-item">
                  <a class="nav-link active" href="?quanly=dangnhap" style="font-size:14px;"><b>ĐĂNG NHẬP</b></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" href="?quanly=dathang" style="font-size:14px;"><b>GIỎ HÀNG</b></a>
              </li>
              
             
             <li class="nav-item">
                  
              <?php
		
	
		
		if(isset($_SESSION['dangnhap'])){
			echo '<div style="color:skyblue;margin-left:120px;"><span>Chào bạn:<strong><em> '.$_SESSION['dangnhap'].'</em></strong>
			<a href="update_cart.php?thoat=1" style="text-decoration:none;margin-left:7px;">Đăng xuất</a></span></div>';
		}
		?>
            
             
             </li>
             
             
            </ul>
          </div>
          <div >
           
          </div>
          
         
      </div>
    </nav>
     <!--Carousel Băng chuyền dạng slider-->
        <div class="container">
            <div id="slides" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#slides" data-slide-to="0" class="active"></li>
                  <li data-target="#slides" data-slide-to="1"></li>
                  <li data-target="#slides" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a href="#"><img src="imgs/tranphat_banner1_(1)_1587567515.jpg"  alt="First slide"></a>
                    
                    <div class="carousel-caption">
                        <!--Viết nội dung..-->
                    </div>
                </div>
                  <div class="carousel-item">
                    <a href="#"><img src="imgs/banner4.jpg" alt="Second slide">    </a>
                                    
                  </div>
                  <div class="carousel-item">
                    <a href="#"><img src="imgs/banner-slide-laptop-moi-gia-re-nhat-quang-ninh.jpg" alt="Third slide"> </a>
                                 
                  </div>
                </div>
                <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        
</body>

</html>