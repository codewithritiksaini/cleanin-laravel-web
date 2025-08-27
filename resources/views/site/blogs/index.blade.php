@extends('layout.site')

@section('content')

<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})"></div>
    <div class="shape1 float-bob-x"><img src="{{ asset('assets/images/shapes/main-slider-v4-shape1.png') }}" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <h2 class="wow fadeInDown" data-wow-duration="1500ms">Blog 01</h2>
            <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span class="icon-right-arrow1"></span></li>
                <li>Blog 01</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

<!--Start Blog One-->
<section class="blog-one blog-one--blog">
    <div class="container">
        <div class="row">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                @if(!empty($blog->image))
                                    <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="{{ $blog->title }}">
                                @else
                                    <img src="{{ asset('assets/images/blog/default.jpg') }}" alt="Default Blog Image">
                                @endif
                            </div>

                            <div class="blog-one__single-content">
                                <div class="date-box">
                                    <h2>{{ $blog->created_at->format('d') }}</h2>
                                    <p>{{ $blog->created_at->format('M') }}</p>
                                </div>
                                <div class="blog-one__single-content-inner">
                                    <ul class="meta-box">
                                        <li>
                                            <div class="icon"><span class="icon-people"></span></div>
                                            <div class="text-box"><p><a href="#">By Admin</a></p></div>
                                        </li>
                                        <li>
                                            <div class="icon"><span class="icon-conversation"></span></div>
                                            <div class="text-box"><p><a href="#"> Comment</a></p></div>
                                        </li>
                                    </ul>

                                    <h2>
                                        <a href="{{ route('blogs.details', $blog->id) }}">
                                            {{ $blog->title }}
                                        </a>
                                    </h2>

                                    {{-- FIX: content ko hamesha string banaya --}}
                                    <p>
                                        {{ Str::limit(is_array($blog->content) ? implode(' ', $blog->content) : $blog->content, 120, '...') }}
                                    </p>

                                    <div class="btn-box">
                                        <a href="{{ route('blogs.details', $blog->id) }}">
                                            Read More <span class="icon-plus"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Pagination -->
        <ul class="styled-pagination text-center clearfix">
            <li class="arrow prev active"><a href="#"><span class="icon-right-arrow"></span></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="arrow next"><a href="#"><span class="icon-right-arrow1"></span></a></li>
        </ul>
    </div>
</section>
<!--End Blog One-->

<!--Start Brand One-->
<section class="brand-one brand-one--two about">
    <div class="container">
        <div class="brand-one__inner">
            <div class="brand-one__carousel owl-carousel owl-theme">
                <div class="brand-one__single">
                    <div class="brand-one__single-inner">
                        <a href="#">
                            <img src="{{ asset('assets/images/brand/brand-1-1.png') }}" alt="">
                            <img src="{{ asset('assets/images/brand/brand-1-2.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <!-- repeat as needed -->
            </div>
        </div>
    </div>
</section>
<!--End Brand One-->

<!--Start Cta One -->
<section class="cta-one">
    <div class="shape1"></div>
    <div class="cta-one__bg" style="background-image: url({{ asset('assets/images/backgrounds/cta-v1-bg.jpg') }});"></div>
    <div class="container clearfix">
        <div class="cta-one__inner">
            <div class="cta-one__content">
                <div class="text-box">
                    <p>Quality Services provider</p>
                    <h2>Need Our services?</h2>
                </div>

                <div class="btn-box">
                    <a class="thm-btn" href="{{ url('contact-1.html') }}">
                        get free quote
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
