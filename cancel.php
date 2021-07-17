<?php

	if(isset($_COOKIE["name"])){
	$_COOKIE["name"];
}
	
	$total = $_POST['total'];
	echo "$total";
	
	$con = new mysqli("localhost", "root", "", "shopify");
	
	$uname = $_COOKIE["name"];
	
	$sql = "delete from orders where uname='$uname' && total='$total'";
	$res = mysqli_query($con, $sql);
	header('location:orders.php');
?>