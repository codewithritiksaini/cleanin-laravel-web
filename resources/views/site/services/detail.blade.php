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
                    src="{{asset('storage/services/'. $service->image[0])}}" alt=""/>
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
                    data-grp-name="faq-one-accrodion-1">
                    <div class="accrodion active">
                      <div class="accrodion-title">
                        <h4>Are your cleaning products eco-friendly?</h4>
                      </div>

                      <div class="accrodion-content">
                        <div class="inner">
                          <p>
                             Yes, all of our cleaning products are made using eco-friendly ingredients.
                            They are safe for the environment, non-toxic, and biodegradable, ensuring
                              both effective cleaning and sustainability.
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
                            IWhen our cleaners arrive, simply show them the areas you’d like cleaned,
            point out any special instructions, and then you can relax.
            You don’t need to provide any cleaning supplies – we bring our own.
            If you prefer, you can also step out while we handle the cleaning.
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
                             The cost of cleaning your house depends on the size of your home,
            the type of cleaning service you need, and the frequency of service.
            We offer free estimates, so you’ll always know the price before we begin.
            Contact us to get a customized quote for your home.
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
                            Yes, I have experienced a situation where I noticed
                             a co-worker not following the correct process while completing
                             a task. Instead of reacting negatively, I calmly approached them
                             and politely explained the correct way of doing it. I also offered
                             my support so that the work could be completed properly.php    
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
                            <div style="display: none" class="col-xl-12 col-lg-12 col-md-12">
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
                      background-image: url({{asset('assets/images/services/sidebar-contact-bg.jpg')}});
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
     @endsection
