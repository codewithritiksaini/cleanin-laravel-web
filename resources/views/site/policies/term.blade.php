@extends('layout.site')

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
                        About us</h2>

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
                    <p>{{ $content->term }}</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
