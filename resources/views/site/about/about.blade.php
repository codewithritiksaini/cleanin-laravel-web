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
                        <li>About us </li>
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
            <!--Start About One Img-->
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="about-one__img">
                    <div class="about-one__video">
                        <a href="https://www.youtube.com/watch?v=06dV9txztKY" class="video-popup">
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
                                    <img src="{{ asset('assets/images/about/about-v1-img1.jpg') }}" alt="#">
                                </div>
                                <div class="single-img">
                                    <img src="{{ asset('assets/images/about/about-v1-img2.jpg') }}" alt="#">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="about-one__img-right">
                                <div class="about-one__experience">
                                    <div class="count-box">
                                        <h2 class="count-text" data-stop="30" data-speed="1500">00</h2>
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
                                <h4>About Cleaning Agency</h4>
                            </div>
                        </div>
                        <h2 class="sec-title__title title-animation">We Are A Highly Experienced <br> Cleaning
                            Service Company
                        </h2>
                    </div>

                    <div class="about-one__content-text">

                                    <p>{{ $about->content }}</p>
                            </div>



                    <div class="about-one__content-list">
                      <ul>
                                @foreach($services->take(2) as $service)
                                    <li>
                                        <div class="icon-box">
                                            <span class=""><img style="width: 50px" src="{{asset('storage/services/' . $service->image[0])}}" alt=""></span>
                                        </div>

                                        <div class="content-box">
                                            <h3>{{ $service['title'] ?? $service->title }}</h3>
                                            <p>{{ $service['description'] ?? $service->description }}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                    </div>

                    <div class="about-one__content-btn">
                        <a class="thm-btn" href="contact-1.html">Read More
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
<!--End About One-->

<!--Start Services One-->
<div class="services-one">
    <div class="shape1 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}" alt=""></div>
    <div class="shape2 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}" alt=""></div>
    <div class="shape3 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}" alt=""></div>
    <div class="shape4 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}" alt=""></div>
    <div class="shape5 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}" alt=""></div>
    <div class="shape6 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}" alt=""></div>
    <div class="shape7 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}" alt=""></div>
    <div class="shape8 float-bob-y"><img src="{{ asset('assets/images/shapes/services-v1-shape1.png') }}" alt=""></div>
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
<!--End Services One-->

<!--Start Working Process One-->
<section class="working-process-one">
    <div class="shape2 float-bob-y"><img src="{{ asset('assets/images/shapes/working-process-v1-shape1.png') }}" alt=""></div>
    <div class="shape3 float-bob-x"><img src="{{ asset('assets/images/shapes/working-process-v1-shape2.png') }}" alt=""></div>
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



<!--End Team One--><!--Start Contact One -->
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
                                    <p>3060 Commercial Street Road <br>
                                        Fratton, Australia</p>
                                </div>
                            </li>

                            <li class="contact-one__contact-info-list-item">
                                <div class="icon-box">
                                    <span class="icon-phone-call"></span>
                                </div>

                                <div class="text-box">
                                    <p><a href="tel:1234567890">+817 895 74555</a></p>
                                    <p><a href="tel:1234567890">+817 895 74555</a></p>
                                </div>
                            </li>

                            <li class="contact-one__contact-info-list-item">
                                <div class="icon-box">
                                    <span class="icon-mail"></span>
                                </div>

                                <div class="text-box">
                                    <p><a href="mailto:yourmail@email.com">help24/7@cleanin.com</a></p>
                                    <p><a href="mailto:yourmail@email.com">help24/7@cleanin.com</a></p>
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
<!--End Contact One -->


<!--Start Testimonial One-->
<section class="testimonial-one">
    <div class="shape1"><img src="{{ asset('assets/images/shapes/testimonial-v1-shape1.png') }}" alt=""></div>
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

                    {{-- <!--Start Testimonial One Single-->
                    <div class="testimonial-one__single text-center">
                        <div class="testimonial-one__single-img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-v1-img1.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__single-inner">
                            <h2>Savannah Nguyen</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form.</p>

                            <div class="rating-box">
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                            </div>
                        </div>
                        <div class="icon-box">
                            <span class="icon-quotation-up"></span>
                        </div>
                    </div>
                    <!--End Testimonial One Single-->

                    <!--Start Testimonial One Single-->
                    <div class="testimonial-one__single text-center">
                        <div class="testimonial-one__single-img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-v1-img2.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__single-inner">
                            <h2>Dwayne Johnson</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form.</p>

                            <div class="rating-box">
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                            </div>
                        </div>
                        <div class="icon-box">
                            <span class="icon-quotation-up"></span>
                        </div>
                    </div>
                    <!--End Testimonial One Single-->

                    <!--Start Testimonial One Single-->
                    <div class="testimonial-one__single text-center">
                        <div class="testimonial-one__single-img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-v1-img3.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__single-inner">
                            <h2>John D. Alexon</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form.</p>

                            <div class="rating-box">
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                            </div>
                        </div>
                        <div class="icon-box">
                            <span class="icon-quotation-up"></span>
                        </div>
                    </div>
                    <!--End Testimonial One Single-->

                    <!--Start Testimonial One Single-->
                    <div class="testimonial-one__single text-center">
                        <div class="testimonial-one__single-img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-v1-img1.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__single-inner">
                            <h2>Savannah Nguyen</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form.</p>

                            <div class="rating-box">
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                            </div>
                        </div>
                        <div class="icon-box">
                            <span class="icon-quotation-up"></span>
                        </div>
                    </div>
                    <!--End Testimonial One Single-->

                    <!--Start Testimonial One Single-->
                    <div class="testimonial-one__single text-center">
                        <div class="testimonial-one__single-img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-v1-img2.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__single-inner">
                            <h2>Dwayne Johnson</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form.</p>

                            <div class="rating-box">
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                            </div>
                        </div>
                        <div class="icon-box">
                            <span class="icon-quotation-up"></span>
                        </div>
                    </div>
                    <!--End Testimonial One Single-->

                    <!--Start Testimonial One Single-->
                    <div class="testimonial-one__single text-center">
                        <div class="testimonial-one__single-img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-v1-img3.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__single-inner">
                            <h2>John D. Alexon</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form.</p>

                            <div class="rating-box">
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                            </div>
                        </div>
                        <div class="icon-box">
                            <span class="icon-quotation-up"></span>
                        </div>
                    </div> --}}
                    <!--End Testimonial One Single-->

                    <!--Start Testimonial One Single-->
                    {{-- <div class="testimonial-one__single text-center">
                        <div class="testimonial-one__single-img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-v1-img1.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__single-inner">
                            <h2>Savannah Nguyen</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form.</p>

                            <div class="rating-box">
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                            </div>
                        </div>
                        <div class="icon-box">
                            <span class="icon-quotation-up"></span>
                        </div>
                    </div> --}}
                    <!--End Testimonial One Single-->

                    {{-- <!--Start Testimonial One Single-->
                    <div class="testimonial-one__single text-center">
                        <div class="testimonial-one__single-img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-v1-img2.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__single-inner">
                            <h2>Dwayne Johnson</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form.</p>

                            <div class="rating-box">
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                            </div>
                        </div>
                        <div class="icon-box">
                            <span class="icon-quotation-up"></span>
                        </div>
                    </div> --}}
                    <!--End Testimonial One Single-->

                    <!--Start Testimonial One Single-->
                    <div class="testimonial-one__single text-center">
                        <div class="testimonial-one__single-img">
                            <img src="{{ asset('assets/images/testimonial/testimonial-v1-img3.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-one__single-inner">
                            <h2>John D. Alexon</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                have suffered alteration in some form.</p>

                            <div class="rating-box">
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>
                                <a href="#"><i class="icon-star"></i></a>



                            </div>
                        </div>
                        <div class="icon-box">
                            <span class="icon-quotation-up"></span>
                        </div>
                    </div>
                    <!--End Testimonial One Single-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testimonial One-->

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

<!--Start Cta One -->
<section class="cta-one">
    <div class="shape1"></div>
    <div class="cta-one__bg" style="background-image: url(assets/images/backgrounds/cta-v1-bg.jpg);">
    </div>
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
