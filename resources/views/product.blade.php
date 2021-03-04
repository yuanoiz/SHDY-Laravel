<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>
    <meta charset="utf-8">
    <meta name="description" content="Luba">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="HiBootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <title>{{$product->Model}}丨{{config('app.name','珊海电业')}}</title>

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
            <div class="container">
                <div class="header-padding position-relative">
                    <div class="header-page-shape">
                        <div class="header-page-shape-item">
                            <img src="{{asset('assets/images/header-page-shape-1.png')}}" alt="shape">
                        </div>
                        <div class="header-page-shape-item">
                            <img src="{{asset('assets/images/header-page-shape-2.png')}}" alt="shape">
                        </div>
                    </div>
                    <div class="header-page-title">
                        <h1>{{$product->Model}}</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">主页</a></li>
                                <li class="breadcrumb-item"><a href="{{url('shop')}}">商店</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$product->Model}} 音箱</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

        </header>



        <!-- product-details-section -->
        <div class="product-details-section pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6 pb-30">
                        <div class="product-details-item">
                            <div class="product-details-slider">

                                <div class="product-details-for popup-gallery">
                                    <div class="product-for-item">
                                        <div class="product-gallery-trigger">
                                            <a href="{{asset($product->img01)}}" title="{{$product->Model}}"><i class="bx bx-expand"></i></a>
                                        </div>
                                        <img src="{{asset($product->img01)}}" alt="product">
                                    </div>
                                    <div class="product-for-item">
                                        <div class="product-gallery-trigger">
                                            <a href="{{asset($product->img02)}}" title="{{$product->Model}}"><i class="bx bx-expand"></i></a>
                                        </div>
                                        <img src="{{asset($product->img02)}}" alt="product">
                                    </div>
                                    <div class="product-for-item">
                                        <div class="product-gallery-trigger">
                                            <a href="{{asset($product->img03)}}" title="{{$product->Model}}"><i class="bx bx-expand"></i></a>
                                        </div>
                                        <img src="{{asset($product->img03)}}" alt="product">
                                    </div>

                                </div>

                                <div class="product-details-nav">
                                    <div class="product-nav-item">
                                        <div class="product-nav-item-inner">
                                            <img src="{{asset($product->img02)}}" alt="product">
                                        </div>
                                    </div>
                                    <div class="product-nav-item">
                                        <div class="product-nav-item-inner">
                                            <img src="{{asset($product->img02)}}" alt="product">
                                        </div>
                                    </div>
                                    <div class="product-nav-item">
                                        <div class="product-nav-item-inner">
                                            <img src="{{asset($product->img03)}}" alt="product">
                                        </div>
                                    </div>
                                    <div class="product-nav-item">
                                        <div class="product-nav-item-inner">
                                            <img src="{{asset($product->img03)}}" alt="product">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-6 pb-30">
                        <div class="product-details-item">
                            <div class="product-details-caption">
                                <div class="availability-badge availability-badge-success mb-20">
                                    In Stock
                                </div>
                                <h3 class="mb-20">{{$product->Model}}</h3>



                                <ul class="product-info mb-5">
                                    <li>音箱系列: <strong>{{$product->sname}}</strong></li>
                                    <li>音箱类型: <strong>{{$product->Type}}</strong></li>
                                </ul>
                                <div class="product-details-para mb-20">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimquae aut fugit, sed quia consequuntur magni doloreratione voluptat.</p>
                                </div>



                                <div class="product-author">
                                    <div class="product-author-info">
                                        <h4>@电子邮件联系方式</h4>
                                        <p>267158752@qq.com</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-details-tab">
                    <ul class="product-details-tab-list">
                        <li class="active" data-product-tab-list="1">参数</li>
                        <li data-product-tab-list="2">关于产品</li>


                    </ul>
                    <div class="product-tab-information">

                        <div class="product-tab-information-item active" data-product-details-tab="1">
                            <div class="product-description product-description-table mb-30">
                                <table>
                                    <tbody>

                                    <tr>
                                        <td class="weight-bold">音箱型号</td>
                                        <td>{{$product->Model}}</td>
                                    </tr>
                                    <tr>
                                        <td class="weight-bold">音箱系列</td>
                                        <td>{{$product->sname}}</td>
                                    </tr>
                                    <tr>
                                        <td class="weight-bold">音箱类型</td>
                                        <td>{{$product->Type}}</td>
                                    </tr>
                                    <tr>
                                        <td class="weight-bold">音箱频响</td>
                                        <td>{{$product->FResponse}}</td>
                                    </tr>
                                    <tr>
                                        <td class="weight-bold">音箱功率</td>
                                        <td>{{$product->Power}}</td>
                                    </tr>
                                    <tr>
                                        <td class="weight-bold">音箱阻抗</td>
                                        <td>{{$product->Lmpedance}}</td>
                                    </tr>
                                    <tr>
                                        <td class="weight-bold">音箱灵敏度</td>
                                        <td>{{$product->Sensitvity}}</td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="product-tab-information-item" data-product-details-tab="2">
                            <div class="product-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minimquae aut fugit, sed quia consequuntur magni doloreratione voluptatem a incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nulla libero. Vivamus pharetra posuere sapien.</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



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
        </script>
    </body>

</html>
