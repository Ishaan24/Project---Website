<?php
session_start();
?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home-Two || Minoan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

    <!-- Google Fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">

    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS
    ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Mean Menu CSS
    ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- nivo-slider css
    ============================================ -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- Price slider css
    ============================================ -->
    <link rel="stylesheet" href="css/jquery-ui-slider.css">
    <!-- Simple Lence css
    ============================================ -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleGallery.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header Area -->
<div class="header-area home-2-header-area">
    <!-- Header top bar -->
    <div class="header-top-bar">
        <div class="container">
            <div class="header-top-inner">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="header-top-left">
                            <div class="phone">
                                <label>Call us:</label> (+1) 234 567 8910
                            </div>
                            <div class="e-mail">
                                <label>Email:</label> admin@amalgam.com
                            </div>
                            <!-- Header Link Area -->
                            <div class="header-link-area">
                                <div class="header-link">
                                    <p class="hidden-xs">Language: </p>
                                    <ul>
                                        <li><a href="#">English <span class="caret"></span></a>
                                            <ul>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">Espanol</a></li>
                                                <li><a href="#">Italian</a></li>
                                                <li><a href="#">Chinese</a></li>
                                                <li><a href="#">English 5</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-link">
                                    <ul>
                                        <li><a href="#">Account <span class="caret"></span></a>
                                            <ul>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="wishlist.html">My Wishlist</a></li>
                                                <li><a href="cart.html">My Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="my-account.html">login</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- End Header Link Area -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="header-top-right">


                            <!-- Header Social Icon -->
                            <div class="header-social-icon">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter" onclick="window.open(
				      'https://twitter.com/share?url='+encodeURIComponent('www.faciteel.xyz')+'&text='+encodeURIComponent('Check out our site #Amalgam') + '&count=none/',
				      'twitter-share-dialog',
				      'width=626,height=436,top='+((screen.height - 436) / 2)+',left='+((screen.width - 626)/2 ));
				    return false;"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" onclick="javascript:window.open('https://plus.google.com/share?url=http://www.faciteel.xyz/',
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" onclick="window.open(
                                            'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('www.faciteel.xyz') +'&t=' + encodeURIComponent('Share on social networks #amalgam'),
                                            'facebook-share-dialog',
                                            'width=626,height=436,top='+((screen.height - 436) / 2)+',left='+((screen.width - 626)/2 ));
                                            return false;"></i></a></li>
                                    <!--<li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row" style="padding-top: 5px;">
                <div class="col-sm-12">
                    <div class="header-top-right">
                        <?php


                        if(isset($_SESSION['USERID']))
                        {
                            $userID=$_SESSION['USERID'];

                            echo '<div class="loginsty">
         <i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Welcome '.$userID.'</span>

                                
         <a href="logout.php"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Logout</span></a>
          </div>';
                        }
                        else
                        {


                            echo '<div>
                                <a style="color: #696969;font-size: 12px; padding-bottom: 5px;padding-left: 10px; text-transform: capitalize;" href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Sign in</span></a>

                                
                                <a style="color: #696969;font-size: 12px; padding-bottom: 5px;padding-left: 10px; text-transform: capitalize;" href="/um/customer-register.php"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Sign up</span></a>
                            </div>';

                        }
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- End Header Top bar -->






    <!-- Header bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- Header Search -->
                    <div class="header-search">
                        <form action="#">
                            <input type="text" placeholder="SEARCH...">
                            <button type="button" class="btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Header logo -->
                    <div class="header-logo">
                        <a href="index.html"><h1 style="font-family: Tangerine; font-size: 75px; font-weight: bolder; color: #5e5e5e">Amalgam</h1></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- Header Cart Area-->
                    <div class="header-cart-area">
                        <div class="header-cart">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="my-cart">My cart</span>
                                        <span class="badge">2</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <div class="cart-list">
                                                <div class="cart-list-item">
                                                    <div class="cart-list-img">
                                                        <a href="#"><img src="img/cart/c1.jpg" alt="cart"/></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <a href="#">Etiam gravida</a>
                                                        <p>1 x <span>$432.00</span></p>
                                                    </div>
                                                    <div class="cart-button">
                                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                                        <a href="#"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-list cart-list-two">
                                                <div class="cart-list-item">
                                                    <div class="cart-list-img">
                                                        <a href="#"><img src="img/cart/c2.jpg" alt="cart"/></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <a href="#">Etiam gravida</a>
                                                        <p>1 x <span>$432.00</span></p>
                                                    </div>
                                                    <div class="cart-button">
                                                        <a href="#"><i class="fa fa-pencil"></i></a>
                                                        <a href="#"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cart-subtotal">
                                                <p>Subtotal: <span>$1,131.00</span></p>
                                            </div>
                                            <div class="cart-action">
                                                <button type="button" class="btn"><span>checkout</span> <i
                                                            class="fa fa-long-arrow-right"></i></button>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!-- End Header Cart Area-->
                </div>
            </div>
        </div>
    </div><!-- End Header bottom -->
</div><!-- End Header Area -->


<!-- *** LOGIN MODAL ***
_________________________________________________________ -->

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="Login">Customer login</h4>
            </div>
            <div class="modal-body">
                <form action="/login/loginuser.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username_modal" required="" placeholder="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_modal" required="" placeholder="password">
                    </div>

                    <p class="text-center">
                        <input name="submit" type="submit" value="Log in" class="btn btn-template-main"></input>
                    </p>

                </form>

                <p class="text-center text-muted">Not registered yet?</p>


            </div>
        </div>
    </div>
</div>

<!-- *** LOGIN MODAL END *** -->



<!-- Main Menu Area -->
<div class="main-menu-area home-2-main-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Main Menu -->
                <div class="main-menu hidden-sm hidden-xs">
                    <nav>
                        <ul class="main-ul">
                            <li class="sub-menu-li"><a href="index.html" class="active">Home</a>
                            </li>
                            <li><a href="shop.php"><span class="label-menu">Sale</span> Product<i
                                            class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu-ul">
                                    <li>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu">
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.php">Choose the pill</a></h2>

                                                <a href="shop.php?id=3"><i class="fa fa-chevron-circle-right"></i> <span>Vladyno Apps</span></a>
                                                <a href="shop.php?id=2"><i class="fa fa-chevron-circle-right"></i> <span>Muster Comic Collection</span></a>
                                                <a href="shop.php?id=8"><i class="fa fa-chevron-circle-right"></i> <span>Fashion Collection</span></a>
                                                <a href="shop.php?id=7"><i class="fa fa-chevron-circle-right"></i> <span>Photo Potraits</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Evening Dress</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Children's Clothing</span></a>
                                            </div>

                                            <!-- <div class="single-mega-menu banner-add">
                                                 <a href="shop.html">
                                                     <img src="img/cart/menu-img.png" alt="img">
                                                 </a>
                                             </div>-->
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="small-megamenu-li"><a href="shop.php">News<i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu-ul mega-menu-ul-two">
                                    <li>
                                        <!--Small Mega Menu -->
                                        <div class="mega-menu mega-menu-two">
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.php">Bages</a></h2>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Bootes Bages</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Blazers</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Mermaid</span></a>
                                            </div>
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.php">Clothing</a></h2>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>coats</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>T-shirt</span></a>
                                            </div>
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.php">lingerie</a></h2>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>brands</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>furniture</span></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop.php">News<i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu-ul">
                                    <li>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu">
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.php">Footwear Man</a></h2>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Gold Rigng</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>paltinum Rings</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Silver Ring</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Tungsten Ring</span></a>
                                            </div>
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.php">Footwear Womens</a></h2>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Bands Gold</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>platinum Bands</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Silver Bands</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Tungsten Bands</span></a>
                                            </div>
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.php">Rings</a></h2>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Platinum Bracelets</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Gold Ring</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>silver ring</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Diamond Bracelets</span></a>
                                            </div>
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.php">Band</a></h2>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Platinum Necklaces</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Gold Ring</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Silver Ring</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Sunglasses</span></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop.php">Contact<i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu-ul">
                                    <li>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu">
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.php">Rings</a></h2>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Coats & jackets</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>blazers</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>raincoats</span></a>
                                            </div>
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.php">Dresses</a></h2>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Ankle Boots</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>footwear</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>clog sandals</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>combat boots</span></a>
                                            </div>
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.php">Accessories</a></h2>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>bootees Bags</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>blazers</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>jackets</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>kids</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>shoes</span></a>
                                            </div>
                                            <div class="single-mega-menu">
                                                <h2><a href="shop.php">Top</a></h2>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>briefs</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>camis</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>nigthwear</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>kids</span></a>
                                                <a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>shapewer</span></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="sub-menu-li"><a href="#" class="new-arrivals">About<i
                                            class="fa fa-chevron-down"></i></a>
                                <!-- Sub Menu -->
                                <ul class="sub-menu">
                                    <li><a href="blog.html"><i class="fa fa-chevron-circle-right"></i> <span>Blog</span></a>
                                    </li>
                                    <li><a href="blog-details.html"><i class="fa fa-chevron-circle-right"></i> <span>Blog Details</span></a>
                                    </li>
                                    <li><a href="cart.html"><i class="fa fa-chevron-circle-right"></i> <span>Cart</span></a>
                                    </li>
                                    <li><a href="checkout.html"><i class="fa fa-chevron-circle-right"></i> <span>Checkout</span></a>
                                    </li>
                                    <li><a href="contact.html"><i class="fa fa-chevron-circle-right"></i>
                                            <span>Contact</span></a></li>
                                    <li><a href="shop.php"><i class="fa fa-chevron-circle-right"></i> <span>Shop</span></a>
                                    </li>
                                    <li><a href="shop-list.html"><i class="fa fa-chevron-circle-right"></i> <span>Shop List</span></a>
                                    </li>
                                    <li><a href="product-details.php"><i class="fa fa-chevron-circle-right"></i> <span>Product Details</span></a>
                                    </li>
                                    <li><a href="my-account.html"><i class="fa fa-chevron-circle-right"></i> <span>My Account</span></a>
                                    </li>
                                    <li><a href="wishlist.html"><i class="fa fa-chevron-circle-right"></i> <span>Wishlist</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div><!-- End Main Menu -->
                <!-- Start Mobile Menu -->
                <div class="mobile-menu hidden-md hidden-lg">
                    <nav>
                        <ul>
                            <li class=""><a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index-2.html">Home Page 2</a></li>
                                    <li><a href="index-3.html">Home Page 3</a></li>
                                    <li><a href="index-4.html">Home Page 4</a></li>
                                    <li><a href="index-5.html">Home Page 5</a></li>
                                    <li><a href="index-6.html">Home Page 6</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.php">Women</a>
                                <ul class="">
                                    <li><a href="">Clother</a>
                                        <ul>
                                            <li><a href="#">Cocktail</a></li>
                                            <li><a href="#">Day</a></li>
                                            <li><a href="#">Evening</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">Sexy Dress</a></li>
                                            <li><a href="#">Fsshion Skirt</a></li>
                                            <li><a href="#">Evening Dress</a></li>
                                            <li><a href="#">Children's Clothing</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dress and skirt</a>
                                        <ul>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">Run</a></li>
                                            <li><a href="#">Sandals</a></li>
                                            <li><a href="#">Books</a></li>
                                            <li><a href="#">A-line Dress</a></li>
                                            <li><a href="#">Lacy Looks</a></li>
                                            <li><a href="#">Shirts-T-Shirts</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">shoes</a>
                                        <ul>
                                            <li><a href="#">blazers</a></li>
                                            <li><a href="#">table</a></li>
                                            <li><a href="#">coats</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">kids</a></li>
                                            <li><a href="#">Sweater</a></li>
                                            <li><a href="#">Coat</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=""><a href="shop.php">Men</a>
                                <ul class="">
                                    <li><a href="#">Bages</a>
                                        <ul>
                                            <li><a href="#">Bootes Bages</a></li>
                                            <li><a href="#">Blazers</a></li>
                                            <li><a href="#">Mermaid</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Clothing</a>
                                        <ul>
                                            <li><a href="#">coats</a></li>
                                            <li><a href="#">T-shirt</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">lingerie</a>
                                        <ul>
                                            <li><a href="#">brands</a></li>
                                            <li><a href="#">furniture</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop.php">Handbags</a>
                                <ul class="">
                                    <li><a href="#">Footwear Man</a>
                                        <ul>
                                            <li><a href="#">Gold Rigng</a></li>
                                            <li><a href="#">paltinum Rings</a></li>
                                            <li><a href="#">Silver Ring</a></li>
                                            <li><a href="#">Tungsten Ring</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Footwear Womens</a>
                                        <ul>
                                            <li><a href="#">Brand Gold</a></li>
                                            <li><a href="#">paltinum Rings</a></li>
                                            <li><a href="#">Silver Ring</a></li>
                                            <li><a href="#">Tungsten Ring</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Band</a>
                                        <ul>
                                            <li><a href="#">Platinum Necklaces</a></li>
                                            <li><a href="#">Gold Ring</a></li>
                                            <li><a href="#">silver ring</a></li>
                                            <li><a href="#">Diamond Bracelets</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop.php">Shoes</a>
                                <ul class="">
                                    <li><a href="#">Rings</a>
                                        <ul>
                                            <li><a href="#">Coats & jackets</a></li>
                                            <li><a href="#">blazers</a></li>
                                            <li><a href="#">raincoats</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dresses</a>
                                        <ul>
                                            <li><a href="#">footwear</a></li>
                                            <li><a href="#">blazers</a></li>
                                            <li><a href="#">clog sandals</a></li>
                                            <li><a href="#">combat boots</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Accessories</a>
                                        <ul>
                                            <li><a href="#">bootees Bags</a></li>
                                            <li><a href="#">blazers</a></li>
                                            <li><a href="#">jackets</a></li>
                                            <li><a href="#">kids</a></li>
                                            <li><a href="#">shoes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Top</a>
                                        <ul>
                                            <li><a href="#">briefs</a></li>
                                            <li><a href="#">camis</a></li>
                                            <li><a href="#">nigthwear</a></li>
                                            <li><a href="#">kids</a></li>
                                            <li><a href="#">shapewer</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=""><a href="">Pages</a>
                                <ul class="">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="shop.php">Shop</a></li>
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li><a href="product-details.php">Product Details</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div><!-- End Mobile Menu -->
            </div>
        </div>
    </div>
</div><!-- End Main Menu Area -->
<!-- Main Slider Area -->
<div class="main-slider-area home-2-main-slider-area entire-home-main-slider">
    <div class="container">
        <!-- Main Slider -->
        <div class="main-slider">
            <div class="slider">
                <div id="mainSlider" class="nivoSlider slider-image">
                    <img src="img/slider/slider3.jpg" alt="main slider" title="#htmlcaption1"/>
                    <img src="img/slider/slider4.jpg" alt="main slider" title="#htmlcaption2"/>
                </div>
                <!-- Slider Caption One -->
                <div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
                    <div class="slider-progress"></div>
                    <div class="slide-text">
                        <div class="middle-text">
                            <div class="cap-title wow zoomInRight" data-wow-duration=".9s" data-wow-delay="0s">
                                <h2>At Finally started...</h2>
                            </div>
                            <div class="cap-dec">
                                <h1 class="cap-dec wow zoomInRight" data-wow-duration="1.1s" data-wow-delay="0s">Huge
                                    sale</h1>
                                <p class="cap-dec wow zoomInRight" data-wow-duration="1.3s" data-wow-delay="0s"> up to
                                    70% off Fahion collection Shop now</p>
                            </div>
                            <div class="cap-readmore wow zoomInRight" data-wow-duration=".9s" data-wow-delay=".5s">
                                <a href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Caption Two -->
                <div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
                    <div class="slider-progress"></div>
                    <div class="slide-text slide-text-2">
                        <div class="middle-text">
                            <div class="cap-dec">
                                <h1 class="wow zoomInUp" data-wow-duration="1.1s" data-wow-delay="0s">women's Bags</h1>
                                <p class="wow zoomInUp" data-wow-duration="1.3s" data-wow-delay="0s"> up to 70% off
                                    Fahion collection Shop now</p>
                            </div>
                            <div class="cap-readmore wow zoomInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                                <a href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Main Slider -->
    </div>
</div><!-- End Main Slider Area -->
<!-- Product area -->
<div class="product-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Product Top Bar -->
                <div class="product-top-bar customize-tab-bar">
                    <!-- Tab Button -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#p-bestseller" data-toggle="tab"><i
                                        class="fa fa-pencil-square-o"></i>bestseller</a></li>
                        <li role="presentation"><a href="#p-new" data-toggle="tab"><i class="fa fa-star"></i>New
                                Products</a></li>
                        <li role="presentation"><a href="#p-random" data-toggle="tab"><i class="fa fa-picture-o"></i>Random
                                Products</a></li>
                    </ul><!-- End Tab Button -->
                </div><!-- End Product Top Bar -->
            </div>
            <div class="col-md-12">
                <!-- Single Product area -->
                <div class="single-product-area c-carousel-button">
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <!-- Tab Pane One -->
                        <div class="tab-pane active" id="p-bestseller">
                            <div class="row">
                                <!-- Single Product Carousel-->
                                <div id="single-product-bestseller" class="owl-carousel">
                                    <!-- Start Single Product Column-->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp2.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp1.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp3.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp4.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price"><span>$205.00</span> $155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp1.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp5.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$167.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp6.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp19.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$333.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp7.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp8.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$80.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp9.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp6.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price"><span>$124.00</span> $134.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp1.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp2.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp10.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp8.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                </div><!-- End Single Product Carousel-->
                            </div>
                        </div><!-- End Tab Pane One -->
                        <!-- Tab Pane Two -->
                        <div class="tab-pane" id="p-new">
                            <div class="row">
                                <!-- Single Product Carousel-->
                                <div id="single-product-new" class="owl-carousel">
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp15.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp12.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price"><span>$222.00</span> $143.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp13.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp7.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp17.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp16.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price"><span>$100.00</span> $70.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp11.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp12.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp16.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp17.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp18.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp18.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp1.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp2.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp19.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp20.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                </div><!-- End Single Product Carousel-->
                            </div>
                        </div><!-- End Tab Pane Two -->
                        <!-- Tab Pane Three -->
                        <div role="tabpanel" class="tab-pane" id="p-random">
                            <div class="row">
                                <!-- Single Product Carousel-->
                                <div id="single-product-random" class="owl-carousel">
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp20.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp21.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp17.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp11.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price"><span>$205.00</span> $155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp10.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp2.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp16.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp20.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price"><span>$80.00</span> $65.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp18.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp19.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp11.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp21.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp1.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp2.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                    <!-- Start Single Product Column -->
                                    <div class="col-md-3">
                                        <div class="single-product">
                                            <div class="single-product-img">
                                                <a href="#">
                                                    <img class="primary-img" src="img/product/sp13.jpg" alt="product">
                                                    <img class="secondary-img" src="img/product/sp5.jpg" alt="product">
                                                </a>
                                                <div class="product-status">
                                                    <span class="product-new">New</span>
                                                </div>
                                            </div>
                                            <div class="single-product-content">
                                                <div class="product-content-head">
                                                    <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                                    <p class="product-price">$155.00</p>
                                                </div>
                                                <div class="product-bottom-action">
                                                    <div class="product-action">
                                                        <div class="action-button">
                                                            <button class="btn" type="button"><i
                                                                        class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                            </button>
                                                        </div>
                                                        <div class="action-view">
                                                            <button type="button" class="btn" data-toggle="modal"
                                                                    data-target="#productModal"><i
                                                                        class="fa fa-search"></i>Quick view
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Single Product Column -->
                                </div><!-- End Single Product Carousel-->
                            </div>
                        </div><!-- End Tab Pane Three -->
                    </div><!-- End Tab Content -->
                </div><!-- End Single Product area -->
            </div>
        </div>
    </div>
</div><!-- End Product area -->
<!-- Single Banner area -->
<div class="single-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="singler-banner banner-add">
                    <a href="#">
                        <img src="img/banner/b1.png" alt="banner">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Single Banner area -->
<!-- Brand Product area -->
<div class="brand-products-area">
    <div class="container">
        <div class="row">
            <!-- Brand Product Column -->
            <div class="col-md-6 col-sm-6">
                <div class="brand-products brand-product-shoes c-carousel-button">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="products-head">
                                <div class="products-head-title">
                                    <i class="fa fa-picture-o"></i>
                                    <h2>brand shoes</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Single Product Carousel-->
                        <div id="product-brand-shoes" class="owl-carousel">
                            <!-- Start Single Product Column -->
                            <div class="col-md-6">
                                <div class="single-product">
                                    <div class="single-product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/sp4.jpg" alt="product">
                                            <img class="secondary-img" src="img/product/sp9.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="single-product-content">
                                        <div class="product-content-head">
                                            <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                            <p class="product-price">$155.00</p>
                                        </div>
                                        <div class="product-bottom-action">
                                            <div class="product-action">
                                                <div class="action-button">
                                                    <button class="btn" type="button"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                    </button>
                                                </div>
                                                <div class="action-view">
                                                    <button type="button" class="btn" data-toggle="modal"
                                                            data-target="#productModal"><i class="fa fa-search"></i>Quick
                                                        view
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Single Product Column -->
                            <!-- Start Single Product Column -->
                            <div class="col-md-6">
                                <div class="single-product">
                                    <div class="single-product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/sp3.jpg" alt="product">
                                            <img class="secondary-img" src="img/product/sp19.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="single-product-content">
                                        <div class="product-content-head">
                                            <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                            <p class="product-price"><span>$205.00</span> $155.00</p>
                                        </div>
                                        <div class="product-bottom-action">
                                            <div class="product-action">
                                                <div class="action-button">
                                                    <button class="btn" type="button"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                    </button>
                                                </div>
                                                <div class="action-view">
                                                    <button type="button" class="btn" data-toggle="modal"
                                                            data-target="#productModal"><i class="fa fa-search"></i>Quick
                                                        view
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Single Product Column -->
                            <!-- Start Single Product Column -->
                            <div class="col-md-6">
                                <div class="single-product">
                                    <div class="single-product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/sp2.jpg" alt="product">
                                            <img class="secondary-img" src="img/product/sp5.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="single-product-content">
                                        <div class="product-content-head">
                                            <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                            <p class="product-price">$155.00</p>
                                        </div>
                                        <div class="product-bottom-action">
                                            <div class="product-action">
                                                <div class="action-button">
                                                    <button class="btn" type="button"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                    </button>
                                                </div>
                                                <div class="action-view">
                                                    <button type="button" class="btn" data-toggle="modal"
                                                            data-target="#productModal"><i class="fa fa-search"></i>Quick
                                                        view
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Single Product Column -->
                            <!-- Start Single Product Column -->
                            <div class="col-md-6">
                                <div class="single-product">
                                    <div class="single-product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/sp6.jpg" alt="product">
                                            <img class="secondary-img" src="img/product/sp1.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="single-product-content">
                                        <div class="product-content-head">
                                            <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                            <p class="product-price">$155.00</p>
                                        </div>
                                        <div class="product-bottom-action">
                                            <div class="product-action">
                                                <div class="action-button">
                                                    <button class="btn" type="button"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                    </button>
                                                </div>
                                                <div class="action-view">
                                                    <button type="button" class="btn" data-toggle="modal"
                                                            data-target="#productModal"><i class="fa fa-search"></i>Quick
                                                        view
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Single Product Column -->
                        </div><!-- End Single Product Carousel -->
                    </div>
                </div>
            </div><!-- End Brand Products Column -->
            <!-- Brand Product Column -->
            <div class="col-md-6 col-sm-6">
                <div class="brand-products c-carousel-button">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="products-head">
                                <div class="products-head-title">
                                    <i class="fa fa-picture-o"></i>
                                    <h2>brand Bag</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Single Product Carousel-->
                        <div id="product-brand-bag" class="owl-carousel">
                            <!-- Start Single Product Column -->
                            <div class="col-md-6">
                                <div class="single-product">
                                    <div class="single-product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/sp7.jpg" alt="product">
                                            <img class="secondary-img" src="img/product/sp8.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="single-product-content">
                                        <div class="product-content-head">
                                            <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                            <p class="product-price">$155.00</p>
                                        </div>
                                        <div class="product-bottom-action">
                                            <div class="product-action">
                                                <div class="action-button">
                                                    <button class="btn" type="button"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                    </button>
                                                </div>
                                                <div class="action-view">
                                                    <button type="button" class="btn" data-toggle="modal"
                                                            data-target="#productModal"><i class="fa fa-search"></i>Quick
                                                        view
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Single Product Column -->
                            <!-- Start Single Product Column -->
                            <div class="col-md-6">
                                <div class="single-product">
                                    <div class="single-product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/sp10.jpg" alt="product">
                                            <img class="secondary-img" src="img/product/sp5.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="single-product-content">
                                        <div class="product-content-head">
                                            <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                            <p class="product-price"><span>$205.00</span> $155.00</p>
                                        </div>
                                        <div class="product-bottom-action">
                                            <div class="product-action">
                                                <div class="action-button">
                                                    <button class="btn" type="button"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                    </button>
                                                </div>
                                                <div class="action-view">
                                                    <button type="button" class="btn" data-toggle="modal"
                                                            data-target="#productModal"><i class="fa fa-search"></i>Quick
                                                        view
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Single Product Column -->
                            <!-- Start Single Product Column -->
                            <div class="col-md-6">
                                <div class="single-product">
                                    <div class="single-product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/sp2.jpg" alt="product">
                                            <img class="secondary-img" src="img/product/sp5.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="single-product-content">
                                        <div class="product-content-head">
                                            <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                            <p class="product-price">$155.00</p>
                                        </div>
                                        <div class="product-bottom-action">
                                            <div class="product-action">
                                                <div class="action-button">
                                                    <button class="btn" type="button"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                    </button>
                                                </div>
                                                <div class="action-view">
                                                    <button type="button" class="btn" data-toggle="modal"
                                                            data-target="#productModal"><i class="fa fa-search"></i>Quick
                                                        view
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Single Product Column -->
                            <!-- Start Single Product Column -->
                            <div class="col-md-6">
                                <div class="single-product">
                                    <div class="single-product-img">
                                        <a href="#">
                                            <img class="primary-img" src="img/product/sp6.jpg" alt="product">
                                            <img class="secondary-img" src="img/product/sp1.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="single-product-content">
                                        <div class="product-content-head">
                                            <h2 class="product-title"><a href="#">Cras neque metus</a></h2>
                                            <p class="product-price">$155.00</p>
                                        </div>
                                        <div class="product-bottom-action">
                                            <div class="product-action">
                                                <div class="action-button">
                                                    <button class="btn" type="button"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to bag</span>
                                                    </button>
                                                </div>
                                                <div class="action-view">
                                                    <button type="button" class="btn" data-toggle="modal"
                                                            data-target="#productModal"><i class="fa fa-search"></i>Quick
                                                        view
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Single Product Column -->
                        </div><!-- End Single Product Carousel-->
                    </div>
                </div>
            </div><!-- End Brand Product Column -->
        </div>
    </div>
</div><!-- End Brand Product area -->
<!-- About-add area -->
<div class="about-add-area home-2-add-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="about-add-img banner-add">
                    <a href="#">
                        <img src="img/banner/b6.png" alt="img">
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="about-add-img about-add-img-top banner-add">
                    <a href="#">
                        <img src="img/banner/b7.png" alt="img">
                    </a>
                </div>
                <div class="about-add-img banner-add">
                    <a href="#">
                        <img src="img/banner/b8.png" alt="img">
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 hidden-sm">
                <div class="about-add-img about-add-img-top banner-add">
                    <a href="#">
                        <img src="img/banner/b9.png" alt="img">
                    </a>
                </div>
                <div class="about-add-img banner-add">
                    <a href="#">
                        <img src="img/banner/b10.png" alt="img">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End About-add area -->
<!-- Fetured Product area -->
<div class="fetured-product-area brand-products c-carousel-button">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="fetured-products">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="products-head">
                                <div class="products-head-title">
                                    <i class="fa fa-picture-o"></i>
                                    <h2>Featured products</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Fetured Product Carousel -->
            <div id="feture-products" class="owl-carousel">
                <div class="col-md-12 col-sm-12">
                    <!-- Fetured Product Item area -->
                    <div class="fitured-product-item-area">
                        <div class="row">
                            <!-- Fetured Product Inner Item Column -->
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <!-- Fetured Product Inner Item -->
                                <div class="fiture-product-inner-item">
                                    <!-- Fetured Product Single Item -->
                                    <div class="fiture-poroduct-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/feture-product/f1.jpg"
                                                     alt="product">
                                                <img class="secondary-img" src="img/product/feture-product/f2.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <div class="content-head">
                                                <h2 class="product-title">
                                                    <a href="#">Fusce aliquam</a>
                                                </h2>
                                                <p class="product-price"><span>$175.00</span> $155.00</p>
                                            </div>
                                            <div class="content-action">
                                                <button class="btn" type="button"><i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <ul>
                                                    <li class="heart-li"><a href="#"><i class="fa fa-heart"></i></a>
                                                    </li>
                                                    <li class="exchange-li"><a href="#"><i
                                                                    class="fa fa-exchange"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#productModal"><i
                                                                    class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Fetured Product Single Item -->
                                    <!-- Fetured Product Single Item -->
                                    <div class="fiture-poroduct-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/feture-product/f3.jpg"
                                                     alt="product">
                                                <img class="secondary-img" src="img/product/feture-product/f4.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <div class="content-head">
                                                <h2 class="product-title">
                                                    <a href="#">Fusce aliquam</a>
                                                </h2>
                                                <p class="product-price"> $155.00</p>
                                            </div>
                                            <div class="content-action">
                                                <button class="btn" type="button"><i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <ul>
                                                    <li class="heart-li"><a href="#"><i class="fa fa-heart"></i></a>
                                                    </li>
                                                    <li class="exchange-li"><a href="#"><i
                                                                    class="fa fa-exchange"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#productModal"><i
                                                                    class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Fetured Product Single Item -->
                                </div><!-- End Fetured Product Inner Item -->
                            </div><!-- End Fetured Product Inner Item Column -->
                            <!-- Fetured Product Inner Item Column -->
                            <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs">
                                <!-- Fetured Product Inner Item -->
                                <div class="fiture-product-inner-item">
                                    <!-- Fetured Product Single Item -->
                                    <div class="fiture-poroduct-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/feture-product/f5.jpg"
                                                     alt="product">
                                                <img class="secondary-img" src="img/product/feture-product/f6.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <div class="content-head">
                                                <h2 class="product-title">
                                                    <a href="#">Fusce aliquam</a>
                                                </h2>
                                                <p class="product-price"> $155.00</p>
                                            </div>
                                            <div class="content-action">
                                                <button class="btn" type="button"><i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <ul>
                                                    <li class="heart-li"><a href="#"><i class="fa fa-heart"></i></a>
                                                    </li>
                                                    <li class="exchange-li"><a href="#"><i
                                                                    class="fa fa-exchange"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#productModal"><i
                                                                    class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Fetured Product Single Item -->
                                    <!-- Fetured Product Single Item -->
                                    <div class="fiture-poroduct-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/feture-product/f7.jpg"
                                                     alt="product">
                                                <img class="secondary-img" src="img/product/feture-product/f8.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <div class="content-head">
                                                <h2 class="product-title">
                                                    <a href="#">Fusce aliquam</a>
                                                </h2>
                                                <p class="product-price"><span>$175.00</span> $155.00</p>
                                            </div>
                                            <div class="content-action">
                                                <button class="btn" type="button"><i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <ul>
                                                    <li class="heart-li"><a href="#"><i class="fa fa-heart"></i></a>
                                                    </li>
                                                    <li class="exchange-li"><a href="#"><i
                                                                    class="fa fa-exchange"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#productModal"><i
                                                                    class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Fetured Product Single Item -->
                                </div><!-- End Fetured Product Inner Item -->
                            </div><!-- End Fetured Product Inner Item Column -->
                            <!-- Fetured Product Inner Item Column -->
                            <div class="col-lg-4 col-md-6 hidden-md hidden-sm hidden-xs">
                                <!-- Fetured Product Inner Item -->
                                <div class="fiture-product-inner-item">
                                    <!-- Fetured Product Single Item -->
                                    <div class="fiture-poroduct-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/feture-product/f9.jpg"
                                                     alt="product">
                                                <img class="secondary-img" src="img/product/feture-product/f10.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <div class="content-head">
                                                <h2 class="product-title">
                                                    <a href="#">Fusce aliquam</a>
                                                </h2>
                                                <p class="product-price"><span>$175.00</span> $155.00</p>
                                            </div>
                                            <div class="content-action">
                                                <button class="btn" type="button"><i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <ul>
                                                    <li class="heart-li"><a href="#"><i class="fa fa-heart"></i></a>
                                                    </li>
                                                    <li class="exchange-li"><a href="#"><i
                                                                    class="fa fa-exchange"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#productModal"><i
                                                                    class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Fetured Product Single Item -->
                                    <!-- Fetured Product Single Item -->
                                    <div class="fiture-poroduct-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/feture-product/f11.jpg"
                                                     alt="product">
                                                <img class="secondary-img" src="img/product/feture-product/f12.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <div class="content-head">
                                                <h2 class="product-title">
                                                    <a href="#">Fusce aliquam</a>
                                                </h2>
                                                <p class="product-price"><span>$175.00</span> $155.00</p>
                                            </div>
                                            <div class="content-action">
                                                <button class="btn" type="button"><i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <ul>
                                                    <li class="heart-li"><a href="#"><i class="fa fa-heart"></i></a>
                                                    </li>
                                                    <li class="exchange-li"><a href="#"><i
                                                                    class="fa fa-exchange"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#productModal"><i
                                                                    class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Fetured Product Single Item -->
                                </div><!-- End Fetured Product Inner Item -->
                            </div><!-- End Fetured Product Inner Item Column -->
                        </div>
                    </div><!-- End Fetured Product Item area -->
                </div>
                <div class="col-md-12 col-sm-12">
                    <!-- Fetured Product Item area -->
                    <div class="fitured-product-item-area">
                        <div class="row">
                            <!-- Fetured Product Inner Item Column -->
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <!-- Fetured Product Inner Item -->
                                <div class="fiture-product-inner-item">
                                    <!-- Fetured Product Single Item -->
                                    <div class="fiture-poroduct-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/feture-product/f2.jpg"
                                                     alt="product">
                                                <img class="secondary-img" src="img/product/feture-product/f1.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <div class="content-head">
                                                <h2 class="product-title">
                                                    <a href="#">Fusce aliquam</a>
                                                </h2>
                                                <p class="product-price"> $155.00</p>
                                            </div>
                                            <div class="content-action">
                                                <button class="btn" type="button"><i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <ul>
                                                    <li class="heart-li"><a href="#"><i class="fa fa-heart"></i></a>
                                                    </li>
                                                    <li class="exchange-li"><a href="#"><i
                                                                    class="fa fa-exchange"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#productModal"><i
                                                                    class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Fetured Product Single Item -->
                                    <!-- Fetured Product Single Item -->
                                    <div class="fiture-poroduct-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/feture-product/f4.jpg"
                                                     alt="product">
                                                <img class="secondary-img" src="img/product/feture-product/f3.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <div class="content-head">
                                                <h2 class="product-title">
                                                    <a href="#">Fusce aliquam</a>
                                                </h2>
                                                <p class="product-price"><span>$175.00</span> $155.00</p>
                                            </div>
                                            <div class="content-action">
                                                <button class="btn" type="button"><i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <ul>
                                                    <li class="heart-li"><a href="#"><i class="fa fa-heart"></i></a>
                                                    </li>
                                                    <li class="exchange-li"><a href="#"><i
                                                                    class="fa fa-exchange"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#productModal"><i
                                                                    class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Fetured Product Single Item -->
                                </div><!-- End Fetured Product Inner Item -->
                            </div><!-- End Fetured Product Inner Item Column -->
                            <!-- Fetured Product Inner Item Column -->
                            <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs">
                                <!-- Fetured Product Inner Item -->
                                <div class="fiture-product-inner-item">
                                    <!-- Fetured Product Single Item -->
                                    <div class="fiture-poroduct-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/feture-product/f6.jpg"
                                                     alt="product">
                                                <img class="secondary-img" src="img/product/feture-product/f5.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <div class="content-head">
                                                <h2 class="product-title">
                                                    <a href="#">Fusce aliquam</a>
                                                </h2>
                                                <p class="product-price"> $155.00</p>
                                            </div>
                                            <div class="content-action">
                                                <button class="btn" type="button"><i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <ul>
                                                    <li class="heart-li"><a href="#"><i class="fa fa-heart"></i></a>
                                                    </li>
                                                    <li class="exchange-li"><a href="#"><i
                                                                    class="fa fa-exchange"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#productModal"><i
                                                                    class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Fetured Product Single Item -->
                                    <!-- Fetured Product Single Item -->
                                    <div class="fiture-poroduct-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/feture-product/f8.jpg"
                                                     alt="product">
                                                <img class="secondary-img" src="img/product/feture-product/f7.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <div class="content-head">
                                                <h2 class="product-title">
                                                    <a href="#">Fusce aliquam</a>
                                                </h2>
                                                <p class="product-price"> $155.00</p>
                                            </div>
                                            <div class="content-action">
                                                <button class="btn" type="button"><i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <ul>
                                                    <li class="heart-li"><a href="#"><i class="fa fa-heart"></i></a>
                                                    </li>
                                                    <li class="exchange-li"><a href="#"><i
                                                                    class="fa fa-exchange"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#productModal"><i
                                                                    class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Fetured Product Single Item -->
                                </div><!-- End Fetured Product Inner Item -->
                            </div><!-- End Fetured Product Inner Item Column -->
                            <!-- Fetured Product Inner Item Column -->
                            <div class="col-md-6 col-lg-4 hidden-md hidden-sm hidden-xs">
                                <!-- Fetured Product Inner Item -->
                                <div class="fiture-product-inner-item">
                                    <!-- Fetured Product Single Item -->
                                    <div class="fiture-poroduct-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/feture-product/f10.jpg"
                                                     alt="product">
                                                <img class="secondary-img" src="img/product/feture-product/f9.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <div class="content-head">
                                                <h2 class="product-title">
                                                    <a href="#">Fusce aliquam</a>
                                                </h2>
                                                <p class="product-price"><span>$175.00</span> $155.00</p>
                                            </div>
                                            <div class="content-action">
                                                <button class="btn" type="button"><i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <ul>
                                                    <li class="heart-li"><a href="#"><i class="fa fa-heart"></i></a>
                                                    </li>
                                                    <li class="exchange-li"><a href="#"><i
                                                                    class="fa fa-exchange"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#productModal"><i
                                                                    class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Fetured Product Single Item -->
                                    <!-- Fetured Product Single Item -->
                                    <div class="fiture-poroduct-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img class="primary-img" src="img/product/feture-product/f12.jpg"
                                                     alt="product">
                                                <img class="secondary-img" src="img/product/feture-product/f11.jpg"
                                                     alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <div class="content-head">
                                                <h2 class="product-title">
                                                    <a href="#">Fusce aliquam</a>
                                                </h2>
                                                <p class="product-price">$155.00</p>
                                            </div>
                                            <div class="content-action">
                                                <button class="btn" type="button"><i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <ul>
                                                    <li class="heart-li"><a href="#"><i class="fa fa-heart"></i></a>
                                                    </li>
                                                    <li class="exchange-li"><a href="#"><i
                                                                    class="fa fa-exchange"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#productModal"><i
                                                                    class="fa fa-search"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- End Fetured Product Single Item -->
                                </div><!-- End Fetured Product Inner Item -->
                            </div><!-- End Fetured Product Inner Item Column -->
                        </div>
                    </div><!-- End Fetured Product Item area -->
                </div>
            </div><!-- End Fetured Products Carousel -->
        </div>
    </div>
</div><!-- End Fetured Product area -->
<!-- Blog Post area -->
<div class="blog-post-area brand-products c-carousel-button">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="products-head">
                                <div class="products-head-title">
                                    <i class="fa fa-picture-o"></i>
                                    <h2>Blog posts</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Blog Post Carousel -->
            <div id="blog-posts" class="owl-carousel">
                <div class="col-md-12 col-sm-12">
                    <!-- Blog Post Item area -->
                    <div class="blog-post-item-area">
                        <div class="row">
                            <!-- Blog Post Inner Item Column -->
                            <div class="col-md-6">
                                <!-- Blog Post Inner Item -->
                                <div class="blog-post-inner-item">
                                    <!-- Fetured Product Single Item -->
                                    <div class="blog-post-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img src="img/blog/b1.png" alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <h2><a href="#">Claritas est etiam processus dynamicus, qui sequitur</a>
                                            </h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat...</p>
                                        </div>
                                    </div><!-- End Blog Post Single Item -->
                                    <!-- Fetured Product Single Item -->
                                    <div class="blog-post-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img src="img/blog/b2.png" alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <h2><a href="#">Claritas est etiam processus dynamicus, qui sequitur</a>
                                            </h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat...</p>
                                        </div>
                                    </div><!-- End Blog Post Single Item -->
                                </div><!-- End Blog Post Inner Item -->
                            </div><!-- End Fetured Product Inner Item Column -->
                            <!-- Blog Post Inner Item Column -->
                            <div class="col-md-6">
                                <!-- Blog Post Inner Item -->
                                <div class="blog-post-inner-item">
                                    <!-- Fetured Product Single Item -->
                                    <div class="blog-post-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img src="img/blog/b3.png" alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <h2><a href="#">Claritas est etiam processus dynamicus, qui sequitur</a>
                                            </h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat...</p>
                                        </div>
                                    </div><!-- End Blog Post Single Item -->
                                    <!-- Fetured Product Single Item -->
                                    <div class="blog-post-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img src="img/blog/b4.png" alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <h2><a href="#">Claritas est etiam processus dynamicus, qui sequitur</a>
                                            </h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat...</p>
                                        </div>
                                    </div><!-- End Blog Post Single Item -->
                                </div><!-- End Blog Post Inner Item -->
                            </div><!-- End Fetured Product Inner Item Column -->
                        </div>
                    </div><!-- End Blog Post Item area -->
                </div>
                <div class="col-md-12 col-sm-12">
                    <!-- Blog Post Item area -->
                    <div class="blog-post-item-area">
                        <div class="row">
                            <!-- Blog Post Inner Item Column -->
                            <div class="col-md-6">
                                <!-- Blog Post Inner Item -->
                                <div class="blog-post-inner-item">
                                    <!-- Fetured Product Single Item -->
                                    <div class="blog-post-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img src="img/blog/b1.png" alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <h2><a href="#">Claritas est etiam processus dynamicus, qui sequitur</a>
                                            </h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat...</p>
                                        </div>
                                    </div><!-- End Blog Post Single Item -->
                                    <!-- Fetured Product Single Item -->
                                    <div class="blog-post-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img src="img/blog/b2.png" alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <h2><a href="#">Claritas est etiam processus dynamicus, qui sequitur</a>
                                            </h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat...</p>
                                        </div>
                                    </div><!-- End Blog Post Single Item -->
                                </div><!-- End Blog Post Inner Item -->
                            </div><!-- End Fetured Product Inner Item Column -->
                            <!-- Blog Post Inner Item Column -->
                            <div class="col-md-6">
                                <!-- Blog Post Inner Item -->
                                <div class="blog-post-inner-item">
                                    <!-- Fetured Product Single Item -->
                                    <div class="blog-post-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img src="img/blog/b3.png" alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <h2><a href="#">Claritas est etiam processus dynamicus, qui sequitur</a>
                                            </h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat...</p>
                                        </div>
                                    </div><!-- End Blog Post Single Item -->
                                    <!-- Fetured Product Single Item -->
                                    <div class="blog-post-single-item">
                                        <div class="single-item-img">
                                            <a href="#">
                                                <img src="img/blog/b4.png" alt="product">
                                            </a>
                                        </div>
                                        <div class="single-item-content">
                                            <h2><a href="#">Claritas est etiam processus dynamicus, qui sequitur</a>
                                            </h2>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                                nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                erat...</p>
                                        </div>
                                    </div><!-- End Blog Post Single Item -->
                                </div><!-- End Blog Post Inner Item -->
                            </div><!-- End Fetured Product Inner Item Column -->
                        </div>
                    </div><!-- End Blog Post Item area -->
                </div>
            </div><!-- End Blog Post Carousel -->
        </div>
    </div>
</div><!-- End Blog Post area -->
<!-- Support area -->
<div class="support-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <!-- Single Support area -->
                <div class="single-support">
                    <div class="single-support-icon">
                        <p><i class="fa fa-bus"></i></p>
                    </div>
                    <div class="single-support-content">
                        <h2>FREE DELIVERY ORDERS</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis hendrerit nulla et
                            hendrerit. Vivamus vitae vehicula odio. Proin nec varius nunc.</p>
                    </div>
                </div><!-- End Single Support area -->
            </div>
            <div class="col-md-4 col-sm-4">
                <!-- Single Support area -->
                <div class="single-support">
                    <div class="single-support-icon">
                        <p><i class="fa fa-gift"></i></p>
                    </div>
                    <div class="single-support-content">
                        <h2>FREE DELIVERY ORDERS</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis hendrerit nulla et
                            hendrerit. Vivamus vitae vehicula odio. Proin nec varius nunc.</p>
                    </div>
                </div><!-- End Single Support area -->
            </div>
            <div class="col-md-4 col-sm-4">
                <!-- Single Support area -->
                <div class="single-support">
                    <div class="single-support-icon">
                        <i class="fa fa-fax"></i>
                    </div>
                    <div class="single-support-content">
                        <h2>FREE DELIVERY ORDERS</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque convallis hendrerit nulla et
                            hendrerit. Vivamus vitae vehicula odio. Proin nec varius nunc.</p>
                    </div>
                </div><!-- End Single Support area -->
            </div>
        </div>
    </div>
</div><!-- End Support area -->
<!-- Brand Logo area -->
<div class="brand-logo-area">
    <div class="container">
        <div class="brand-logo">
            <div class="brand-logo-title">
                <h2>Logo brands</h2>
            </div>
            <div id="brands-logo" class="owl-carousel">
                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/brand-logo/blogo1.png" alt="logo">
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/brand-logo/blogo5.png" alt="logo">
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/brand-logo/blogo2.png" alt="logo">
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/brand-logo/blogo3.png" alt="logo">
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/brand-logo/blogo4.png" alt="logo">
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/brand-logo/blogo1.png" alt="logo">
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/brand-logo/blogo5.png" alt="logo">
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/brand-logo/blogo3.png" alt="logo">
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/brand-logo/blogo4.png" alt="logo">
                    </a>
                </div>
                <div class="single-brand-logo">
                    <a href="#">
                        <img src="img/brand-logo/blogo2.png" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Brand Logo area -->
<!-- Footer area -->
<div class="footer-area">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- Footer Left -->
                    <div class="footer-left">
                        <!-- Footer Logog -->
                        <div class="footer-logo">
                            <a href="index.html"><img src="img/logo/logo-footer.png" alt="logo"></a>
                        </div>
                        <div class="footer-static-content">
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                        </div>
                        <div class="footer-payment">
                            <h2>Payments</h2>
                            <ul>
                                <li><a href="#"><img src="img/logo/payment.png" alt="payment"></a></li>
                            </ul>
                        </div>
                    </div><!-- End Footer Left -->
                </div>
                <div class="col-md-8 footer-right-col">
                    <!-- Footer Right -->
                    <div class="footer-right">
                        <div class="footer-newsletter">
                            <form action="#">
                                <h2>Newsletter</h2>
                                <input type="text" title="Sign up for our newsletter" required>
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                        <div class="information-link">
                            <div class="single-information-link">
                                <h2>Informations</h2>
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Your Account</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="single-information-link">
                                <h2>other static link</h2>
                                <ul>
                                    <li><a href="#">Product Recall</a></li>
                                    <li><a href="#">Gift Vouchers</a></li>
                                    <li><a href="#">Returns and Exchanges</a></li>
                                    <li><a href="#">Shipping Options</a></li>
                                    <li><a href="#">Help & FAQs</a></li>
                                </ul>
                            </div>
                            <div class="single-information-link">
                                <h2> My account </h2>
                                <ul>
                                    <li><a href="#">My orders</a></li>
                                    <li><a href="#">My credit slips</a></li>
                                    <li><a href="#">My addresses</a></li>
                                    <li><a href="#">My personal info</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- End Footer Left -->
                </div>
            </div>
        </div>
    </div><!-- End Footer Top -->
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- Copyright -->
            <div class="copyright">
                <p>Copyright &copy; <a href="http://bootexperts.com/">BootExperts</a> All Rights Reserved.</p>
            </div>
        </div>
    </div><!-- End Footer Bottom -->
</div><!-- End Footer area -->
<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="product" src="img/product/sp2.jpg">
                            </div>
                        </div><!-- .product-images -->

                        <div class="product-info">
                            <h1>Cras neque metus</h1>
                            <div class="price-box">
                                <p class="price"><span class="special-price"><span class="amount">$155.00</span></span>
                                </p>
                            </div>
                            <a href="product-details.php" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="add-to-box add-to-box2">
                                        <div class="add-to-cart">
                                            <div class="input-content">
                                                <label for="qty">Qty:</label>
                                                <input type="button" value="-"
                                                       onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;"
                                                       class="qty-decrease">
                                                <input type="text" name="qty" id="qty" maxlength="12" value="1"
                                                       title="Qty" class="input-text qty">
                                                <input type="button" value="+"
                                                       onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;"
                                                       class="qty-increase">
                                            </div>
                                            <button class="btn" type="button"><span>Add to cart</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="quick-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis
                                justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id
                                nulla.
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i
                                                        class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i
                                                        class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i
                                                        class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i
                                                        class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .product-info -->
                    </div><!-- .modal-product -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- END Modal -->
</div><!-- END QUICKVIEW PRODUCT -->


<!-- jquery
============================================ -->
<script src="js/vendor/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- nivo slider js
============================================ -->
<script src="js/jquery.nivo.slider.pack.js"></script>
<!-- Mean Menu js
============================================ -->
<script src="js/jquery.meanmenu.min.js"></script>
<!-- wow JS
============================================ -->
<script src="js/wow.min.js"></script>
<!-- price-slider JS
============================================ -->
<script src="js/jquery-price-slider.js"></script>
<!-- Simple Lence JS
============================================ -->
<script type="text/javascript" src="js/jquery.simpleGallery.min.js"></script>
<script type="text/javascript" src="js/jquery.simpleLens.min.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- scrollUp JS
============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- jquery Collapse JS
============================================ -->
<script src="js/jquery.collapse.js"></script>
<!-- plugins JS
============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
============================================ -->
<script src="js/main.js"></script>
</body>
</html>
