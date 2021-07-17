<?php
$con = new mysqli("localhost", "root", "", "shopify");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if(isset($_POST['submit'])){ 
$uname = $_POST['uname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$cardname = $_POST['cardname'];
$cardnumber = $_POST['cardnumber'];
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];
$total = $_POST['total'];

$sql = "INSERT INTO orders(uname, email, address, city, state, zip, cardname, cardnumber, expmonth, expyear, cvv, total)
VALUES ('$uname', '$email', '$address', '$city', '$state', '$zip', '$cardname', '$cardnumber', '$expmonth', '$expyear', '$cvv' ,$total)";

if ($con->query($sql) === TRUE) {
	echo "<script>alert('Ordered Placed Successfully..!')</script>";
	echo "<script>location.href='orders.php'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}
$con->close();
?>