@extends('layout.site')

@section('content')

<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})"></div>
    <div class="shape1 float-bob-x"><img src="{{ asset('assets/images/shapes/main-slider-v4-shape1.png') }}" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <h2 class="wow fadeInDown" data-wow-duration="1500ms">services</h2>
            <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                <li><a href="{{ url('/') }}">Home</a></li>

                <li><span class="icon-right-arrow1"></span></li>
                <li>services</li>
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
              <div class="container">
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="blog-three__single">
                                <div class="blog-three__single-img">
                                    @if(!empty($service->image))
                                        <img src="{{ isset($service->image[0]) && !empty($service->image[0]) ? asset('storage/services/' . $service->image[0]) : asset('public/services-details-img1.jpg') }}" alt="">
                                    @endif
                                    <div class="date-box">
                                        <p>{{ $service->created_at->format('d') }}</p>
                                        <span>{{ $service->created_at->format('M') }}</span>
                                    </div>
                                    <ul class="blog-three__tag">
                                        <li><a href="#">Service {{ $loop->index + 1 }}</a></li>
                                    </ul>
                                </div>

                                <div class="blog-three__single-content">
                                    <ul class="meta-box">
                                        <li>
                                            <div class="icon"><span class="icon-people"></span></div>
                                            <div class="text-box"><p><a href="#">By Admin</a></p></div>
                                        </li>
                                        <li>
                                            <div class="icon"><span class="fa fa-eye"></span></div>
                                            <div class="text-box"><p><a href="#">{{ \DB::table('views')->where('service_id', $service->id)->value('count') ?? 0 }}</a></p></div>
                                        </li>
                                    </ul>
                                    <h2>
                                        <a href="{{ route('services.details', $service->slug) }}">
                                            {{ $service->title }}
                                        </a>
                                    </h2>
                                    <p>{{ Str::limit($service->description, 150) }}</p>

                                    <div class="btn-box">
                                        <a href="{{ route('services.details', $service->slug) }}">Read More <span

                                            class="icon-plus"></span></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <div class="row">
                    <div class="col-xl-12 text-center mt-5">
                        <div class="blog-one__pagination d-inline-block">
                            {{ $services->links('pagination::bootstrap-4') }}
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
                        <input type="hidden" name="type" value="services">
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
                                            <option value="" selected>Select Service</option>
                                            @foreach ($services as $sname)
                                                <option value="{{ $sname->id }}">{{ $sname->name }}</option>
                                            @endforeach
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
