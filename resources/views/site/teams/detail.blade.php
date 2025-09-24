@extends('layout.site')
@section('content')
        <!-- /.stricky-header -->
        <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="
            background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }});
          "></div>
            <div class="shape1 float-bob-x">
                <img src="{{ asset('assets/images/shapes/main-slider-v4-shape1.png') }}" alt="" />
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2 class="wow fadeInDown" data-wow-duration="1500ms">
                        Team Details
                    </h2>
                    <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                        {{-- <li><a href="index.html">Home</a></li> --}}
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><span class="icon-right-arrow1"></span></li>
                        <li><a href="{{ route('teams') }}">Our Team</a></li>
                        <li><span class="icon-right-arrow1"></span></li>
                        <li>{{ $team->name }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Header-->
        <!--Start Team Details-->
        <section class="team-details">
            <div class="container">
                <div class="row">
                    <!--Start Team Details Sidebar-->
                    <div class="col-xl-4">
                        <div class="team-details__sidebar">
                            <div class="team-details__sidebar-img">
                                <img src="{{ asset('storage/teams/'. $team->image) }}" alt="" />
                            </div>

                            <div class="team-details__sidebar-content">
                                <div class="team-details__sidebar-content-text1">
                                    <span>{{$team->position}}</span>
                                    <h2>{{ $team->name }}</h2>
                                </div>

                                <div class="team-details__sidebar-content-text2">
                                    <ul>


                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-call-1"></span>
                                            </div>
                                            <div class="text-box">
                                                <span>Phone :</span>
                                                <p><a href="tel:+91{{$setting->mobile}}">+91{{$setting->mobile}}</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-envelope"></span>
                                            </div>
                                            <div class="text-box">
                                                <span>Email :</span>
                                                <p>
                                                   <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                                                </p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-placeholder"></span>
                                            </div>
                                            <div class="text-box">
                                                <span>Location :</span>
                                                <p><a href="{{$setting->short_address}}">{{$setting->short_address}}</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="team-details__sidebar-social-links">
                                      <a href="{{ $setting->facebook }}"><span class="icon-facebook-app-symbol"></span></a>
                            <a href="{{ $setting->twitter }}"><span class="icon-twitter-1"></span></a>
                            <a href="{{ $setting->instagram }}"><span class="icon-instagram"></span></a>
                            <a href="{{ $setting->whatsapp }}"><span class="fab fa-whatsapp"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Details Sidebar-->

                    <!--Start Team Details Content-->
                    <div class="col-xl-8">
                        <div class="team-details__content">
                            <div class="team-details__content-text1">
                                <div class="title-box">
                                    <h2>Professional Skills</h2>
                                    <p>
                                      <a  href="#">{{ $team->content }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Details Content-->
                </div>
            </div>
        </section>
        <!--End Team Details-->


        <!--End Team One-->

        <!--Start Brand One-->
        <section class="brand-one brand-one--two about">
            <div class="container">
                <div class="brand-one__inner">
                    <div class="brand-one__carousel owl-carousel owl-theme">
                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="" />
                                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="" />
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="" />
                                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="" />
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="" />
                                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="" />
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="" />
                                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="" />
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="" />
                                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="" />
                                </a>
                            </div>
                        </div>
                        <!--End Brand One Single-->

                        <!--Start Brand One Single-->
                        <div class="brand-one__single">
                            <div class="brand-one__single-inner">
                                <a href="#">
                                    <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="" />
                                    <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="" />
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
