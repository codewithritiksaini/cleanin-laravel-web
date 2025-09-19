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
                    Contact</h2>
                <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                <li><a href="{{ url('/') }}">Home</a></li>
                    <li><span class="icon-right-arrow1"></span></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Header-->
    <!--Start Contact Page-->
    <section class="contact-page contact-page--two">
        <div class="container">
            <div class="row">
                <!--Start Contact Page Content-->
                <div class="col-xl-6">
                    <div class="contact-page--two__content">
                        <div class="sec-title sec-title-animation animation-style2">
                            <div class="sec-title__tagline">
                                <div class="icon-box">
                                    <span class="icon-household"></span>
                                </div>
                                <div class="text title-animation">
                                    <h4>Contact US</h4>
                                </div>
                            </div>
                            <h2 class="sec-title__title title-animation">Get in Touch And We’ll
                                Help Your Business</h2>
                        </div>

                        <div class="contact-page--two__content-text1">
                            <p>It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                here.</p>
                        </div>

                        <div class="social-links">
                            <a href="{{ $setting->facebook }}"><span class="icon-facebook-app-symbol"></span></a>
                            <a href="{{ $setting->twitter }}"><span class="icon-twitter-1"></span></a>
                            <a href="{{ $setting->instagram }}"><span class="icon-instagram"></span></a>
                            <a href="{{ $setting->whatsapp }}"><span class="fab fa-whatsapp"></span></a>
                            {{-- <a href="{{ $setting->pinterest }}"><span class="icon-pinterest"></span></a> --}}
                        </div>
                    </div>
                </div>
                <!--End Contact Page Content-->

                <!--Start Contact Page Form-->
                <div class="col-xl-6">
                    <div class="contact-page__form-box">
                        <form id="contactForm" class="contact-form-validated contact-page__form" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="name" placeholder="Name" required>
                                        <div class="icon"><span class="icon-people"></span></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="email" name="email" placeholder="Email" required>
                                        <div class="icon"><span class="icon-envelope"></span></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="Phone" placeholder="Phone" required>
                                        <div class="icon"><span class="icon-phone-call"></span></div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="input-box">
                                        <input type="text" name="subject" value="{{request('subject')}}" placeholder="Subject" required>
                                        <div class="icon"><span class="icon-chat"></span></div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="input-box">
                                        <textarea name="message" placeholder="Message" required></textarea>
                                        <div class="icon style2"><span class="icon-pen"></span></div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-page__form-btn">
                                        <button type="submit" id="submitBtn" class="thm-btn">Submit Now
                                            <i class="icon-next"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <!--End Contact Page Form-->
            </div>

            <!--Start Contact Page Bottom-->
            <div class="contact-page__bottom">
                <div class="container">
                    <div class="contact-page__bottom-inner">
                        <ul class="list-unstyled">
                            <li class="contact-page__bottom-single">
                                <div class="icon">
                                    <span class="icon-placeholder"></span>
                                </div>
                                <div class="content">
                                    <h2>Location</h2>
                                    <p>{{$setting->short_address}}x </p>
                                </div>
                            </li>

                            <li class="contact-page__bottom-single">
                                <div class="icon">
                                    <span class="icon-stop-watch"></span>
                                </div>
                                <div class="content">
                                    <h2>Working Hours</h2>
                                    <p>Wednesday - Sunday <br> 7:00 AM - 5:00 PM</p>
                                </div>
                            </li>

                            <li class="contact-page__bottom-single">
                                <div class="icon">
                                    <span class="icon-mail"></span>
                                </div>
                                <div class="content">
                                    <h2>Email</h2>
                                    <p>
                                        <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                                    </p>
                                </div>
                            </li>

                            <li class="contact-page__bottom-single">
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="content">
                                    <h2>Phones</h2>
                                    <p>
                                    <p><a href="tel:+91{{$setting->mobile}}">{{$setting->mobile}}</a></p>
                                    <p><a href="tel:+91{{$setting->mobile}}">{{$setting->mobile}}</a></p>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Contact Page Bottom-->
        </div>
    </section>
    <!--End Contact Page-->

    <!--Start Google Map Two-->
    <section class="google-map-two">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6209.242755903148!2d-77.04363602434464!3d38.90977276948481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1394992895496"
            class="google-map-two__map">
        </iframe>
    </section>
    <!--End Google Map Two-->

    <!--Start Brand One-->


@endsection
