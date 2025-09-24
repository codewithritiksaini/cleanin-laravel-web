@extends('layout.site')

@section('meta')
    <!-- Title -->
    <title>Gallery | Cleanin - Trusted Cleaning Services for Homes & Offices</title>

    <!-- Meta Description -->
    <meta name="description" content="Explore our gallery to see our professional cleaning services and happy customers. Check out our latest cleaning projects and transformations." />

    <!-- Meta Keywords -->
    <meta name="keywords" content="gallery, professional cleaning, home cleaning, office cleaning, before and after cleaning" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="Gallery | Cleanin - Trusted Cleaning Services for Homes & Offices" />
    <meta property="og:description" content="Explore our gallery to see our professional cleaning services and happy customers. Check out our latest cleaning projects and transformations." />
    <meta property="og:image" content="{{ asset('/'.$setting->dark_logo) }}" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Gallery | Cleanin - Trusted Cleaning Services for Homes & Offices" />
    <meta name="twitter:description" content="Explore our gallery to see our professional cleaning services and happy customers. Check out our latest cleaning projects and transformations." />
    <meta name="twitter:image" content="{{ asset('/'.$setting->dark_logo) }}" />

@endsection

@section('content')

<!--Start Page Header-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="shape1 float-bob-x"><img src="assets/images/shapes/main-slider-v4-shape1.png" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2 class="wow fadeInDown" data-wow-duration="1500ms">
                    Video Gallery</h2>

                <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
            <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span class="icon-right-arrow1"></span></li>
                    <li>Video Gallery</li>
                </ul>
            </div>
        </div>
    </section>
<!--End Page Header-->

@endsection
