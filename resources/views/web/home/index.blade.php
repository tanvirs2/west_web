@extends('web.layouts.master')

@section('web-content')

<div class="hero-slide owl-carousel site-blocks-cover">
    <div class="intro-section" style="background-image: url('{{ asset('assets') }}/images/hero_1.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                    <h1>We Are <strong>Leading</strong> Industry of Garments</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="intro-section" style="background-image: url('{{ asset('assets') }}/images/slide2.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                    <span class="d-block"></span>
                    <h1>Experts and High Quality Works</h1>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- END slider -->


<div class="site-section services-1-wrap">
    <div class="container">
        <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-5">
                <h3 class="section-subtitle">What We Do</h3>
                <h2 class="section-title mb-4 text-black">We Are <strong>Leading Industry</strong> of Garments. We Love What We Do</h2>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6">
                <div class="service-1">
                    <span class="number">01</span>
                    <div class="service-1-icon">
                        <span class="flaticon-engineer"></span>
                    </div>
                    <div class="service-1-content">
                        <h3 class="service-heading">Professional Man Power</h3>
                        <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-1">
                    <span class="number">02</span>
                    <div class="service-1-icon">
                        <span class="flaticon-compass"></span>
                    </div>
                    <div class="service-1-content">
                        <h3 class="service-heading">Great Design</h3>
                        <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-1">
                    <span class="number">03</span>
                    <div class="service-1-icon">
                        <span class="flaticon-oil-platform"></span>
                    </div>
                    <div class="service-1-content">
                        <h3 class="service-heading">Quality Makings</h3>
                        <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-1">
                    <span class="number">04</span>
                    <div class="service-1-icon">
                        <span class="flaticon-crane"></span>
                    </div>
                    <div class="service-1-content">
                        <h3 class="service-heading">Quality Works</h3>
                        <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END services -->

<div class="site-section">
    <div class="block-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('assets') }}/images/about_1.jpg" alt="Image " class="img-fluid img-overlap">
                </div>
                <div class="col-lg-5 ml-auto">
                    <h3 class="section-subtitle">Why Choose Us</h3>
                    <h2 class="section-title mb-4">More than <strong>25 year experience</strong> in Garments</h2>
                    <p>Reprehenderit, odio laboriosam? Blanditiis quae ullam quasi illum minima nostrum perspiciatis error consequatur sit nulla.</p>

                    <div class="row my-5">
                        <div class="col-lg-12 d-flex align-items-center mb-4">
                            <span class="line-height-0 flaticon-oil-platform display-4 mr-4 text-primary"></span>
                            <div>
                                <h4 class="m-0 h5 text-white">Expert in Making</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex align-items-center mb-4">
                            <span class="line-height-0 flaticon-compass display-4 mr-4 text-primary"></span>
                            <div>
                                <h4 class="m-0 h5 text-white">Modern Design</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="col-lg-12 d-flex align-items-center">
                            <span class="line-height-0 flaticon-planning display-4 mr-4 text-primary"></span>
                            <div>
                                <h4 class="m-0 h5 text-white">Leading In Garments Planning</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>



                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- END block-2 -->


<div class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-end">
                <img src="{{ asset('assets') }}/images/img_transparent.png" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-7 align-self-center mb-5">

                <div class="bg-black  quote-form-wrap wrap text-white">
                    <div class="mb-5">
                        <h3 class="section-subtitle">Get A Quote</h3>
                        <h2 class="section-title mb-4">Request A <strong>Quote</strong></h2>
                    </div>
                    <form action="#" class="quote-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Your name*">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Phone number">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Your email*">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <textarea name="" class="form-control" id="" placeholder="Message*" cols="30" rows="7"></textarea>
                            </div>
                            <div class="col-md-6 align-self-end">
                                <input type="submit" class="btn btn-primary btn-block btn-lg rounded-0" value="Send Message">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="site-section block-3">
    <div class="container">

        <div class="mb-5">
            <h3 class="section-subtitle">Our Products</h3>
            <h2 class="section-title mb-4">Explore Our <strong>Recent Products</strong></h2>
        </div>

        <div class="projects-carousel-wrap">
            <div class="owl-carousel owl-slide-3">
                <div class="project-item">
                    <div class="project-item-contents">
                        <a href="#">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="{{ asset('assets') }}/images/works_1.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="project-item">
                    <div class="project-item-contents">
                        <a href="#">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="{{ asset('assets') }}/images/works_2.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="project-item">
                    <div class="project-item-contents">
                        <a href="#">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="{{ asset('assets') }}/images/works_3.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="project-item">
                    <div class="project-item-contents">
                        <a href="#">
                            <span class="project-item-category">Factory</span>
                            <h2 class="project-item-title">
                                Building Refinery
                            </h2>
                        </a>
                    </div>
                    <img src="{{ asset('assets') }}/images/works_4.jpg" alt="Image" class="img-fluid">
                </div>


            </div>
        </div>

    </div>
</div>



<div class="site-section testimonial-wrap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mb-5 text-center">
                <h3 class="section-subtitle">Testimonial</h3>
                <h2 class="section-title text-black mb-4">What People Says</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="testimonial">
                    <img src="{{ asset('assets') }}/images/person_3_sq.jpg" alt="">
                    <blockquote>
                        <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident deleniti iusto molestias, dolore vel fugiat ab placeat ea?&rdquo;</p>
                    </blockquote>
                    <p class="client-name">Matt Keygen</p>
                </div>
            </div>
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="testimonial">
                    <img src="{{ asset('assets') }}/images/person_4_sq.jpg" alt="">
                    <blockquote>
                        <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident deleniti iusto molestias, dolore vel fugiat ab placeat ea?&rdquo;</p>
                    </blockquote>
                    <p class="client-name">Matt Keygen</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mb-5 text-left">
                <h3 class="section-subtitle">Blog</h3>
                <h2 class="section-title text-black mb-4">News &amp; Updates</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                <div class="blog-entry">
                    <a href="#" class="img-link">
                        <img src="{{ asset('assets') }}/images/hero_1.jpg" alt="Image" class="img-fluid">
                    </a>
                    <div class="blog-entry-contents">
                        <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>
                        <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                <div class="blog-entry">
                    <a href="#" class="img-link">
                        <img src="{{ asset('assets') }}/images/hero_1.jpg" alt="Image" class="img-fluid">
                    </a>
                    <div class="blog-entry-contents">
                        <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>
                        <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 mb-lg-0 col-lg-4">
                <div class="blog-entry">
                    <a href="#" class="img-link">
                        <img src="{{ asset('assets') }}/images/hero_1.jpg" alt="Image" class="img-fluid">
                    </a>
                    <div class="blog-entry-contents">
                        <h3><a href="#">Top Companies That Are Best In Industrial Business</a></h3>
                        <div class="meta">Posted by <a href="#">Admin</a> In <a href="#">News</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

    