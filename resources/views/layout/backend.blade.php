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
                                <a class="menu" href="{{route('service.create')}}">
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
                                <a class="menu" href="{{route('service.index')}}">
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
                                <a class="menu" href="{{route('project.create')}}">
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
                                <a class="menu" href="{{route('project.index')}}">
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
                                <a class="menu" href="{{route('blog.create')}}">
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
                                <a class="menu" href="{{route('blog.index')}}">
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
                                <a class="menu" href="{{route('testimonial.create')}}">
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
                                <a class="menu" href="{{route('testimonial.index')}}">
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
                                <a href="" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        Add Banner
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
                                <a href="{{route('service.create')}}" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        add service
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('service.index')}}" class="side-menu">
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
                                <a href="{{route('project.create')}}" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        add Project
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('project.index')}}" class="side-menu">
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
                                <a href="{{route('blog.create')}}" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        add Blog
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('blog.index')}}" class="side-menu">
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
                        <a href="javascript:;" class="side-menu">
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
                                <a href="" class="side-menu">
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
                                <a href="{{route('testimonial.create')}}" class="side-menu">
                                    <div class="side-menu__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity stroke-1.5 w-5 h-5"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
                                    </div>
                                    <div class="side-menu__title">
                                        add Testimonial
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('testimonial.index')}}" class="side-menu">
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
    <!-- END: Vendor JS Assets-->
    <!-- BEGIN: Pages, layouts, components JS Assets-->
    <!-- END: Pages, layouts, components JS Assets-->
</body>

</html>
