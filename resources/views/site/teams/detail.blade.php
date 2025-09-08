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
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span class="icon-right-arrow1"></span></li>
                        <li>Team Details</li>
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
                                <img src="{{ asset('assets/images/team/team-details-img1.jpg') }}" alt="" />
                            </div>

                            <div class="team-details__sidebar-content">
                                <div class="team-details__sidebar-content-text1">
                                    <span>Cleaning Expert</span>
                                    <h2>Martyn D Joseph</h2>
                                    <p>
                                        It is a long established fact that a reader will be
                                        distracted by the readable content of a page when looking
                                        at its layout. The point of using.
                                    </p>
                                </div>

                                <div class="team-details__sidebar-content-text2">
                                    <ul>
                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-cleaning-service"></span>
                                            </div>
                                            <div class="text-box">
                                                <span>Experience :</span>
                                                <p><a href="#">{{ $team->experience }}</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-call-1"></span>
                                            </div>
                                            <div class="text-box">
                                                <span>Phone :</span>
                                                <p><a href="tel:+91{{ $team->phone }}">+91{{ $team->phone }}</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-envelope"></span>
                                            </div>
                                            <div class="text-box">
                                                <span>Email :</span>
                                                <p>
                                                    <a href="mailto:{{ $team->email }}">{{ $team->email }}</a>
                                                </p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon-box">
                                                <span class="icon-placeholder"></span>
                                            </div>
                                            <div class="text-box">
                                                <span>Location :</span>
                                                <p><a href="{{ $team->location_link }}">{{ $team->location }}</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="team-details__sidebar-social-links">
                                    <a href="{{ $team->facebook }}"><span class="icon-facebook-app-symbol"></span></a>
                                    <a href="{{ $team->twitter }}"><span class="icon-twitter-1"></span></a>
                                    <a href="{{ $team->instagram }}"><span class="icon-instagram"></span></a>
                                    <a href="{{ $team->pinterest }}"><span class="icon-pinterest"></span></a>
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
                                      <a href="#">{{ $team->content }}
                                    </p>
                                </div>

                                <ul class="skill-one__progress">
                                    <li>
                                        <div class="skill-one__progress-single">
                                            <div class="title-box">
                                                <p>Repairs</p>
                                            </div>

                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="90%">
                                                    <div class="count-text">90%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="skill-one__progress-single">
                                            <div class="title-box">
                                                <p>Cleaning</p>
                                            </div>

                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="85%">
                                                    <div class="count-text">85%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="skill-one__progress-single">
                                            <div class="title-box">
                                                <p>Organization</p>
                                            </div>

                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="80%">
                                                    <div class="count-text">80%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="skill-one__progress-single">
                                            <div class="title-box">
                                                <p>Commercial cleaning</p>
                                            </div>

                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="90%">
                                                    <div class="count-text">90%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="team-details__content-text2">
                                <div class="title-box">
                                    <h2>Educational Experience</h2>
                                    <p>
                                        It is a long established fact that a reader will be
                                        distracted by the readable content of a page when looking
                                        at its layout. The point of using Lorem Ipsum is that it
                                        has a more-or-less normal distribution of letters, as
                                        opposed to using 'Content here, content here', making it
                                        look like readable English. Many desktop publishing
                                        packages and web.
                                    </p>
                                </div>

                                <div class="team-details__content-text2-bottom">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="team-details__content-text2-single">
                                                <div class="icon-box">
                                                    <span class="icon-school-1"></span>
                                                </div>
                                                <div class="text-box">
                                                    <h2>University of Oxford</h2>
                                                    <p>Certificate in Commercial Cleaning Management</p>
                                                    <span>Passing Year June 2012</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="team-details__content-text2-single">
                                                <div class="icon-box">
                                                    <span class="icon-school-1"></span>
                                                </div>
                                                <div class="text-box">
                                                    <h2>University of Oxford</h2>
                                                    <p>Certificate in Commercial Cleaning Management</p>
                                                    <span>Passing Year June 2017</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Team Details Content-->
                </div>
            </div>
        </section>
        <!--End Team Details-->

        <!--Start Team One-->
        <section class="team-one team-one--team-details">
            <div class="container">
                <div class="sec-title text-center sec-title-animation animation-style1">
                    <div class="sec-title__tagline center">
                        <div class="icon-box">
                            <span class="icon-household"></span>
                        </div>

                        <div class="text title-animation">
                            <h4>We’ve Awesome Team Members</h4>
                        </div>
                    </div>
                    <h2 class="sec-title__title title-animation">
                        Meet Our Experienced & <br />
                        Professional Team
                    </h2>
                </div>

                <div class="team-one__carousel owl-carousel owl-theme thm-dot-style1">

                @foreach ($team_details as $team_detail)
                    <div class="team-one__single">
                        <div class="team-one__single-inner">

                            {{-- Team Main Image --}}
                            <div class="team-one__single-img">
                                <img src="{{ asset('storage/teams/'.$team_detail->image) }}" alt="{{ $team_detail->name }}" />
                            </div>

                            <div class="team-one__single-content">

                                {{-- Small Image --}}
                                <div class="img-box">
                                    <img src="{{ asset('storage/teams/'.$team_detail->image) }}" alt="{{ $team_detail->name }}" />
                                </div>

                                {{-- Name & Position --}}
                                <div class="text-box">
                                    <h2>
                                        <a href="{{ route('teams.details', $team_detail->slug) }}">
                                            {{ $team_detail->name }}
                                        </a>
                                    </h2>
                                    <p>{{ $team_detail->position }}</p>
                                </div>

                                {{-- Social Links --}}
                                <div class="social-links">
                                    @if ($team_detail->facebook)
                                        <a href="{{ $team_detail->facebook }}" target="_blank"><span class="icon-facebook-app-symbol"></span></a>
                                    @endif
                                    @if ($team_detail->twitter)
                                        <a href="{{ $team_detail->twitter }}" target="_blank"><span class="icon-twitter-1"></span></a>
                                    @endif
                                    @if ($team_detail->instagram)
                                        <a href="{{ $team_detail->instagram }}" target="_blank"><span class="icon-instagram"></span></a>
                                    @endif
                                    @if ($team_detail->whatsapp)
                                        <a href="https://wa.me/{{ $team_detail->whatsapp }}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

                </div>

                    <!--End Team One Single-->
                </div>
            </div>
        </section>
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

        <!--Start Cta One -->
        <section class="cta-one">
            <div class="shape1"></div>
            <div class="cta-one__bg" style="background-image: url({{ asset('assets/images/backgrounds/cta-v1-bg.jpg') }})"></div>
            <div class="container clearfix">
                <div class="cta-one__inner">
                    <div class="cta-one__content">
                        <div class="text-box">
                            <p>Quality Services provider</p>
                            <h2>Need Our services?</h2>
                        </div>

                        <div class="btn-box">
                            <a class="thm-btn" href="contact-1.html">get free quote
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
        </section>
        <!--End Cta One -->
        @endsection
