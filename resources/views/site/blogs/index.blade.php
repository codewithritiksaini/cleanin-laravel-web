
@extends('layout.site')

@section('content')

        <!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ asset('assets/images/backgrounds/page-header-bg.jpg') }})">
    </div>
    <div class="shape1 float-bob-x"><img src="{{ asset('assets/images/shapes/main-slider-v4-shape1.png') }}" alt="">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <h2 class="wow fadeInDown" data-wow-duration="1500ms">
                Blog 01</h2>
            <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                <li><a href="index.html">Home</a></li>
                <li><span class="icon-right-arrow1"></span></li>
                <li>Blog 01                </li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

        <!--Start Blog One-->
        <section class="blog-one blog-one--blog">
            <div class="container">
                <div class="row">
                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('assets/images/blog/blog-v1-img1.jpg') }}" alt="">
                            </div>

                            <div class="blog-one__single-content">
                                <div class="date-box">
                                    <h2>17</h2>
                                    <p>FEB</p>
                                </div>
                                <div class="blog-one__single-content-inner">
                                    <ul class="meta-box">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-people"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">By Admin</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-conversation"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">2 Comment</a></p>
                                            </div>
                                        </li>
                                    </ul>

                                    <h2><a href="blog-details-right.html">Great Tips to Choose A <br> Professional
                                            Cleaner</a>
                                    </h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point...</p>

                                    <div class="btn-box">
                                        <a href="blog-details-right.html">Read More <span class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->

                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('assets/images/blog/blog-v1-img2.jpg') }}" alt="">
                            </div>

                            <div class="blog-one__single-content">
                                <div class="date-box">
                                    <h2>15</h2>
                                    <p>FEB</p>
                                </div>
                                <div class="blog-one__single-content-inner">
                                    <ul class="meta-box">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-people"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">By Admin</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-conversation"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">2 Comment</a></p>
                                            </div>
                                        </li>
                                    </ul>

                                    <h2><a href="blog-details-right.html">Floor Cleaning & Washing <br> Use New
                                            Equipment</a>
                                    </h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point... </p>

                                    <div class="btn-box">
                                        <a href="blog-details-right.html">Read More <span class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->

                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('assets/images/blog/blog-v1-img3.jpg') }}" alt="">
                            </div>

                            <div class="blog-one__single-content">
                                <div class="date-box">
                                    <h2>19</h2>
                                    <p>FEB</p>
                                </div>
                                <div class="blog-one__single-content-inner">
                                    <ul class="meta-box">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-people"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">By Admin</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-conversation"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">2 Comment</a></p>
                                            </div>
                                        </li>
                                    </ul>

                                    <h2><a href="blog-details-right.html">Best Ways to Keep Your <br> House Fresh &
                                            Clean</a>
                                    </h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point...</p>

                                    <div class="btn-box">
                                        <a href="blog-details-right.html">Read More <span class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->

                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('assets/images/blog/blog-v1-img4.jpg') }}" alt="">
                            </div>

                            <div class="blog-one__single-content">
                                <div class="date-box">
                                    <h2>17</h2>
                                    <p>FEB</p>
                                </div>
                                <div class="blog-one__single-content-inner">
                                    <ul class="meta-box">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-people"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">By Admin</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-conversation"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">2 Comment</a></p>
                                            </div>
                                        </li>
                                    </ul>

                                    <h2><a href="blog-details-right.html">Your Need-To-Know Guide <br>
                                            For Infection Control</a>
                                    </h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point...</p>

                                    <div class="btn-box">
                                        <a href="blog-details-right.html">Read More <span class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->

                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('assets/images/blog/blog-v1-img5.jpg') }}" alt="">
                            </div>

                            <div class="blog-one__single-content">
                                <div class="date-box">
                                    <h2>15</h2>
                                    <p>FEB</p>
                                </div>
                                <div class="blog-one__single-content-inner">
                                    <ul class="meta-box">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-people"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">By Admin</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-conversation"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">2 Comment</a></p>
                                            </div>
                                        </li>
                                    </ul>

                                    <h2><a href="blog-details-right.html">Benefits of a professional <br>
                                            cleaning for service</a>
                                    </h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point... </p>

                                    <div class="btn-box">
                                        <a href="blog-details-right.html">Read More <span class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->

                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('assets/images/blog/blog-v1-img6.jpg') }}" alt="">
                            </div>

                            <div class="blog-one__single-content">
                                <div class="date-box">
                                    <h2>19</h2>
                                    <p>FEB</p>
                                </div>
                                <div class="blog-one__single-content-inner">
                                    <ul class="meta-box">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-people"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">By Admin</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-conversation"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">2 Comment</a></p>
                                            </div>
                                        </li>
                                    </ul>

                                    <h2><a href="blog-details-right.html">Personalid cleaning service <br>
                                            adipiscing agna aliqua.</a>
                                    </h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point...</p>

                                    <div class="btn-box">
                                        <a href="blog-details-right.html">Read More <span class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->

                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('assets/images/blog/blog-v1-img7.jpg') }}" alt="">
                            </div>

                            <div class="blog-one__single-content">
                                <div class="date-box">
                                    <h2>17</h2>
                                    <p>FEB</p>
                                </div>
                                <div class="blog-one__single-content-inner">
                                    <ul class="meta-box">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-people"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">By Admin</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-conversation"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">2 Comment</a></p>
                                            </div>
                                        </li>
                                    </ul>

                                    <h2><a href="blog-details-right.html">The Secret of Cleaning <br> Your House</a>
                                    </h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point...</p>

                                    <div class="btn-box">
                                        <a href="blog-details-right.html">Read More <span class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->

                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-6 wow fadeInDown" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('assets/images/blog/blog-v1-img8.jpg') }}" alt="">
                            </div>

                            <div class="blog-one__single-content">
                                <div class="date-box">
                                    <h2>15</h2>
                                    <p>FEB</p>
                                </div>
                                <div class="blog-one__single-content-inner">
                                    <ul class="meta-box">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-people"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">By Admin</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-conversation"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">2 Comment</a></p>
                                            </div>
                                        </li>
                                    </ul>

                                    <h2><a href="blog-details-right.html">How Our Cleaning Agency <br> Makes a
                                            Difference</a>
                                    </h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point... </p>

                                    <div class="btn-box">
                                        <a href="blog-details-right.html">Read More <span class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->

                    <!--Start Blog One Single-->
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="blog-one__single">
                            <div class="blog-one__single-img">
                                <img src="{{ asset('assets/images/blog/blog-v1-img9.jpg') }}" alt="">
                            </div>

                            <div class="blog-one__single-content">
                                <div class="date-box">
                                    <h2>19</h2>
                                    <p>FEB</p>
                                </div>
                                <div class="blog-one__single-content-inner">
                                    <ul class="meta-box">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-people"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">By Admin</a></p>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="icon">
                                                <span class="icon-conversation"></span>
                                            </div>

                                            <div class="text-box">
                                                <p><a href="#">2 Comment</a></p>
                                            </div>
                                        </li>
                                    </ul>

                                    <h2><a href="blog-details-right.html">The Secret of Cleaning <br> Your Apartment</a>
                                    </h2>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point...</p>

                                    <div class="btn-box">
                                        <a href="blog-details-right.html">Read More <span class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog One Single-->
                </div>

                <ul class="styled-pagination text-center clearfix">
                    <li class="arrow prev active"><a href="#"><span class="icon-right-arrow"></span></a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="arrow next"><a href="#"><span class="icon-right-arrow1"></span></a>
                    </li>
                </ul>
            </div>
        </section>
        <!--End Blog One-->

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
