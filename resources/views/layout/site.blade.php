<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/'.$setting->favicon) }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/'.$setting->favicon) }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/'.$setting->favicon) }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    @yield('meta')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="message-store-url" content="{{ route('message.store') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Heebo:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/01-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/02-animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/03-custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/05-flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/06-font-awesome-all.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/07-jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/08-jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/09-nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/10-odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/11-owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/12-owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/13-jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/twentytwenty.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/01-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/02-about.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/03-services.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/04-testimonial.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/05-team.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/06-blog.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/07-contact.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/08-counter.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/09-error.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/10-faq.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/11-footer.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/12-page-header.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/13-shop.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/14-video.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/award.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/before-and-after.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/brand.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/client.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/coming-soon.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/contact-info.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/cost-calculator.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/cta.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/download-app.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/feature.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/gallery.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/google-map.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/history.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/newsletter.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/office-location.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/pricing.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/privacy.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/project.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/skill.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/sliding-text.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/why-choose.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/working-process.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}" />
    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
    <style>
        /* Hide the button by default */
        #btn_login_mobile {
            display: none;
        }

        /* Show the button only in mobile view (example for screens less than or equal to 768px) */
        @media (max-width: 768px) {
            #btn_login_mobile {
                display: block; /* or inline-block, depending on how you want it to display */
            }
        }

    </style>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>


    <!--Start Preloader-->
    {{-- <div class="loader js-preloader">
        <div></div>
        <div></div>
        <div></div>
    </div> --}}
    <!--End Preloader-->

    <div class="page-wrapper"><!--Start Main Header One-->
        <header class="main-header-one">
            <!--Start Main Header One Top-->
            <div class="main-header-one__top">
                <div class="container">
                    <div class="main-header-one__top-inner">
                        <ul class="header-style1__contact">
                            <li>
                                <div class="icon">
                                    <i class="icon-clock-1"></i>
                                </div>
                                <div class="text">
                                    <p>Wednesday - Sunday | 7:00 AM - 5:00 PM</p>
                                </div>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="icon-phone-call"></i>
                                </div>
                                <div class="text">
                                    <p><a href="tel:+91{{$setting->mobile}}">{{$setting->mobile}}</a></p>
                                </div>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="icon-placeholder"></i>
                                </div>
                                <div class="text">
                                    <p>{{$setting->short_address}}</p>
                                </div>
                            </li>
                        </ul>

                        <div class="main-header-one__top-right">
                            <div class="main-header__language-switcher">
                                <p class="text-white">{{ $setting->name }} : A Cleaning Company</p>
                            </div>
                            <div class="header-style1__social-links">
                                <a target="_blank" href="{{$setting->facebook}}"><i class="icon-facebook-app-symbol"></i></a>
                                <a target="_blank" href="{{$setting->twitter}}"><i class="icon-twitter-1"></i></a>
                                <a target="_blank" href="{{$setting->linkedin}}"><i class="icon-linkedin-big-logo"></i></a>
                                <a target="_blank" href="{{$setting->instagram}}"><i class="icon-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Main Header One Top-->

            <!--Start Main Header One Bottom-->
            <div class="main-header-one__bottom">
                <nav class="main-menu">
                    <div class="main-menu__wrapper">
                        <div class="container">
                            <div class="main-menu__wrapper-inner">
                                <div class="main-header-one__bottom-left">
                                    <div class="logo-one">
                                        <a href="{{route('home')}}"><img src="{{ asset('/'.$setting->dark_logo) }}"
                                                alt=""></a>
                                    </div>
                                </div>

                                <div class="main-header-one__bottom-middle">
                                    <div class="main-menu__main-menu-box">
                                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                        <ul class="main-menu__list">
                                            <li class="megamenu">
                                                <a href="{{route('home')}}">Home </a>
                                            </li>

                                            <li class="">
                                                <a href="{{route('about')}}">About</a>
                                            </li>

                                            <li class="">
                                                <a href="{{route('services')}}">Services</a>
                                            </li>

                                            <li class="">
                                                <a href="{{route('blogs')}}">Blog</a>
                                            </li>

                                            <li class="">
                                                <a href="{{route('contact')}}">Contact</a>
                                            </li>

                                            <li id="btn_login_mobile" class="">
                                                <a href="{{route('login')}}">Login</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="main-header-one__bottom-right">

                                    <div class="main-header__btn">
                                        <a class="thm-btn" href="{{route('login')}}">Login
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
                </nav>
            </div>
            <!--End Main Header One Bottom-->
        </header>
        <!--End Main Header One-->
        @yield('content')
        <!--Start Cta One -->
            <section class="cta-one">
                <div class="shape1"></div>
                <div class="cta-one__bg" style="background-image: url({{ asset('assets/images/backgrounds/cta-v1-bg.jpg') }});">
                </div>
                <div class="container clearfix">
                    <div class="cta-one__inner">
                        <div class="cta-one__content">
                            <div class="text-box">
                                <p>Quality Services provider</p>
                                <h2>Need Our services?</h2>
                            </div>

                            <div class="btn-box">
                                <a class="thm-btn" href="{{route('contact', ['subject' => 'Request for Free Quote'])}}">get free quote
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
            <!--End Cta One --><!--Start Site Footer-->
        <footer class="site-footer">
            <div class="shape1 float-bob-x"><img src="{{ asset('assets/images/shapes/footer-v1-shape1.png') }}" alt="">
            </div>
            <div class="shape2 scale"><img src="{{ asset('assets/images/shapes/footer-v1-shape2.png') }}" alt=""></div>
            <div class="shape3 scale"><img src="{{ asset('assets/images/shapes/footer-v1-shape2.png') }}" alt=""></div>
            <!--Start Site Footer Top-->
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInUp" data-wow-delay=".0s">
                            <div class="footer-widget__single footer-widget__about">
                                <div class="site-footer__logo">
                                    <a href="{{route('home')}}"><img src="{{ asset('/'.$setting->light_logo) }}"  style="width:150px; height:auto;"
                                            alt=""></a>
                                </div>

                                <div class="footer-widget__about-text">
                                    <p>{{ $setting->description }}</p>
                                </div>

                                <div class="footer-widget__about-social-links">
                                    <ul>
                                        <li><a href="{{ $setting->facebook }}"><span class="icon-facebook-app-symbol"></span></a>
                                        </li>
                                        <li><a href="{{ $setting->twitter }}"><span class="icon-twitter-1"></span></a></li>
                                        <li><a href="{{ $setting->linkedin }}"><span class="icon-linkedin-big-logo"></span></a></li>
                                        <li><a href="{{ $setting->instagram }}"><span class="icon-instagram"></span></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6  wow fadeInUp" data-wow-delay=".1s">
                            <div class="footer-widget__single footer-widget__services">
                                <div class="title-box">
                                    <h2>Services</h2>
                                    <div class="line"></div>
                                </div>

                                <ul class="footer-widget__services-list">
                                    @foreach (\App\Models\Service::where('status', 1)->inRandomOrder()->take(5)->get() as $service)
                                        <li>
                                            <a href="{{ route('services.details', $service->slug) }}">
                                                <span class="icon-right-chevron"></span> {{ $service->title }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInUp" data-wow-delay=".2s">
                            <div class="footer-widget__single footer-widget__contact">
                                <div class="title-box">
                                    <h2>Official info:</h2>
                                    <div class="line"></div>
                                </div>

                                <ul class="footer-widget__contact-list">
                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-placeholder"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>{{ $setting->short_address }}</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-phone-call"></span>
                                        </div>

                                        <div class="text-box">
                                            <p><a href="tel:+91{{ $setting->mobile }}">+91{{ $setting->mobile }}</a></p>
                                            @if ($setting->mobile1)
                                            <p><a href="tel:+91{{ $setting->mobile1 }}">+91{{ $setting->mobile1 }}</a></p>
                                            @endif
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon-box">
                                            <span class="icon-envelope"></span>
                                        </div>

                                        <div class="text-box">
                                            <p><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                                            @if ($setting->email1)
                                            <p><a href="mailto:{{$setting->email1}}">{{$setting->email1}}</a></p>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Site Footer Top-->

            <!--Start Site Footer Bottom-->
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <div class="site-footer__copyright">
                                    {!! $setting->footer_text !!}
                                </div>

                                <ul class="site-footer__bottom-menu">
                                    @if(Route::has('privacy'))
                                        <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
                                    @endif
                                    @if(Route::has('terms'))
                                        <li><a href="{{route('terms')}}">Terms & Conditions</a></li>
                                    @endif
                                    @if(Route::has('terms'))
                                        <li><a href="{{route('refund')}}">Refund Policy</a></li>
                                    @endif
                                    <li><a href="{{route('contact')}}">Support</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Site Footer Bottom-->
        </footer>
        <!--End Site Footer-->
    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler">
                <i class="fa fa-times"></i>
            </span>
            <div class="logo-box">
                <a href="{{route('home')}}" aria-label="logo image">
                    <img src="{{ asset('/'.$setting->light_logo) }}" alt="Logo" />
                </a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-envelope"></i>
                    <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                </li>
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="tel:{{$setting->mobile}}">{{$setting->mobile}}</a>
                </li>
            </ul>
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="{{$setting->facebook}}" class="icon-facebook-app-symbol"></a>
                    <a href="{{$setting->twitter}}" class="icon-twitter-1"></a>
                    <a href="{{$setting->instagram}}" class="icon-instagram"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.mobile-nav__wrapper --> <!-- ==== search popup start ==== -->
    <div class="search-popup">
        <button class="close-search" aria-label="close search box" title="close search box">
            <span class="icon-plus-1"></span>
        </button>
        <form action="#" method="post">
            <div class="search-popup__group">
                <input type="text" name="search-field" id="searchField" placeholder="Search Here..."
                    required>
                <button type="submit" aria-label="search products" title="search products">
                    <i class="icon-search-interface-symbol"></i>
                </button>
            </div>
        </form>
    </div>
    <!-- ==== / search popup end ==== --> <a href="#" data-target="html"
        class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        <span class="scroll-to-top__text"> Go Back Top</span>
    </a> <!-- Start sidebar widget content -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="{{route('home')}}"><img src="{{ asset('/'.$setting->dark_logo) }}"
                                        alt="" /></a>
                            </div>
                            <div style="display: block" class="content-box">
                                <h4>About Us</h4>
                                <div class="inner-text">
                                    <p>
                                        At Cleaning Rikki Saini, we believe that a clean space is a happy space. Founded with the goal of delivering high-quality, professional cleaning services, we’ve grown into one of the most trusted names in the cleaning industry. Our team is dedicated to ensuring that your home, office, or commercial space shines with cleanliness and freshness, every single time.
                                    </p>
                                </div>
                            </div>

                            <div class="sidebar-contact-info">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                        <span class="icon-location"></span> {{$setting->short_address}}
                                    </li>
                                    <li>
                                        <span class="icon-phone-call"></span>
                                        <a href="tel:{{$setting->mobile}}">{{$setting->mobile}}</a>
                                    </li>
                                    <li>
                                        <span class="icon-envelope"></span>
                                        <a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="thm-social-link1">
                                <ul class="social-box">
                                    <li>
                                        <a href="{{$setting->facebook}}"><i class="icon-facebook-app-symbol"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{$setting->twitter}} "><i class="icon-twitter-1" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{$setting->instagram}}"><i class="icon-instagram" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End sidebar widget content -->
    <script src="{{asset('assets/js/jquery-latest.js')}}"></script>
    <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.event.move.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/knob.js')}}"></script>
    <script src="{{asset('assets/js/marquee.min.js')}}"></script>
    <script src="{{asset('assets/js/twentytwenty.js')}}"></script>
    <script src="{{asset('assets/js/typed-2.0.11.js')}}"></script>
    <script src="{{asset('assets/js/wNumb.min.js')}}"></script>
    <script src="{{asset('assets/js/curved-text/jquery.circleType.js')}}"></script>
    <script src="{{asset('assets/js/curved-text/jquery.fittext.js')}}"></script>
    <script src="{{asset('assets/js/curved-text/jquery.lettering.min.js')}}"></script>
    <script src="{{asset('assets/js/gsap/gsap.js')}}"></script>
    <script src="{{asset('assets/js/gsap/ScrollTrigger.js')}}"></script>
    <script src="{{asset('assets/js/gsap/SplitText.js')}}"></script>


    <script src="{{asset('assets/js/01-bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/02-countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/03-jquery.appear.min.js')}}"></script>
    <script src="{{asset('assets/js/04-jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/05-owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/06-jarallax.min.js')}}"></script>
    <script src="{{asset('assets/js/07-odometer.min.js')}}"></script>
    <script src="{{asset('assets/js/08-jquery-ui.js')}}"></script>
    <script src="{{asset('assets/js/09-jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/10-wow.js')}}"></script>
    <script src="{{asset('assets/js/11-isotope.js')}}"></script>
    <script src="{{asset('assets/js/12-jquery-sidebar-content.js')}}"></script>

    <!-- Include jQuery & SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- template js -->
    <script src="{{asset('assets/js/script.js')}}"></script>

</body>

</html>
