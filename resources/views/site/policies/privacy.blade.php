@extends('layout.site')

@section('meta')
    <!-- Title -->
    <title>Privacy Policy | Cleanin - Protecting Your Privacy with Professional Cleaning Services</title>

    <!-- Meta Description -->
    <meta name="description" content="Read Cleanin's Privacy Policy to understand how we collect, use, and protect your personal data. We value your privacy and are committed to safeguarding your information." />

    <!-- Meta Keywords -->
    <meta name="keywords" content="privacy policy, data protection, personal information, privacy practices, secure cleaning services, data security, Cleanin privacy" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="Privacy Policy | Cleanin - Protecting Your Privacy with Professional Cleaning Services" />
    <meta property="og:description" content="Read Cleanin's Privacy Policy to understand how we collect, use, and protect your personal data. We value your privacy and are committed to safeguarding your information." />
    <meta property="og:image" content="{{ asset('/'.$setting->dark_logo) }}" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Privacy Policy | Cleanin - Protecting Your Privacy with Professional Cleaning Services" />
    <meta name="twitter:description" content="Read Cleanin's Privacy Policy to understand how we collect, use, and protect your personal data. We value your privacy and are committed to safeguarding your information." />
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
                Privacy Policy</h2>
            <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span class="icon-right-arrow1"></span></li>
                <li>Privacy Policy</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

<!--Start Privacy Policy Section-->
<section class="about-one">
    <div class="shape1"><img src="{{ asset('assets/images/shapes/about-v1-shape1.png') }}" alt=""></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-one__content">
                    <h2>Privacy Policy</h2>
                    @if (isset($content->policy) && !empty($content->policy))
                        <p class="mt-4">{!! nl2br(e($content->policy)) !!}</p>
                    @else
                        <p class="mt-4">No policy content available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Privacy Policy Section-->
@endsection
