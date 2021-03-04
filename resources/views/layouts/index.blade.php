<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Luba">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="HiBootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <title>首页丨{{config('app.name','珊海电业')}}</title>

    <link rel="icon" href="{{asset('assets/images/tab.png')}}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"  type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}"  type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/slick.css')}}"  type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}"  type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.min.css')}}" type="text/css" media="all" />
    <link rel='stylesheet' href='{{asset('css/boxicons.min.css')}}' type="text/css" media="all" />
    <link rel='stylesheet' href='{{asset('css/flaticon.css')}}' type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" media="all" />

</head>

<body>

@include('preloader')



<header class="header-banner header-banner-two position-relative">
    <!-- navbar -->
    <div class="fixed-top">
        <div class="navbar-area navbar-area-red navbar-area-three">
            <!-- 移动菜单 -->
            <div class="mobile-nav">
                <div class="mobile-nav-category">
                    <button type="button" id="category1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-menu"></i></button>
                    <div class="dropdown-menu" aria-labelledby="category1">
                        <div class="navbar-category-dropdown">
                            <ul>
                                @include('layouts.header')

                            </ul>
                        </div>
                    </div>
                </div>
                <a href="{{url('/')}}" class="mobile-brand">
                    <img src="{{asset('assets/images/logo-red.png')}}" alt="logo" class="logo">
                </a>
                <div class="mobile-navbar-option">
                    <div class="navbar-right-action-item navbar-language">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" id="language2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-globe"></i>
                                简体中文
                            </button>
                            <div class="dropdown-menu" aria-labelledby="language2">

                                <a class="dropdown-item" href="#">
                                    <img src="{{asset('assets/images/flag-3.png')}}" alt="flag">
                                    简体中文
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="navbar-right-action-item navbar-right-search">
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" id="search1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flaticon-search"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="search1">

                                <form action="{{ route('shops.search') }}">

                                    <div class="navbar-search-input">
                                        <div class="form-group">
                                            <input type="text" name="search" class="form-control" placeholder="搜索音箱型号">
                                            <button type="submit" class="btn"><span><i class="flaticon-search"></i></span></button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- 桌面菜单 -->

            <div class="main-nav">
                <div class="container-fluid p-0">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <div class="navbar-top">
                            <div class="container">
                                <a class="navbar-brand" href="{{url('/')}}">
                                    <img src="{{asset('assets/images/logo-red.png')}}" alt="logo" class="logo">
                                </a>
                                <div class="navbar-top-action">
                                    <div class="navbar-top-action-item navbar-support">
                                        <div class="navbar-support-inner">
                                            <div class="navbar-support-icon">
                                                <i class="flaticon-listen"></i>
                                            </div>
                                            <div class="navbar-support-details">
                                                <span>联系我们</span>
                                                <p><a href="tel:0020-678-1234-207">+86 18922775404</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navbar-top-action-item navbar-top-right">
                                        <div class="navbar-right-inner">
                                            <div class="navbar-right-item">
                                                <div class="navbar-search">

                                                    <form action="{{ route('shops.search') }}">

                                                        <div class="navbar-search-input">
                                                            <div class="form-group">
                                                                <input type="text" name="search" class="form-control" placeholder="搜索音箱型号">
                                                                <button type="submit" class="btn"><span><i class="flaticon-search"></i></span></button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-main">
                            <div class="container">
                                <div class="d-flex align-items-center justify-content-between full-width">
                                    <div class="navbar-category">
                                        <button>
                                            <i class="flaticon-menu"></i>
                                            所有音箱系列
                                        </button>
                                        <div class="navbar-category-dropdown">
                                            <ul>

                                                @include('layouts.header')


                                            </ul>
                                        </div>
                                    </div>
                                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item">
                                                <a href="{{url('/')}}" id="index" class="nav-link active">主页</a>

                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('shop')}}" id="shop" class="nav-link">商店</a>

                                            </li>


                                            <li class="nav-item">
                                                <a href="contact-us.html" id="aboutus" class="nav-link">关于我们</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="navbar-language">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" id="language1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="flaticon-globe"></i>
                                                简体中文
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="language1">

                                                <a class="dropdown-item" href="#">
                                                    <img src="{{asset('assets/images/flag-3.png')}}" alt="flag">
                                                    简体中文
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <!-- .end navbar -->


    <div class="container-fluid">
        <div class="header-carousel header-carousel-three owl-carousel owl-theme">


            @foreach($productlists as $productlist)
                @if($loop->iteration >= 3)
                    @break
                @else
            <div class="item">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-lg-7">
                        <div class="header-max-width">
                            <div class="header-content-title header-content-title-red">
                                <small>{{$productlist->sname}} 系列</small>
                                <h1>全新{{$productlist->Model}}音箱</h1>
                                <p>这是一个演示 </p>
                                <a href="{{url('shop/product')}}/{{$productlist->id}}" class="btn btn-icon btn-red">
                                    <i class="flaticon-shopping-cart"></i>
                                    <i class="flaticon-shopping-cart"></i>
                                    查看更多
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-5">
                        <div class="header-content-image">
                            <img src="{{$productlist->img01}}" alt="header">
                            <!--
                            <div class="product-card-badge product-badge-success">


                                <div class="product-card-badge-inner">
                                     <p>全新 To</p>
                                     <h3>30 <small>% <span>Off</span></small></h3>
                                 </div>


                             </div>
                        -->
                        </div>
                    </div>
                </div>
            </div>
                @endif
            @endforeach


        </div>




    </div>
</header>



        <div class="service-section">
            <div class="container">
                <div class="service-section-two">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-4 col-lg-2 pb-30">
                            <div class="service-review">
                                <h3>14K</h3>
                                <h4>Reviews</h4>
                                <p><i class="flaticon-placeholder"></i><a href="#">Share Location</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-lg-10 pb-30">
                            <div class="bg-white default-box-shadow border-radius-3 service-review-grid">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg service-review-item">
                                        <div class="service-review-item-inner">
                                            <div class="service-review-thumb">
                                                <i class="flaticon-box"></i>
                                            </div>
                                            <div class="service-review-content">
                                                <h3>Free Shipping</h3>
                                                <p>Capped at $45 per order</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg service-review-item">
                                        <div class="service-review-item-inner">
                                            <div class="service-review-thumb">
                                                <i class="flaticon-payment-method"></i>
                                            </div>
                                            <div class="service-review-content">
                                                <h3>Security Payments</h3>
                                                <p>Up to 12 months installments</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg service-review-item">
                                        <div class="service-review-item-inner">
                                            <div class="service-review-thumb">
                                                <i class="flaticon-fabric"></i>
                                            </div>
                                            <div class="service-review-content">
                                                <h3>Free Fabric Swatches</h3>
                                                <p>Writing result-oriented</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg service-review-item">
                                        <div class="service-review-item-inner">
                                            <div class="service-review-thumb">
                                                <i class="flaticon-return-of-investment"></i>
                                            </div>
                                            <div class="service-review-content">
                                                <h3>7 Days Money Return</h3>
                                                <p>Capped at $45 per order</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .end service-section -->
        <!-- trending-carousel-section -->
        <section class="trending-carousel-section pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-lg-5 pb-30">
                        <div class="section-title section-title-left m-0">
                            <small>2020 Trendy Collection</small>
                            <h2>New Top Trendy <br> Furniture Accessories</h2>
                            <a href="shops-right-sidebar-with-categories.html" class="btn btn-icon btn-red">
                                <i class="flaticon-shopping-cart"></i>
                                <i class="flaticon-shopping-cart"></i>
                                Shop Now
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-7 pb-30">
                        <div class="trending-bg-carousel owl-carousel owl-theme round-shape-carousel-button">
                            <div class="item">
                                <div class="trending-bg-image">
                                    <img src="{{asset('images/trending-carousel-1.jpg')}}" alt="trending-product">
                                </div>
                            </div>
                            <div class="item">
                                <div class="trending-bg-image">
                                    <img src="{{asset('images/trending-carousel-2.jpg')}}" alt="trending-product">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- .end trending-carousel-section -->
        <!-- new-arrival-section -->
        <section class="new-arrival-section pb-70">
            <div class="container">
                <div class="section-title">
                    <small>精选产品</small>
                    <h2>热销音箱</h2>
                </div>



                <div class="product-filter-tab-details">
                    <div class="row">

                        @foreach($productlists as $productlist)
                            @foreach($recommends as $recommend)
                                @if($productlist->Model == $recommend->recommendname)
                        <div class="col-sm-12 col-md-6 col-lg-3 element-item pb-30 furniture">
                            <div class="trending-product-card">
                                <div class="product-card-thumb">
                                    <a href="{{url('shop/product')}}/{{$productlist->id}}">
                                        <img src="{{asset($productlist->img01)}}" alt="product" class="product-main-thumb">
                                        <img src="{{asset($productlist->img01)}}" alt="product" class="product-hover-thumb">
                                    </a>
                                </div>
                                <div class="product-card-content">

                                    <h3>{{$productlist->Model}}</h3>

                                </div>

                               <!--
                               <div class="product-card-badge product-badge-success">
                                    <div class="product-card-badge-inner">
                                        30 <small>% <span>Off</span></small>
                                    </div>
                                </div>
                                -->
                            </div>
                        </div>
                                @endif

                            @endforeach
                        @endforeach

                    </div>
                </div>
            </div>
        </section>


@include('layouts.footer')


<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/form-validator.min.js')}}"></script>
<script src="{{asset('js/contact-form-script.js')}}"></script>
<script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
