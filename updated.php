<?php
$con = new mysqli("localhost", "root", "", "shopify");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if(isset($_POST['submit'])){ 
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$total = $_POST['total'];

$uname = $_COOKIE["name"];

$sql = "UPDATE orders SET address='$address',city='$city',state='$state',zip='$zip' WHERE total='$total' && uname='$uname'";

if ($con->query($sql) === TRUE) {
	echo "<script>alert('Ordered Updated Successfully..!')</script>";
	echo "<script>location.href='orders.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}
$con->close();
?>