
<?php
include ("clslogin.php");
$p=new login();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style-login.css" />
<title>Đăng nhập vào trang admin</title>
</head>

<body>
<div id="login">
	<form action="login.php" method="post" enctype="multipart/form-data">
    <h2>Đăng nhập</h2>
    <input type="text" name="username" id="username" placeholder="Enter username..." required="required" />
     <input type="password" name="password" id="password" placeholder="Enter password..." required="required" />
      <input style="width:340px;" type="submit" name="nut" id="button" value="Sign in"/>
      <?php
switch($_POST['nut'])
{
	case 'Sign in':
	{
		$user=$_REQUEST['username'];
		$pass=$_REQUEST['password'];
		if($user!='' && $pass!='')
		{
			$p->mylogin($user,$pass);
		}
		else
		{
				echo 'Vui lòng nhập user và password';
		}
		break;
	}
}
?>
    </form>

</div>
	





</body>
</html>