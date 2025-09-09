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
                {{ $blog->title }}</h2>
            <ul class="thm-breadcrumb wow fadeInUp" data-wow-duration="1500ms">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><span class="icon-right-arrow1"></span></li>
                <li>Blog Details</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

        <!--Start Blog Details-->
        <section class="blog-details style2">
            <div class="container">
                <div class="row">
                    <!--Start Blog Details Content-->
                    <div class="col-xl-12">
                        <div class="blog-details__content">
                            <div class="blog-one__single">
                                <div class="blog-one__single-img">
                                    <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="">
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

                                        <h2>Best Ways to Keep Your House Fresh & Clean</h2>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                            opposed to using 'Content here, content here', making it look like readable
                                            English. Many desktop publishing packages and web page editors now use Lorem
                                            Ipsum as their default model text, and a search for 'lorem ipsum' will
                                            uncover many web sites still in their infancy. Various versions have evolved
                                            over the years.</p>

                                        <p class="text2">There are many variations of passages of Lorem Ipsum available,
                                            but the majority have suffered alteration in some form, by injected humour,
                                            or randomised words which don't look even slightly believable. If you are
                                            going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                            anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                            generators on the Internet tend to repeat predefined chunks as necessary.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-details__content-text1">
                                <h2>Expertise and Experience</h2>
                                <p class="text1">Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                    has roots in a piece of classical Latin literature from 45 BC, making it over 2000
                                    years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                    Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
                                    Ipsum passage, and going through the cites of the word in classical literature,
                                    discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and
                                    1.10.33 of "de Finibus Bonorum et Malorum.</p>

                                <p class="text2">Richard McClintock, a Latin professor at Hampden-Sydney College in
                                    Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
                                    Ipsum passage, and going through the cites of the word in classical literature,
                                    discovered 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                    Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics,
                                    very popular during the Renaissance.</p>
                            </div>

                            <div class="blog-details__content-img1">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="blog-details__content-img1-single">
                                    <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="blog-details__content-img1-single">
                                    <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-details__content-text2">
                                <h2>Top tips for house cleaning</h2>
                                <p class="text1">There are many variations of passages of Lorem Ipsum available, but the
                                    majority have suffered alteration in some form, by injected humour, or randomised
                                    words which don't look even slightly believable. If you are going to use a passage
                                    of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                                    middle of text. All the Lorem Ipsum generators on the Internet.</p>

                                <ul class="blog-details__content-text2-list">
                                    <li>
                                        <p><span class="icon-checkmark"></span> Daily cleaning of office areas,
                                            including desks, chairs.</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-checkmark"></span> Floor care, including vacuuming or
                                            mopping as needed.</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-checkmark"></span> Dusting and sanitizing of electronics,
                                            such computers & telephones.</p>
                                    </li>
                                    <li>
                                        <p><span class="icon-checkmark"></span> Thorough cleaning of conference tables,
                                            chairs, and equipment.</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="blog-details__content-text3">
                                <h2>Why Professional Cleaning Matters</h2>
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                                    interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
                                    Cicero are also reproduced in their exact original form, accompanied by English
                                    versions from the 1914 translation by H. Rackham.</p>
                            </div>

                            <div class="blog-details__content-text4">
                                <div class="img-box">
                                    <img src="{{ asset('storage/blogs/' . $blog->image) }}" alt="">
                                </div>

                                <div class="content-box">
                                    <h2>{{ $blog->name }}</h2>
                                    <span>{{$blog->description}}</span>
                                    <p>{{$blog->content}}</p>

                                    <div class="social-links">
                                        <a href="{{ $blog->facebook }}"><span class="icon-facebook-app-symbol"></span></a>
                                    <a href="{{ $blog->twitter }}"><span class="icon-twitter-1"></span></a>
                                    <a href="{{ $blog->instagram }}"><span class="icon-instagram"></span></a>
                                    <a href="{{ $blog->whatsapp }}"><span class="fab fa-whatsapp"></span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-details__content-text5">
                                <div class="blog-details__content-text5-tag">
                                    <div class="title-box">
                                        <h2>Tags:</h2>
                                    </div>

                                    <ul>
                                        <li><a href="#">Cleaning</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Office</a></li>
                                    </ul>
                                </div>

                                <div class="blog-details__content-text5-share">
                                    <div class="title-box">
                                        <h2>Share:</h2>
                                    </div>

                                    <ul>
                                        <li><a href="#"><span class="icon-facebook-app-symbol"></span></a></li>
                                        <li><a href="#"><span class="icon-twitter-1"></span></a></li>
                                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                                        <li><a href="#"><span class="icon-pinterest"></span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="comment-one">
                                <div class="title-box">
                                    <h2>03 Comments</h2>
                                </div>

                                <div class="comment-one__single">
                                    <div class="comment-one__single-inner">
                                        <div class="comment-one__img">
                                            <img src="assets/images/blog/blog-details-img4.jpg" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <div class="comment-one__content-top">
                                                <div class="title-box">
                                                    <h2>Leslie Alexander</h2>
                                                    <p><span class="icon-calendar"></span> 20 Jun, 2025</p>
                                                </div>

                                                <div class="btn-box">
                                                    <a href="#">Reply</a>
                                                </div>

                                            </div>

                                            <div class="comment-one__content-text">
                                                <p>Your team's brilliance, determination, and confidence will drive you
                                                    to conquer new frontiers; greatness lies within you. greatnes lies.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-one__single style2">
                                    <div class="comment-one__single-inner">
                                        <div class="comment-one__img">
                                            <img src="assets/images/blog/blog-details-img5.jpg" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <div class="comment-one__content-top">
                                                <div class="title-box">
                                                    <h2>Savannah Nguyen</h2>
                                                    <p><span class="icon-calendar"></span> 20 Jun, 2025</p>
                                                </div>

                                                <div class="btn-box">
                                                    <a href="#">Reply</a>
                                                </div>

                                            </div>

                                            <div class="comment-one__content-text">
                                                <p>Your team's brilliance, determination, and confidence will drive you
                                                    to conquer new frontiers; greatness lies within you. greatnes lies.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-one__single">
                                    <div class="comment-one__single-inner">
                                        <div class="comment-one__img">
                                            <img src="assets/images/blog/blog-details-img6.jpg" alt="">
                                        </div>
                                        <div class="comment-one__content">
                                            <div class="comment-one__content-top">
                                                <div class="title-box">
                                                    <h2>Jenny Wilson</h2>
                                                    <p><span class="icon-calendar"></span> 20 Jun, 2025</p>
                                                </div>

                                                <div class="btn-box">
                                                    <a href="#">Reply</a>
                                                </div>

                                            </div>

                                            <div class="comment-one__content-text">
                                                <p>Your team's brilliance, determination, and confidence will drive you
                                                    to conquer new frontiers; greatness lies within you. greatnes lies.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="comment-form">
                                <div class="title-box">
                                    <h2>Leave a Reply</h2>
                                    <p>Your email address will not be published. Required fields are marked *</p>
                                </div>

                                <form class="contact-form-validated" action="https://php.unicktheme.com/cleanin/assets/inc/sendemail.php" method="post"
                                    novalidate="novalidate">
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

                                        <div class="col-xl-12">
                                            <div class="input-box">
                                                <textarea name="message" placeholder="Message"></textarea>
                                                <div class="icon style2"><span class="icon-pen"></span></div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12">
                                            <div class="comment-form__checkbox">
                                                <input type="checkbox" name="agree " id="agree" checked>
                                                <label for="agree"><span></span>Save my name, email, and website in this
                                                    browser for the next time I comment.</label>
                                            </div>

                                            <div class="comment-form__btn">
                                                <button type="submit" class="thm-btn">
                                                    Submit Now
                                                    <i class="icon-next"></i>
                                                    <span class="hover-btn hover-bx"></span>
                                                    <span class="hover-btn hover-bx2"></span>
                                                    <span class="hover-btn hover-bx3"></span>
                                                    <span class="hover-btn hover-bx4"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                    <!--End Blog Details Content-->
                </div>
            </div>
        </section>
        <!--End Blog Details-->

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
