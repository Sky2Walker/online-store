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
                                            <li class="level2"><a href="home-simple.html" title="Home Simple">Home Simple</a></li>
                                            <li class="level2"><a href="home_clean.html" title="Home Clean">Home Clean</a></li>
                                            <li class="level2"><a href="home_bestselling.html" title="Home Bestselling">Home Bestselling</a></li>
                                            <li class="level2"><a href="home_instagrams.html" title="Home Instagram Shop">Home Instagram Shop</a></li>
                                            <li class="level2"><a href="home_cat_metro.html" title="Home Cat Metro">Home Cat Metro</a></li>
                                            <li class="level2"><a href="home_categories_slider_fullwidth.html" title="Home Categories Slider">Home Categories Slider</a></li>
                                            <li class="level2"><a href="home_cate.html" title="Home Categories">Home Categories</a></li>
                                            <li class="level2"><a href="home_parallax.html" title="Home Parallax">Home Parallax</a></li>
                                            <li class="level2"><a href="home_fullslider.html" title="Home Fullslider">Home Fullslider</a></li>
                                            <li class="level2"><a href="home_lookbook.html" title="Home Lookbook">Home Lookbook</a></li>
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
                                                        <li class="level3"><a href="shop_standard_simple_hero_section_dark.html" title="Shop Standard Simple Hero section dark">Shop Standard Simple Hero section dark</a></li>
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
                                            <li class="level2"><a href="blog_classic.html" title="Blog Classic">Blog Classic</a></li>
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
    <div class="page-heading">
        <div class="banner-heading">
            <img src="img/headerbg_2.jpg" alt="" class="img-reponsive">
            <div class="heading-content text-center">
                <div class="container container-42">
                    <h1 class="page-title white">Shop</h1>
                    <ul class="breadcrumb white">
                        <li><a href="">home</a></li>
                        <li><a href="">Shop All Products</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="nav nav-tabs nav-justified nav-filter white">
            <ul class="owl-carousel owl-theme js-owl-category">
                <li class="active"><a data-toggle="pill" href="#all">All</a></li>
                <li><a data-toggle="pill" href="#women">Women</a></li>
                <li><a data-toggle="pill" href="#access">Accesories</a></li>
                <li><a data-toggle="pill" href="#gagets">Gagets</a></li>
                <li><a data-toggle="pill" href="#edit">Editorials</a></li>
                <li><a data-toggle="pill" href="#edit">Editorials</a></li>
                <li><a data-toggle="pill" href="#edit">Editorials</a></li>
            </ul>
        </div>
    </div>
    <div class="wrap-filter">
        <div class="wrap-filter-box wrap-filter-number">
            <ul class="pagination">
                <li class="active"><a href="">4</a></li>
                <li><a href="">5</a></li>
                <li><a href="">6</a></li>
            </ul>
            <span class="total-count">Showing 1-12 of 30 products</span>
        </div>
        <div class="wrap-filter-box text-center view-mode">
            <a class="col" href="#" onClick="return false;"><span class="icon-grid-img"></span></a>
        </div>
        <div class="wrap-filter-box text-center js-filter"><a href="#" class="filter-title"><i class="icon-equalizer"></i></a>
            <form action="#" method="get" class="form-filter-product js-filter-open">
                <span class="close-left js-close"><i class="icon-close f-20"></i></span>
                <div class="product-filter-wrapper">
                    <div class="product-filter-inner text-left">
                        <div class="product-filter">
                            <div class="form-group">
                                <span class="title-filter">Category</span>
                                <button class="dropdown-toggle form-control" type="button" data-toggle="dropdown">Select a category
                                </button>
                                <ul class="dropdown-menu">
                                    <li>Select a category</li>
                                    <li>Backpacks</li>
                                    <li>Decoration</li>
                                    <li>Essentials</li>
                                    <li>Interior</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-filter">
                            <div class="form-group">
                                <span class="title-filter">Color</span>
                                <button class="dropdown-toggle form-control" type="button" data-toggle="dropdown">Choose color
                                </button>
                                <ul class="dropdown-menu">
                                    <li>Choose color</li>
                                    <li>Red</li>
                                    <li>Blue</li>
                                    <li>Gray</li>
                                    <li>White</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-filter">
                            <div class="form-group">
                                <span class="title-filter">Size</span>
                                <button class="dropdown-toggle form-control" type="button" data-toggle="dropdown">Choose size
                                </button>
                                <ul class="dropdown-menu">
                                    <li>Choose size</li>
                                    <li>S</li>
                                    <li>M</li>
                                    <li>L</li>
                                    <li>XL</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-filter">
                            <div class="form-group">
                                <span class="title-filter">Price</span>
                                <div class="filter-content">
                                    <div class="price-range-holder">
                                        <input type="text" class="price-slider" value="">
                                    </div>
                                    <span class="min-max">
                                    Price: $30 — $3450
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="product-filter-button-group clearfix">
                        <div class="product-filter-button">
                            <a href="" class="btn-submit">Fillter </a>
                        </div>
                        <div class="product-filter-button">
                            <a href="" class="btn-submit">Clear </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="wrap-filter-box text-center view-mode">
            <a class="list" href="#" onClick="return false;"><span class="icon-list-img"></span></a>
        </div>
        <div class="wrap-filter-box wrap-filter-sorting">
            <button class="dropdown-toggle" type="button" data-toggle="dropdown" id="menu2">Sort by newness
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu2">
                <li><a href="#" title="">Sort by newness</a></li>
                <li><a href="#" title="">Best Selling</a></li>
                <li><a href="#" title="">Best Selling</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="container container-42 shop-sidebar">
        <div class="row">
            <div class="col-md-3 col-sm-3 collection-sidebar">
                <div class="product-standard filter-product">
                    <div class="filter filter-price">
                        <h3 class="filtertitle">
                            By price.
                        </h3>
                        <div class="filter-content">
                            <div class="price-range-holder">
                                <input type="text" class="price-slider" value="">
                            </div>
                            <span class="min-max">
                                Price: $30 — $3450
                            </span>
                            <span class="filter-title">

                            </span>
                        </div>
                    </div>
                    <div class="filter filter-category">
                        <h3 class="filtertitle">
                            Categories.
                        </h3>
                        <ul class="filter-content js-filter-menu">


                            @foreach($categoriesGroup as $categoryGroup)

                                <li><a href="{{ url('category/'.$categoryGroup->slug) }}">{{$categoryGroup->name}}</a></li>
                            @endforeach




                        </ul>
                    </div>
                    <div class="filter filter-color">
                        <h3 class="filtertitle">
                           By color.
                        </h3>
                        <ul class="filter-content">
                            <li><a href="">Grey</a></li>
                            <li><a href="">Metallic</a></li>
                            <li><a href="">Multicolour Nude</a></li>
                            <li><a href="">Pink</a></li>
                            <li><a href="">Purple</a></li>
                            <li><a href="">Red White</a></li>
                        </ul>
                    </div>
                    <div class="filter filter-size">
                        <h3 class="filtertitle">
                            By size
                        </h3>
                        <div class="filter-content">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Choose any size...
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">XXL</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">xS</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-banner">
                        <a href=""><img src="img/sidebar-banner.jpg" alt="" class="img-reponsive"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 collection-list">
                <div class="product-standard product-grid">
                    <div class="tab-content">
                        <div id="all" class="tab-pane fade in active">
                            <div class="row">


                                @foreach($products as $product)


                                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3 product-item">
                                        <div class="product-images">
                                            <a href="#" class="hover-images effect"><img src="{{ asset('storage/' . $product->img) }}" alt="photo" class="img-reponsive"></a>
                                            <a href="#" class="btn-add-wishlist ver2"><i class="icon-heart"></i></a>
                                            <a href="#" class="btn-quickview">QUICK VIEW</a>
                                        </div>
                                        <div class="product-info-ver2">
                                            <h3 class="product-title"><a href="#">{{$product->name}}</a></h3>
                                            <div class="product-after-switch">
                                                <div class="product-price">$@if($product->variants->isNotEmpty())
                                                    ${{ $product->variants[0]->price }}
                                                    @else
                                                        N/A
                                                    @endif</div>
                                                <div class="product-after-button">
                                                    <a href="#" class="addcart">ADD TO CART</a>
                                                </div>
                                            </div>
                                            <div class="rating-star">

                                                @for($i = 0; $i<floor($product->ratings); $i++)

                                                <span class="star star-1"></span>
                                                @endfor
                                            </div>
                                            <p class="product-desc">{{$product->description}}</p>
                                            <div class="product-price">$${{ $product->variants->first()?->price ?? 'N/A' }}.00</div>
                                            <div class="button-group">
                                                <a href="#" class="button add-to-cart">Add to cart</a>
                                                <a href="#" class="button add-to-wishlist">Add to wishlist</a>
                                                <a href="#" class="button add-view">Quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            <div class="pagination-container pagination-blog button-v v2">
                                <nav>
                                    @if ($products->lastPage() > 1)
                                        <ul class="pagination">
                                            {{-- Кнопка "Назад" --}}
                                            <li class="{{ $products->onFirstPage() ? 'disabled' : '' }}">
                                                <a href="{{ $products->previousPageUrl() ? request()->fullUrlWithQuery(['page' => $products->currentPage() - 1]) : '#' }}">
                                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                </a>
                                            </li>

                                            {{-- Цифры страниц --}}
                                            @for ($i = 1; $i <= $products->lastPage(); $i++)
                                                <li class="{{ $products->currentPage() == $i ? 'active' : '' }}">
                                                    <a href="{{ request()->fullUrlWithQuery(['page' => $i]) }}">{{ $i }}</a>
                                                </li>
                                            @endfor

                                            {{-- Кнопка "Вперед" --}}
                                            <li class="{{ $products->currentPage() == $products->lastPage() ? 'disabled' : '' }}">
                                                <a href="{{ $products->nextPageUrl() ? request()->fullUrlWithQuery(['page' => $products->currentPage() + 1]) : '#' }}">
                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    @endif
                                </nav>
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
