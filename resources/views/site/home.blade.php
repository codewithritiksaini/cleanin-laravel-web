@extends('layout.site')

@section('meta')
    <!-- Title -->
    <title>Home | Cleanin - Professional Cleaning Services for Homes and Offices</title>

    <!-- Meta Description -->
    <meta name="description" content="Cleanin offers professional cleaning services for homes, offices, carpets, and commercial spaces. Affordable, reliable, and top-rated cleaning solutions. Book now for a spotless clean!" />

    <!-- Meta Keywords -->
    <meta name="keywords" content="cleaning services, professional cleaning, home cleaning, office cleaning, carpet cleaning, commercial cleaning, best cleaning services, affordable cleaning services, deep cleaning, cleaning company, reliable cleaning services" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:title" content="Cleanin - Professional Cleaning Services for Homes and Offices" />
    <meta property="og:description" content="Cleanin offers professional cleaning services for homes, offices, carpets, and commercial spaces. Affordable, reliable, and top-rated cleaning solutions. Book now for a spotless clean!" />
    <meta property="og:image" content="{{ asset('/'.$setting->dark_logo) }}" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Cleanin - Professional Cleaning Services for Homes and Offices" />
    <meta name="twitter:description" content="Cleanin offers professional cleaning services for homes, offices, carpets, and commercial spaces. Affordable, reliable, and top-rated cleaning solutions. Book now for a spotless clean!" />
    <meta name="twitter:image" content="{{ asset('/'.$setting->dark_logo) }}" />

@endsection

@section('content')
    <div class="stricky-header stricky-header__one stricked-menu main-menu">
        <div class="sticky-header__content"></div>
        <!-- /.sticky-header__content -->
    </div>
    <!-- /.stricky-header -->
    <!--Start Main Slider One-->
    <section class="main-slider-one">
        <div class="main-slider__carousel owl-carousel owl-theme">
            @foreach ($banners as $slider)
                <!--Start Main Slider One Single-->
                <div class="main-slider-one__single">
                    <div class="main-slider-one__bg"
                        style="background-image: url({{ asset('storage/banners/' . $slider->image[0]) }});">
                    </div>
                    <div class="container">
                        <div class="main-slider-one__content">
                            <div class="tagline">
                                <span>{{ $slider->title }}</span>
                            </div>
                            <div class="title-box">
                                <h2>{!! $slider->sub_title !!}</h2>
                            </div>
                            <div class="text-box">
                                <p>{{ $slider->description }}</p>
                            </div>

                            <div class="main-slider-one__btn">
                                <a class="thm-btn"
                                    href="{{ route(\Illuminate\Support\Facades\Route::has($slider->btn_url) ? $slider->btn_url : 'about') }}
">{{ $slider->btn_name }}
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
                <!--End Main Slider One Single-->
            @endforeach
        </div>

        <div class="bubbleContainer">
            <div class="bubble-1"></div>
            <div class="bubble-2"></div>
            <div class="bubble-3"></div>
            <div class="bubble-4"></div>
            <div class="bubble-5"></div>
            <div class="bubble-6"></div>
            <div class="bubble-7"></div>
            <div class="bubble-8"></div>
            <div class="bubble-9"></div>
            <div class="bubble-10"></div>
            <div class="bubble-11"></div>
            <div class="bubble-12"></div>
            <div class="bubble-13"></div>
            <div class="bubble-14"></div>
            <div class="bubble-15"></div>
        </div>
    </section>
    <!--End Main Slider One--><!--Start About One-->
    <section class="about-one">
        <div class="shape1"><img src="{{ asset('assets/images/shapes/about-v1-shape1.png') }}" alt=""></div>
        <div class="container">
            <div class="row">
                <!--Start About One Img-->
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="about-one__img">
                        <div class="about-one__video">
                            <a href="hhttps://www.youtube.com/watch?v=n0ORkURsIw8" class="video-popup">
                                <div class="about-one__video-icon">
                                    <span class="icon-play-button-arrowhead"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="about-one__img-left">
                                    <div class="single-img">
                                        <img src="assets/images/about/about-v1-img1.jpg" alt="#">
                                    </div>
                                    <div class="single-img">
                                        <img src="assets/images/about/about-v1-img2.jpg" alt="#">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="about-one__img-right">
                                    <div class="about-one__experience">
                                        <div class="count-box">
                                            <h2 class="count-text" data-stop="03" data-speed="1500">00</h2>
                                            <span>+</span>
                                        </div>
                                        <p>Years Of Experience</p>
                                    </div>

                                    <div class="about-one__img-right-img">
                                        <img src="{{ asset('assets/images/about/about-v1-img3.jpg') }}" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End About One Img-->

                <!--Start About One Content-->
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="about-one__content">
                            <div class="sec-title sec-title-animation animation-style2">
                                <div class="sec-title__tagline">
                                    <div class="icon-box">
                                        <span class="icon-household"></span>
                                    </div>

                                    <div class="text title-animation">
                                        <h4>About {{ $setting->title }} Agency</h4>
                                    </div>
                                </div>
                                <h2 class="sec-title__title title-animation">We Are A Highly Experienced <br> Cleaning
                                    Service Company
                                </h2>
                            </div>

                            <div class="about-one__content-text">
                                <p><p>{!! nl2br($about->content) !!}</p></p>
                            </div>

                            <div class="about-one__content-btn">
                                <a class="thm-btn" href="{{ route('contact') }}">Contact Us
                                    <i class="icon-next"></i>
                                    <span class="hover-btn hover-bx"></span>
                                    <span class="hover-btn hover-bx2"></span>
                                    <span class="hover-btn hover-bx3"></span>
                                    <span class="hover-btn hover-bx4"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                <!--End About One Content-->
            </div>
        </div>
    </section>
    <!--End About One--><!--Start Services One-->
    <div class="services-one">
        <div class="shape1 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}"
                alt=""></div>
        <div class="shape2 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}"
                alt=""></div>
        <div class="shape3 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}"
                alt=""></div>
        <div class="shape4 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}"
                alt=""></div>
        <div class="shape5 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}"
                alt=""></div>
        <div class="shape6 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}"
                alt=""></div>
        <div class="shape7 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}"
                alt=""></div>
        <div class="shape8 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}"
                alt=""></div>
        <div class="container">
            <div class="sec-title text-center sec-title-animation animation-style1">
                <div class="sec-title__tagline center">
                    <div class="icon-box">
                        <span class="icon-household"></span>
                    </div>

                    <div class="text title-animation">
                        <h4> What We Do </h4>
                    </div>
                </div>
                <h2 class="sec-title__title title-animation">Our Most Popular Cleaning <br>
                    Services For You </h2>
            </div>

            <div class="services-one__inner">
                <div class="services-one__carousel owl-carousel owl-theme thm-dot-style1">
                    <!--Start Services One Single-->
                    @foreach ($services as $service)
                        <div class="services-one__single">
                            <div class="services-one__single-inner text-center">
                                <div class="services-one__single-icon">
                                    <span class="icon-house-2"></span>
                                </div>
                                <h2><a href="{{ route('services.details', $service->slug) }}">{{ $service->title }}</a>
                                </h2>
                                <p>{{ Str::limit($service->description, 120) }}</p>

                                <div class="services-one__single-btn">
                                    <a href="{{ route('services.details', $service->slug) }}">Read more <span
                                            class="icon-plus"></span></a>
                                </div>
                            </div>

                            <div class="shadow-one"></div>
                            <div class="shadow-two"></div>
                        </div>
                    @endforeach
                    <!--End Services One Single-->
                </div>
            </div>
        </div>
    </div>

    <!--End Contact One --><!--Start Testimonial One-->
    <section class="testimonial-one">
        <div class="shape1"><img src="{{ asset('assets/images/shapes/testimonial-v1-shape1.png') }}" alt="">
        </div>
        <div class="container">
            <div class="sec-title sec-title-animation animation-style2">
                <div class="sec-title__tagline">
                    <div class="icon-box">
                        <span class="icon-household"></span>
                    </div>

                    <div class="text title-animation">
                        <h4>Testimonials</h4>
                    </div>
                </div>
                <h2 class="sec-title__title title-animation">Our Customer’s Feedback</h2>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-one__carousel owl-carousel owl-theme">

                        <!--Start Testimonial One Single-->
                        @foreach ($testimonials as $item)
                            <div class="testimonial-one__single text-center">
                                <div class="testimonial-one__single-img">
                                    <img src="{{ asset('storage/testimonials/' . $item->image) }}"
                                        alt="{{ $item->name }}">
                                </div>
                                <div class="testimonial-one__single-inner">
                                    <h2>{{ $item->name }}</h2>
                                    <p>{{ $item->testimonial }}</p>

                                    <div class="rating-box">
                                        Rating {!! $item->rating !!}
                                    </div>
                                </div>
                                <div class="icon-box">
                                    <span class="icon-quotation-up"></span>
                                </div>
                            </div>
                        @endforeach


                        <!--End Testimonial One Single-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial One-->
    <!--Start Working Process One-->
    <section class="working-process-one">
        <div class="shape2 float-bob-y"><img src="assets/images/shapes/working-process-v1-shape1.png" alt="">
        </div>
        <div class="shape3 float-bob-x"><img src="assets/images/shapes/working-process-v1-shape2.png" alt="">
        </div>
        <div class="container">
            <div class="sec-title text-center sec-title-animation animation-style1">
                <div class="sec-title__tagline center">
                    <div class="icon-box">
                        <span class="icon-household"></span>
                    </div>

                    <div class="text title-animation">
                        <h4>How It Works</h4>
                    </div>
                </div>
                <h2 class="sec-title__title title-animation">Our Working Process</h2>
            </div>

            <div class="shape1"></div>
            <div class="row">
                <!--Start Working Process One Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="working-process-one__single">
                        <div class="icon">
                            <div class="count-box">01</div>
                            <span class="icon-task-complete"></span>
                        </div>

                        <div class="content-box text-center">
                            <h2><a href="#">Make A Plan</a></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using.</p>
                        </div>
                    </div>
                </div>
                <!--End Working Process One Single-->

                <!--Start Working Process One Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="working-process-one__single">
                        <div class="icon">
                            <div class="count-box">02</div>
                            <span class="icon-calendar-1"></span>
                        </div>

                        <div class="content-box text-center">
                            <h2><a href="#">Set a Date</a></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using.</p>
                        </div>
                    </div>
                </div>
                <!--End Working Process One Single-->

                <!--Start Working Process One Single-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="working-process-one__single">
                        <div class="icon">
                            <div class="count-box">03</div>
                            <span class="icon-household"></span>
                        </div>

                        <div class="content-box text-center">
                            <h2><a href="#">Start Cleaning</a></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using.</p>
                        </div>
                    </div>
                </div>
                <!--End Working Process One Single-->
            </div>
        </div>
    </section>
    <!--End Working Process One-->
    <!--Start Blog One-->
    <section class="blog-one">
        <div class="container">
            <div class="sec-title text-center sec-title-animation animation-style1">
                <div class="sec-title__tagline center">
                    <div class="icon-box">
                        <span class="icon-household"></span>
                    </div>

                    <div class="text title-animation">
                        <h4>Blog & News</h4>
                    </div>
                </div>
                <h2 class="sec-title__title title-animation">Get Latest News & Updates</h2>
            </div>

            <div class="row">
                @foreach ($blogs as $blog)
                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="{{ $blog->title }}">
                            </div>

                            <div class="blog-one__single-content">
                                <div class="date-box">
                                    <p>{{ $blog->created_at->format('d-M-y') }}</p>
                                </div>
                                <div class="blog-one__single-content-inner">
                                    <ul class="meta-box">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-people"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="{{ Route('about') }}">By Admin</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="fa fa-eye"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">Views:
                                                        {{ \DB::table('views')->where('blog_id', $blog->id)->value('count') ?? 0 }}</a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>

                                    <h2><a href="{{ route('blogs.details', $blog->slug) }}">{{ $blog->name }}</a>
                                    </h2>
                                    <p>{{ Str::limit($blog->description, 100) }}</p>

                                    <div class="btn-box">
                                        <a href="{{ route('blogs.details', $blog->slug) }}">Read More <span
                                                class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @if (isset($teams) && $teams->isNotEmpty())
        <section class="team-four">
            <div class="team-four__pattern"
                style="background-image: url({{ asset('assets/images/pattern/team-v4-pattern.png') }});">
            </div>
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
                    <h2 class="sec-title__title title-animation">Meet Our Experienced & <br>
                        Professional Team</h2>
                </div>
                <div class="row">
                    @foreach ($teams as $team)
                        <!--Start Team Four Single-->

                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                            <div class="team-four__single text-center">
                                <div class="team-four__single-img">
                                    <div class="team-four__single-img-inner">
                                        <img src="{{ asset('storage/teams/' . $team->image) }} " alt="">
                                    </div>
                                </div>

                                <div class="team-four__single-content">
                                    <h2>
                                        <a href="{{ route('team.details', $team->slug) }}">
                                            {{ $team->name }}
                                        </a>

                                    </h2>
                                    <p>{{ $team->position }}</p>
                                    <ul class="social-links">
                                        <li><a href="{{ $team->facebook }}"><span
                                                    class="icon-facebook-app-symbol"></span></a></li>
                                        <li><a href="{{ $team->twitter }}"><span class="icon-twitter-1"></span></a></li>
                                        <li><a href="{{ $team->instagram }}"><span class="icon-instagram"></span></a></li>
                                        <li><a href="{{ $team->whatsapp }}"><span class="fab fa-whatsapp"></span></a></li>
                                    </ul>
                                </div>
                                <a href="{{ route('team.details', $team->slug) }}">Read more <span
                                        class="icon-plus"></span></a>

                            </div>
                        </div>
                        <!--End Team Four Single-->
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="contact-one">
        <div class="contact-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/backgrounds/contact-v1-bg.jpg);">
        </div>
        <div class="container">
            <div class="sec-title text-center sec-title-animation animation-style1">
                <div class="sec-title__tagline center">
                    <div class="icon-box">
                        <span class="icon-household"></span>
                    </div>

                    <div class="text title-animation">
                        <h4> Contact Us</h4>
                    </div>
                </div>
                <h2 class="sec-title__title title-animation">Feel free to contact with us for <br> any kind of
                    query.</h2>
            </div>

            <div class="contact-one__inner">
                <div class="row">
                    <!--Start Contact One Form-->
                    <div class="col-xl-8 col-lg-8">
                        <div class="contact-one__form">
                            <form id="contactForm" class="contact-form-validated contact-one__form-box" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="input-box">
                                            <input type="text" name="name" placeholder="Name" required="">
                                            <div class="icon"><span class="icon-people"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="input-box">
                                            <input type="email" name="email" placeholder="Email" required="">
                                            <div class="icon"><span class="icon-envelope"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="input-box">
                                            <input type="text" name="Phone" placeholder="Phone" required="">
                                            <div class="icon"><span class="icon-call"></span></div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="input-box">
                                            <input type="text" name="subject" placeholder="subject" required="">
                                            <div class="icon"><span class="icon-envelope"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="input-box">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <div class="icon style2"><span class="fa fa-pencil"></span></div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="contact-page__form-btn">
                                            <button id="submitBtn" type="submit" class="thm-btn">
                                                Send us message
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                    </div>
                    <!--End Contact One Form-->

                    <!--Start Contact One Contact Info -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-one__contact-info">
                            <div class="title-box">
                                <h2>Contact Info</h2>
                            </div>

                            <ul class="contact-one__contact-info-list">
                                <li class="contact-one__contact-info-list-item">
                                    <div class="icon-box">
                                        <span class="icon-placeholder"></span>
                                    </div>

                                    <div class="text-box">
                                        <p>{{ $setting->short_address }}</p>
                                    </div>
                                </li>

                                <li class="contact-one__contact-info-list-item">
                                    <div class="icon-box">
                                        <span class="icon-phone-call"></span>
                                    </div>

                                    <div class="text-box">
                                        <p><a href="tel:+91{{ $setting->mobile }}">{{ $setting->mobile }}</a></p>
                                        <p><a href="tel:+91{{ $setting->mobile1 }}">{{ $setting->mobile1 }}</a></p>
                                    </div>
                                </li>

                                <li class="contact-one__contact-info-list-item">
                                    <div class="icon-box">
                                        <span class="icon-mail"></span>
                                    </div>

                                    <div class="text-box">
                                        <p><a href="{{ $setting->email }}">{{ $setting->email }}</a></p>
                                        <p><a href="{{ $setting->email1 }}">{{ $setting->email1 }}</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Contact One Contact Info -->
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
@endsection
