@extends('web.layouts.master')

@section('web-content')

<div class="intro-section site-blocks-cover innerpage" style="background-image: url('{{ asset('assets') }}/images/hero_1.jpg');">
    <div class="container">
        <div class="row align-items-center text-center border">
            <div class="col-lg-12 mt-5" data-aos="fade-up">
                <h1>Our Products</h1>
                <p class="text-white text-center">
                    <a href="index.html">Home</a>
                    <span class="mx-2">/</span>
                    <span>Products</span>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="project-item">
                    <div class="project-item-contents">
                        <a href="project-single.html">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="{{ asset('assets') }}/images/products/lad1.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="project-item">
                    <div class="project-item-contents">Recent Products

                        <a href="project-single.html">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="{{ asset('assets') }}/images/products/lad2.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="project-item">
                    <div class="project-item-contents">
                        <a href="project-single.html">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="{{ asset('assets') }}/images/products/lad3.jpg" alt="Image" class="img-fluid">
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4">
                <div class="project-item">
                    <div class="project-item-contents">
                        <a href="project-single.html">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="{{ asset('assets') }}/images/products/lad5.jpeg" alt="Image" class="img-fluid">
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4">
                <div class="project-item">
                    <div class="project-item-contents">
                        <a href="project-single.html">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="{{ asset('assets') }}/images/products/gn2.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="project-item">
                    <div class="project-item-contents">
                        <a href="project-single.html">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="{{ asset('assets') }}/images/products/gn3.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="project-item">
                    <div class="project-item-contents">
                        <a href="project-single.html">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="{{ asset('assets') }}/images/products/gn4.jpg" alt="Image" class="img-fluid">
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4">
                <div class="project-item">
                    <div class="project-item-contents">
                        <a href="project-single.html">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="{{ asset('assets') }}/images/products/gn5.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection