<?php

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
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->

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
							<li><a href="watches.php">Watches</a></li>
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
    <!-- //banner-->
    <!--/banner-bottom -->
    <section class="banner-bottom py-5">
        <div class="container py-5">
            <h3 class="title-wthree mb-lg-5 mb-4 text-center">Clothes</h3>
            <!--/row-->
            <div class="row shop-wthree-info text-center">
                <div class="col-lg-3 shop-info-grid text-center mt-4">
                    <div class="product-shoe-info shoe">
                        <div class="men-thumb-item">
                            <img src="products/p1.jpeg" class="img-fluid" alt="">

                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="single.html">Blue Shirt</a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money"><span class="line">&#8377;1799</span> &#8377;999.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
						<form action="cart.php" method="post">
						<input type="hidden" name="name" value="BLUE SHIRT">
					    <input type="hidden" name="price" value="999">
						<input type="submit" name="submit1" class="btn shop" value="Buy Now">
						</form>
                    </div>
                </div>
                <div class="col-lg-3 shop-info-grid text-center mt-4">
                    <div class="product-shoe-info shoe">
                        <div class="men-thumb-item">
                            <img src="products/p2.jpeg" class="img-fluid" alt="">

                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="single.html">Sweatshirt (Blue) </a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money"><span class="line">&#8377;1,270</span> &#8377;895.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
						<form action="cart.php" method="post">
						<input type="hidden" name="name" value="SWEATSHIRT (BLUE)">
					    <input type="hidden" name="price" value="895">
						<input type="submit" name="submit2" class="btn shop" value="Buy Now">
						</form>
                    </div>
                </div>
                <div class="col-lg-3 shop-info-grid text-center mt-4">
                    <div class="product-shoe-info shoe">
                        <div class="men-thumb-item">
                            <img src="products/p3.jpeg" class="img-fluid" alt="">

                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="single.html">Black Shirt </a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money"><span class="line">&#8377;599</span> &#8377;475.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
						<form action="cart.php" method="post">
						<input type="hidden" name="name" value="BLACK SHIRT">
					    <input type="hidden" name="price" value="475">
						<input type="submit" name="submit3" class="btn shop" value="Buy Now">
						</form>
                    </div>
                </div>
                <div class="col-lg-3 shop-info-grid text-center mt-4">
                    <div class="product-shoe-info shoe">
                        <div class="men-thumb-item">
                            <img src="products/p4.jpeg" class="img-fluid" alt="">

                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="single.html">Sweatshirt (Grey) </a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money"><span class="line">&#8377;799</span> &#8377;465.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
						<form action="cart.php" method="post">
						<input type="hidden" name="name" value="SWEATSHIRT (GREY)">
					    <input type="hidden" name="price" value="465">
						<input type="submit" name="submit4" class="btn shop" value="Buy Now">
						</form>
                    </div>
                </div>

            </div>
            <!--//row-->
            <!--/row1-->
            <div class="row shop-wthree-info text-center">
                <div class="col-lg-3 shop-info-grid text-center mt-4">
                    <div class="product-shoe-info shoe">
                        <div class="men-thumb-item">
                            <img src="products/p5.jpeg" class="img-fluid" alt="">

                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="single.html">Hoodie (Red) </a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money"><span class="line">&#8377;999</span> &#8377;875.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
						<form action="cart.php" method="post">
						<input type="hidden" name="name" value="HOODIE">
					    <input type="hidden" name="price" value="875">
						<input type="submit" name="submit5" class="btn shop" value="Buy Now">
						</form>
                    </div>
                </div>
                <div class="col-lg-3 shop-info-grid text-center mt-4">
                    <div class="product-shoe-info shoe">
                        <div class="men-thumb-item">
                            <img src="products/p6.jpeg" class="img-fluid" alt="">

                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="single.html">Addidas T-shirt</a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money"><span class="line">&#8377;1,799</span> &#8377;1,675.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
						<form action="cart.php" method="post">
						<input type="hidden" name="name" value="ADDIDAS T-SHIRT">
					    <input type="hidden" name="price" value="1,675">
						<input type="submit" name="submit6" class="btn shop" value="Buy Now">
						</form>
                    </div>
                </div>
                <div class="col-lg-3 shop-info-grid text-center mt-4">
                    <div class="product-shoe-info shoe">
                        <div class="men-thumb-item">
                            <img src="products/p7.jpeg" class="img-fluid" alt="">

                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="single.html">Black Kurta </a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money"><span class="line">&#8377;299</span> &#8377;175.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
						<form action="cart.php" method="post">
						<input type="hidden" name="name" value="BLACK KURTA">
					    <input type="hidden" name="price" value="175">
						<input type="submit" name="submit7" class="btn shop" value="Buy Now">
						</form>
                    </div>
                </div>
                <div class="col-lg-3 shop-info-grid text-center mt-4">
                    <div class="product-shoe-info shoe">
                        <div class="men-thumb-item">
                            <img src="products/p8.jpeg" class="img-fluid" alt="">

                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="single.html">Puma T-shirt</a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money"><span class="line">&#8377;599</span> &#8377;475.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
						<form action="cart.php" method="post">
						<input type="hidden" name="name" value="PUMA T-SHIRT">
					    <input type="hidden" name="price" value="475">
						<input type="submit" name="submit8" class="btn shop" value="Buy Now">
						</form>
                    </div>
                </div>


            </div>

            <!--//row1-->
            <!--/row-->
            <div class="row shop-wthree-info text-center mb-5">
                <div class="col-lg-3 shop-info-grid text-center mt-4">
                    <div class="product-shoe-info shoe">
                        <div class="men-thumb-item">
                            <img src="products/p9.jpeg" class="img-fluid" alt="">

                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="single.html">Puma (Pink)</a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money"><span class="line">&#8377;599</span> &#8377;475.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
						<form action="cart.php" method="post">
						<input type="hidden" name="name" value="PUMA (PINK)">
					    <input type="hidden" name="price" value="475">
						<input type="submit" name="submit9" class="btn shop" value="Buy Now">
						</form>
                    </div>
                </div>
                <div class="col-lg-3 shop-info-grid text-center mt-4">
                    <div class="product-shoe-info shoe">
                        <div class="men-thumb-item">
                            <img src="products/p10.jpeg" class="img-fluid" alt="">

                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="single.html">Puma (Yellow) </a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money"><span class="line">&#8377;799</span> &#8377;675.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
						<form action="cart.php" method="post">
						<input type="hidden" name="name" value="PUMA (YELLOW)">
					    <input type="hidden" name="price" value="675">
						<input type="submit" name="submit10" class="btn shop" value="Buy Now">
						</form>
                    </div>
                </div>


                <div class="col-lg-3 shop-info-grid text-center mt-4">
                    <div class="product-shoe-info shoe">
                        <div class="men-thumb-item">
                            <img src="products/p11.jpeg" class="img-fluid" alt="">

                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="single.html">T-shirt (Blue) </a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money"><span class="line">&#8377;799</span> &#8377;550.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
						<form action="cart.php" method="post">
						<input type="hidden" name="name" value="T-SHIRT (BLUE)">
					    <input type="hidden" name="price" value="550">
						<input type="submit" name="submit11" class="btn shop" value="Buy Now">
						</form>
                    </div>
                </div>
                <div class="col-lg-3 shop-info-grid text-center mt-4">
                    <div class="product-shoe-info shoe">
                        <div class="men-thumb-item">
                            <img src="products/p12.jpeg" class="img-fluid" alt="">

                        </div>
                        <div class="item-info-product">
                            <h4>
                                <a href="single.html">Frock </a>
                            </h4>

                            <div class="product_price">
                                <div class="grid-price">
                                    <span class="money"><span class="line">&#8377;399</span> &#8377;270.00</span>
                                </div>
                            </div>
                            <ul class="stars">
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                                <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                            </ul>
                        </div>
						<form action="cart.php" method="post">
						<input type="hidden" name="name" value="FROCK">
					    <input type="hidden" name="price" value="270">
						<input type="submit" name="submit12" class="btn shop" value="Buy Now">
						</form>
                    </div>
                </div>

                <!--//row-->
            </div>
        </div>
    </section>
    <!-- /banner-bottom -->
    <!--/newsletter -->
    <section class="newsletter-w3pvt py-5">
        <div class="container py-md-5">
            <form method="post" action="#">
                <p class="text-center">Subscribe to the Handbags Store mailing list to receive updates on new arrivals, special offers and other discount information.</p>
               <div class="row subscribe-sec">
                    <div class="col-md-9">
                        <input type="email" class="form-control" id="email" placeholder="Enter Your Email.." name="email" required="">

                    </div>
                    <div class="col-md-3">

                        <button type="submit" class="btn submit">Subscribe</button>
                    </div>

                </div>

            </form>
        </div>
    </section>
    <!--//newsletter -->
    <!--/shipping-->
    <section class="shipping-wthree">
        <div class="shiopping-grids d-lg-flex">
            <div class="col-lg-4 shiopping-w3pvt-gd text-center">
                <div class="icon-gd"><span class="fa fa-truck" aria-hidden="true"></span>
                </div>
                <div class="icon-gd-info">
                    <h3>FREE SHIPPING</h3>
                    <p>On all order over $2000</p>
                </div>
            </div>
            <div class="col-lg-4 shiopping-w3pvt-gd sec text-center">
                <div class="icon-gd"><span class="fa fa-bullhorn" aria-hidden="true"></span></div>
                <div class="icon-gd-info">
                    <h3>FREE RETURN</h3>
                    <p>On 1st exchange in 30 days</p>
                </div>
            </div>
            <div class="col-lg-4 shiopping-w3pvt-gd text-center">
                <div class="icon-gd"> <span class="fa fa-gift" aria-hidden="true"></span></div>
                <div class="icon-gd-info">
                    <h3>MEMBER DISCOUNT</h3>
                    <p>Register &amp; save up to $29%</p>
                </div>

            </div>
        </div>

    </section>
    <!--//shipping-->
    <!-- footer -->
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
