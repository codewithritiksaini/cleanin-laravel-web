@extends('layout.site')

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
                Team </h2>
            <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                {{-- <li><a href="index.html">Home</a></li> --}}
                <li><a href="{{ url('/') }}">Home</a></li>

                <li><span class="icon-right-arrow1"></span></li>
                <li>Team</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->
        <!--Start Team Four -->
        <section class="team-four">
            <div class="team-four__pattern" style="background-image: url({{ asset('assets/images/pattern/team-v4-pattern.png') }});">
            </div>
            <div class="container">
                <div class="row">
                @foreach ($teams as $team)
                    <!--Start Team Four Single-->

                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="team-four__single text-center">
                            <div class="team-four__single-img">
                                <div class="team-four__single-img-inner">
                                    <img src="{{ asset('storage/teams/'.$team->image) }} " alt="">
                                </div>
                            </div>

                            <div class="team-four__single-content">
                                <h2>
                                    <a href="{{ route('teams.details', $team->slug) }}">
                                        {{ $team->name }}
                                    </a>

                                </h2>
                                <p>{{ $team->position }}</p>
                                <ul class="social-links">
                                    <li><a href="{{ $team->facebook }}"><span class="icon-facebook-app-symbol"></span></a></li>
                                    <li><a href="{{ $team->twitter }}"><span class="icon-twitter-1"></span></a></li>
                                    <li><a href="{{ $team->instagram }}"><span class="icon-instagram"></span></a></li>
                                    <li><a href="{{ $team->whatsapp }}"><span class="fab fa-whatsapp"></span></a></li>
                                </ul>
                            </div>
                         <a href="{{ route('teams.details', $team->slug) }}">Read more <span class="icon-plus"></span></a>

                        </div>
                    </div>
                    <!--End Team Four Single-->
                @endforeach
                </div>
            </div>
        </section>
        <!--End Team Four -->

        <!--Start Brand One-->
        <section class="brand-one brand-one--two about">
            <div class="container">
                <div class="brand-one__inner">
                    <div class="brand-one__carousel owl-carousel owl-theme">
                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->
                    </div>
                </div>
            </div>
        </section>
        <!--End Brand One-->

        @endsection
