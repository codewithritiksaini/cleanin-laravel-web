@extends('layout.site')

@section('content')
<style>
    .blog-one__pagination {
    display: flex;
    justify-content: center;
}

</style>

<!--Start Page Header-->
      <section class="page-header">
        <div
          class="page-header__bg"
          style="
            background-image: url({{asset('assets/images/backgrounds/page-header-bg.jpg')}});
          "
        ></div>
        <div class="shape1 float-bob-x">
          <img src="{{asset('assets/images/shapes/main-slider-v4-shape1.png')}}" alt="" />
        </div>
        <div class="container">
          <div class="page-header__inner">
            <h2 class="wow fadeInDown" data-wow-duration="1500ms">Our Blogs</h2>
            <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
              <li><a href="{{route('home')}}">Home</a></li>
              <li><span class="icon-right-arrow1"></span></li>
              <li>Our Blogs</li>
            </ul>
          </div>
        </div>
      </section>
    <!--End Page Header-->

<!--Start Blog List Page-->
      <section class="blog-list-page">
        <div class="container">
          <div class="row">
            <!--Start Blog List Page Content-->
            <div class="col-xl-8">
              <div class="blog-list-page__content">
                @foreach($blogs as $blog)
                    <!--Blog List: Blog {{$loop->iteration}}-->
                        <div class="blog-list-page__single">
                        <div
                            class="blog-list-page__single-bg"
                            style="
                            background-image: url({{asset('storage/blogs/'.$blog->image)}});
                            "
                        ></div>
                        <div class="blog-list-page__single-content">
                            <ul class="meta-box">
                                        <li>
                                            <div class="icon">
                                            <span class="icon-people"></span>
                                            </div>

                                            <div class="text-box">
                                            <p><a href="{{route('about')}}">By Admin</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon"><span class="fa fa-eye"></span></div>
                                            <div class="text-box"><p><a href="#">Views: &nbsp; {{ \DB::table('views')->where('blog_id', $blog->id)->value('count') ?? 0 }}</a></p></div>
                                        </li>
                                    </ul>

                            <h2>
                            <a href="{{url('blogs/'.$blog->slug)}}"
                                >{{$blog->name}}</a
                            >
                            </h2>
                            <p>
                            {{Str::limit($blog->description, 190)}}
                            </p>

                            <div class="btn-box">
                            <a href="{{url('blogs/'.$blog->slug)}}"
                                >Read More <span class="icon-plus"></span
                            ></a>
                            </div>
                        </div>
                        </div>
                    <!--End Blog List-->
                @endforeach

              </div>
            </div>
            <!--End Blog List Page Content-->

            <!--Start Sidebar-->
            <div class="col-xl-4">
              <div class="sidebar">
                <!--Start Sidebar Single-->
                <div class="sidebar__single sidebar__search">
                  <div class="title-box">
                    <h2>Search</h2>
                  </div>
               <form action="{{ route('blogs') }}" method="GET" class="sidebar__search-form">
                        <input type="hidden" name="type" value="blogs">
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
                    <h2>Our Blogs</h2>
                  </div>

                  <ul class="sidebar__categories-list">
                    @foreach ($items as $item)
                        <li>
                      <a class="active" href="{{ route('blogs.details', $item->slug) }}"
                        >{{Str::limit($item->title, 32)}}<span class="icon-right-arrow1"></span
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
                            {{-- <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="input-box">
                                    <div class="select-box">
                                        <select name="subject" class="selectmenu wide" required>
                                            <option value="" selected>Select Service</option>
                                            @foreach ($blogs as $sname)
                                                <option value="{{ $sname->id }}">{{ $sname->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                           <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="input-box">
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                    <div class="icon"><span class="icon-pen"></span></div>
                                </div>
                            </div>


                            <div class="col-xl-12">
                                <div class="input-box">
                                    <textarea name="message" placeholder="Message"></textarea>
                                    <div class="icon style2"><span class="far fa-comment-alt"></span></div>
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

                <!--Start Sidebar Single-->

                <!--End Sidebar Single-->
              </div>
            </div>
            <!--End Sidebar-->
          </div>
        </div>
      </section>
      <!--End Blog List Page-->

@endsection
