@extends('layout.site')

@section('meta')
    <!-- Title -->
    <title>Refund Policy | Cleanin - Hassle-Free Refunds for Professional Cleaning Services</title>

    <!-- Meta Description -->
    <meta name="description" content="Learn about Cleanin's Refund Policy for our cleaning services. We offer clear and fair refund terms to ensure your satisfaction with our services." />

    <!-- Meta Keywords -->
    <meta name="keywords" content="refund policy, cleaning service refund, return policy, money-back guarantee, Cleanin refund terms, service satisfaction guarantee" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="Refund Policy | Cleanin - Hassle-Free Refunds for Professional Cleaning Services" />
    <meta property="og:description" content="Learn about Cleanin's Refund Policy for our cleaning services. We offer clear and fair refund terms to ensure your satisfaction with our services." />
    <meta property="og:image" content="{{ asset('/'.$setting->dark_logo) }}" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Refund Policy | Cleanin - Hassle-Free Refunds for Professional Cleaning Services" />
    <meta name="twitter:description" content="Learn about Cleanin's Refund Policy for our cleaning services. We offer clear and fair refund terms to ensure your satisfaction with our services." />
    <meta name="twitter:image" content="{{ asset('/'.$setting->dark_logo) }}" />
@endsection

@section('content')
<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})"></div>
    <div class="shape1 float-bob-x"><img src="{{ asset('assets/images/shapes/main-slider-v4-shape1.png') }}" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <h2 class="wow fadeInDown" data-wow-duration="1500ms">
                Refund Policy</h2>
            <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span class="icon-right-arrow1"></span></li>
                <li>Refund Policy</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

<!--Start Refund Policy Section-->
<section class="about-one">
    <div class="shape1"><img src="{{ asset('assets/images/shapes/about-v1-shape1.png') }}" alt=""></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-one__content">
                    <h2>Refund Policy</h2>
                    @if (isset($content->refund) && !empty($content->refund))
                        <p class="mt-4">{!! nl2br(e($content->refund)) !!}</p>
                    @else
                        <p class="mt-4">No Refund policy content available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Refund Policy Section-->
@endsection
