@extends('layout.site')

@section('meta')
    <title>401 Unauthorized | Cleanin - Login Required</title>
    <meta name="description" content="You must be logged in to access this page. Please log in to continue using Cleanin's services." />
    <meta name="keywords" content="401 error, unauthorized access, login required, Cleanin error, secure page, authentication error" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="401 Unauthorized | Cleanin - Login Required" />
    <meta property="og:description" content="You must be logged in to access this page. Please log in to continue using Cleanin." />
    <meta property="og:image" content="{{ asset('/'.$setting->dark_logo) }}" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="401 Unauthorized | Cleanin - Login Required" />
    <meta name="twitter:description" content="You must be logged in to access this page. Please log in to continue using Cleanin." />
    <meta name="twitter:image" content="{{ asset('/'.$setting->dark_logo) }}" />
@endsection

@section('content')
<section class="page-header">
        <div class="page-header__bg" style="background-image: url({{asset('assets/images/backgrounds/page-header-bg.jpg')}})">
        </div>
        <div class="shape1 float-bob-x"><img src="{{asset('assets/images/shapes/main-slider-v4-shape1.png')}}" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2 class="wow fadeInDown" data-wow-duration="1500ms">
                    401 - Unauthorized</h2>
                <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><span class="icon-right-arrow1"></span></li>
                    <li>401 - Unauthorized                </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->
    <!--Start Error Page-->
    <section class="error-page">
        <div class="error-page__pattern" style="background-image: url({{asset('assets/images/pattern/error-page-pattern.png')}});"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="error-page__wrapper text-center">
                        <div class="error-page__content">
                            <h2>401</h2>
                            <h3>Opps! Unauthorized</h3>
                            <p>You must be logged in to view this page.</p>
                            <div class="btn-box">
                                <a href="{{route('home')}}" class="thm-btn">
                                    Go Back Home
                                    <i class="icon-next"></i>
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Error Page-->
@endsection
