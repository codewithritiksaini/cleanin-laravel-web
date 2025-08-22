(function ($) {
    "use strict";

    // ===Round Progress Script===
    if ($('.dial').length) {
        $('.dial').appear(function () {
            var elm = $(this);
            var color = elm.attr('data-fgColor');
            var perc = elm.attr('value');
            elm.knob({
                'value': 0,
                'min': 0,
                'max': 100,
                'skin': 'tron',
                'readOnly': true,
                'thickness': 0.15,
                'dynamicDraw': true,
                'displayInput': false
            });
            $({
                value: 0
            }).animate({
                value: perc
            }, {
                duration: 2000,
                easing: 'swing',
                progress: function () {
                    elm.val(Math.ceil(this.value)).trigger('change');
                }
            });
            $(this).append(function () {});
        }, {
            accY: 20
        });
    }

    // ===SplitText Script===
    gsap.registerPlugin(ScrollTrigger, SplitText);
    gsap.config({
        nullTargetWarn: false,
        trialWarn: false,
    });

    // ===Datepicker Script===
    if ($("#datepicker").length) {
        $("#datepicker").datepicker();
    }

    // ===FullHeight Script===
    function fullHeight() {
        $(".full-height").css("height", $(window).height());
    }

    // ===Price Filter Script===
    function priceFilter() {
        if ($(".price-ranger").length) {
            $(".price-ranger #slider-range").slider({
                range: true,
                min: 50,
                max: 500,
                values: [11, 300],
                slide: function (event, ui) {
                    $(".price-ranger .ranger-min-max-block .min").val("$" + ui.values[0]);
                    $(".price-ranger .ranger-min-max-block .max").val("$" + ui.values[1]);
                },
            });
            $(".price-ranger .ranger-min-max-block .min").val(
                "$" + $(".price-ranger #slider-range").slider("values", 0)
            );
            $(".price-ranger .ranger-min-max-block .max").val(
                "$" + $(".price-ranger #slider-range").slider("values", 1)
            );
        }
    }

    $(".add").on("click", function () {
        if ($(this).prev().val() < 999) {
            $(this)
                .prev()
                .val(+$(this).prev().val() + 1);
        }
    });
    $(".sub").on("click", function () {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1)
                $(this)
                .next()
                .val(+$(this).next().val() - 1);
        }
    });

    // ===Checkout Payment Script===
    if ($(".checkout__payment__title").length) {
        $(".checkout__payment__item").find(".checkout__payment__content").hide();
        $(".checkout__payment__item--active").find(".checkout__payment__content").show();

        $(".checkout__payment__title").on("click", function (e) {
            e.preventDefault();

            $(this)
                .parents(".checkout__payment")
                .find(".checkout__payment__item")
                .removeClass("checkout__payment__item--active");
            $(this).parents(".checkout__payment").find(".checkout__payment__content").slideUp();

            $(this).parent().addClass("checkout__payment__item--active");
            $(this).parent().find(".checkout__payment__content").slideDown();
        });
    }

    // ===Main Slider Script===
    if ($(".main-slider__carousel").length) {
        $(".main-slider__carousel").owlCarousel({
            loop: true,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            margin: 0,
            nav: false,
            dots: true,
            smartSpeed: 500,
            autoplay: true,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                800: {
                    items: 1,
                },
                992: {
                    items: 1,
                },
            },
        });
    }

    // ===Main Slider Two Script===
    if ($(".main-slider-two__carousel").length) {
        $(".main-slider-two__carousel").owlCarousel({
            loop: true,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            margin: 0,
            nav: true,
            dots: false,
            smartSpeed: 500,
            autoplay: true,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                800: {
                    items: 1,
                },
                992: {
                    items: 1,
                },
            },
        });
    }

    // ===Main Slider Three Script===
    if ($(".main-slider-three__carousel").length) {
        $(".main-slider-three__carousel").owlCarousel({
            loop: true,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            margin: 0,
            nav: false,
            dots: true,
            smartSpeed: 500,
            autoplay: true,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                800: {
                    items: 1,
                },
                992: {
                    items: 1,
                },
            },
        });
    }

    // ===Main Slider Four Script===
    if ($(".main-slider-four__carousel").length) {
        $(".main-slider-four__carousel").owlCarousel({
            loop: true,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            margin: 0,
            nav: true,
            dots: false,
            smartSpeed: 500,
            autoplay: true,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                800: {
                    items: 1,
                },
                992: {
                    items: 1,
                },
            },
        });
    }

    // ===Testimonial One Carousel===
    if ($(".testimonial-one__carousel").length) {
        $(".testimonial-one__carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            smartSpeed: 500,
            autoplay: true,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1200: {
                    items: 3,
                },
                1320: {
                    items: 3,
                },
            },
        });
    }

    // ===Testimonial Two Carousel===
    if ($(".testimonial-two__carousel").length) {
        $(".testimonial-two__carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            smartSpeed: 500,
            autoplay: true,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
                1200: {
                    items: 3,
                },
                1320: {
                    items: 3,
                },
            },
        });
    }

    // ===Testimonial Three Carousel===
    if ($(".testimonial-three__carousel").length) {
        $(".testimonial-three__carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            smartSpeed: 500,
            autoplay: true,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1200: {
                    items: 2,
                },
                1320: {
                    items: 2,
                },
            },
        });
    }


    // ===Project One Carousel===
    if ($(".project-one__carousel").length) {
        $(".project-one__carousel").owlCarousel({
            loop: true,
            margin: 2,
            nav: false,
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-left-arrow"></span>',
                '<span class="icon-right-arrow"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
                1200: {
                    items: 4,
                },
                1320: {
                    items: 5,
                },
            },
        });
    }

    // ===Team One Carousel===
    if ($(".team-one__carousel").length) {
        $(".team-one__carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-left-arrow"></span>',
                '<span class="icon-right-arrow"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
                1200: {
                    items: 4,
                },
                1320: {
                    items: 4,
                },
            },
        });
    }

    // ===Blog Three Carousel===
    if ($(".blog-three__carousel").length) {
        $(".blog-three__carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            smartSpeed: 500,
            autoplay: false,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 3,
                },
                992: {
                    items: 3,
                },
                1200: {
                    items: 3,
                },
                1320: {
                    items: 3,
                },
            },
        });
    }

    // ===Blog One Blog Carousel===
    if ($(".blog-one--blog-carousel__carousel").length) {
        $(".blog-one--blog-carousel__carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1200: {
                    items: 3,
                },
                1320: {
                    items: 3,
                },
            },
        });
    }

    // ===Gallery One Carousel===
    if ($(".gallery-one__carousel").length) {
        $(".gallery-one__carousel").owlCarousel({
            loop: true,
            margin: 15,
            nav: false,
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                550: {
                    items: 2,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
                1200: {
                    items: 4,
                },
                1320: {
                    items: 5,
                },
            },
        });
    }
    // ===Brand One Carousel===
    if ($(".brand-one__carousel").length) {
        $(".brand-one__carousel").owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: false,
            smartSpeed: 500,
            autoplay: true,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow-1"></span>',
                '<span class="icon-right-arrow-1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                500: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                992: {
                    items: 4,
                },
                1200: {
                    items: 5,
                },
                1320: {
                    items: 5,
                },
            },
        });
    }

    // ===Footer Two Carousel===
    if ($(".footer-widget__twitter-feed-carousel").length) {
        $(".footer-widget__twitter-feed-carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-left-arrow"></span>',
                '<span class="icon-right-arrow"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 1,
                },
                992: {
                    items: 1,
                },
                1200: {
                    items: 1,
                },
                1320: {
                    items: 1,
                },
            },
        });
    }

    // ===Services One Carousel===
    if ($(".services-one__carousel").length) {
        $(".services-one__carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1200: {
                    items: 3,
                },
                1320: {
                    items: 3,
                },
            },
        });
    }

    // ===Services Two Carousel===
    if ($(".services-two__carousel").length) {
        $(".services-two__carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            smartSpeed: 500,
            autoplay: false,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
                1200: {
                    items: 3,
                },
                1320: {
                    items: 4,
                },
            },
        });
    }

    // ===Services Five Carousel===
    if ($(".services-five__carousel").length) {
        $(".services-five__carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
                1200: {
                    items: 4,
                },
                1320: {
                    items: 4,
                },
            },
        });
    }

    // ===Project Three Carousel===
    if ($(".project-three__carousel").length) {
        $(".project-three__carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 1,
                },
                992: {
                    items: 1,
                },
                1200: {
                    items: 1,
                },
                1320: {
                    items: 1,
                },
            },
        });
    }

    // ===Projects Details Carousel===
    if ($(".projects-details__img1-carousel").length) {
        $(".projects-details__img1-carousel").owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            smartSpeed: 500,
            autoplay: false,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 1,
                },
                992: {
                    items: 1,
                },
                1200: {
                    items: 1,
                },
                1320: {
                    items: 1,
                },
            },
        });
    }

    // ===Pricing Plan One Carousel===
    if ($(".pricing-plan-one__carousel").length) {
        $(".pricing-plan-one__carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            smartSpeed: 500,
            autoplay: false,
            autoplayTimeout: 7000,
            navText: [
                '<span class="icon-right-arrow"></span>',
                '<span class="icon-right-arrow1"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
                1200: {
                    items: 3,
                },
                1320: {
                    items: 3,
                },
            },
        });
    }

    // ===Related Products Carousel===
    if ($(".related-products__carousel").length) {
        $(".related-products__carousel").owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            smartSpeed: 500,
            autoplay: true,
            autoplayTimeout: 5000,
            navText: [
                '<span class="icon-left-arrow"></span>',
                '<span class="icon-right-arrow"></span>',
            ],
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 3,
                },
                1200: {
                    items: 3,
                },
                1320: {
                    items: 4,
                },
            },
        });
    }

    // ===Product All Tab===
    if ($(".product__all-tab").length) {
        $(".product__all-tab .tabs-button-box .tab-btn-item").on("click", function (e) {
            e.preventDefault();
            var target = $($(this).attr("data-tab"));

            if ($(target).hasClass("actve-tab")) {
                return false;
            } else {
                $(".product__all-tab .tabs-button-box .tab-btn-item").removeClass("active-btn-item");
                $(this).addClass("active-btn-item");
                $(".product__all-tab .tabs-content-box .tab-content-box-item").removeClass(
                    "tab-content-box-item-active"
                );
                $(target).addClass("tab-content-box-item-active");
            }
        });
    }

    // ===Product Details Carousel===
    if ($("#shop-details-one__thumb").length) {
        let testimonialsThumb = new Swiper("#shop-details-one__thumb", {
            slidesPerView: 3,
            spaceBetween: 0,
            speed: 1400,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            loop: true,
            autoplay: {
                delay: 5000
            }
        });

        let testimonialsCarousel = new Swiper("#shop-details-one__carousel", {
            observer: true,
            observeParents: true,
            loop: true,
            speed: 1400,
            mousewheel: false,
            slidesPerView: 1,
            autoplay: {
                delay: 5000
            },
            thumbs: {
                swiper: testimonialsThumb
            },
            pagination: {
                el: '#testimonials-one__carousel-pagination',
                type: 'bullets',
                clickable: true
            },

            "navigation": {
                "nextEl": "#product-details__swiper-button-next",
                "prevEl": "#product-details__swiper-button-prev"
            },
        });
    }

    // ===Type Effect===
    if ($('.typed-effect').length) {
        $('.typed-effect').each(function () {
            var typedStrings = $(this).data('strings');
            var typedTag = $(this).attr('id');
            var typed = new Typed('#' + typedTag, {
                typeSpeed: 100,
                backSpeed: 100,
                fadeOut: true,
                loop: true,
                strings: typedStrings.split(',')
            });
        });

    }

    // ===Before After TwentyTwenty===
    if ($(".before-after-twentytwenty").length) {
        $(".before-after-twentytwenty").each(function () {
            var Self = $(this);
            var objName = Self.attr("id");
            $("#" + objName).twentytwenty();

            // hack for bs tab
            $(document).on("shown.bs.tab", 'a[data-toggle="tab"]', function (e) {
                var paneTarget = $(e.target).attr("data-target");
                var $thePane = $(".tab-pane" + paneTarget);
                var twentyTwentyContainer = "#" + objName;
                var twentyTwentyHeight = $thePane.find(twentyTwentyContainer).height();
                if (0 === twentyTwentyHeight) {
                    $thePane.find(twentyTwentyContainer).trigger("resize");
                }
            });
        });
    }

    // ===Project Three===
    if ($(".project-three__single-box li").length) {
        $(".project-three__single-box li").each(function () {
            let self = $(this);

            self.on("mouseenter", function () {
                console.log($(this));
                $(".project-three__single-box li").removeClass("active");
                $(this).addClass("active");
            });
        });
    }

    // ===Tab One===
    if ($(".tab-box").length) {
        $(".tab-box .tabs-button-box .tab-btn-item").on("click", function (e) {
            e.preventDefault();
            var target = $($(this).attr("data-tab"));

            if ($(target).hasClass("tab-active")) {
                return false;
            } else {
                $(".tab-box .tabs-button-box .tab-btn-item").removeClass("active-btn");
                $(this).addClass("active-btn");
                $(".tab-box .tabs-content-box .tab").removeClass("tab-active");
                $(target).addClass("tab-active");
            }
        });
    }

    // ===Pricing One Tab===
    if ($(".pricing-one__tab").length) {
        $(".pricing-one__tab .tabs-button-box .tab-btn-item").on("click", function (e) {
            e.preventDefault();
            var target = $($(this).attr("data-tab"));

            if ($(target).hasClass("actve-tab")) {
                return false;
            } else {
                $(".pricing-one__tab .tabs-button-box .tab-btn-item").removeClass(
                    "active-btn-item"
                );
                $(this).addClass("active-btn-item");
                $(".pricing-one__tab .tabs-content-box .tab-content-box-item").removeClass(
                    "tab-content-box-item-active"
                );
                $(target).addClass("tab-content-box-item-active");
            }
        });
    }

    // ===Custom Coursor===
    if ($(".custom-cursor").length) {
        var cursor = document.querySelector(".custom-cursor__cursor");
        var cursorinner = document.querySelector(".custom-cursor__cursor-two");
        var a = document.querySelectorAll("a");

        document.addEventListener("mousemove", function (e) {
            var x = e.clientX;
            var y = e.clientY;
            cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`;
        });

        document.addEventListener("mousemove", function (e) {
            var x = e.clientX;
            var y = e.clientY;
            cursorinner.style.left = x + "px";
            cursorinner.style.top = y + "px";
        });

        document.addEventListener("mousedown", function () {
            cursor.classList.add("click");
            cursorinner.classList.add("custom-cursor__innerhover");
        });

        document.addEventListener("mouseup", function () {
            cursor.classList.remove("click");
            cursorinner.classList.remove("custom-cursor__innerhover");
        });

        a.forEach((item) => {
            item.addEventListener("mouseover", () => {
                cursor.classList.add("custom-cursor__hover");
            });
            item.addEventListener("mouseleave", () => {
                cursor.classList.remove("custom-cursor__hover");
            });
        });
    }

    // ===Add Payment ===
    $(document).on("click", ".amount-btn", function () {
        $(".amount-btn").removeClass("active");

        $(this).addClass("active");

        let buttonValue = $(this).text();

        $(".addAmount-value").val(buttonValue);
    });

    // ===Progress Count Bar===
    if ($(".count-bar").length) {
        $(".count-bar").appear(
            function () {
                var el = $(this);
                var percent = el.data("percent");
                $(el).css("width", percent).addClass("counted");
            }, {
                accY: -50,
            }
        );
    }

    // ===Fact Counter===
    if ($(".count-box").length) {
        $(".count-box").appear(
            function () {
                var $t = $(this),
                    n = $t.find(".count-text").attr("data-stop"),
                    r = parseInt($t.find(".count-text").attr("data-speed"), 10);

                if (!$t.hasClass("counted")) {
                    $t.addClass("counted");
                    $({
                        countNum: $t.find(".count-text").text(),
                    }).animate({
                        countNum: n,
                    }, {
                        duration: r,
                        easing: "linear",
                        step: function () {
                            $t.find(".count-text").text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $t.find(".count-text").text(this.countNum);
                        },
                    });
                }
            }, {
                accY: 0,
            }
        );
    }

    // ===Accrodion===
    if ($(".accrodion-grp").length) {
        var accrodionGrp = $(".accrodion-grp");
        accrodionGrp.each(function () {
            var accrodionName = $(this).data("grp-name");
            var Self = $(this);
            var accordion = Self.find(".accrodion");
            Self.addClass(accrodionName);
            Self.find(".accrodion .accrodion-content").hide();
            Self.find(".accrodion.active").find(".accrodion-content").show();
            accordion.each(function () {
                $(this)
                    .find(".accrodion-title")
                    .on("click", function () {
                        if ($(this).parent().hasClass("active") === false) {
                            $(".accrodion-grp." + accrodionName)
                                .find(".accrodion")
                                .removeClass("active");
                            $(".accrodion-grp." + accrodionName)
                                .find(".accrodion")
                                .find(".accrodion-content")
                                .slideUp();
                            $(this).parent().addClass("active");
                            $(this).parent().find(".accrodion-content").slideDown();
                        }
                    });
            });
        });
    }

    // ===Contact Form===
    if ($(".contact-form-validated").length) {
        $(".contact-form-validated").each(function () {
            let self = $(this);
            self.validate({
                // initialize the plugin
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    message: {
                        required: true,
                    },
                    subject: {
                        required: true,
                    },
                },
                submitHandler: function (form) {
                    // sending value with ajax request
                    $.post($(form).attr("action"), $(form).serialize(), function (response) {
                        $(form).parent().find(".result").append(response);
                        $(form).find('input[type="text"]').val("");
                        $(form).find('input[type="email"]').val("");
                        $(form).find("textarea").val("");
                    });
                    return false;
                },
            });
        });
    }

    // ===Mailchimp Form===
    if ($(".mc-form").length) {
        $(".mc-form").each(function () {
            var Self = $(this);
            var mcURL = Self.data("url");
            var mcResp = Self.parent().find(".mc-form__response");

            Self.ajaxChimp({
                url: mcURL,
                callback: function (resp) {
                    // appending response
                    mcResp.append(function () {
                        return '<p class="mc-message">' + resp.msg + "</p>";
                    });
                    // making things based on response
                    if (resp.result === "success") {
                        // Do stuff
                        Self.removeClass("errored").addClass("successed");
                        mcResp.removeClass("errored").addClass("successed");
                        Self.find("input").val("");

                        mcResp.find("p").fadeOut(10000);
                    }
                    if (resp.result === "error") {
                        Self.removeClass("successed").addClass("errored");
                        mcResp.removeClass("successed").addClass("errored");
                        Self.find("input").val("");

                        mcResp.find("p").fadeOut(10000);
                    }
                },
            });
        });
    }

    // ===Video Popup===
    if ($(".video-popup").length) {
        $(".video-popup").magnificPopup({
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: true,

            fixedContentPos: false,
        });
    }

    // ===Img Popup===
    if ($(".img-popup").length) {
        var groups = {};
        $(".img-popup").each(function () {
            var id = parseInt($(this).attr("data-group"), 10);

            if (!groups[id]) {
                groups[id] = [];
            }

            groups[id].push(this);
        });

        $.each(groups, function () {
            $(this).magnificPopup({
                type: "image",
                closeOnContentClick: true,
                closeBtnInside: false,
                gallery: {
                    enabled: true,
                },
            });
        });
    }

    //=== CountDownTimer===
    if ($(".coming-soon-countdown").length) {
        $(".coming-soon-countdown").each(function () {
            var Self = $(this);
            var countDate = Self.data("countdown-time"); // getting date

            Self.countdown(countDate, function (event) {
                $(this).html(
                    '<li> <div class="box"> <span class="days">' +
                    event.strftime("%D") +
                    '</span> <span class="timeRef">days</span> </div> </li> <li> <div class="box"> <span class="hours">' +
                    event.strftime("%H") +
                    '</span> <span class="timeRef clr-1">hrs</span> </div> </li> <li> <div class="box"> <span class="minutes">' +
                    event.strftime("%M") +
                    '</span> <span class="timeRef clr-2">mins</span> </div> </li> <li> <div class="box"> <span class="seconds">' +
                    event.strftime("%S") +
                    '</span> <span class="timeRef clr-3">secs</span> </div> </li>'
                );
            });
        });
    }

    function dynamicCurrentMenuClass(selector) {
        let FileName = window.location.href.split("/").reverse()[0];

        selector.find("li").each(function () {
            let anchor = $(this).find("a");
            if ($(anchor).attr("href") == FileName) {
                $(this).addClass("current");
            }
        });
        // if any li has .current elmnt add class
        selector.children("li").each(function () {
            if ($(this).find(".current").length) {
                $(this).addClass("current");
            }
        });
        // if no file name return
        if ("" == FileName) {
            selector.find("li").eq(0).addClass("current");
        }
    }

    if ($(".main-menu__list").length) {
        // dynamic current class
        let mainNavUL = $(".main-menu__list");
        dynamicCurrentMenuClass(mainNavUL);
    }

    if ($(".main-menu__list").length && $(".mobile-nav__container").length) {
        let navContent = document.querySelector(".main-menu__list").outerHTML;
        let mobileNavContainer = document.querySelector(".mobile-nav__container");
        mobileNavContainer.innerHTML = navContent;
    }
    if ($(".sticky-header__content").length) {
        let navContent = document.querySelector(".main-menu").innerHTML;
        let mobileNavContainer = document.querySelector(".sticky-header__content");
        mobileNavContainer.innerHTML = navContent;
    }

    if ($(".mobile-nav__container .main-menu__list").length) {
        let dropdownAnchor = $(".mobile-nav__container .main-menu__list .dropdown > a");
        dropdownAnchor.each(function () {
            let self = $(this);
            let toggleBtn = document.createElement("BUTTON");
            toggleBtn.setAttribute("aria-label", "dropdown toggler");
            toggleBtn.innerHTML = "<i class='fa fa-angle-down'></i>";
            self.append(function () {
                return toggleBtn;
            });
            self.find("button").on("click", function (e) {
                e.preventDefault();
                let self = $(this);
                self.toggleClass("expanded");
                self.parent().toggleClass("expanded");
                self.parent().parent().children("ul").slideToggle();
            });
        });
    }

    if ($(".mobile-nav__toggler").length) {
        $(".mobile-nav__toggler").on("click", function (e) {
            e.preventDefault();
            $(".mobile-nav__wrapper").toggleClass("expanded");
            $("body").toggleClass("locked");
        });
    }

    // ===Search Popup===
    if ($(".search-popup").length > 0) {
        $(".open-search").on("click", function () {
            $("body").addClass("search-active");
        });

        $(".close-search").on("click", function () {
            $("body").removeClass("search-active");
        });
    }

    // ===Odometer===
    if ($(".odometer").length) {
        var odo = $(".odometer");
        odo.each(function () {
            $(this).appear(function () {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
    }

    // ===Dynamic Year===
    if ($(".dynamic-year").length) {
        let date = new Date();
        $(".dynamic-year").html(date.getFullYear());
    }

    // ===Wow===
    if ($(".wow").length) {
        var wow = new WOW({
            boxClass: "wow", // animated element css class (default is wow)
            animateClass: "animated", // animation css class (default is animated)
            mobile: true, // trigger animations on mobile devices (default is true)
            live: true, // act on asynchronously loaded content (default is true)
        });
        wow.init();
    }

    // ===Tab Two===
    if ($(".tabs-box").length) {
        $(".tabs-box .tab-buttons .tab-btn").on("click", function (e) {
            e.preventDefault();
            var target = $($(this).attr("data-tab"));

            if ($(target).is(":visible")) {
                return false;
            } else {
                target
                    .parents(".tabs-box")
                    .find(".tab-buttons")
                    .find(".tab-btn")
                    .removeClass("active-btn");
                $(this).addClass("active-btn");
                target.parents(".tabs-box").find(".tabs-content").find(".tab").fadeOut(0);
                target
                    .parents(".tabs-box")
                    .find(".tabs-content")
                    .find(".tab")
                    .removeClass("active-tab");
                $(target).fadeIn(300);
                $(target).addClass("active-tab");
            }
        });
    }

    // ===Marquee Mode===
    if ($(".marquee_mode").length) {
        $('.marquee_mode').marquee({
            speed: 30,
            gap: 0,
            delayBeforeStart: 0,
            direction: 'left',
            duplicated: true,
            pauseOnHover: true,
            startVisible: true,
        });
    }

    // ===Marquee Mode 2===
    if ($(".marquee_mode2").length) {
        $('.marquee_mode2').marquee({
            speed: 30,
            gap: 0,
            delayBeforeStart: 0,
            direction: 'left',
            duplicated: true,
            pauseOnHover: true,
            startVisible: true,
        });
    }

    // ===Marquee Mode 3===
    if ($(".marquee_mode3").length) {
        $('.marquee_mode3').marquee({
            speed: 30,
            gap: 0,
            delayBeforeStart: 0,
            direction: 'right',
            duplicated: true,
            pauseOnHover: true,
            startVisible: true,
        });
    }

    // ===Marquee Mode 4===
    if ($(".marquee_mode4").length) {
        $('.marquee_mode4').marquee({
            speed: 30,
            gap: 0,
            delayBeforeStart: 0,
            direction: 'right',
            duplicated: true,
            pauseOnHover: true,
            startVisible: true,
        });
    }
    // ===Marquee Mode 5===
    if ($(".marquee_mode5").length) {
        $('.marquee_mode5').marquee({
            speed: 30,
            gap: 0,
            delayBeforeStart: 0,
            direction: 'left',
            duplicated: true,
            pauseOnHover: true,
            startVisible: true,
        });
    }

    // ===Project Masonary Layout===
    function projectMasonaryLayout() {
        if ($(".masonary-layout").length) {
            $(".masonary-layout").isotope({
                layoutMode: "masonry",
            });
        }
        if ($(".post-filter").length) {
            $(".post-filter li")
                .children(".filter-text")
                .on("click", function () {
                    var Self = $(this);
                    var selector = Self.parent().attr("data-filter");
                    $(".post-filter li").removeClass("active");
                    Self.parent().addClass("active");
                    $(".filter-layout").isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 500,
                            easing: "linear",
                            queue: false,
                        },
                    });
                    return false;
                });
        }

        if ($(".post-filter.has-dynamic-filters-counter").length) {
            // var allItem = $('.single-filter-item').length;
            var activeFilterItem = $(".post-filter.has-dynamic-filters-counter").find("li");
            activeFilterItem.each(function () {
                var filterElement = $(this).data("filter");
                var count = $(".filter-layout").find(filterElement).length;
                $(this)
                    .children(".filter-text")
                    .append('<span class="count">' + count + "</span>");
            });
        }
    }

    // ===Scroll To Link===
    function SmoothMenuScroll() {
        var anchor = $(".scrollToLink");
        if (anchor.length) {
            anchor.children("a").bind("click", function (event) {
                if ($(window).scrollTop() > 10) {
                    var headerH = "90";
                } else {
                    var headerH = "90";
                }
                var target = $(this);
                $("html, body")
                    .stop()
                    .animate({
                            scrollTop: $(target.attr("href")).offset().top - headerH + "px",
                        },
                        200,
                        "easeInOutExpo"
                    );
                anchor.removeClass("current");
                anchor.removeClass("current-menu-ancestor");
                anchor.removeClass("current_page_item");
                anchor.removeClass("current-menu-parent");
                target.parent().addClass("current");
                event.preventDefault();
            });
        }
    }
    SmoothMenuScroll();

    // ===One Page Scroll Menu===
    function OnePageMenuScroll() {
        var windscroll = $(window).scrollTop();
        if (windscroll >= 117) {
            var menuAnchor = $(".one-page-scroll-menu .scrollToLink").children("a");
            menuAnchor.each(function () {
                var sections = $(this).attr("href");
                $(sections).each(function () {
                    if ($(this).offset().top <= windscroll + 100) {
                        var Sectionid = $(sections).attr("id");
                        $(".one-page-scroll-menu").find("li").removeClass("current");
                        $(".one-page-scroll-menu").find("li").removeClass("current-menu-ancestor");
                        $(".one-page-scroll-menu").find("li").removeClass("current_page_item");
                        $(".one-page-scroll-menu").find("li").removeClass("current-menu-parent");
                        $(".one-page-scroll-menu")
                            .find("a[href*=\\#" + Sectionid + "]")
                            .parent()
                            .addClass("current");
                    }
                });
            });
        } else {
            $(".one-page-scroll-menu li.current").removeClass("current");
            $(".one-page-scroll-menu li:first").addClass("current");
        }
    }

    // ===Handle Scrollbar ===
    function handleScrollbar() {
        const bodyHeight = $("body").height();
        const scrollPos = $(window).innerHeight() + $(window).scrollTop();
        let percentage = (scrollPos / bodyHeight) * 100;
        if (percentage > 100) {
            percentage = 100;
        }
        $(".scroll-to-top .scroll-to-top__inner").css("width", percentage + "%");
    }

    // ===Animation Gsap===
    function title_animation() {
        var tg_var = jQuery(".sec-title-animation");
        if (!tg_var.length) {
            return;
        }
        const quotes = document.querySelectorAll(".sec-title-animation .title-animation");

        quotes.forEach((quote) => {
            //Reset if needed
            if (quote.animation) {
                quote.animation.progress(1).kill();
                quote.split.revert();
            }

            var getclass = quote.closest(".sec-title-animation").className;
            var animation = getclass.split("animation-");
            if (animation[1] == "style4") return;

            quote.split = new SplitText(quote, {
                type: "lines,words,chars",
                linesClass: "split-line",
            });
            gsap.set(quote, {
                perspective: 400,
            });

            if (animation[1] == "style1") {
                gsap.set(quote.split.chars, {
                    opacity: 0,
                    y: "90%",
                    rotateX: "-40deg",
                });
            }
            if (animation[1] == "style2") {
                gsap.set(quote.split.chars, {
                    opacity: 0,
                    x: "50",
                });
            }
            if (animation[1] == "style3") {
                gsap.set(quote.split.chars, {
                    opacity: 0,
                });
            }
            quote.animation = gsap.to(quote.split.chars, {
                scrollTrigger: {
                    trigger: quote,
                    start: "top 90%",
                },
                x: "0",
                y: "0",
                rotateX: "0",
                opacity: 1,
                duration: 1,
                ease: Back.easeOut,
                stagger: 0.02,
            });
        });
    }
    ScrollTrigger.addEventListener("refresh", title_animation);

    // ===Window Load Event===
    $(window).on("load", function () {
        projectMasonaryLayout();
        fullHeight();
        title_animation();
        priceFilter();

        // Preloader
        $(".js-preloader").delay(700).fadeOut(500);

        if ($(".post-filter").length) {
            var postFilterList = $(".post-filter li");
            // for first init
            $(".filter-layout").isotope({
                filter: ".filter-item",
                animationOptions: {
                    duration: 500,
                    easing: "linear",
                    queue: false,
                },
            });
            // on click filter links
            postFilterList.on("click", function () {
                var Self = $(this);
                var selector = Self.attr("data-filter");
                postFilterList.removeClass("active");
                Self.addClass("active");

                $(".filter-layout").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 500,
                        easing: "linear",
                        queue: false,
                    },
                });
                return false;
            });
        }

        if ($(".post-filter.has-dynamic-filter-counter").length) {
            // var allItem = $('.single-filter-item').length;

            var activeFilterItem = $(".post-filter.has-dynamic-filter-counter").find("li");

            activeFilterItem.each(function () {
                var filterElement = $(this).data("filter");
                var count = $(".filter-layout").find(filterElement).length;
                $(this).append("<sup>[" + count + "]</sup>");
            });
        }
    });

    // ===Window Scroll Event===
    $(window).on("scroll", function () {
        if ($(".stricked-menu").length) {
            var headerScrollPos = 130;
            var stricky = $(".stricked-menu");
            if ($(window).scrollTop() > headerScrollPos) {
                stricky.addClass("stricky-fixed");
            } else if ($(this).scrollTop() <= headerScrollPos) {
                stricky.removeClass("stricky-fixed");
            }
        }

        OnePageMenuScroll();
    });

    $(window).on("scroll", function () {
        handleScrollbar();
        if ($(".sticky-header--one-page").length) {
            var headerScrollPos = 130;
            var stricky = $(".sticky-header--one-page");
            if ($(window).scrollTop() > headerScrollPos) {
                stricky.addClass("active");
            } else if ($(this).scrollTop() <= headerScrollPos) {
                stricky.removeClass("active");
            }
        }

        var scrollToTopBtn = ".scroll-to-top";
        if (scrollToTopBtn.length) {
            if ($(window).scrollTop() > 500) {
                $(scrollToTopBtn).addClass("show");
            } else {
                $(scrollToTopBtn).removeClass("show");
            }
        }
    });

    //===Tg Title Animation===
    gsap.registerPlugin(ScrollTrigger, SplitText);
    gsap.config({
        nullTargetWarn: false,
        trialWarn: false,
    });

    function tg_title_animation() {
        var tg_var = jQuery(".tg-heading-subheading");
        if (!tg_var.length) {
            return;
        }
        const quotes = document.querySelectorAll(".tg-heading-subheading .tg-element-title");

        quotes.forEach((quote) => {
            //Reset if needed
            if (quote.animation) {
                quote.animation.progress(1).kill();
                quote.split.revert();
            }

            var getclass = quote.closest(".tg-heading-subheading").className;
            var animation = getclass.split("animation-");
            if (animation[1] == "style4") return;

            quote.split = new SplitText(quote, {
                type: "lines,words,chars",
                linesClass: "split-line",
            });
            gsap.set(quote, {
                perspective: 400,
            });

            if (animation[1] == "style1") {
                gsap.set(quote.split.chars, {
                    opacity: 0,
                    y: "90%",
                    rotateX: "-40deg",
                });
            }
            if (animation[1] == "style2") {
                gsap.set(quote.split.chars, {
                    opacity: 0,
                    x: "50",
                });
            }
            if (animation[1] == "style3") {
                gsap.set(quote.split.chars, {
                    opacity: 0,
                });
            }
            quote.animation = gsap.to(quote.split.chars, {
                scrollTrigger: {
                    trigger: quote,
                    start: "top 90%",
                },
                x: "0",
                y: "0",
                rotateX: "0",
                opacity: 1,
                duration: 1,
                ease: Back.easeOut,
                stagger: 0.02,
            });
        });
    }
    ScrollTrigger.addEventListener("refresh", tg_title_animation);

    //===Nice Select===
    $("select:not(.ignore)").niceSelect();
})(jQuery);