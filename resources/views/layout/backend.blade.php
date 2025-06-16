<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="opacity-0" lang="en">
<!-- BEGIN: Head -->

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="Koo2zWJKliRELq4FawEfkQPg3CJYusp6ppGFZw4O">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard - Midone - Admin Dashboard</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{asset('backend-assets/dist/css/vendors/tippy.css')}}">
    <link rel="stylesheet" href="{{asset('backend-assets/dist/css/vendors/litepicker.css')}}">
    <link rel="stylesheet" href="{{asset('backend-assets/dist/css/vendors/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{asset('backend-assets/dist/css/themes/rubick/side-nav.css')}}">
    <link rel="stylesheet" href="{{asset('backend-assets/dist/css/vendors/leaflet.css')}}">
    <link rel="stylesheet" href="{{asset('backend-assets/dist/css/vendors/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset('backend-assets/dist/css/components/mobile-menu.css')}}">
    <link rel="stylesheet" href="{{asset('backend-assets/dist/css/app.css')}}">
    <!-- END: CSS Assets-->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
    /* Custom pagination styles with black text */
        .pagination a {
            background-color: #4f46e5; /* Tailwind Blue */
            color: black;  /* Text color set to black */
            border-radius: 0.375rem;
            padding: 0.5rem 1rem;
            margin-right: 0.5rem;
            transition: background-color 0.3s ease;
        }

        .pagination a:hover {
            background-color: #4338ca; /* Darker Blue */
        }

        .pagination .disabled {
            background-color: #e5e7eb; /* Light Gray */
            color: #9ca3af; /* Dark Gray */
            cursor: not-allowed;
        }

        .pagination .pagination-prev,
        .pagination .pagination-next {
            background-color: #3b82f6; /* Blue for prev/next buttons */
            color: black;  /* Text color set to black */
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            transition: background-color 0.3s ease;
        }

        .pagination .pagination-prev:hover,
        .pagination .pagination-next:hover {
            background-color: #2563eb; /* Darker Blue */
        }

    </style>

</head>
<!-- END: Head -->

<body>
    <div>
        <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="theme-switcher" class="modal group bg-black/60 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
            <div data-tw-merge="" class="w-[90%] ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px]">
                <a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14"
                    data-tw-dismiss="modal" href="javascript:;">
                    <i data-tw-merge="" data-lucide="x" class="h-3 w-3 stroke-[1] sm:h-8 sm:w-8"></i>
                </a>
                <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                    <div class="flex flex-col">
                        <div class="px-8 pt-6 pb-8">
                            <div class="text-base font-medium">Themes</div>
                            <div class="mt-0.5 text-slate-500">Choose your theme</div>
                            <div class="mt-5 grid grid-cols-2 gap-x-5 gap-y-3.5">
                                <div>
                                    <a href="rubick-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block border-2 border-theme-1/60">
                                        <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                            <img class="w-full h-full" src="{{asset('backend-assets/dist/images/themes/rubick.png') }}" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        rubick
                                    </div>
                                </div>
                                <div>
                                    <a href="icewall-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                            <img class="w-full h-full" src="{{asset('backend-assets/dist/images/themes/icewall.png') }}" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        icewall
                                    </div>
                                </div>
                                <div>
                                    <a href="tinker-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                            <img class="w-full h-full" src="{{asset('backend-assets/dist/images/themes/tinker.png') }}" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        tinker
                                    </div>
                                </div>
                                <div>
                                    <a href="enigma-side-menu-dashboard-overview-1-page.html" class="h-28 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="w-full h-full overflow-hidden rounded-md image-fit">
                                            <img class="w-full h-full" src="{{asset('backend-assets/dist/images/themes/enigma.png') }}" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        enigma
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-dashed"></div>
                        <div class="px-8 pt-6 pb-8">
                            <div class="text-base font-medium">Layouts</div>
                            <div class="mt-0.5 text-slate-500">Choose your layout</div>
                            <div class="mt-5 grid grid-cols-3 gap-x-5 gap-y-3.5">
                                <div>
                                    <a href="rubick-side-menu-dashboard-overview-1-page.html" class="h-24 cursor-pointer bg-slate-50 box p-1 block border-2 border-theme-1/60">
                                        <div class="w-full h-full overflow-hidden rounded-md">
                                            <img class="w-full h-full" src="{{asset('backend-assets/dist/images/layouts/side-menu.png') }}" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        side menu
                                    </div>
                                </div>
                                <div>
                                    <a href="rubick-simple-menu-dashboard-overview-1-page.html" class="h-24 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="w-full h-full overflow-hidden rounded-md">
                                            <img class="w-full h-full" src="{{asset('backend-assets/dist/images/layouts/simple-menu.png') }}" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        simple menu
                                    </div>
                                </div>
                                <div>
                                    <a href="rubick-top-menu-dashboard-overview-1-page.html" class="h-24 cursor-pointer bg-slate-50 box p-1 block">
                                        <div class="w-full h-full overflow-hidden rounded-md">
                                            <img class="w-full h-full" src="{{asset('backend-assets/dist/images/layouts/top-menu.png') }}" alt="Midone - Admin Dashboard Template">
                                        </div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        top menu
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-dashed"></div>
                        <div class="px-8 pt-6 pb-8">
                            <div class="text-base font-medium">Accent Colors</div>
                            <div class="mt-0.5 text-slate-500">
                                Choose your accent color
                            </div>
                            <div class="mt-5 grid grid-cols-2 gap-3.5">
                                <div>
                                    <a data-theme-color="default" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="flex items-center h-full gap-1 -mx-2">
                                                <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 default"></div>
                                                <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 default"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-1" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="flex items-center h-full gap-1 -mx-2">
                                                <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-1"></div>
                                                <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-1"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-2" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="flex items-center h-full gap-1 -mx-2">
                                                <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-2"></div>
                                                <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-2"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-3" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="flex items-center h-full gap-1 -mx-2">
                                                <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-3"></div>
                                                <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-3"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div>
                                    <a data-theme-color="theme-4" class="h-14 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md">
                                            <div class="flex items-center h-full gap-1 -mx-2">
                                                <div class="w-1/2 h-[200%] bg-theme-1 rotate-12 theme-4"></div>
                                                <div class="w-1/2 h-[200%] bg-theme-2 rotate-12 theme-4"></div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="border-b border-dashed"></div>
                        <div class="px-8 pt-6 pb-8">
                            <div class="text-base font-medium">Appearance</div>
                            <div class="mt-0.5 text-slate-500">
                                Choose your appearance
                            </div>
                            <div class="mt-5 grid grid-cols-2 gap-3.5">
                                <div>
                                    <a data-appearance-mode="light" class="h-12 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md bg-slate-200"></div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        Light
                                    </div>
                                </div>
                                <div>
                                    <a data-appearance-mode="dark" class="h-12 cursor-pointer bg-slate-50 box p-1 border-slate-300/80 block [&.active]:border-2 [&.active]:border-theme-1/60">
                                        <div class="h-full overflow-hidden rounded-md bg-slate-900"></div>
                                    </a>
                                    <div class="mt-2.5 text-center text-xs capitalize">
                                        Dark
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed bottom-0 right-0 z-50 flex items-center justify-center mb-5 mr-5 text-white rounded-full shadow-lg cursor-pointer h-14 w-14 bg-theme-1" data-tw-toggle="modal" data-tw-target="#theme-switcher">
            <i data-tw-merge="" data-lucide="settings" class="stroke-1.5 w-5 h-5 animate-spin"></i>
        </div>
    </div>
    <div class="rubick px-5 sm:px-8 py-5 before:content-[''] before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 dark:before:from-darkmode-800 dark:before:to-darkmode-800 before:fixed before:inset-0 before:z-[-1]">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu group top-0 inset-x-0 fixed bg-theme-1/90 z-[60] border-b border-white/[0.08] dark:bg-darkmode-800/90 md:hidden before:content-[''] before:w-full before:h-screen before:z-10 before:fixed before:inset-x-0 before:bg-black/90 before:transition-opacity before:duration-200 before:ease-in-out before:invisible before:opacity-0 [&.mobile-menu--active]:before:visible [&.mobile-menu--active]:before:opacity-100">
            <div class="flex h-[70px] items-center px-3 sm:px-8">
                <a class="mr-auto flex" href="#">
                    <img class="w-6" src="" alt="Midone - Tailwind Admin Dashboard Template">
                </a>
                <a class="mobile-menu-toggler" href="#">
                    <i data-tw-merge="" data-lucide="bar-chart2" class="stroke-1.5 h-8 w-8 -rotate-90 transform text-white"></i>
                </a>
            </div>
            <div class="scrollable h-screen z-20 top-0 left-0 w-[270px] -ml-[100%] bg-primary transition-all duration-300 ease-in-out dark:bg-darkmode-800 [&[data-simplebar]]:fixed [&_.simplebar-scrollbar]:before:bg-black/50 group-[.mobile-menu--active]:ml-0">
                <a href="#" class="fixed top-0 right-0 mt-4 mr-4 transition-opacity duration-200 ease-in-out invisible opacity-0 group-[.mobile-menu--active]:visible group-[.mobile-menu--active]:opacity-100">
                    <i data-tw-merge="" data-lucide="x-circle" class="stroke-1.5 mobile-menu-toggler h-8 w-8 -rotate-90 transform text-white"></i>
                </a>
                <ul class="py-2">
                    <!-- BEGIN: First Child -->
                    <li>
                        <a class="menu menu--active" href="{{route('home')}}">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Dashboard
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="layout" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Banner
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="javascript:;">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                        Banner
                                        <div class="menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="layout" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                About-us
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="javascript:;">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                        About
                                        <div class="menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="layout" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                services
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="{{route('services.create')}}">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                         Add Services
                                        <div class="menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="{{route('services.index')}}">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                        services
                                        <div class="menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="layout" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Projects
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="{{route('projects.create')}}">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                        Add Projects
                                        <div class="menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="{{route('projects.index')}}">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                        Projects
                                        <div class="menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="layout" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Blog
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="{{route('blogs.create')}}">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                       Add Blog
                                        <div class="menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="{{route('blogs.index')}}">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                        Blog
                                        <div class="menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="layout" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Gallery
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="javascript:;">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                        Video Gallery
                                        <div class="menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="javascript:;">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                        Image Gallery
                                        <div class="menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="layout" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Testimonial
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="{{route('testimonials.create')}}">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                       Add Testimonial
                                        <div class="menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="menu" href="{{route('testimonials.index')}}">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                        Testimonial
                                        <div class="menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="layout" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Setting
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="javascript:;">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                        Add Setting
                                        <div class="menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="layout" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Enquiry
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="javascript:;">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                        Manage Enquiry
                                        <div class="menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="menu" href="javascript:;">
                            <div class="menu__icon">
                                <i data-tw-merge="" data-lucide="layout" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="menu__title">
                                Policy
                                <div class="menu__sub-icon ">
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 w-5 h-5"></i>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a class="menu" href="javascript:;">
                                    <div class="menu__icon">
                                        <i data-tw-merge="" data-lucide="activity" class="stroke-1.5 w-5 h-5"></i>
                                    </div>
                                    <div class="menu__title">
                                        Policy
                                        <div class="menu__sub-icon ">
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>
        <!-- END: Mobile Menu -->
        <div class="mt-[4.7rem] flex md:mt-0">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav hidden w-[80px] overflow-x-hidden pb-16 pr-5 md:block xl:w-[230px]">
                <a class="flex items-center pt-4 pl-5 intro-x" href="#">
                    <img class="w-6" src="" alt="Midone - Tailwind Admin Dashboard Template">
                    <span class="hidden ml-3 text-lg text-white xl:block"> Rubick </span>
                </a>
                <div class="my-6 side-nav__divider"></div>
                <ul>
                    <li>
                        <a href="{{route('home')}}" class="side-menu side-menu--active">
                            <div class="side-menu__icon">
                                <i data-tw-merge="" data-lucide="home" class="stroke-1.5 w-5 h-5"></i>
                            </div>
                            <div class="side-menu__title">
                                Dashboard
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="layout" class="lucide lucide-layout stroke-1.5 w-5 h-5"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><line x1="3" x2="21" y1="9" y2="9"></line><line x1="9" x2="9" y1="21" y2="9"></line></svg>
                            </div>
                            <div class="side-menu__title">
                                Banner
                                <div class="side-menu__sub-icon ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down stroke-1.5 w-5 h-5"><path d="m6 9 6 6 6-6"></path></svg>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{route('banners.create')}}" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        Add Banner
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('banners.index')}}" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        Banner
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="layout" class="lucide lucide-layout stroke-1.5 w-5 h-5"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><line x1="3" x2="21" y1="9" y2="9"></line><line x1="9" x2="9" y1="21" y2="9"></line></svg>
                            </div>
                            <div class="side-menu__title">
                                About Us
                                <div class="side-menu__sub-icon ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down stroke-1.5 w-5 h-5"><path d="m6 9 6 6 6-6"></path></svg>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        About
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="layout" class="lucide lucide-layout stroke-1.5 w-5 h-5"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><line x1="3" x2="21" y1="9" y2="9"></line><line x1="9" x2="9" y1="21" y2="9"></line></svg>
                            </div>
                            <div class="side-menu__title">
                                Services
                                <div class="side-menu__sub-icon ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down stroke-1.5 w-5 h-5"><path d="m6 9 6 6 6-6"></path></svg>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{route('services.create')}}" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        add service
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('services.index')}}" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        service
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="layout" class="lucide lucide-layout stroke-1.5 w-5 h-5"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><line x1="3" x2="21" y1="9" y2="9"></line><line x1="9" x2="9" y1="21" y2="9"></line></svg>
                            </div>
                            <div class="side-menu__title">
                                Project
                                <div class="side-menu__sub-icon ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down stroke-1.5 w-5 h-5"><path d="m6 9 6 6 6-6"></path></svg>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{route('projects.create')}}" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        add Project
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('projects.index')}}" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        Project
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="layout" class="lucide lucide-layout stroke-1.5 w-5 h-5"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><line x1="3" x2="21" y1="9" y2="9"></line><line x1="9" x2="9" y1="21" y2="9"></line></svg>
                            </div>
                            <div class="side-menu__title">
                                Blog
                                <div class="side-menu__sub-icon ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down stroke-1.5 w-5 h-5"><path d="m6 9 6 6 6-6"></path></svg>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{route('blogs.create')}}" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        add Blog
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('blogs.index')}}" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        Blog
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('images.create')}}" class="side-menu">
                            <div class="side-menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="layout" class="lucide lucide-layout stroke-1.5 w-5 h-5"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><line x1="3" x2="21" y1="9" y2="9"></line><line x1="9" x2="9" y1="21" y2="9"></line></svg>
                            </div>
                            <div class="side-menu__title">
                                Gallery
                                <div class="side-menu__sub-icon ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down stroke-1.5 w-5 h-5"><path d="m6 9 6 6 6-6"></path></svg>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{route('images.index')}}" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        Image Gallery
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        Video Gallery
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="layout" class="lucide lucide-layout stroke-1.5 w-5 h-5"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><line x1="3" x2="21" y1="9" y2="9"></line><line x1="9" x2="9" y1="21" y2="9"></line></svg>
                            </div>
                            <div class="side-menu__title">
                                Testimonial
                                <div class="side-menu__sub-icon ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down stroke-1.5 w-5 h-5"><path d="m6 9 6 6 6-6"></path></svg>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{route('testimonials.create')}}" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        add Testimonial
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('testimonials.index')}}" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                       Testimonial
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="layout" class="lucide lucide-layout stroke-1.5 w-5 h-5"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><line x1="3" x2="21" y1="9" y2="9"></line><line x1="9" x2="9" y1="21" y2="9"></line></svg>
                            </div>
                            <div class="side-menu__title">
                                Settings
                                <div class="side-menu__sub-icon ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down stroke-1.5 w-5 h-5"><path d="m6 9 6 6 6-6"></path></svg>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        add Settings
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="layout" class="lucide lucide-layout stroke-1.5 w-5 h-5"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><line x1="3" x2="21" y1="9" y2="9"></line><line x1="9" x2="9" y1="21" y2="9"></line></svg>
                            </div>
                            <div class="side-menu__title">
                                Enquiry
                                <div class="side-menu__sub-icon ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down stroke-1.5 w-5 h-5"><path d="m6 9 6 6 6-6"></path></svg>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        Read Enquiry
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="layout" class="lucide lucide-layout stroke-1.5 w-5 h-5"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><line x1="3" x2="21" y1="9" y2="9"></line><line x1="9" x2="9" y1="21" y2="9"></line></svg>
                            </div>
                            <div class="side-menu__title">
                                Policy
                                <div class="side-menu__sub-icon ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down stroke-1.5 w-5 h-5"><path d="m6 9 6 6 6-6"></path></svg>
                                </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        Add Policy
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->

                <!-- BEGIN: Content -->
            <div class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[30px] bg-slate-100 px-4 pb-10 before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">
            <!-- BEGIN: Top Bar -->
            <div class="relative z-[51] flex h-[67px] items-center border-b border-slate-200">
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="flex -intro-x mr-auto hidden sm:flex">
                    <ol class="flex items-center text-theme-1 dark:text-slate-300">
                        <li class="">
                            <a href="{{route('home')}}">Dashboard</a>
                        </li>
                        <li
                            class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-800 cursor-text dark:text-slate-400">
                            <a href="{{ route(request()->segment(2) . '.index') }}">{{ ucfirst(request()->segment(index: 2)) }}</a>
                        </li>
                        @if (!empty(request()->segment(3)))
                            <li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-800 cursor-text dark:text-slate-400">
                                <a href="#">{{ ucfirst(request()->segment(3)) }}</a>
                            </li>
                        @endif
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <div class="search intro-x relative mr-3 sm:mr-6">
                    <div class="relative hidden sm:block">
                        <input data-tw-merge="" type="text" placeholder="Search..."
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent ease-in-out text-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-opacity-40 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 w-56 rounded-full border-transparent bg-slate-300/50 pr-8 shadow-none transition-[width] duration-300 focus:w-72 focus:border-transparent dark:bg-darkmode-400/70">
                        <i data-tw-merge="" data-lucide="search"
                            class="stroke-1.5 w-5 h-5 absolute inset-y-0 right-0 my-auto mr-3 text-slate-600 dark:text-slate-500"></i>
                    </div>
                    <a class="relative text-slate-600 sm:hidden" href="#">
                        <i data-tw-merge="" data-lucide="search" class="stroke-1.5 w-5 h-5 dark:text-slate-500"></i>
                    </a>
                    <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150"
                        data-enter-from="mt-5 invisible opacity-0 translate-y-1"
                        data-enter-to="mt-[3px] visible opacity-100 translate-y-0"
                        data-leave="transition-all ease-linear duration-150"
                        data-leave-from="mt-[3px] visible opacity-100 translate-y-0"
                        data-leave-to="mt-5 invisible opacity-0 translate-y-1"
                        class="search-result absolute right-0 z-10 mt-[3px] hidden">
                        <div class="box w-[450px] p-5">
                            <div class="mb-2 font-medium">Pages</div>
                            <div class="mb-5">
                                <a class="flex items-center" href="https://www.ritiksaini.in/admin/blog">
                                    <div
                                        class="flex h-8 w-8 items-center justify-center rounded-full bg-success/20 text-success dark:bg-success/10">
                                        <i data-tw-merge="" data-lucide="inbox" class="stroke-1.5 h-4 w-4"></i>
                                    </div>
                                    <div class="ml-3">Blog Page</div>
                                </a>
                                <a class="mt-2 flex items-center" href="https://www.ritiksaini.in/admin/service">
                                    <div
                                        class="flex h-8 w-8 items-center justify-center rounded-full bg-pending/10 text-pending">
                                        <i data-tw-merge="" data-lucide="users" class="stroke-1.5 h-4 w-4"></i>
                                    </div>
                                    <div class="ml-3">Service Page</div>
                                </a>
                                <a class="mt-2 flex items-center" href="https://www.ritiksaini.in/admin/message">
                                    <div
                                        class="flex h-8 w-8 items-center justify-center rounded-full bg-primary/10 text-primary/80 dark:bg-primary/20">
                                        <i data-tw-merge="" data-lucide="credit-card" class="stroke-1.5 h-4 w-4"></i>
                                    </div>
                                    <div class="ml-3">Enquiry Page</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Search  -->
                <!-- BEGIN: Account Menu -->
                <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative">
                    <button data-tw-toggle="dropdown" aria-expanded="false"
                        class="cursor-pointer image-fit zoom-in intro-x block h-8 w-8 overflow-hidden rounded-full shadow-lg">
                        <img src="https://www.ritiksaini.in/app-assets/images/fakers/profile-3.jpg" alt="MasterX Admin Panel">
                    </button>
                    <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150"
                        data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                        data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                        data-leave="transition-all ease-linear duration-150"
                        data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                        data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                        class="dropdown-menu absolute z-[9999] hidden">
                        <div data-tw-merge=""
                            class="dropdown-content rounded-md border-transparent p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-px w-56 bg-theme-1 text-white">
                            <div class="p-2 font-medium font-normal">
                                <div class="font-medium">Welcome, Ritik Saini</div>
                                <div class="mt-0.5 text-xs text-white/70 dark:text-slate-500">
                                    Software Developer
                                </div>
                            </div>
                            <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]">
                            </div>
                            <a
                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i
                                    data-tw-merge="" data-lucide="user" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                Profile</a>
                            <a
                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i
                                    data-tw-merge="" data-lucide="edit" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                Add Account</a>
                            <a
                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i
                                    data-tw-merge="" data-lucide="lock" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                Reset Password</a>
                            <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]">
                            </div>
                            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i
                                    data-tw-merge="" data-lucide="toggle-right" class="stroke-1.5 mr-2 h-4 w-4"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="https://www.ritiksaini.in/logout" method="POST" class="d-none">
                                <input type="hidden" name="_token" value="kc15lic7hhcKjGbGl5zCaxigNMTZi0n6UcQgMXWM"
                                    autocomplete="off">
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
            <!-- END: Top Bar -->
            @yield('content')
        </div>
    </div>
    <!-- BEGIN: Vendor JS Assets-->
    <script src="{{asset('backend-assets/dist/js/vendors/dom.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/vendors/tailwind-merge.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/vendors/lucide.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/vendors/tippy.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/vendors/dayjs.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/vendors/litepicker.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/vendors/popper.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/vendors/dropdown.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/vendors/tiny-slider.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/vendors/transition.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/vendors/chartjs.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/vendors/leaflet-map.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/vendors/axios.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/utils/colors.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/utils/helper.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/vendors/simplebar.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/vendors/modal.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/components/base/theme-color.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/components/base/lucide.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/components/base/tippy.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/components/base/litepicker.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/components/report-line-chart.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/components/report-pie-chart.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/components/report-donut-chart.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/components/report-donut-chart-1.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/components/simple-line-chart-1.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/components/base/tiny-slider.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/themes/rubick.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/components/base/leaflet-map-loader.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/components/mobile-menu.js')}}"></script>
    <script src="{{asset('backend-assets/dist/js/components/themes/rubick/top-bar.js')}}"></script>
    <script>
        function changeStatus(element) {
            const url = element.data('href');

            $.ajax({
                url: url,
                type: 'GET',
                success: function (response) {
                    if (response.status === 'success') {
                        alert('Status updated');
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function () {
                    alert('Failed to change status.');
                }
            });
        }

    </script>
    <!-- END: Vendor JS Assets-->
    <!-- BEGIN: Pages, layouts, components JS Assets-->
    <!-- END: Pages, layouts, components JS Assets-->
</body>

</html>
