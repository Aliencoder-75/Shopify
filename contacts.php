<?php
$con = new mysqli("localhost", "root", "", "shopify");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$uname = $_POST['uname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$sql = "INSERT INTO contacts(uname, email, phone, message)
VALUES ('$uname', '$email', '$phone', '$message')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}
$con->close();
header('location:contact.html')
?>