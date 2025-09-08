@extends('layout.site')

@section('content')
    <!--Start Page Header-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})"></div>
            <div class="shape1 float-bob-x"><img src="{{ asset('assets/images/shapes/main-slider-v4-shape1.png') }}" alt=""></div>
            <div class="container">
                <div class="page-header__inner">
                    <h2 class="wow fadeInDown" data-wow-duration="1500ms">{{ $service->name }}</h2>
                    <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                        <li><a href="{{route('home')}}">Home</a></li>

                        <li><span class="icon-right-arrow1"></span></li>
                        <li><a href="{{ route('services') }}">services</a></li>
                        <li><span class="icon-right-arrow1"></span></li>
                        <li>{{ $service->name }}</li>
                    </ul>
                </div>
            </div>
        </section>
    <!--End Page Header-->
    <!--Start Services Details-->
      <section class="services-details">
        <div class="container">
          <div class="row">
            <!--Start Services Details Content-->
            <div class="col-xl-8">
              <div class="services-details__content">
                <div class="services-details__content-img1">
                  <img
                    src="{{asset('storage/services/'. $service->image[0])}}"
                    alt=""
                  />
                </div>

                <div class="services-details__content-text1">
                  <h2>{{ $service->title }}</h2>
                  <p class="text1">
                    {{$service->description}}
                  </p>
                  <p class="text2">
                    {{$service->content}}
                  </p>
                </div>

                <div class="services-details__content-text2">
                  <h2>Why Choose Our Services?</h2>
                  <p>
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters, as opposed to
                    using 'Content here, content here', making it look like
                    readable English. Many desktop publishing packages.
                  </p>

                  <div class="services-details__content-text2-bottom">
                    <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="services-details__content-text2-bottom-img">
                          <img
                            src="{{asset('assets/images/services/services-details-img4.jpg')}}"
                            alt=""
                          />
                        </div>
                      </div>

                      <div class="col-xl-6 col-lg-6 col-md-6">
                        <div
                          class="services-details__content-text2-bottom-content"
                        >
                          <ul>
                            <li>
                              <p>
                                <span class="icon-checkmark"></span> Highly
                                professional staff
                              </p>
                            </li>

                            <li>
                              <p>
                                <span class="icon-checkmark"></span> 100%
                                satisfaction guarantee
                              </p>
                            </li>

                            <li>
                              <p>
                                <span class="icon-checkmark"></span> Flexible
                                scheduling to fit your need
                              </p>
                            </li>

                            <li>
                              <p>
                                <span class="icon-checkmark"></span> Quality
                                cleaning system
                              </p>
                            </li>

                            <li>
                              <p>
                                <span class="icon-checkmark"></span> 25+ Years
                                Experiences
                              </p>
                            </li>

                            <li>
                              <p>
                                <span class="icon-checkmark"></span> 24/7 Online
                                Support
                              </p>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="services-details__content-text3">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                      <div
                        class="services-details__content-text3-single text-center"
                      >
                        <div class="icon-box">
                          <span class="icon-cleaning"></span>
                        </div>
                        <h2>Residential Cleaning</h2>
                        <p>
                          It is a long established fact that a reader <br />
                          will be distracted by the readable content <br />
                          of a page when looking
                        </p>
                      </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                      <div
                        class="services-details__content-text3-single text-center"
                      >
                        <div class="icon-box">
                          <span class="icon-window-cleaner"></span>
                        </div>
                        <h2>Commercial Cleaning</h2>
                        <p>
                          It is a long established fact that a reader <br />
                          will be distracted by the readable content <br />
                          of a page when looking
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="faq-one__content-faq faq-one--services">
                  <div
                    class="accrodion-grp faq-one-accrodion"
                    data-grp-name="faq-one-accrodion-1"
                  >
                    <div class="accrodion active">
                      <div class="accrodion-title">
                        <h4>Are your cleaning products eco-friendly?</h4>
                      </div>

                      <div class="accrodion-content">
                        <div class="inner">
                          <p>
                            It is a long established fact that a reader will be
                            distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem
                            Ipsum is that it has...
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="accrodion">
                      <div class="accrodion-title">
                        <h4>What to do when the cleaners arrive?</h4>
                      </div>

                      <div class="accrodion-content">
                        <div class="inner">
                          <p>
                            It is a long established fact that a reader will be
                            distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem
                            Ipsum is that it has...
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="accrodion">
                      <div class="accrodion-title">
                        <h4>How much will it cost to clean my house?</h4>
                      </div>

                      <div class="accrodion-content">
                        <div class="inner">
                          <p>
                            It is a long established fact that a reader will be
                            distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem
                            Ipsum is that it has...
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class="accrodion">
                      <div class="accrodion-title">
                        <h4>Have you ever seen a co-worker What did you do?</h4>
                      </div>

                      <div class="accrodion-content">
                        <div class="inner">
                          <p>
                            It is a long established fact that a reader will be
                            distracted by the readable content of a page when
                            looking at its layout. The point of using Lorem
                            Ipsum is that it has...
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Start Services Details Content-->

            <!--Start Sidebar-->
            <div class="col-xl-4">
              <div class="sidebar">
                <!--Start Sidebar Single-->
                <div class="sidebar__single sidebar__search">
                  <div class="title-box">
                    <h2>Search</h2>
                  </div>
                  <form action="{{ route('services') }}" method="GET" class="sidebar__search-form">
                        <input type="hidden" name="type" value="services"> <!-- ya blogs -->
                        <input type="search" name="q" placeholder="Search.." />
                        <button type="submit">
                            <span class="icon-search-interface-symbol"></span>
                        </button>
                    </form>

                </div>
                <!--End Sidebar Single-->

                <!--Start Sidebar Single-->
                <div class="sidebar__single sidebar__categories">
                  <div class="title-box">
                    <h2>Our Services</h2>
                  </div>

                  <ul class="sidebar__categories-list">
                    @foreach ($items as $item)
                        <li>
                      <a class="active" href="{{ route('services.details', $item->slug) }}"
                        >{{$item->title}}<span class="icon-right-arrow1"></span
                      ></a>
                    </li>
                    @endforeach
                  </ul>
                </div>
                <!--End Sidebar Single-->

                <!--Start Sidebar form-->
                <div class="sidebar__single sidebar__search">
                  <div class="title-box">
                    <h2>Quick Enquiry</h2>
                  </div>
                    <form id="contactForm" class="contact-form-validated contact-page__form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="input-box">
                                    <input type="text" name="name" placeholder="Name" required="">
                                    <div class="icon"><span class="icon-people"></span></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="input-box">
                                    <input type="email" name="email" placeholder="Email" required="">
                                    <div class="icon"><span class="icon-envelope"></span></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="input-box">
                                    <input type="text" name="Phone" placeholder="Phone" required="">
                                    <div class="icon"><span class="icon-phone-call"></span></div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="input-box">
                                    <div class="select-box">
                                        <select name="subject" class="selectmenu wide" required>
                                            <option value="{{$service->name}}" selected>{{$service->name}}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="input-box">
                                    <textarea name="message" placeholder="Message"></textarea>
                                    <div class="icon style2"><span class="icon-pen"></span></div>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="contact-page__form-btn">
                                    <button style="width:100%" id="submitBtn" type="submit" class="thm-btn">
                                        Submit Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--End Sidebar Single-->

                <!--Start Sidebar Single-->
                <div class="sidebar__single sidebar__contact">
                  <div
                    class="sidebar__contact-bg"
                    style="
                      background-image: url(assets/images/services/sidebar-contact-bg.jpg);
                    "
                  ></div>
                  <div class="sidebar__contact-icon">
                    <span class="icon-phone-call"></span>
                  </div>
                  <div class="sidebar__contact-text">
                    <p>Call Us Anytime</p>
                    <h2><a href="tel:+91{{$setting->mobile}}">+91 {{$setting->mobile}}</a></h2>
                  </div>
                  <div class="sidebar__contact-btn">
                    <a class="thm-btn" href="{{Route('contact')}}"
                      >Contact Us
                      <i class="icon-next"></i>
                      <span class="hover-btn hover-bx"></span>
                      <span class="hover-btn hover-bx2"></span>
                      <span class="hover-btn hover-bx3"></span>
                      <span class="hover-btn hover-bx4"></span>
                    </a>
                  </div>
                </div>
                <!--End Sidebar Single-->
              </div>
            </div>
            <!--End Sidebar-->
          </div>
        </div>
      </section>
      <!--End Services Details-->

      <!--Start Brand One-->
      <section class="brand-one brand-one--two about">
        <div class="container">
          <div class="brand-one__inner">
            <div class="brand-one__carousel owl-carousel owl-theme">
              <!--Start Brand One Single-->
              <div class="brand-one__single">
                <div class="brand-one__single-inner">
                  <a href="#">
                    <img src="assets/images/brand/brand-1-1.png" alt="" />
                    <img src="assets/images/brand/brand-1-2.png" alt="" />
                  </a>
                </div>
              </div>
              <!--End Brand One Single-->

              <!--Start Brand One Single-->
              <div class="brand-one__single">
                <div class="brand-one__single-inner">
                  <a href="#">
                    <img src="assets/images/brand/brand-1-1.png" alt="" />
                    <img src="assets/images/brand/brand-1-2.png" alt="" />
                  </a>
                </div>
              </div>
              <!--End Brand One Single-->

              <!--Start Brand One Single-->
              <div class="brand-one__single">
                <div class="brand-one__single-inner">
                  <a href="#">
                    <img src="assets/images/brand/brand-1-1.png" alt="" />
                    <img src="assets/images/brand/brand-1-2.png" alt="" />
                  </a>
                </div>
              </div>
              <!--End Brand One Single--><!DOCTYPE html>
<html lang="en">
<!-- Mirrored from php.unicktheme.com/cleanin/team-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Aug 2025 10:37:56 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Team Details || Cleanin || Cleanin PHP Template</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Cleanin HTML 5 Template " />

    <!-- Fonts -->
    <link
        href="../../fonts.googleapis.com/css2314a.css?family=Exo:ital,wght@0,100..900;1,100..900&amp;family=Heebo:wght@100..900&amp;display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="assets/css/01-bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/02-animate.min.css" />
    <link rel="stylesheet" href="assets/css/03-custom-animate.css" />
    <link rel="stylesheet" href="assets/css/05-flaticon.css" />
    <link rel="stylesheet" href="assets/css/06-font-awesome-all.css" />
    <link rel="stylesheet" href="assets/css/07-jarallax.css" />
    <link rel="stylesheet" href="assets/css/08-jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/09-nice-select.css" />
    <link rel="stylesheet" href="assets/css/10-odometer.min.css" />
    <link rel="stylesheet" href="assets/css/11-owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/12-owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/13-jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/twentytwenty.css" />

    <link rel="stylesheet" href="assets/css/module-css/01-slider.css" />
    <link rel="stylesheet" href="assets/css/module-css/02-about.css" />
    <link rel="stylesheet" href="assets/css/module-css/03-services.css" />
    <link rel="stylesheet" href="assets/css/module-css/04-testimonial.css" />
    <link rel="stylesheet" href="assets/css/module-css/05-team.css" />
    <link rel="stylesheet" href="assets/css/module-css/06-blog.css" />
    <link rel="stylesheet" href="assets/css/module-css/07-contact.css" />
    <link rel="stylesheet" href="assets/css/module-css/08-counter.css" />
    <link rel="stylesheet" href="assets/css/module-css/09-error.css" />
    <link rel="stylesheet" href="assets/css/module-css/10-faq.css" />
    <link rel="stylesheet" href="assets/css/module-css/11-footer.css" />
    <link rel="stylesheet" href="assets/css/module-css/12-page-header.css" />
    <link rel="stylesheet" href="assets/css/module-css/13-shop.css" />
    <link rel="stylesheet" href="assets/css/module-css/14-video.css" />
    <link rel="stylesheet" href="assets/css/module-css/award.css" />
    <link rel="stylesheet" href="assets/css/module-css/before-and-after.css" />
    <link rel="stylesheet" href="assets/css/module-css/brand.css" />
    <link rel="stylesheet" href="assets/css/module-css/client.css" />
    <link rel="stylesheet" href="assets/css/module-css/coming-soon.css" />
    <link rel="stylesheet" href="assets/css/module-css/contact-info.css" />
    <link rel="stylesheet" href="assets/css/module-css/cost-calculator.css" />
    <link rel="stylesheet" href="assets/css/module-css/cta.css" />
    <link rel="stylesheet" href="assets/css/module-css/download-app.css" />
    <link rel="stylesheet" href="assets/css/module-css/feature.css" />
    <link rel="stylesheet" href="assets/css/module-css/gallery.css" />
    <link rel="stylesheet" href="assets/css/module-css/google-map.css" />
    <link rel="stylesheet" href="assets/css/module-css/history.css" />
    <link rel="stylesheet" href="assets/css/module-css/newsletter.css" />
    <link rel="stylesheet" href="assets/css/module-css/office-location.css" />
    <link rel="stylesheet" href="assets/css/module-css/pricing.css" />
    <link rel="stylesheet" href="assets/css/module-css/privacy.css" />
    <link rel="stylesheet" href="assets/css/module-css/project.css" />
    <link rel="stylesheet" href="assets/css/module-css/skill.css" />
    <link rel="stylesheet" href="assets/css/module-css/sliding-text.css" />
    <link rel="stylesheet" href="assets/css/module-css/why-choose.css" />
    <link rel="stylesheet" href="assets/css/module-css/working-process.css" />

    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!--Start Preloader-->
    <div class="loader js-preloader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!--End Preloader-->

    <div class="page-wrapper">
        <!-- header -->
        <!--Start Main Header Two-->
        <header class="main-header-two">
            <div class="shape1">
                <img src="assets/images/shapes/header-v2-shape1.png" alt="" />
            </div>
            <div class="container">
                <div class="main-header-two__inner">
                    <!--Start Main Header Two Top-->
                    <div class="main-header-two__top">
                        <div class="main-header-two__top-inner">
                            <ul class="header-style2__contact">
                                <li>
                                    <div class="icon">
                                        <i class="icon-clock-1"></i>
                                    </div>

                                    <div class="text">
                                        <p class="text1">Opening Hours</p>
                                        <p class="text2">8:00 am - 5:00 pm - Sat - Sun</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="icon-phone-call"></i>
                                    </div>
                                    <div class="text">
                                        <p class="text1">Make A Call</p>
                                        <p class="text2">
                                            <a href="tel:1234567890">+111 875 74885</a>
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <i class="icon-placeholder"></i>
                                    </div>
                                    <div class="text">
                                        <p class="text1">Send Us Mail</p>
                                        <p class="text2">
                                            <a href="mailto:yourmail@email.com">support@cleanin.com</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>

                            <div class="header-style2__social-links">
                                <div class="title-box">
                                    <p>Follow Us On:</p>
                                </div>

                                <ul>
                                    <li>
                                        <a href="#"><span class="icon-facebook-app-symbol"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-twitter-1"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-instagram"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-pinterest"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Main Header Two Top-->

                    <!--Start Main Header Two Bottom-->
                    <div class="main-header-two__bottom">
                        <nav class="main-menu">
                            <div class="main-menu__wrapper">
                                <div class="container">
                                    <div class="main-menu__wrapper-inner">
                                        <div class="main-header-two__logo">
                                            <a href="index.html"><img src="assets/images/resources/logo-2.png"
                                                    alt="" /></a>
                                        </div>

                                        <!--Start Main Header Two Bottom Left-->
                                        <div class="main-header-two__bottom-left">
                                            <div class="main-menu__main-menu-box">
                                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                                <ul class="main-menu__list">
                                                    <li class="dropdown megamenu">
                                                        <a href="index.html">Home </a>
                                                        <ul>
                                                            <li>
                                                                <section class="home-showcase">
                                                                    <div class="container">
                                                                        <div class="home-showcase__inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-3">
                                                                                    <div class="home-showcase__item">
                                                                                        <div
                                                                                            class="home-showcase__image">
                                                                                            <img src="assets/images/home-showcase/home-showcase-1-1.jpg"
                                                                                                alt="" />
                                                                                            <div
                                                                                                class="home-showcase__buttons">
                                                                                                <a href="index.html"
                                                                                                    class="thm-btn home-showcase__buttons__item">Multi
                                                                                                    Page
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx2"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx3"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx4"></span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- /.home-showcase__buttons -->
                                                                                        </div>
                                                                                        <!-- /.home-showcase__image -->
                                                                                        <h3
                                                                                            class="home-showcase__title">
                                                                                            Home Page 01
                                                                                        </h3>
                                                                                        <!-- /.home-showcase__title -->
                                                                                    </div>
                                                                                    <!-- /.home-showcase__item -->
                                                                                </div>
                                                                                <!-- /.col-lg-3 -->

                                                                                <div class="col-lg-3">
                                                                                    <div class="home-showcase__item">
                                                                                        <div
                                                                                            class="home-showcase__image">
                                                                                            <img src="assets/images/home-showcase/home-showcase-1-2.jpg"
                                                                                                alt="" />
                                                                                            <div
                                                                                                class="home-showcase__buttons">
                                                                                                <a href="index2.html"
                                                                                                    class="thm-btn home-showcase__buttons__item">Multi
                                                                                                    Page
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx2"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx3"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx4"></span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- /.home-showcase__buttons -->
                                                                                        </div>
                                                                                        <!-- /.home-showcase__image -->
                                                                                        <h3
                                                                                            class="home-showcase__title">
                                                                                            Home Page 02
                                                                                        </h3>
                                                                                        <!-- /.home-showcase__title -->
                                                                                    </div>
                                                                                    <!-- /.home-showcase__item -->
                                                                                </div>
                                                                                <!-- /.col-lg-3 -->

                                                                                <div class="col-lg-3">
                                                                                    <div class="home-showcase__item">
                                                                                        <div
                                                                                            class="home-showcase__image">
                                                                                            <img src="assets/images/home-showcase/home-showcase-1-3.jpg"
                                                                                                alt="" />
                                                                                            <div
                                                                                                class="home-showcase__buttons">
                                                                                                <a href="index3.html"
                                                                                                    class="thm-btn home-showcase__buttons__item">Multi
                                                                                                    Page
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx2"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx3"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx4"></span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- /.home-showcase__buttons -->
                                                                                        </div>
                                                                                        <!-- /.home-showcase__image -->
                                                                                        <h3
                                                                                            class="home-showcase__title">
                                                                                            Home Page 03
                                                                                        </h3>
                                                                                        <!-- /.home-showcase__title -->
                                                                                    </div>
                                                                                    <!-- /.home-showcase__item -->
                                                                                </div>
                                                                                <!-- /.col-lg-3 -->

                                                                                <div class="col-lg-3">
                                                                                    <div class="home-showcase__item">
                                                                                        <div
                                                                                            class="home-showcase__image">
                                                                                            <img src="assets/images/home-showcase/home-showcase-1-4.jpg"
                                                                                                alt="" />
                                                                                            <div
                                                                                                class="home-showcase__buttons">
                                                                                                <a href="index4.html"
                                                                                                    class="thm-btn home-showcase__buttons__item">Multi
                                                                                                    Page
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx2"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx3"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx4"></span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- /.home-showcase__buttons -->
                                                                                        </div>
                                                                                        <!-- /.home-showcase__image -->
                                                                                        <h3
                                                                                            class="home-showcase__title">
                                                                                            Home Page 04
                                                                                        </h3>
                                                                                        <!-- /.home-showcase__title -->
                                                                                    </div>
                                                                                    <!-- /.home-showcase__item -->
                                                                                </div>
                                                                                <!-- /.col-lg-3 -->

                                                                                <div class="col-lg-3">
                                                                                    <div class="home-showcase__item">
                                                                                        <div
                                                                                            class="home-showcase__image">
                                                                                            <img src="assets/images/home-showcase/home-showcase-1-5.jpg"
                                                                                                alt="" />
                                                                                            <div
                                                                                                class="home-showcase__buttons">
                                                                                                <a href="index5.html"
                                                                                                    class="thm-btn home-showcase__buttons__item">Multi
                                                                                                    Page
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx2"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx3"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx4"></span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- /.home-showcase__buttons -->
                                                                                        </div>
                                                                                        <!-- /.home-showcase__image -->
                                                                                        <h3
                                                                                            class="home-showcase__title">
                                                                                            Home Page 05
                                                                                        </h3>
                                                                                        <!-- /.home-showcase__title -->
                                                                                    </div>
                                                                                    <!-- /.home-showcase__item -->
                                                                                </div>
                                                                                <!-- /.col-lg-3 -->

                                                                                <div class="col-lg-3">
                                                                                    <div class="home-showcase__item">
                                                                                        <div
                                                                                            class="home-showcase__image">
                                                                                            <img src="assets/images/home-showcase/home-showcase-1-6.jpg"
                                                                                                alt="" />
                                                                                            <div
                                                                                                class="home-showcase__buttons">
                                                                                                <a href="index-dark.html"
                                                                                                    class="thm-btn home-showcase__buttons__item">View
                                                                                                    Page
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx2"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx3"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx4"></span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- /.home-showcase__buttons -->
                                                                                        </div>
                                                                                        <!-- /.home-showcase__image -->
                                                                                        <h3
                                                                                            class="home-showcase__title">
                                                                                            Home Dark
                                                                                        </h3>
                                                                                        <!-- /.home-showcase__title -->
                                                                                    </div>
                                                                                    <!-- /.home-showcase__item -->
                                                                                </div>
                                                                                <!-- /.col-lg-3 -->

                                                                                <div class="col-lg-3">
                                                                                    <div class="home-showcase__item">
                                                                                        <div
                                                                                            class="home-showcase__image">
                                                                                            <img src="assets/images/home-showcase/home-showcase-1-7.jpg"
                                                                                                alt="" />
                                                                                            <div
                                                                                                class="home-showcase__buttons">
                                                                                                <a href="#"
                                                                                                    class="thm-btn home-showcase__buttons__item">Coming
                                                                                                    Soon
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx2"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx3"></span>
                                                                                                    <span
                                                                                                        class="hover-btn hover-bx4"></span>
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- /.home-showcase__buttons -->
                                                                                        </div>
                                                                                        <!-- /.home-showcase__image -->
                                                                                        <h3
                                                                                            class="home-showcase__title">
                                                                                            Coming Soon
                                                                                        </h3>
                                                                                        <!-- /.home-showcase__title -->
                                                                                    </div>
                                                                                    <!-- /.home-showcase__item -->
                                                                                </div>
                                                                                <!-- /.col-lg-3 -->
                                                                            </div>
                                                                            <!-- /.row -->
                                                                        </div>
                                                                        <!-- /.home-showcase__inner -->
                                                                    </div>
                                                                    <!-- /.container -->
                                                                </section>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li class="dropdown">
                                                        <a href="#">About</a>
                                                        <ul class="shadow-box">
                                                            <li><a href="about-1.html">About 01</a></li>
                                                            <li><a href="about-2.html">About 02</a></li>
                                                            <li><a href="history.html">Our History</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="dropdown">
                                                        <a href="#">Services</a>
                                                        <ul class="shadow-box">
                                                            <li class="dropdown">
                                                                <a href="#">Services</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="services-1.html">Services 01</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="services-2.html">Services 02</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="services-3.html">Services 03</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="services-4.html">Services 04</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="services-carousel.html">Services
                                                                            Carousel</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="services-tab.html">Services Tab</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="house-cleaning.html">House Cleaning</a>
                                                            </li>
                                                            <li>
                                                                <a href="office-cleaning.html">Office Cleaning</a>
                                                            </li>
                                                            <li>
                                                                <a href="commercial-cleaning.html">Commercial
                                                                    Cleaning</a>
                                                            </li>
                                                            <li>
                                                                <a href="residential-cleaning.html">Residential
                                                                    Cleaning</a>
                                                            </li>
                                                            <li>
                                                                <a href="window-cleaning.html">Window Cleaning</a>
                                                            </li>
                                                            <li>
                                                                <a href="carpet-cleaning.html">Carpet Cleaning</a>
                                                            </li>
                                                            <li>
                                                                <a href="floor-cleaning.html">Floor Cleaning</a>
                                                            </li>
                                                            <li>
                                                                <a href="car-cleaning.html">Car Cleaning</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li class="dropdown">
                                                        <a href="#">Pages</a>
                                                        <ul class="shadow-box">
                                                            <li class="dropdown">
                                                                <a href="#">Team</a>
                                                                <ul>
                                                                    <li><a href="team-1.html">Team 01</a></li>
                                                                    <li><a href="team-2.html">Team 02</a></li>
                                                                    <li><a href="team-3.html">Team 03</a></li>
                                                                    <li><a href="team-4.html">Team 04</a></li>
                                                                    <li>
                                                                        <a href="team-carousel.html">Team Carousel</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="team-details.html">Team Details</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a href="#">Projects</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="project-1.html">Project 01</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="project-2.html">Project 02</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="project-3.html">Project 03</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="project-carousel.html">Project
                                                                            Carousel</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="project-masonry.html">Project
                                                                            Masonry</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="projects-details.html">Project
                                                                            Details</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown">
                                                                <a href="#">Testimonials</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="testimonials-1.html">Testimonial 01</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="testimonials-2.html">Testimonial 02</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="testimonials-3.html">Testimonial 03</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="testimonials-carousel.html">Testimonial
                                                                            Carousel</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="pricing.html">Pricing</a></li>
                                                            <li>
                                                                <a href="pricing-carousel.html">Pricing Carousel</a>
                                                            </li>
                                                            <li>
                                                                <a href="pricing-calculator.html">Pricing Calculator</a>
                                                            </li>
                                                            <li><a href="gallery.html">Gallery</a></li>
                                                            <li>
                                                                <a href="gallery-carousel.html">Gallery Carousel</a>
                                                            </li>
                                                            <li><a href="faq.html">Faq</a></li>
                                                            <li><a href="client.html">Client</a></li>
                                                            <li><a href="404.html">404 Error</a></li>
                                                            <li>
                                                                <a href="coming-soon.html">Coming Soon</a>
                                                            </li>
                                                            <li>
                                                                <a href="privacy.html">Privacy Policy</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li class="dropdown">
                                                        <a href="#">Shop</a>
                                                        <ul class="shadow-box">
                                                            <li class="dropdown">
                                                                <a href="#">Products</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="products-left.html">Left Sidebar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="products-right.html">Right Sidebar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="products.html">No Sidebar</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="product-details.html">Product Details</a>
                                                            </li>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="sign-up.html">Sign Up</a></li>
                                                            <li><a href="login.html">Login</a></li>
                                                        </ul>
                                                    </li>

                                                    <li class="dropdown">
                                                        <a href="#">Blog</a>
                                                        <ul class="shadow-box">
                                                            <li class="dropdown">
                                                                <a href="#">Blog</a>
                                                                <ul>
                                                                    <li><a href="blog-1.html">Blog 01</a></li>
                                                                    <li><a href="blog-2.html">Blog 02</a></li>
                                                                    <li><a href="blog-3.html">Blog 03</a></li>
                                                                    <li>
                                                                        <a href="blog-carousel.html">Blog Carousel</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-left-sidebar.html">Blog Left
                                                                            Sidebar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-right-sidebar.html">Blog Right
                                                                            Sidebar</a>
                                                                    </li>
                                                                </ul>
                                                            </li>

                                                            <li class="dropdown">
                                                                <a href="#">Blog List</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="blog-list-left.html">Left Sidebar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-list-right.html">Right Sidebar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-list.html">No Sidebar</a>
                                                                    </li>
                                                                </ul>
                                                            </li>

                                                            <li class="dropdown">
                                                                <a href="#">Blog Standard</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="blog-standard-left.html">Left
                                                                            Sidebar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-standard-right.html">Right
                                                                            Sidebar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-standard.html">No Sidebar</a>
                                                                    </li>
                                                                </ul>
                                                            </li>

                                                            <li class="dropdown">
                                                                <a href="#">Blog Details</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="blog-details-left.html">Left
                                                                            Sidebar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-details-right.html">Right
                                                                            Sidebar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-details.html">No Sidebar</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li class="dropdown">
                                                        <a href="#">Contact</a>
                                                        <ul class="shadow-box">
                                                            <li><a href="contact-1.html">Contact 01</a></li>
                                                            <li><a href="contact-2.html">Contact 02</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--End Main Header Two Bottom Left-->

                                        <!--Start Main Header Two Bottom Right-->
                                        <div class="main-header-two__bottom-right">
                                            <div class="header-search-box">
                                                <a href="#"
                                                    class="main-menu__search open-search icon-search-interface-symbol"></a>
                                            </div>

                                            <div class="sidebar-icon">
                                                <a class="navSidebar-button icon2" href="#">
                                                    <span class="nav-sidebar-menu-1"></span>
                                                    <span class="nav-sidebar-menu-2"></span>
                                                    <span class="nav-sidebar-menu-3"></span>
                                                </a>
                                            </div>

                                            <div class="main-header__btn">
                                                <a class="thm-btn" href="contact-1.html">Get a Quote
                                                    <i class="icon-next"></i>
                                                    <span class="hover-btn hover-bx"></span>
                                                    <span class="hover-btn hover-bx2"></span>
                                                    <span class="hover-btn hover-bx3"></span>
                                                    <span class="hover-btn hover-bx4"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <!--End Main Header Two Bottom Right-->
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!--End Main Header Two Bottom-->
                </div>
            </div>
        </header>
        <!--End Main Header Two-->

        <div class="stricky-header stricky-header__two stricked-menu main-menu">
            <div class="sticky-header__content"></div>
            <!-- /.sticky-header__content -->
        </div>

              <!--Start Brand One Single-->
              <div class="brand-one__single">
                <div class="brand-one__single-inner">
                  <a href="#">
                    <img src="assets/images/brand/brand-1-1.png" alt="" />
                    <img src="assets/images/brand/brand-1-2.png" alt="" />
                  </a>
                </div>
              </div>
              <!--End Brand One Single-->

              <!--Start Brand One Single-->
              <div class="brand-one__single">
                <div class="brand-one__single-inner">
                  <a href="#">
                    <img src="assets/images/brand/brand-1-1.png" alt="" />
                    <img src="assets/images/brand/brand-1-2.png" alt="" />
                  </a>
                </div>
              </div>
              <!--End Brand One Single-->

              <!--Start Brand One Single-->
              <div class="brand-one__single">
                <div class="brand-one__single-inner">
                  <a href="#">
                    <img src="assets/images/brand/brand-1-1.png" alt="" />
                    <img src="assets/images/brand/brand-1-2.png" alt="" />
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
        <div
          class="cta-one__bg"
          style="background-image: url(assets/images/backgrounds/cta-v1-bg.jpg)"
        ></div>
        <div class="container clearfix">
          <div class="cta-one__inner">
            <div class="cta-one__content">
              <div class="text-box">
                <p>Quality Services provider</p>
                <h2>Need Our services?</h2>
              </div>

              <div class="btn-box">
                <a class="thm-btn" href="contact-1.html"
                  >get free quote
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
