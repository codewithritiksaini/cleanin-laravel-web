@extends('layout.site')
@section('meta')
    <!-- Title -->
    <title>Terms & Conditions | Cleanin - Professional Cleaning Services</title>

    <!-- Meta Description -->
    <meta name="description" content="Review Cleanin's Terms & Conditions to understand the rules and regulations governing our cleaning services. By using our services, you agree to these terms." />

    <!-- Meta Keywords -->
    <meta name="keywords" content="terms and conditions, service agreement, cleaning services terms, service terms, Cleanin service rules, legal terms, service policies" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="Terms & Conditions | Cleanin - Professional Cleaning Services" />
    <meta property="og:description" content="Review Cleanin's Terms & Conditions to understand the rules and regulations governing our cleaning services. By using our services, you agree to these terms." />
    <meta property="og:image" content="{{ asset('/'.$setting->dark_logo) }}" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Terms & Conditions | Cleanin - Professional Cleaning Services" />
    <meta name="twitter:description" content="Review Cleanin's Terms & Conditions to understand the rules and regulations governing our cleaning services. By using our services, you agree to these terms." />
    <meta name="twitter:image" content="{{ asset('/'.$setting->dark_logo) }}" />
@endsection
@section('content')

<!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})">
            </div>
            <div class="shape1 float-bob-x"><img src="{{ asset('assets/images/shapes/main-slider-v4-shape1.png') }}" alt="">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2 class="wow fadeInDown" data-wow-duration="1500ms">
                        Term & Condition</h2>

                    <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span class="icon-right-arrow1"></span></li>
                        <li>Term & Condition</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->

<!--Start About One-->
<section class="about-one">
    <div class="shape1"><img src="{{ asset('assets/images/shapes/about-v1-shape1.png') }}" alt=""></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-one__content">
                    <h2>Term & Condition</h2>
                    @if (isset($content->term) && !empty($content->term))
                        <p class="mt-4">{!! nl2br(e($content->term)) !!}</p>
                    @else
                        <p class="mt-4">No Term & Condition content available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
