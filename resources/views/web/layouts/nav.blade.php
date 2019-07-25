<!DOCTYPE html>
<html lang="en">

<head>
    <title>West Apparels &mdash; Website by Tanvir Sarker</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Muli:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/aos.css">
    <link href="{{ asset('assets') }}/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    <div class="header-top bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-lg-3">
                    <a href="index.html">
                        <img src="{{ asset('assets') }}/images/logo.png" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3 d-none d-lg-block">

                    <div class="quick-contact-icons d-flex">
                        <div class="icon align-self-start">
                            <span class="flaticon-placeholder text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h4 d-block">Bangladesh</span>
                            <span class="caption-text"> Siddirganj, Narayanganj</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex">
                        <div class="icon align-self-start">
                            <span class="flaticon-call text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h4 d-block"> +88-02-01730019411</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex">
                        <div class="icon align-self-start">
                            <span class="flaticon-email text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h4 d-block">biplob@westapparelltd.com</span>
                        </div>
                    </div>
                </div>

                <div class="col-6 d-block d-lg-none text-right">
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a>
                </div>
            </div>
        </div>




        <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

            <div class="container">
                <div class="d-flex align-items-center">

                    <div class="mr-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                <li class="{{ Route::is('home')?'active':null }}">
                                    <a href="{{ route('home') }}" class="nav-link text-left">Home</a>
                                </li>
                                <li class="{{ Route::is('about_us')?'active':null }}">
                                    <a href="{{ route('about_us') }}" class="nav-link text-left">About Us</a>
                                </li>
                                <li class="{{ Route::is('products')?'active':null }}">
                                    <a href="{{ route('products') }}" class="nav-link text-left">Our Products</a>
                                </li>
                                <li class="{{ Route::is('testimonials')?'active':null }}">
                                    <a href="{{ route('testimonials') }}" class="nav-link text-left">Testimonials</a>
                                </li>
                                <li class="{{ Route::is('contact')?'active':null }}">
                                    <a href="{{ route('contact') }}" class="nav-link text-left">Contact</a>
                                </li>
                            </ul>                                                                                                                                                                                                                                                                                          </ul>
                        </nav>

                    </div>

                </div>
            </div>

        </div>

    </div>

