<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_laptopstore = "localhost";
$database_laptopstore = "laptopstore";
$username_laptopstore = "root";
$password_laptopstore = "123456";
$laptopstore = mysql_pconnect($hostname_laptopstore, $username_laptopstore, $password_laptopstore) or trigger_error(mysql_error(),E_USER_ERROR); 
?>