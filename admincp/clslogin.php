<?php
class login{
	
	function mylogin($user,$pass)
	{
		if($user=='admin'&&$pass=='123')
		{
			echo $user;
			session_start();
			$_SESSION['myuser']=$user;
			$_SESSION['mypass']=$pass;
			header('location:index.php');
			
		}
		else
		{
			echo 'Đăng nhập không thành công';	
		}
	}
	function confirmlogin($user,$pass)
	{
		if($user!='admin'||$pass !='123')
		{
		header('location:login.php');	
		}
	}
}
?>