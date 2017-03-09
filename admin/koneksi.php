<?php 
$host = 'localhost';//nama server
$user = 'root'; 
$pass = '';
$dbname = 'db_muamuashop';
$connect = mysql_connect($host, $user, $pass) or die(mysql_error());
$dbselect = mysql_select_db($dbname);
?>