<?php
$hostname_config = "localhost";
$database_config = "webbinhchon";
$username_config = "root";
$password_config = "";
$config = mysql_connect($hostname_config, $username_config, $password_config) or die("Khong the connect"); 
mysql_select_db($database_config,$config);
mysql_query("set names 'utf8'");
?>
