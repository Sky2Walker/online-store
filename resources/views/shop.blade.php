<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Cosso - Clean, Minimal Responsive HTML Template</title>
    @livewireStyles
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
                              <button class="btn btn-default button_search" type="button"><i data-toggle="dropdown"
                                                                                             class="fa fa-search"></i></button>
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
                        <a id="label1" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">

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
                        <a id="label2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">

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
                    <button type="button" class="navbar-toggle icon-mobile" data-toggle="collapse"
                            data-target="#myNavbar">
                        <span class="icon-menu"></span>
                    </button>
                    <nav class="navbar main-menu">
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav js-menubar">
                                <li class="level1 active dropdown"><a href="#">Home</a>
                                    <span class="plus js-plus-icon"></span>

                                </li>
                                <li class="level1 dropdown hassub"><a href="#">Shop</a>
                                    <span class="plus js-plus-icon"></span>
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
    <div class="wrap-filter-box text-center js-filter"><a href="#" class="filter-title"><i
                class="icon-equalizer"></i></a>
        <form action="#" method="get" class="form-filter-product js-filter-open">
            <span class="close-left js-close"><i class="icon-close f-20"></i></span>
            <div class="product-filter-wrapper">
                <div class="product-filter-inner text-left">
                    <div class="product-filter">
                        <div class="form-group">
                            <span class="title-filter">Category</span>
                            <button class="dropdown-toggle form-control" type="button" data-toggle="dropdown">Select a
                                category
                            </button>
                            <ul class="dropdown-menu">
                                <li>Select a category</li>
                                @foreach($categoriesGroup as $categoryGroup)

                                    <li>{{$categoryGroup->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="product-filter">
                        <div class="form-group">
                            <span class="title-filter">Color</span>
                            <button class="dropdown-toggle form-control" type="button" data-toggle="dropdown">Choose
                                color
                            </button>
                            <ul class="dropdown-menu">
                                <li>Choose color</li>
                                @foreach($colors as $color)
                                    <li>{{$color->name}}</li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="product-filter">
                        <div class="form-group">
                            <span class="title-filter">Size</span>
                            <button class="dropdown-toggle form-control" type="button" data-toggle="dropdown">Choose
                                size
                            </button>
                            <ul class="dropdown-menu">
                                <li>Choose size</li>
                                @foreach($sizes as $size)
                                    <li>{{$size->name}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="product-filter">
                        <div class="form-group">
                            <span class="title-filter">Material</span>
                            <button class="dropdown-toggle form-control" type="button" data-toggle="dropdown">Choose
                                material
                            </button>
                            <ul class="dropdown-menu">
                                <li>Choose material</li>
                                @foreach($materials as $material)
                                    <li><a href="">{{$material->name}}</a></li>
                                @endforeach
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
                        By price
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
                @livewire('product-filter')
                <div class="filter filter-color">
                    <h3 class="filtertitle">
                        By color
                    </h3>
                    <ul class="filter-content ">


                        @foreach($colors as $color)
                            <li><a href="">{{$color->name}}</a></li>

                        @endforeach


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
                                @foreach($sizes as $size)
                                    <li><a href="#">{{$size->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="filter filter-color">
                    <h3 class="filtertitle">
                        By Materials
                    </h3>
                    <ul class="filter-content ">


                        @foreach($materials as $material)
                            <li><a href="">{{$material->name}}</a></li>

                        @endforeach


                    </ul>
                </div>
                <div class="sidebar-banner">
                    <a href=""><img src="img/sidebar-banner.jpg" alt="" class="img-reponsive"></a>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-9 collection-list">
            @livewire('product-list')
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
@livewireScripts
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>
