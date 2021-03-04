<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">




<head>
    <meta charset="utf-8">
    <meta name="description" content="Luba">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="HiBootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <title>商店丨{{config('app.name','珊海电业')}}</title>

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



<header class="header-page position-relative">
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

                                <form action="{{ route('shops.search') }}" class="search-form">

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

                                                    <form action="{{ route('shops.search') }}" class="search-form">

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
                                        <button type="button" id="categoryButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="flaticon-menu"></i>
                                            所有音箱系列
                                        </button>
                                        <div class="navbar-category-dropdown dropdown-menu" aria-labelledby="categoryButton">
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


</header>


        <!-- product-section -->
        <div class="product-section pt-50 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-3 pb-30">


                        <div class="sidebar-item">
                            <div class="sidebar-title">
                                <h3>音箱系列筛选</h3>
                            </div>

                            <div class="product-filter-tab btn-group-vertical">
                                @if($search != null)
                                    <div class="alert alert-success" role="alert">
                                        <h2 class="alert-heading">正处于搜索模式</h2>
                                        <hr>
                                        <a class="btn btn-primary" href="{{url('/')}}">返回主页</a>
                                    </div>
                                @else
                                    <button class="product-filter-tab-list product-filter-tab-red active" data-filter="*" style="font-size: 25px;margin: 15px 0px 3px 0px;">全部</button>
                                    @foreach($serieslists as $serieslist)
                                        <button class="product-filter-tab-list product-filter-tab-red" data-filter=".{{$serieslist->sname}}" style="font-size: 25px;margin: 15px 0px 3px 0px;">{{$serieslist->sname}}</button>
                                    @endforeach
                                @endif
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-9 pb-30">

                        <div class="product-list-header">
                            <div class="product-list-header-item">
                                <div class="sidebar-title">
                                    <h3>音箱</h3>
                                </div>
                            </div>

                        </div>


                        <div class="product-content product-filter-tab-details">
                            <div class="row">

                                @foreach($productlists as $productlist)
                                        <div class="col-sm-12 col-md-6 col-lg-4 pb-30 element-item {{$productlist->sname}}">
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

                                @endforeach



                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- .end product-section -->


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
<script>
    var classVal = document.getElementById("index").getAttribute("class");
    var shop = document.getElementById('shop');
    shop.className += ' active';
    classVal = classVal.replace("active","");
    document.getElementById("index").setAttribute("class",classVal );

    var filters = {!! json_encode($search) !!};
    $(document).ready(function () {
        $('.search-form input[name=search]').val(filters);

    })
</script>
</body>
</html>

