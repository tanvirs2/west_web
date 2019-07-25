@extends('web.layouts.master')

@section('web-content')

    
<div class="intro-section site-blocks-cover innerpage" style="background-image: url('{{ asset('assets') }}/images/hero_1.jpg');">
    <div class="container">
        <div class="row align-items-center text-center border">
            <div class="col-lg-12 mt-5" data-aos="fade-up">
                <h1>Testimonials</h1>
                <p class="text-white text-center">
                    <a href="index.html">Home</a>
                    <span class="mx-2">/</span>
                    <span>Testimonials</span>
                </p>
            </div>
        </div>
    </div>
</div>


<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-5">
                <div class="testimonial">
                    <img src="{{ asset('assets') }}/images/person_3_sq.jpg" alt="">
                    <blockquote>
                        <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident deleniti iusto molestias, dolore vel fugiat ab placeat ea?&rdquo;</p>
                    </blockquote>
                    <p class="client-name">Matt Keygen</p>
                </div>
            </div>
            <div class="col-md-6 mb-5 mb-md-5">
                <div class="testimonial">
                    <img src="{{ asset('assets') }}/images/person_4_sq.jpg" alt="">
                    <blockquote>
                        <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident deleniti iusto molestias, dolore vel fugiat ab placeat ea?&rdquo;</p>
                    </blockquote>
                    <p class="client-name">Matt Keygen</p>
                </div>
            </div>

            <div class="col-md-6 mb-5 mb-md-5">
                <div class="testimonial">
                    <img src="{{ asset('assets') }}/images/person_3_sq.jpg" alt="">
                    <blockquote>
                        <p>&ldquo;Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident deleniti iusto molestias, dolore vel fugiat ab placeat ea?&rdquo;</p>
                    </blockquote>
                    <p class="client-name">Matt Keygen</p>
                </div>
            </div>
            <div class="col-md-6 mb-5 mb-md-5">
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
@endsection