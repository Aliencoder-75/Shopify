<?php
session_start();
if(isset($_COOKIE["name"])){
	$_COOKIE["name"];
}
else
{
	header('location:login.html');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shopify</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/table.css">
	<link rel="stylesheet" href="css/total.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="main-sec inner-page">
        <!-- //header -->
        <header class="py-sm-3 pt-3 pb-2" id="home">
            <div class="container">
                <!-- nav -->
                <div class="top-w3pvt d-flex">
                    <div id="logo">
                        <h1> <a href="index.html"><span class="log-w3pvt">S</span>hopify</a> <label class="sub-des">Online Store</label></h1>
                    </div>

                    <div class="forms ml-auto">
                        <a href="orders.php" class="btn"><span class="fa fa-user-circle-o"></span> <?php echo ucfirst($_COOKIE["name"]);?></a>
                        <a href="logout.php" class="btn"><span class="fa fa-sign-out"></span> Logout</a>
                    </div>
                </div>
                <div class="nav-top-wthree">
                    <nav>
                        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="cloths.php">Clothes</a></li>
                            <li><a href="bags.php">Bags</a></li>
							<li><a href="shoes.php">Shoes</a></li>
							<li><a href="watches.php">watches</a></li>
                        </ul>
                    </nav>
                    <!-- //nav -->
                    <div class="search-form ml-auto">
                        <div class="form-w3layouts-grid">
                            <form action="#" method="post" class="newsletter">
                                <input class="search" type="search" placeholder="Search here..." required="">
                                <button class="form-control btn" value=""><span class="fa fa-search"></span></button>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <!-- //header -->
    </div>
	
	<section class="banner-bottom py-5">
		<div class="container py-5">
			<h3 class="title-wthree mb-lg-5 mb-4 text-center">My Cart</h3>	
	<?php
		$slno = 1;
		$total = 0;
		echo "<table>";
				echo "<tr>
						<th>Slno</th>
						<th>Name</th>
						<th>Price</th>
						<th>Remove</th>
					</tr>";
		foreach($_SESSION as $item){
			$p = 0;
			echo "<tr>";
			echo "<form action='cartaction.php' method='post'>";
			echo "<td>".($slno++)."</td>";
			foreach($item as $key => $value){
				if($key == 0){
					echo "<input type='hidden' name='name$key' value='".$value."'>";
					echo "<td>".$value."</td>";
				}
				else if($key == 1){
					echo "<input type='hidden' name='name$key' value='".$value."'>";
					echo "<td>".$value."</td>";
					$p = $value;
				}
			$total = $total + $p;
			}
			echo "<td>
					<button type='submit' name='event' value='remove' style='cursor:pointer;border:none;background-color:#fff;'>
						<i name='trash' style='font-size:24px' class='fa'>&#xf014;</i>
					</button>
				</td>";
			echo "</form>";
			echo "</tr>";
		}
		echo "<td colspan='4' class='total value'>Total - &#8377;".($total)."</td>";
		echo "</table>";		
						
	
	echo "<div class='ckeck_btn'>
			<form action='checkout.php' method='post'>
			<input type='hidden' name='total' value='".$total."'>
			<input type='submit' name='submit1' class='btn shop' value='Checkout'>
			</form>
	</div>";
	?>
	
		</div>
	</section>
	
	<div class="footer_agileinfo_topf py-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-lg-3 footer_wthree_gridf mt-lg-5">
                    <h2><a href="index.html"><span>S</span>hopify
                        </a> </h2>
                    <label class="sub-des2">Online Store</label>
                </div>
                <div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-4">
                    <ul class="footer_wthree_gridf_list">
                        <li>
                            <a href="index.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Home</a>
                        </li>
                        <li>
                            <a href="about.html"><span class="fa fa-angle-right" aria-hidden="true"></span> About</a>
                        </li>
                        <li>
                            <a href="shop.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Shop</a>
                        </li>
                        <li>
                            <a href="shop.html"><span class="fa fa-angle-right" aria-hidden="true"></span>Collections</a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-sm-4 mt-3">
                    <ul class="footer_wthree_gridf_list">
                        <li>
                            <a href="single.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Extra Page</a>
                        </li>

                        <li>
                            <a href="#"><span class="fa fa-angle-right" aria-hidden="true"></span> Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="single.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Shop Single</a>
                        </li>
                        <li>
                            <a href="contact.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-sm-4 mt-3">
                    <ul class="footer_wthree_gridf_list">
                        <li>
                            <a href="login.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Login </a>
                        </li>

                        <li>
                            <a href="register.html"><span class="fa fa-angle-right" aria-hidden="true"></span>Register</a>
                        </li>
                        <li>
                            <a href="#"><span class="fa fa-angle-right" aria-hidden="true"></span>Privacy & Policy</a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="w3ls-fsocial-grid">
                <h3 class="sub-w3ls-headf">Follow Us</h3>
                <div class="social-ficons">
                    <ul>
                        <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                        <li><a href="#"><span class="fa fa-google"></span>Google</a></li>
                    </ul>
                </div>
            </div>
            <div class="move-top text-center mt-lg-4 mt-3">
                <a href="#home"><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- copyright -->
    <div class="cpy-right text-center py-3">
        <p>© 2019 Shopify. All rights reserved | Design by
            <a href="#"> GFGC.</a>
        </p>
    </div>
    <!-- //copyright -->
	</body>
</html>