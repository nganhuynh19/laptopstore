  <div class="content">
       
            <div class="content_right">
            <?php
				if(isset($_GET['quanly'])&&($_GET['quanly'])!=''){
					$tam= $_GET['quanly'];
				}else{
					$tam ='';
				}if($tam == 'chitietsp'){
					include('modules/right/chitietsp.php');
				}elseif($tam == 'loaisp'){
					include('modules/right/loaisp.php');
				}elseif($tam == 'dathang'){
					include('modules/right/dathang.php');
				}elseif($tam == 'dangkymoi'){
					include('modules/right/dangkymoi.php');
				}elseif($tam == 'dangnhap'){
					include('modules/right/dangnhap.php');
				}elseif($tam == 'camon'){
					include('modules/right/camon.php');
				
				
				
				}else{
					include('modules/right/spmoi.php');
				}
			?>
        </div>
        <div class="clear"></div>