<?php 

session_start();

$name = $_POST['name0'];
$price = $_POST['name1'];
$event = $_POST['event'];

echo "$name";

if($event == "remove"){
	unset($_SESSION[$name]);
	echo "successfully removed";
}
header('location:cart.php');
?>