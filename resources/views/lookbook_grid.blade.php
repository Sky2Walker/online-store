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
            <ul class="list">
                <li>
                    <a href="#" title="" class="cart-product-image"><img src="img/cart_1.jpg" alt="Product"></a>
                    <div class="text">
                        <p class="product-name">Rose Gold Natural Band Watch</p>
                        <p class="product-price">$295.00</p>
                        <div class="quantity input-group">
                            <button type="button" class="quantity-left-minus btn btn-number js-minus" data-type="minus" data-field="">
                                <span class="minus-icon">-</span>
                            </button>
                            <input type="text" name="number" value="1" class="product_quantity_number js-number">
                            <button type="button" class="quantity-right-plus btn btn-number js-plus" data-type="plus" data-field="">
                                <span class="plus-icon">+</span>
                            </button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li>
                    <a href="#" title="" class="cart-product-image"><img src="img/cart_1.jpg" alt="Product"></a>
                    <div class="text">
                        <p class="product-name">Dot Drop Earrings</p>
                        <p class="product-price">$295.00</p>
                        <div class="quantity input-group">
                            <button type="button" class="quantity-left-minus btn btn-number js-minus" data-type="minus" data-field="">
                                <span class="minus-icon">-</span>
                            </button>
                            <input type="text" name="number" value="1" class="product_quantity_number js-number">
                            <button type="button" class="quantity-right-plus btn btn-number js-plus" data-type="plus" data-field="">
                                <span class="plus-icon">+</span>
                            </button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li>
                    <a href="#" title="" class="cart-product-image"><img src="img/cart_1.jpg" alt="Product"></a>
                    <div class="text">
                        <p class="product-name">Dot Drop Earrings</p>
                        <p class="product-price">$295.00</p>
                        <div class="quantity input-group">
                            <button type="button" class="quantity-left-minus btn btn-number js-minus" data-type="minus" data-field="">
                                <span class="minus-icon">-</span>
                            </button>
                            <input type="text" name="number" value="1" class="product_quantity_number js-number">
                            <button type="button" class="quantity-right-plus btn btn-number js-plus" data-type="plus" data-field="">
                                <span class="plus-icon">+</span>
                            </button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </li>
            </ul>
            <div class="cart-bottom">
                <p class="total"><span>Subtotal</span> $560.00</p>
                <div class="cart-button">
                    <a class="checkout" href="#" title="">Check out</a>
                    <a class="edit-cart" href="#" title="edit cart">Edit cart</a>
                </div>
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
                            <input type="text" name="q" class="form-control control-search">
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
        <header id="header" class="header-v4">
            <div class="sticky-header text-center hidden-xs hidden-sm">
                <div class="text">
                    <span class="u-line">Free shipping and returns</span> on all orders above $200
                </div>
            </div>
            <div class="topbar">
                <div class="container container-42">
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
                        </div>
                        <!--end topbar-option-->
                    </div>
                    <!--end topbar-left-->
                    <div class="topbar-right">
                        <div class="topbar-option">
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
                    <!-- menu with logo-->
                    <div class="topbar-center hidden-xs hidden-sm">
                        <ul class="nav navbar-nav js-menubar">
                            <li class="level1 active dropdown"><a href="#">Home</a>
                                <span class="plus js-plus-icon"></span>
                                <ul class="dropdown-menu menu-level-1">
                                    <li class="level2"><a href="home.blade.php" title="Home Simple">Home Simple</a></li>
                                    <li class="level2"><a href="home_clean.html" title="Home Clean">Home Clean</a></li>
                                    <li class="level2"><a href="home_categories_slider_fullwidth.html" title="Home Categories Slider">Home Categories Slider</a></li>
                                    <li class="level2"><a href="home_bestselling.html" title="Home Bestselling">Home Bestselling</a></li>
                                    <li class="level2"><a href="home_instagrams.html" title="Home Instagram Shop">Home Instagram Shop</a></li>
                                    <li class="level2"><a href="home_cat_metro.html" title="Home Cat Metro">Home Cat Metro</a></li>
                                    <li class="level2"><a href="home_categories_slider_fullwidth.html" title="Home Categories Slider">Home Categories Slider</a></li>
                                    <li class="level2"><a href="home_cate.html" title="Home Categories">Home Categories</a></li>
                                    <li class="level2"><a href="home_parallax.html" title="Home Parallax">Home Parallax</a></li>
                                    <li class="level2"><a href="home_fullslider.html" title="Home Fullslider">Home Fullslider</a></li>
                                </ul>
                            </li>
                            <li class="level1 dropdown hassub"><a href="#">Shop</a>
                                <span class="plus js-plus-icon"></span>
                                <div class="menu-level-1 dropdown-menu">
                                    <ul class="level1">
                                        <li class="level2 col-6">
                                            <a href="#">Shop pages</a>
                                            <ul class="menu-level-2 col-6">
                                                <li class="level3"><a href="Cart_page_Prodcut.html" title="Shopping Cart">Shopping Cart</a></li>
                                                <li class="level3"><a href="checkout.blade.php" title="Checkout">Checkout</a></li>
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
                                                <li class="level3"><a href="#" title="">Product — Out of Stock</a></li>
                                                <li class="level3"><a href="#" title="">Product — On Sale</a></li>
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
                            <li class="level1"><a href="" title="home-logo"><img src="img/cosre.png" alt="logo" class="img-reponsive"></a></li>
                            <li class="level1 dropdown hassub">
                                <a href="#">Features</a>
                                <span class="plus js-plus-icon"></span>
                                <div class="menu-level-1 dropdown-menu">
                                    <ul class="level1">
                                        <li class="level2 col-3">
                                            <a href="#">Header & Footer</a>
                                            <ul class="menu-level-2">
                                                <li class="level3"><a href="" title="Header Style 1">Header Style 1</a></li>
                                                <li class="level3"><a href="" title="Header Style 2">Header Style 2</a></li>
                                                <li class="level3"><a href="" title="Header Style 3">Header Style 3</a></li>
                                                <li class="level3"><a href="" title="Header Style 4">Header Style 4</a></li>
                                                <li class="level3"><a href="" title="Header Style 5">Header Style 5</a></li>
                                                <li class="level3"><a href="" title="Header Style 6">Header Style 6</a></li>
                                                <li class="level3"><a href="" title="Footer Style 1">Footer Style 1</a></li>
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
                                                <li class="level3"><a href="lookbook_grid.html" title="Lookbook Grid">Lookbook Grid</a></li>
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
                    <!-- end menu with logo-->
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="header-top hidden-lg hidden-md">
                <div class="container container-42">
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
                                                <li class="level2"><a href="home_categories_slider_fullwidth.html" title="Home Categories Slider">Home Categories Slider</a></li>
                                                <li class="level2"><a href="home_bestselling.html" title="Home Bestselling">Home Bestselling</a></li>
                                                <li class="level2"><a href="home_instagrams.html" title="Home Instagram Shop">Home Instagram Shop</a></li>
                                                <li class="level2"><a href="home_cat_metro.html" title="Home Cat Metro">Home Cat Metro</a></li>
                                                <li class="level2"><a href="home_categories_slider_fullwidth.html" title="Home Categories Slider">Home Categories Slider</a></li>
                                                <li class="level2"><a href="home_cate.html" title="Home Categories">Home Categories</a></li>
                                                <li class="level2"><a href="home_parallax.html" title="Home Parallax">Home Parallax</a></li>
                                                <li class="level2"><a href="home_fullslider.html" title="Home Fullslider">Home Fullslider</a></li>
                                            </ul>
                                        </li>
                                        <li class="level1 dropdown hassub"><a href="#">Shop</a>
                                            <span class="plus js-plus-icon"></span>
                                            <div class="menu-level-1 dropdown-menu">
                                                <ul class="level1">
                                                    <li class="level2 col-6">
                                                        <a href="#">Shop pages</a>
                                                        <ul class="menu-level-2 col-6">
                                                            <li class="level3"><a href="" title="">Shop — Catalog</a></li>
                                                            <li class="level3"><a href="" title="">Shop — Categories Grid</a></li>
                                                            <li class="level3"><a href="" title="">Shop — Product Category</a></li>
                                                            <li class="level3"><a href="" title="">Shop — with Sidebar</a></li>
                                                            <li class="level3"><a href="Cart_page_Prodcut.html" title="Shopping Cart">Shopping Cart</a></li>
                                                            <li class="level3"><a href="checkout.blade.php" title="Checkout">Checkout</a></li>
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
                                                            <li class="level3"><a href="#" title="">Product — Out of Stock</a></li>
                                                            <li class="level3"><a href="#" title="">Product — On Sale</a></li>
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
                                                        <a href="#">Header & Footer</a>
                                                        <ul class="menu-level-2">
                                                            <li class="level3"><a href="" title="Header Style 1">Header Style 1</a></li>
                                                            <li class="level3"><a href="" title="Header Style 2">Header Style 2</a></li>
                                                            <li class="level3"><a href="" title="Header Style 3">Header Style 3</a></li>
                                                            <li class="level3"><a href="" title="Header Style 4">Header Style 4</a></li>
                                                            <li class="level3"><a href="" title="Header Style 5">Header Style 5</a></li>
                                                            <li class="level3"><a href="" title="Header Style 6">Header Style 6</a></li>
                                                            <li class="level3"><a href="" title="Footer Style 1">Footer Style 1</a></li>
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
                                                            <li class="level3"><a href="lookbook_grid.html" title="Lookbook Grid">Lookbook Grid</a></li>
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
        <div class="wrap-gallery">
            <div class="container container-42">
                <div class="heading-gallery">
                    <h3 class="title">
                   LOOKBOOK
                   </h3>
                    <p>Spring Summer 2017 </p>
                </div>
                <div class="wrap-gallery-grid">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 wrap-gallery-item">
                            <div class="lookbook-img">
                                <a href="#" class="hover-images effect"><img src="img/lookbook/look_1.jpg" alt="photo" class="img-reponsive"></a>
                                <div class="overlay-img box-center">
                                    <a href="" class="btn-shoplook">Shop This Look</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 wrap-gallery-item">
                            <div class="lookbook-img">
                                <a href="#" class="hover-images effect"><img src="img/lookbook/look_2.jpg" alt="photo" class="img-reponsive"></a>
                                <div class="overlay-img box-center">
                                    <a href="" class="btn-shoplook">Shop This Look</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 wrap-gallery-item">
                            <div class="lookbook-img">
                                <a href="#" class="hover-images effect"><img src="img/lookbook/look_3.jpg" alt="photo" class="img-reponsive"></a>
                                <div class="overlay-img box-center">
                                    <a href="" class="btn-shoplook">Shop This Look</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 wrap-gallery-item">
                            <div class="lookbook-img">
                                <a href="#" class="hover-images effect"><img src="img/lookbook/look_4.jpg" alt="photo" class="img-reponsive"></a>
                                <div class="overlay-img box-center">
                                    <a href="" class="btn-shoplook">Shop This Look</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 wrap-gallery-item">
                            <div class="lookbook-img">
                                <a href="#" class="hover-images effect"><img src="img/lookbook/look_5.jpg" alt="photo" class="img-reponsive"></a>
                                <div class="overlay-img box-center">
                                    <a href="" class="btn-shoplook">Shop This Look</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 wrap-gallery-item">
                            <div class="lookbook-img">
                                <a href="#" class="hover-images effect"><img src="img/lookbook/look_6.jpg" alt="photo" class="img-reponsive"></a>
                                <div class="overlay-img box-center">
                                    <a href="" class="btn-shoplook">Shop This Look</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 wrap-gallery-item">
                            <div class="lookbook-img">
                                <a href="#" class="hover-images effect"><img src="img/lookbook/look_7.jpg" alt="photo" class="img-reponsive"></a>
                                <div class="overlay-img box-center">
                                    <a href="" class="btn-shoplook">Shop This Look</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 wrap-gallery-item">
                            <div class="lookbook-img">
                                <a href="#" class="hover-images effect"><img src="img/lookbook/look_8.jpg" alt="photo" class="img-reponsive"></a>
                                <div class="overlay-img box-center">
                                    <a href="" class="btn-shoplook">Shop This Look</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container container-42">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="menu-footer">
                            <ul>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="newletter-form">
                            <h3 class="footer-title text-center">Newsletter</h3>
                            <form action="#">
                                <input type="text" name="s" placeholder="Email Adress..." class="form-control">
                                <button type="submit" class="btn btn-submit">
                                    <i class="fa fa-angle-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="social">
                            <a href="#" title="twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                            <a href="#" title="facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                            <a href="#" title="google plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                            <a href="#" title="Pinterest">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                            <a href="#" title="rss">
                            <i class="fa fa-rss"></i>
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
