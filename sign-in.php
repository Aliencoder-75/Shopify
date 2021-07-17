<?php

$con = new mysqli("localhost", "root", "","shopify");
$uname = $_POST['uname'];
$password = $_POST['password'];

session_start();

$q = "select * from register where uname='$uname' && password='$password'";
$res = mysqli_query($con, $q);
$num = mysqli_num_rows($res);

if($num == 1){
	setcookie("name",$uname,time()+3600,"/");
	echo "<script>location.href='orders.php'</script>";
	}
else{
	echo "<script>alert('Username or Password is Incorrect..!')</script>";
	echo "<script>location.href='login.html'</script>";
}
?>

