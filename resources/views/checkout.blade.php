<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Cosso - Clean, Minimal Responsive HTML Template</title>
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('sass/components/Vendor/PlayfairDisplay/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/components/Vendor/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/components/Vendor/simple-line-icon/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/components/Vendor/font-awesome/font-awesome.min.css') }}">
    <link rel="shortcut icon" href="{{asset('css/owl.carousel.min.css')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>

<body>
    <!--push menu cart -->
    <div class="pushmenu pushmenu-left cart-box-container">
        <div class="cart-list">
            <span class="close-left js-close">x</span>
            <h3 class="cart-title">Your Cart</h3>
            <div class="nocart-list">
                <div class="empty-cart">
                    <h4 class="nocart-title">No products in the cart.</h4>
                    <a href="" class="btn-shop btn-arrow">Start shopping</a>
                </div>
            </div>
            <div class="cart-bottom">
                <a href="#" class="text">Our Shipping & Return Policy</a>
            </div>
            <!-- End cart bottom -->
        </div>
    </div>
    <!-- End cart -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">SEARCH HERE</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <form method="get" class="searchform" action="/search" role="search">
                            <input type="hidden" name="type" value="product">
                            <input type="text" name="q" class="form-control form-account control-search">
                            <span class="input-group-btn">
                              <button class="btn btn-default button_search" type="button"><i data-toggle="dropdown" class="fa fa-search"></i></button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END  Modal content-->
    <div class="wrappage">
        <header id="header" class="header-v1">
            <div class="sticky-header text-center hidden-xs hidden-sm">
                <div class="text">
                    <span class="u-line">Free shipping and returns</span> on all orders above $200
                </div>
            </div>
            <div class="topbar">
                <div class="container container-40">
                    <div class="topbar-left">
                        <div class="topbar-option">
                            <div class="topbar-account">
                                <a href="#"><i class="icon-user f-15"></i></a>
                            </div>
                            <div class="topbar-wishlist">
                                <a href="#">
                                <i class="icon-heart f-15"></i>
                                <span class="count wishlist-count">0</span>
                            </a>
                            </div>
                            <div class="topbar-language dropdown">
                                <a id="label1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                              <span>EN</span>
                              <span class="fa fa-caret-down f-10"></span>
                            </a>
                                <ul class="dropdown-menu" aria-labelledby="label1">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Vietnamese</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--end topbar-option-->
                    </div>
                    <!--end topbar-left-->
                    <div class="logo hidden-xs hidden-sm">
                        <a href="" title="home-logo"><img src="img/cosre.png" alt="logo" class="img-reponsive"></a>
                    </div>
                    <!--end logo-->
                    <div class="topbar-right">
                        <div class="topbar-option">
                            <div class="topbar-currency dropdown">
                                <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

                              <span>USD</span>
                              <span class="fa fa-caret-down f-10"></span>
                            </a>
                                <ul class="dropdown-menu" aria-labelledby="label2">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">VND</a></li>
                                </ul>
                            </div>
                            <div class="topbar-search">
                                <div class="search-popup dropdown" data-toggle="modal" data-target="#myModal">
                                    <a href="#"><i class="icon-magnifier f-15"></i></a>
                                </div>
                            </div>
                            <div class="topbar-cart">
                                <a href="#" class="icon-cart">
                                <i class="icon-basket f-15"></i>
                                <span class="count cart-count">0</span>
                            </a>
                            </div>
                        </div>
                        <!--end topbar-option-->
                    </div>
                    <!--end topbar-right-->
                </div>
            </div>
            <div class="header-top">
                <div class="container container-40">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="logo-mobile hidden-lg hidden-md">
                                <a href="" title="home-logo"><img src="img/cosre.png" alt="logo" class="img-reponsive"></a>
                            </div>
                            <!--end logo-->
                            <button type="button" class="navbar-toggle icon-mobile" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-menu"></span>
                            </button>
                            <nav class="navbar main-menu">
                                <div class="collapse navbar-collapse" id="myNavbar">
                                    <ul class="nav navbar-nav js-menubar">
                                        <li class="level1 active dropdown"><a href="#">Home</a>
                                            <span class="plus js-plus-icon"></span>
                                            <ul class="dropdown-menu menu-level-1">
                                                <li class="level2"><a href="home.blade.php" title="Home Simple">Home Simple</a></li>
                                                <li class="level2"><a href="home_clean.html" title="Home Clean">Home Clean</a></li>
                                                <li class="level2"><a href="home_bestselling.html" title="Home Bestselling">Home Bestselling</a></li>
                                                <li class="level2"><a href="home_instagrams.html" title="Home Instagram Shop">Home Instagram Shop</a></li>
                                                <li class="level2"><a href="home_cat_metro.html" title="Home Cat Metro">Home Cat Metro</a></li>
                                                <li class="level2"><a href="home_categories_slider_fullwidth.html" title="Home Categories Slider">Home Categories Slider</a></li>
                                                <li class="level2"><a href="home_cate.html" title="Home Categories">Home Categories</a></li>
                                                <li class="level2"><a href="home_parallax.html" title="Home Parallax">Home Parallax</a></li>
                                                <li class="level2"><a href="home_fullslider.html" title="Home Fullslider">Home Fullslider</a></li>
                                                <li class="level2"><a href="home.blade.php" title="Home Lookbook">Home Lookbook</a></li>
                                                <li class="level2"><a href="home-minimal.html" title="Home Minimal">Home Minimal</a></li>
                                            </ul>
                                        </li>
                                        <li class="level1 dropdown hassub"><a href="#">Shop</a>
                                            <span class="plus js-plus-icon"></span>
                                            <div class="menu-level-1 dropdown-menu">
                                                <ul class="level1">
                                                    <li class="level2 col-6">
                                                        <a href="#">Shop pages</a>
                                                        <ul class="menu-level-2 col-6">
                                                            <li class="level3"><a href="cart_page_emty.blade.php" title="Cart Empty">Cart Empty</a></li>
                                                            <li class="level3"><a href="Cart_page_Prodcut.html" title="Shopping Cart">Shopping Cart</a></li>
                                                            <li class="level3"><a href="checkout.html" title="Checkout">Checkout</a></li>
                                                        </ul>
                                                        <div class="mega-product col-6">
                                                            <a href="#"><img src="img/mega_1.jpg" alt="" class="img-responsive"></a>
                                                        </div>
                                                        <div class="cleafix"></div>
                                                    </li>
                                                    <li class="level2 col-6">
                                                        <a href="#">Product demo</a>
                                                        <ul class="menu-level-2 col-6">
                                                            <li class="level3"><a href="single_product_simple.html" title="Product Simple">Product — Simple</a></li>
                                                            <li class="level3"><a href="single_product_variable.html" title="Product Variable">Product — Variable</a></li>
                                                            <li class="level3"><a href="single_product_downloadable.html" title="Product Downloadable">Product — Downloadable</a></li>
                                                            <li class="level3"><a href="single_Product_Grouped.html" title="Product Grouped">Product — Grouped</a></li>
                                                            <li class="level3"><a href="single_product_affiliate.html" title="Product Affiliate">Product — External / Affiliate</a></li>
                                                            <li class="level3"><a href="single_product_bundle.blade.php" title="Product bundle">Product with bundle</a></li>
                                                            <li class="level3"><a href="single_product_360.html" title="Product 360">Product 360 Degree View</a></li>
                                                            <li class="level3"><a href="single_product_video.html" title="Product Featured Video">Product Video</a></li>
                                                            <li class="level3"><a href="single_product_fullwidth.html" title="Product Fullwidth">Product Fullwidth</a></li>
                                                            <li class="level3"><a href="single_product_sticky_detail.html" title="Product Sticky Detail">Product Sticky Detail</a></li>
                                                        </ul>
                                                        <div class="mega-product col-6">
                                                            <a href="#"><img src="img/mega_2.jpg" alt="" class="img-responsive"></a>
                                                        </div>
                                                        <div class="cleafix"></div>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li class="level1 active dropdown">
                                            <a href="#">Pages</a>
                                            <span class="plus js-plus-icon"></span>
                                            <ul class="dropdown-menu menu-level-1">
                                                <li class="level2"><a href="login.blade.php" title="Login">Login</a></li>
                                                <li class="level2"><a href="register.blade.php" title="Register">Register</a></li>
                                            </ul>
                                        </li>
                                        <li class="level1 dropdown hassub">
                                            <a href="#">Features</a>
                                            <span class="plus js-plus-icon"></span>
                                            <div class="menu-level-1 dropdown-menu">
                                                <ul class="level1">
                                                    <li class="level2 col-3">
                                                        <a href="#">Other Pages</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="about_agency.blade.php" title="About Agency">About Agency</a></li>
                                                            <li class="level3"><a href="about_shop.blade.php" title="About Designer">About Designer</a></li>
                                                            <li class="level3"><a href="about-designer.blade.php" title="About Shop">About Shop</a></li>
                                                            <li class="level3"><a href="commingsoon.html" title="Commingsoon">Commingsoon</a></li>
                                                            <li class="level3"><a href="contact_gmap.html" title="Contact_Map">Contact Map</a></li>
                                                            <li class="level3"><a href="contact_simple.blade.php" title="Contact_Simple">Contact Simple</a></li>
                                                            <li class="level3"><a href="faq.blade.php" title="FAQs">FAQs</a></li>
                                                            <li class="level3"><a href="our_teams.blade.php" title="Our teams">Our teams</a></li>
                                                            <li class="level3"><a href="404.blade.php" title="404 pages">404 page</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="level2 col-3">
                                                        <a href="#">Shop Style</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="shop_flat.html" title="Shop Flat">Shop Flat</a></li>
                                                            <li class="level3"><a href="shopmodern-grid-custom.html" title="Shop Modern Grid Custom Bg">Shop Modern Grid Custom Bg</a></li>
                                                            <li class="level3"><a href="shopmodern-grid.html" title="Shop Modern Grid">Shop Modern Grid</a></li>
                                                            <li class="level3"><a href="shop_masonry.html" title="Shop Masonry">Shop Masonry</a></li>
                                                            <li class="level3"><a href="shop_sidebar_list.html" title="Shop Sidebar list">Shop Sidebar list</a></li>
                                                            <li class="level3"><a href="shop_standar_sidebar.html" title="Shop Standar Sidebar">Shop Standar Sidebar</a></li>
                                                            <li class="level3"><a href="shop_standar.html" title="Shop Standar">Shop Standar</a></li>
                                                            <li class="level3"><a href="shop.blade.php" title="Shop Standard Simple Hero section dark">Shop Standard Simple Hero section dark</a></li>
                                                            <li class="level3"><a href="shop_standard_simple_hero_section_light.html" title="Shop Standard Simple Hero section light">Shop Standard Simple Hero section light</a></li>
                                                            <li class="level3"><a href="shop_standar.html" title="Shop Standard Simple Hero section">Shop Standard Simple Hero section</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="level2 col-3">
                                                        <a href="#">Lookbook</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="lookbook_grid.blade.php" title="Lookbook Grid">Lookbook Grid</a></li>
                                                            <li class="level3"><a href="lookbook_masonry.html" title="Lookbook Masonry">Lookbook Masonry</a></li>
                                                            <li class="level3"><a href="lookbook_popup.html" title="Lookbook Popup">Lookbook Popup</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </li>
                                        <li class="level1 active dropdown">
                                            <a href="#">Elements</a>
                                            <span class="plus js-plus-icon"></span>
                                            <ul class="dropdown-menu menu-level-1">
                                                <li class="level2"><a href="quickview.blade.php" title="Quick View">Quick View</a></li>
                                                <li class="level2"><a href="#" title="Hover Product 4">Hover Product 4</a></li>
                                                <li class="level2"><a href="#" title="Hover Product ">Hover Product </a></li>
                                            </ul>
                                        </li>
                                        <li class="level1 active dropdown">
                                            <a href="#">Blog</a>
                                            <span class="plus js-plus-icon"></span>
                                            <ul class="dropdown-menu menu-level-1">
                                                <li class="level2"><a href="blog.blade.php" title="Blog Classic">Blog Classic</a></li>
                                                <li class="level2"><a href="blog_grid.html" title="Blog Grid">Blog Grid</a></li>
                                                <li class="level2"><a href="blog_listing.html" title="Blog Listing">Blog Listing</a></li>
                                                <li class="level2"><a href="blog_masonry.html" title="Blog Masonry">Blog Masonry</a></li>
                                                <li class="level2"><a href="singlepost_carouselproduct.html" title="Blog Single port Carousel Product">Blog Single port Carousel Product</a></li>
                                                <li class="level2"><a href="single_port_instgram.html" title="Blog Single port Instgram">Blog Single port Instgram</a></li>
                                                <li class="level2"><a href="singlepost_nosidebar.html" title="Blog Single port Nosidebar">Blog Single port Nosidebar</a></li>
                                                <li class="level2"><a href="singlepost_sidebar.blade.php" title="Blog Single port Sidebar">Blog Single port Sidebar</a></li>
                                                <li class="level2"><a href="single_port_woomaper.html" title="Blog Single port Woomaper">Blog Single port Woomaper</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /header -->
        <div class="main-content space-padding-tb-70">
            <div class="container">
                <div class="row">
                    <div class="checkout-login col-xs-12 col-sm-6">
                        <div class="box-toggle box-login">
                            Returning customer?
                            <a class="show-login js-showlogin">Click here to login</a>
                        </div>
                        <form method="post" class="form-customer form-login js-openlogin">
                            <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                            <div class="form-group ">
                                <label for="exampleInputEmail1">Username or email address *</label>
                                <input type="email" class="form-control form-account form-account" id="exampleInputEmail1">
                            </div>
                            <div class="form-group ">
                                <label for="exampleInputPassword1">Password *</label>
                                <input type="password" class="form-control form-account form-account" id="exampleInputPassword1">
                            </div>
                            <div class="form-check ">
                                <button type="submit" class="btn-login hover-white">Login</button>
                                <label class="form-check-label ">
                                    <input type="checkbox" class="form-check-input">
                                    <span>Remember me</span>
                                </label>
                                <a href=" " class="lost-password ">Lost your password?</a>
                            </div>
                        </form>
                    </div>
                    <div class=" col-xs-12 col-sm-6 checkout-cp ">
                        <div class="box-toggle box-coupon ">
                            Have a coupon?
                            <a class="show-login js-showcp">Click here to enter your code</a>
                        </div>
                        <form class="form-cp js-opencp">
                            <div class="form-group">
                                <input type="text" class="form-control form-account input-cart" id="inputfname_1" placeholder="Coupon Code">
                            </div>
                            <button value="Submit" class="btn link-button-v2 hover-white color-red btn-cp-inline" type="submit">Apply</button>
                        </form>
                    </div>
                </div>
                <form name="checkout" method="post" class="checkout">
                    <div class="cart-box-container-ver2">
                        <div class="row">
                            <div class="col-md-8">
                                <h3>Billing Details</h3>
                                <div class="row form-customer">
                                    <div class="form-group col-md-6">
                                        <label for="inputfname_2" class=" control-label">First Name *</label>
                                        <input type="text" id="inputfname_2" class="form-control form-account">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputlname" class=" control-label">Last Name *</label>
                                        <input type="text" id="inputlname" class="form-control form-account">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputcompany" class=" control-label">Company Name</label>
                                        <input type="text" id="inputcompany" class="form-control form-account">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputemail" class=" control-label">Email Address *</label>
                                        <input type="text" id="inputemail" class="form-control form-account">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputphone" class=" control-label">Phone *</label>
                                        <input type="text" id="inputphone" class="form-control form-account">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Country *</label>
                                        <select name="inputcountry1" class="country form-control form-account">
                                            <option selected>Select Country</option>
                                            <option>COUNTRY 2</option>
                                            <option>COUNTRY 1</option>
                                            <option>COUNTRY 3</option>
                                            <option>COUNTRY 4</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputstreet" class=" control-label">Address *</label>
                                        <input type="text" id="inputstreet" class="form-control form-account">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputpostcode" class=" control-label">Postcode / ZIP</label>
                                        <input type="text" id="inputpostcode" class="form-control form-account">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputfState" class=" control-label">Town / City *</label>
                                        <input type="text" id="inputfState" class="form-control form-account">
                                    </div>
                                    <div class="form-check col-md-12">
                                        <label class="form-check-label ver2">
                                            <input type="checkbox" class="form-check-input">
                                            <span>Create an account?</span>
                                        </label>
                                    </div>
                                </div>
                                <h3>Shipping Details</h3>
                                <div class="row form-customer">
                                    <div class="form-check col-md-12">
                                        <label class="form-check-label ver2">
                                            <input type="checkbox" class="form-check-input">
                                            <span>Ship to a different address?</span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputfState" class=" control-label">Order Notes</label>
                                        <textarea name="message" rows="5" id="message" class="form-control form-note" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- End contact-form -->
                            <div class="col-md-4">
                                <h3>Your order</h3>
                                <div class="cart-list">
                                    <ul class="list">
                                        <li class="flex">
                                            <a href="#" title="" class="cart-product-image"><img src="img/cart_1.jpg" alt="Product"></a>
                                            <div class="text">
                                                <p class="product-name">Rose Gold Natural Band Watch</p>
                                                <div class="quantity">x1</div>
                                                <p class="product-price">$295.00</p>
                                            </div>
                                        </li>
                                        <li class="flex">
                                            <a href="#" title="" class="cart-product-image"><img src="img/cart_1.jpg" alt="Product"></a>
                                            <div class="text">
                                                <p class="product-name">Dot Drop Earrings</p>
                                                <div class="quantity">x1</div>
                                                <p class="product-price">$295.00</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <h3>Cart Totals</h3>
                                <div class="text-price">
                                    <ul>
                                        <li><span class="text">Subtotal</span><span class="number">$560.00</span></li>
                                        <li><span class="text">Shipping</span>
                                            <div class="payment">

                                                    <input type="radio" name="gender" value="Flat" id="radio1" checked="checked">
                                                    <label for="radio1">Free Shipping</label>
                                                    <input type="radio" name="gender" value="Free" id="radio2">
                                                    <label for="radio2">Standard <span class="number">$20.00</span></label>
                                                    <input type="radio" name="gender" value="Delivery" id="radio3">
                                                    <label for="radio3">Local Pickup</label>

                                            </div>
                                        </li>
                                        <li><span class="text calculate">Calculate shipping</span>
                                            <div class="zipcode">
                                                <input type="text" class="form-control form-account input-cart" placeholder="Zipcode">
                                            </div>
                                        </li>
                                        <li><span class="text">Totals</span><span class="number">$89.00</span></li>
                                    </ul>
                                </div>
                                <div class="text-price box-payment">
                                    <ul>
                                        <li>
                                            <div class="payment">

                                                    <input type="radio" name="gender" value="Flat" id="radio4" checked="checked">
                                                    <label for="radio4">Check Payments</label>
                                                    <p class="no-checkbox">Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                                    <input type="radio" name="gender" value="Free" id="radio5">
                                                    <label for="radio5">Paypal <img src="img/cart/paypal-icon.jpg" alt=""></label>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <a class="btn link-button hover-white btn-checkout" href="#" title="Proceed to checkout">Place order</a>
                            </div>
                        </div>
                    </div>

                </form>
        </div>
    </div>
    <!-- end main content-->
    <footer>
        <div class="container container-42 ">
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 ">
                    <div class="menu-footer ">
                        <ul>
                            <li><a href="# ">Shipping</a></li>
                            <li><a href="# ">Terms & Conditions</a></li>
                            <li><a href="# ">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 ">
                    <div class="newletter-form ">
                        <h3 class="footer-title text-center ">Newsletter</h3>
                        <form action="# ">
                            <input type="text" name="s " placeholder="Email Adress... " class="form-control form-account">
                            <button type="submit" class="btn btn-submit">
                                <i class="fa fa-angle-right "></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 ">
                    <div class="social ">
                        <a href="# " title="twitter ">
                                <i class="fa fa-twitter "></i>
                            </a>
                        <a href="# " title="facebook ">
                                <i class="fa fa-facebook "></i>
                            </a>
                        <a href="# " title="google plus ">
                                <i class="fa fa-google-plus "></i>
                            </a>
                        <a href="# " title="Pinterest ">
                                <i class="fa fa-pinterest-p "></i>
                            </a>
                        <a href="# " title="rss ">
                                <i class="fa fa-rss "></i>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <a href="#" class="scroll_top">SCROLL TO TOP<span></span></a>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-slider.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
