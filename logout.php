<?php 
session_start();
if(isset($_COOKIE["name"])){
	setcookie("name", "", time() - 3600,"/");
	session_destroy();
}
header('location:login.html');
?>