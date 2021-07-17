<?php
$con = new mysqli("localhost", "root", "","shopify"); // Establishing Connection with Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$uname = $_POST['uname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$q = "select * from register where uname='$uname' && password='$password'";
$res = mysqli_query($con, $q);
$num = mysqli_num_rows($res);

if($num == 0){
	if($uname !=''||$email !=''||$phone !=''||$password !=''){
		$query = mysqli_query($con,"insert into register(uname, email, phone, password) values ('$uname', '$email', '$phone', '$password')");
		header('location:login.html');
	}
	else{
		echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
	}
}
else{
	echo "<script>alert('Insertion Failed This User Already exists..!')</script>";
	echo "<script>location.href='login.html'</script>";
}
}
?>