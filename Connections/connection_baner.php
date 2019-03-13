<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connection_baner = "localhost";
$database_connection_baner = "folder_baner";
$username_connection_baner = "root";
$password_connection_baner = "";
$connection_baner = mysql_pconnect($hostname_connection_baner, $username_connection_baner, $password_connection_baner) or trigger_error(mysql_error(),E_USER_ERROR); 
?>