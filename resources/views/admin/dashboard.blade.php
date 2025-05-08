@extends('layout.backend')
@section('content')
<!-- BEGIN: Content -->
<div class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[30px] bg-slate-100 px-4 pb-10 before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">
    <!-- BEGIN: Top Bar -->
    <div class="relative z-[51] flex h-[67px] items-center border-b border-slate-200">
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="flex -intro-x mr-auto hidden sm:flex">
            <ol class="flex items-center text-theme-1 dark:text-slate-300">
                <li class="">
                    <a href="#">Application</a>
                </li>
                <li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-800 cursor-text dark:text-slate-400">
                    <a href="#">Dashboard</a>
                </li>
            </ol>
        </nav>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->
        <div class="search intro-x relative mr-3 sm:mr-6">
            <div class="relative hidden sm:block">
                <input data-tw-merge="" type="text" placeholder="Search..." class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent ease-in-out text-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-opacity-40 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 w-56 rounded-full border-transparent bg-slate-300/50 pr-8 shadow-none transition-[width] duration-300 focus:w-72 focus:border-transparent dark:bg-darkmode-400/70">
                <i data-tw-merge="" data-lucide="search" class="stroke-1.5 w-5 h-5 absolute inset-y-0 right-0 my-auto mr-3 text-slate-600 dark:text-slate-500"></i>
            </div>
            <a class="relative text-slate-600 sm:hidden" href="#">
                <i data-tw-merge="" data-lucide="search" class="stroke-1.5 w-5 h-5 dark:text-slate-500"></i>
            </a>
            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="mt-5 invisible opacity-0 translate-y-1" data-enter-to="mt-[3px] visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150"
                data-leave-from="mt-[3px] visible opacity-100 translate-y-0" data-leave-to="mt-5 invisible opacity-0 translate-y-1" class="search-result absolute right-0 z-10 mt-[3px] hidden">
                <div class="box w-[450px] p-5">
                    <div class="mb-2 font-medium">Pages</div>
                    <div class="mb-5">
                        <a class="flex items-center" href="#">
                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-success/20 text-success dark:bg-success/10">
                                <i data-tw-merge="" data-lucide="inbox" class="stroke-1.5 h-4 w-4"></i>
                            </div>
                            <div class="ml-3">Mail Settings</div>
                        </a>
                        <a class="mt-2 flex items-center" href="#">
                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-pending/10 text-pending">
                                <i data-tw-merge="" data-lucide="users" class="stroke-1.5 h-4 w-4"></i>
                            </div>
                            <div class="ml-3">Users & Permissions</div>
                        </a>
                        <a class="mt-2 flex items-center" href="#">
                            <div class="flex h-8 w-8 items-center justify-center rounded-full bg-primary/10 text-primary/80 dark:bg-primary/20">
                                <i data-tw-merge="" data-lucide="credit-card" class="stroke-1.5 h-4 w-4"></i>
                            </div>
                            <div class="ml-3">Transactions Report</div>
                        </a>
                    </div>
                    <div class="mb-2 font-medium">Users</div>
                    <div class="mb-5">
                        <a class="mt-2 flex items-center" href="#">
                            <div class="image-fit h-8 w-8">
                                <img class="rounded-full" src="{{asset('backend-assets/dist/images/fakers/profile-1.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                            </div>
                            <div class="ml-3">Leonardo DiCaprio</div>
                            <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                leonardodicaprio@left4code.com
                            </div>
                        </a>
                        <a class="mt-2 flex items-center" href="#">
                            <div class="image-fit h-8 w-8">
                                <img class="rounded-full" src="{{asset('backend-assets/dist/images/fakers/profile-11.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                            </div>
                            <div class="ml-3">Kate Winslet</div>
                            <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                katewinslet@left4code.com
                            </div>
                        </a>
                        <a class="mt-2 flex items-center" href="#">
                            <div class="image-fit h-8 w-8">
                                <img class="rounded-full" src="{{asset('backend-assets/dist/images/fakers/profile-1.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                            </div>
                            <div class="ml-3">Johnny Depp</div>
                            <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                johnnydepp@left4code.com
                            </div>
                        </a>
                        <a class="mt-2 flex items-center" href="#">
                            <div class="image-fit h-8 w-8">
                                <img class="rounded-full" src="{{asset('backend-assets/dist/images/fakers/profile-11.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                            </div>
                            <div class="ml-3">Johnny Depp</div>
                            <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                                johnnydepp@left4code.com
                            </div>
                        </a>
                    </div>
                    <div class="mb-2 font-medium">Products</div>
                    <a class="mt-2 flex items-center" href="#">
                        <div class="image-fit h-8 w-8">
                            <img class="rounded-full" src="{{asset('backend-assets/dist/images/fakers/preview-5.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                        </div>
                        <div class="ml-3">Samsung Q90 QLED TV</div>
                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                            Electronic
                        </div>
                    </a>
                    <a class="mt-2 flex items-center" href="#">
                        <div class="image-fit h-8 w-8">
                            <img class="rounded-full" src="{{asset('backend-assets/dist/images/fakers/preview-8.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                        </div>
                        <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                            Smartphone & Tablet
                        </div>
                    </a>
                    <a class="mt-2 flex items-center" href="#">
                        <div class="image-fit h-8 w-8">
                            <img class="rounded-full" src="{{asset('backend-assets/dist/images/fakers/preview-11.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                        </div>
                        <div class="ml-3">Oppo Find X2 Pro</div>
                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                            Smartphone & Tablet
                        </div>
                    </a>
                    <a class="mt-2 flex items-center" href="#">
                        <div class="image-fit h-8 w-8">
                            <img class="rounded-full" src="{{asset('backend-assets/dist/images/fakers/preview-2.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                        </div>
                        <div class="ml-3">Sony A7 III</div>
                        <div class="ml-auto w-48 truncate text-right text-xs text-slate-500">
                            Photography
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- END: Search  -->
        <!-- BEGIN: Notifications -->
        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative intro-x mr-auto sm:mr-6">
            <div data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer relative block text-slate-600 outline-none before:absolute before:right-0 before:top-[-2px] before:h-[8px] before:w-[8px] before:rounded-full before:bg-danger before:content-['']"><i data-tw-merge="" data-lucide="bell" class="stroke-1.5 w-5 h-5 dark:text-slate-500"></i></div>
            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150"
                data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-2 w-[280px] p-5 sm:w-[350px]">
                    <div class="mb-5 font-medium">Notifications</div>
                    <div class="cursor-pointer relative flex items-center">
                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                            <img class="rounded-full" src="{{asset('backend-assets/dist/images/fakers/profile-1.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                            <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a class="mr-5 truncate font-medium" href="#">
                                    Leonardo DiCaprio
                                </a>
                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                    01:10 PM
                                </div>
                            </div>
                            <div class="mt-0.5 w-full truncate text-slate-500">
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                            <img class="rounded-full" src="{{asset('backend-assets/dist/images/fakers/profile-11.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                            <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a class="mr-5 truncate font-medium" href="#">
                                    Kate Winslet
                                </a>
                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                    01:10 PM
                                </div>
                            </div>
                            <div class="mt-0.5 w-full truncate text-slate-500">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                            <img class="rounded-full" src="{{asset('backend-assets/dist/images/fakers/profile-1.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                            <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a class="mr-5 truncate font-medium" href="#">
                                    Johnny Depp
                                </a>
                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                    05:09 AM
                                </div>
                            </div>
                            <div class="mt-0.5 w-full truncate text-slate-500">
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                            <img class="rounded-full" src="{{asset('backend-assets/dist/images/fakers/profile-11.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                            <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a class="mr-5 truncate font-medium" href="#">
                                    Johnny Depp
                                </a>
                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                    01:10 PM
                                </div>
                            </div>
                            <div class="mt-0.5 w-full truncate text-slate-500">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="image-fit relative mr-1 h-12 w-12 flex-none">
                            <img class="rounded-full" src="{{asset('backend-assets/dist/images/fakers/profile-5.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                            <div class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-success dark:border-darkmode-600">
                            </div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a class="mr-5 truncate font-medium" href="#">
                                    Al Pacino
                                </a>
                                <div class="ml-auto whitespace-nowrap text-xs text-slate-400">
                                    06:05 AM
                                </div>
                            </div>
                            <div class="mt-0.5 w-full truncate text-slate-500">
                                There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Notifications  -->
        <!-- BEGIN: Account Menu -->
        <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer image-fit zoom-in intro-x block h-8 w-8 overflow-hidden rounded-full shadow-lg"><img src="{{asset('backend-assets/dist/images/fakers/profile-5.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
            </button>
            <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150"
                data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                <div data-tw-merge="" class="dropdown-content rounded-md border-transparent p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-px w-56 bg-theme-1 text-white">
                    <div class="p-2 font-medium font-normal">
                        <div class="font-medium">Leonardo DiCaprio</div>
                        <div class="mt-0.5 text-xs text-white/70 dark:text-slate-500">
                            Frontend Engineer
                        </div>
                    </div>
                    <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]">
                    </div>
                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="user" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Profile</a>
                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="edit" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Add Account</a>
                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="lock" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Reset Password</a>
                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="help-circle" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Help</a>
                    <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400 bg-white/[0.08]">
                    </div>
                    <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item hover:bg-white/5"><i data-tw-merge="" data-lucide="toggle-right" class="stroke-1.5 mr-2 h-4 w-4"></i>
                        Logout</a>
                </div>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
    <!-- END: Top Bar -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex h-10 items-center">
                        <h2 class="mr-5 truncate text-lg font-medium">General Report</h2>
                        <a class="ml-auto flex items-center text-primary" href="#">
                            <i data-tw-merge="" data-lucide="refresh-ccw" class="stroke-1.5 mr-3 h-4 w-4"></i> Reload Data
                        </a>
                    </div>
                    <div class="mt-5 grid grid-cols-12 gap-6">
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-tw-merge="" data-lucide="shopping-cart" class="stroke-1.5 h-[28px] w-[28px] text-primary"></i>
                                        <div class="ml-auto">
                                            <div data-placement="top" title="33% Higher than last month" class="tooltip cursor-pointer flex items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white">33%
                                                <i data-tw-merge="" data-lucide="chevron-up" class="stroke-1.5 ml-0.5 h-4 w-4"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">4.710</div>
                                    <div class="mt-1 text-base text-slate-500">Item Sales</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-tw-merge="" data-lucide="credit-card" class="stroke-1.5 h-[28px] w-[28px] text-pending"></i>
                                        <div class="ml-auto">
                                            <div data-placement="top" title="2% Lower than last month" class="tooltip cursor-pointer flex items-center rounded-full bg-danger py-[3px] pl-2 pr-1 text-xs font-medium text-white">2%
                                                <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 ml-0.5 h-4 w-4"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">3.721</div>
                                    <div class="mt-1 text-base text-slate-500">New Orders</div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-tw-merge="" data-lucide="monitor" class="stroke-1.5 h-[28px] w-[28px] text-warning"></i>
                                        <div class="ml-auto">
                                            <div data-placement="top" title="12% Higher than last month" class="tooltip cursor-pointer flex items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white">12%
                                                <i data-tw-merge="" data-lucide="chevron-up" class="stroke-1.5 ml-0.5 h-4 w-4"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">2.149</div>
                                    <div class="mt-1 text-base text-slate-500">
                                        Total Products
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="intro-y col-span-12 sm:col-span-6 xl:col-span-3">
                            <div class="relative zoom-in before:box before:absolute before:inset-x-3 before:mt-3 before:h-full before:bg-slate-50 before:content-['']">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-tw-merge="" data-lucide="user" class="stroke-1.5 h-[28px] w-[28px] text-success"></i>
                                        <div class="ml-auto">
                                            <div data-placement="top" title="22% Higher than last month" class="tooltip cursor-pointer flex items-center rounded-full bg-success py-[3px] pl-2 pr-1 text-xs font-medium text-white">22%
                                                <i data-tw-merge="" data-lucide="chevron-up" class="stroke-1.5 ml-0.5 h-4 w-4"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-3xl font-medium leading-8">152.040</div>
                                    <div class="mt-1 text-base text-slate-500">
                                        Unique Visitor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 mt-8 lg:col-span-6">
                    <div class="intro-y block h-10 items-center sm:flex">
                        <h2 class="mr-5 truncate text-lg font-medium">Sales Report</h2>
                        <div class="relative mt-3 text-slate-500 sm:ml-auto sm:mt-0">
                            <i data-tw-merge="" data-lucide="calendar" class="stroke-1.5 absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4"></i>
                            <input data-tw-merge="" type="text" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker !box pl-10 sm:w-56">
                        </div>
                    </div>
                    <div class="intro-y box mt-12 p-5 sm:mt-5">
                        <div class="flex flex-col md:flex-row md:items-center">
                            <div class="flex">
                                <div>
                                    <div class="text-lg font-medium text-primary dark:text-slate-300 xl:text-xl">
                                        $15,000
                                    </div>
                                    <div class="mt-0.5 text-slate-500">This Month</div>
                                </div>
                                <div class="mx-4 h-12 w-px border border-r border-dashed border-slate-200 dark:border-darkmode-300 xl:mx-5">
                                </div>
                                <div>
                                    <div class="text-lg font-medium text-slate-500 xl:text-xl">
                                        $10,000
                                    </div>
                                    <div class="mt-0.5 text-slate-500">Last Month</div>
                                </div>
                            </div>
                            <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative mt-5 md:ml-auto md:mt-0"><button data-tw-merge="" data-tw-toggle="dropdown" aria-expanded="false" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 font-normal">Filter by Category
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-1.5 ml-2 h-4 w-4"></i></button>
                                <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150"
                                    data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                    <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 h-32 w-40 overflow-y-auto">
                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">PC & Laptop</a>
                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Smartphone</a>
                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Electronic</a>
                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Photography</a>
                                        <a class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Sport</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="relative before:content-[''] before:block before:absolute before:w-16 before:left-0 before:top-0 before:bottom-0 before:ml-10 before:mb-7 before:bg-gradient-to-r before:from-white before:via-white/80 before:to-transparent before:dark:from-darkmode-600 after:content-[''] after:block after:absolute after:w-16 after:right-0 after:top-0 after:bottom-0 after:mb-7 after:bg-gradient-to-l after:from-white after:via-white/80 after:to-transparent after:dark:from-darkmode-600">
                            <div class="w-auto h-[275px]">
                                <canvas id="report-line-chart" class="chart -mb-6 mt-6"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->
                <!-- BEGIN: Weekly Top Seller -->
                <div class="col-span-12 mt-8 sm:col-span-6 lg:col-span-3">
                    <div class="intro-y flex h-10 items-center">
                        <h2 class="mr-5 truncate text-lg font-medium">Weekly Top Seller</h2>
                        <a class="ml-auto truncate text-primary" href="#"> Show More </a>
                    </div>
                    <div class="intro-y box mt-5 p-5">
                        <div class="mt-3">
                            <div class="w-auto h-[213px]">
                                <canvas id="report-pie-chart" class="chart"></canvas>
                            </div>
                        </div>
                        <div class="mx-auto mt-8 w-52 sm:w-auto">
                            <div class="flex items-center">
                                <div class="mr-3 h-2 w-2 rounded-full bg-primary"></div>
                                <span class="truncate">17 - 30 Years old</span>
                                <span class="ml-auto font-medium">62%</span>
                            </div>
                            <div class="mt-4 flex items-center">
                                <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                                <span class="truncate">31 - 50 Years old</span>
                                <span class="ml-auto font-medium">33%</span>
                            </div>
                            <div class="mt-4 flex items-center">
                                <div class="mr-3 h-2 w-2 rounded-full bg-warning"></div>
                                <span class="truncate">&gt;= 50 Years old</span>
                                <span class="ml-auto font-medium">10%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Weekly Top Seller -->
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 mt-8 sm:col-span-6 lg:col-span-3">
                    <div class="intro-y flex h-10 items-center">
                        <h2 class="mr-5 truncate text-lg font-medium">Sales Report</h2>
                        <a class="ml-auto truncate text-primary" href="#"> Show More </a>
                    </div>
                    <div class="intro-y box mt-5 p-5">
                        <div class="mt-3">
                            <div class="w-auto h-[213px]">
                                <canvas id="report-donut-chart" class="chart"></canvas>
                            </div>
                        </div>
                        <div class="mx-auto mt-8 w-52 sm:w-auto">
                            <div class="flex items-center">
                                <div class="mr-3 h-2 w-2 rounded-full bg-primary"></div>
                                <span class="truncate">17 - 30 Years old</span>
                                <span class="ml-auto font-medium">62%</span>
                            </div>
                            <div class="mt-4 flex items-center">
                                <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                                <span class="truncate">31 - 50 Years old</span>
                                <span class="ml-auto font-medium">33%</span>
                            </div>
                            <div class="mt-4 flex items-center">
                                <div class="mr-3 h-2 w-2 rounded-full bg-warning"></div>
                                <span class="truncate">&gt;= 50 Years old</span>
                                <span class="ml-auto font-medium">10%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->
                <!-- BEGIN: Official Store -->
                <div class="col-span-12 mt-6 xl:col-span-8">
                    <div class="intro-y block h-10 items-center sm:flex">
                        <h2 class="mr-5 truncate text-lg font-medium">Official Store</h2>
                        <div class="relative mt-3 text-slate-500 sm:ml-auto sm:mt-0">
                            <i data-tw-merge="" data-lucide="map-pin" class="stroke-1.5 absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4"></i>
                            <input data-tw-merge="" type="text" placeholder="Filter by city" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 !box pl-10 sm:w-56">
                        </div>
                    </div>
                    <div class="intro-y box mt-12 p-5 sm:mt-5">
                        <div>
                            250 Official stores in 21 countries, click the marker to see location details.
                        </div>
                        <div data-lat="-6.2425342" data-long="106.8626478" data-sources="" class="leaflet z-0 [&_.leaflet-tile-pane]:contrast-105 [&_.leaflet-tile-pane]:grayscale [&_.leaflet-tile-pane]:dark:contrast-[.8] [&_.leaflet-tile-pane]:dark:invert mt-5 h-[310px] rounded-md bg-slate-200">
                        </div>
                    </div>
                </div>
                <!-- END: Official Store -->
                <!-- BEGIN: Weekly Best Sellers -->
                <div class="col-span-12 mt-6 xl:col-span-4">
                    <div class="intro-y flex h-10 items-center">
                        <h2 class="mr-5 truncate text-lg font-medium">
                            Weekly Best Sellers
                        </h2>
                    </div>
                    <div class="mt-5">
                        <div class="intro-y">
                            <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                    <img src="{{asset('backend-assets/dist/images/fakers/profile-4.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Denzel Washington</div>
                                    <div class="mt-0.5 text-xs text-slate-500">
                                        1 September 2021
                                    </div>
                                </div>
                                <div class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                    137 Sales
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                    <img src="{{asset('backend-assets/dist/images/fakers/profile-4.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Russell Crowe</div>
                                    <div class="mt-0.5 text-xs text-slate-500">
                                        20 March 2022
                                    </div>
                                </div>
                                <div class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                    137 Sales
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                    <img src="{{asset('backend-assets/dist/images/fakers/profile-9.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Robert De Niro</div>
                                    <div class="mt-0.5 text-xs text-slate-500">
                                        19 April 2021
                                    </div>
                                </div>
                                <div class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                    137 Sales
                                </div>
                            </div>
                        </div>
                        <div class="intro-y">
                            <div class="box zoom-in mb-3 flex items-center px-4 py-4">
                                <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-md">
                                    <img src="{{asset('backend-assets/dist/images/fakers/profile-2.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Al Pacino</div>
                                    <div class="mt-0.5 text-xs text-slate-500">
                                        5 April 2021
                                    </div>
                                </div>
                                <div class="cursor-pointer rounded-full bg-success px-2 py-1 text-xs font-medium text-white">
                                    137 Sales
                                </div>
                            </div>
                        </div>
                        <a class="intro-y block w-full rounded-md border border-dotted border-slate-400 py-4 text-center text-slate-500 dark:border-darkmode-300" href="#">
                            View More
                        </a>
                    </div>
                </div>
                <!-- END: Weekly Best Sellers -->
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8 grid grid-cols-12 gap-6">
                    <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-3">
                        <div class="box zoom-in p-5">
                            <div class="flex items-center">
                                <div class="w-2/4 flex-none">
                                    <div class="truncate text-lg font-medium">Target Sales</div>
                                    <div class="mt-1 text-slate-500">300 Sales</div>
                                </div>
                                <div class="relative ml-auto flex-none">
                                    <div class="w-[90px] h-[90px]">
                                        <canvas class="chart report-donut-chart-1"></canvas>
                                    </div>
                                    <div class="absolute left-0 top-0 flex h-full w-full items-center justify-center font-medium">
                                        20%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-3">
                        <div class="box zoom-in p-5">
                            <div class="flex">
                                <div class="mr-3 truncate text-lg font-medium">
                                    Social Media
                                </div>
                                <div class="ml-auto flex cursor-pointer items-center truncate rounded-full bg-slate-100 px-2 py-1 text-xs text-slate-500 dark:bg-darkmode-400">
                                    320 Followers
                                </div>
                            </div>
                            <div class="mt-1">
                                <div class="w-auto h-[58px]">
                                    <canvas class="chart simple-line-chart-1 -ml-1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-3">
                        <div class="box zoom-in p-5">
                            <div class="flex items-center">
                                <div class="w-2/4 flex-none">
                                    <div class="truncate text-lg font-medium">New Products</div>
                                    <div class="mt-1 text-slate-500">1450 Products</div>
                                </div>
                                <div class="relative ml-auto flex-none">
                                    <div class="w-[90px] h-[90px]">
                                        <canvas class="chart report-donut-chart-1"></canvas>
                                    </div>
                                    <div class="absolute left-0 top-0 flex h-full w-full items-center justify-center font-medium">
                                        45%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6 2xl:col-span-3">
                        <div class="box zoom-in p-5">
                            <div class="flex">
                                <div class="mr-3 truncate text-lg font-medium">Posted Ads</div>
                                <div class="ml-auto flex cursor-pointer items-center truncate rounded-full bg-slate-100 px-2 py-1 text-xs text-slate-500 dark:bg-darkmode-400">
                                    180 Campaign
                                </div>
                            </div>
                            <div class="mt-1">
                                <div class="w-auto h-[58px]">
                                    <canvas class="chart simple-line-chart-1 -ml-1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block h-10 items-center sm:flex">
                        <h2 class="mr-5 truncate text-lg font-medium">
                            Weekly Top Products
                        </h2>
                        <div class="mt-3 flex items-center sm:ml-auto sm:mt-0">
                            <button data-tw-merge="" class="transition duration-200 border shadow-sm items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed !box flex text-slate-600 dark:text-slate-300"><i data-tw-merge="" data-lucide="file-text" class="stroke-1.5 mr-2 hidden h-4 w-4 sm:block"></i>
                                Export to Excel</button>
                            <button data-tw-merge="" class="transition duration-200 border shadow-sm items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed !box ml-3 flex text-slate-600 dark:text-slate-300"><i data-tw-merge="" data-lucide="file-text" class="stroke-1.5 mr-2 hidden h-4 w-4 sm:block"></i>
                                Export to PDF</button>
                        </div>
                    </div>
                    <div class="intro-y mt-8 overflow-auto sm:mt-0 lg:overflow-visible">
                        <table data-tw-merge="" class="w-full text-left border-separate border-spacing-y-[10px] sm:mt-2">
                            <thead data-tw-merge="" class="">
                                <tr data-tw-merge="" class="">
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                        IMAGES
                                    </th>
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                        PRODUCT NAME
                                    </th>
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                        STOCK
                                    </th>
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                        STATUS
                                    </th>
                                    <th data-tw-merge="" class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                        ACTIONS
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-tw-merge="" class="intro-x">
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-10 w-10">
                                                <img data-placement="top" title="Uploaded at 1 September 2021" src="{{asset('backend-assets/dist/images/fakers/preview-14.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                <img data-placement="top" title="Uploaded at 22 October 2021" src="{{asset('backend-assets/dist/images/fakers/profile-15.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                <img data-placement="top" title="Uploaded at 26 December 2021" src="{{asset('backend-assets/dist/images/fakers/profile-5.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            Nikon Z6
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            Photography
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        119
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-success">
                                            <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i> Active
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                        <div class="flex items-center justify-center">
                                            <a class="mr-3 flex items-center" href="#">
                                                <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger" href="#">
                                                <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-tw-merge="" class="intro-x">
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-10 w-10">
                                                <img data-placement="top" title="Uploaded at 20 March 2022" src="{{asset('backend-assets/dist/images/fakers/preview-4.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                <img data-placement="top" title="Uploaded at 12 June 2022" src="{{asset('backend-assets/dist/images/fakers/profile-4.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                <img data-placement="top" title="Uploaded at 13 February 2021" src="{{asset('backend-assets/dist/images/fakers/profile-5.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            Sony A7 III
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            Photography
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        82
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-success">
                                            <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i> Active
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                        <div class="flex items-center justify-center">
                                            <a class="mr-3 flex items-center" href="#">
                                                <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger" href="#">
                                                <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-tw-merge="" class="intro-x">
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-10 w-10">
                                                <img data-placement="top" title="Uploaded at 19 April 2021" src="{{asset('backend-assets/dist/images/fakers/preview-9.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                <img data-placement="top" title="Uploaded at 28 August 2020" src="{{asset('backend-assets/dist/images/fakers/profile-8.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                <img data-placement="top" title="Uploaded at 15 June 2020" src="{{asset('backend-assets/dist/images/fakers/profile-7.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            Nikon Z6
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            Photography
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        76
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-success">
                                            <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i> Active
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                        <div class="flex items-center justify-center">
                                            <a class="mr-3 flex items-center" href="#">
                                                <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger" href="#">
                                                <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-tw-merge="" class="intro-x">
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <div class="flex">
                                            <div class="image-fit zoom-in h-10 w-10">
                                                <img data-placement="top" title="Uploaded at 5 April 2021" src="{{asset('backend-assets/dist/images/fakers/preview-5.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                <img data-placement="top" title="Uploaded at 9 July 2020" src="{{asset('backend-assets/dist/images/fakers/profile-2.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                            <div class="image-fit zoom-in -ml-5 h-10 w-10">
                                                <img data-placement="top" title="Uploaded at 13 April 2020" src="{{asset('backend-assets/dist/images/fakers/profile-1.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template" class="tooltip cursor-pointer rounded-full shadow-[0px_0px_0px_2px_#fff,_1px_1px_5px_rgba(0,0,0,0.32)] dark:shadow-[0px_0px_0px_2px_#3f4865,_1px_1px_5px_rgba(0,0,0,0.32)]">
                                            </div>
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <a class="whitespace-nowrap font-medium" href="#">
                                            Samsung Q90 QLED TV
                                        </a>
                                        <div class="mt-0.5 whitespace-nowrap text-xs text-slate-500">
                                            Electronic
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        135
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-40 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                        <div class="flex items-center justify-center text-success">
                                            <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-2 h-4 w-4"></i> Active
                                        </div>
                                    </td>
                                    <td data-tw-merge="" class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                        <div class="flex items-center justify-center">
                                            <a class="mr-3 flex items-center" href="#">
                                                <i data-tw-merge="" data-lucide="check-square" class="stroke-1.5 mr-1 h-4 w-4"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger" href="#">
                                                <i data-tw-merge="" data-lucide="trash" class="stroke-1.5 mr-1 h-4 w-4"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="intro-y mt-3 flex flex-wrap items-center sm:flex-row sm:flex-nowrap">
                        <nav class="w-full sm:mr-auto sm:w-auto">
                            <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevrons-left" class="stroke-1.5 h-4 w-4"></i></a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevron-left" class="stroke-1.5 h-4 w-4"></i></a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">1</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">2</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">3</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevron-right" class="stroke-1.5 h-4 w-4"></i></a>
                                </li>
                                <li class="flex-1 sm:flex-initial">
                                    <a data-tw-merge="" class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i data-tw-merge="" data-lucide="chevrons-right" class="stroke-1.5 h-4 w-4"></i></a>
                                </li>
                            </ul>
                        </nav>
                        <select data-tw-merge="" class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 !box mt-3 w-20 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="-mb-10 pb-10 2xl:border-l">
                <div class="grid grid-cols-12 gap-x-6 gap-y-6 2xl:gap-x-0 2xl:pl-6">
                    <!-- BEGIN: Transactions -->
                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12 2xl:mt-8">
                        <div class="intro-x flex h-10 items-center">
                            <h2 class="mr-5 truncate text-lg font-medium">Transactions</h2>
                        </div>
                        <div class="mt-5">
                            <div class="intro-x">
                                <div class="box zoom-in mb-3 flex items-center px-5 py-3">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                        <img src="{{asset('backend-assets/dist/images/fakers/profile-4.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">Denzel Washington</div>
                                        <div class="mt-0.5 text-xs text-slate-500">
                                            1 September 2021
                                        </div>
                                    </div>
                                    <div class="text-success">
                                        +$33
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x">
                                <div class="box zoom-in mb-3 flex items-center px-5 py-3">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                        <img src="{{asset('backend-assets/dist/images/fakers/profile-4.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">Russell Crowe</div>
                                        <div class="mt-0.5 text-xs text-slate-500">
                                            20 March 2022
                                        </div>
                                    </div>
                                    <div class="text-success">
                                        +$59
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x">
                                <div class="box zoom-in mb-3 flex items-center px-5 py-3">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                        <img src="{{asset('backend-assets/dist/images/fakers/profile-9.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">Robert De Niro</div>
                                        <div class="mt-0.5 text-xs text-slate-500">
                                            19 April 2021
                                        </div>
                                    </div>
                                    <div class="text-success">
                                        +$76
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x">
                                <div class="box zoom-in mb-3 flex items-center px-5 py-3">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                        <img src="{{asset('backend-assets/dist/images/fakers/profile-2.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">Al Pacino</div>
                                        <div class="mt-0.5 text-xs text-slate-500">
                                            5 April 2021
                                        </div>
                                    </div>
                                    <div class="text-success">
                                        +$36
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x">
                                <div class="box zoom-in mb-3 flex items-center px-5 py-3">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                        <img src="{{asset('backend-assets/dist/images/fakers/profile-7.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">Kevin Spacey</div>
                                        <div class="mt-0.5 text-xs text-slate-500">
                                            9 May 2021
                                        </div>
                                    </div>
                                    <div class="text-success">
                                        +$24
                                    </div>
                                </div>
                            </div>
                            <a class="intro-x block w-full rounded-md border border-dotted border-slate-400 py-3 text-center text-slate-500 dark:border-darkmode-300" href="#">
                                View More
                            </a>
                        </div>
                    </div>
                    <!-- END: Transactions -->
                    <!-- BEGIN: Recent Activities -->
                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 2xl:col-span-12">
                        <div class="intro-x flex h-10 items-center">
                            <h2 class="mr-5 truncate text-lg font-medium">
                                Recent Activities
                            </h2>
                            <a class="ml-auto truncate text-primary" href="#"> Show More </a>
                        </div>
                        <div class="relative mt-5 before:absolute before:ml-5 before:mt-5 before:block before:h-[85%] before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                            <div class="intro-x relative mb-3 flex items-center">
                                <div class="before:absolute before:ml-5 before:mt-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                        <img src="{{asset('backend-assets/dist/images/fakers/profile-2.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="box zoom-in ml-4 flex-1 px-5 py-3">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            John Travolta
                                        </div>
                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                    </div>
                                    <div class="mt-1 text-slate-500">Has joined the team</div>
                                </div>
                            </div>
                            <div class="intro-x relative mb-3 flex items-center">
                                <div class="before:absolute before:ml-5 before:mt-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                        <img src="{{asset('backend-assets/dist/images/fakers/profile-12.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="box zoom-in ml-4 flex-1 px-5 py-3">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            Sylvester Stallone
                                        </div>
                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500">
                                        <div class="mt-1">Added 3 new photos</div>
                                        <div class="mt-2 flex">
                                            <div data-placement="top" title="Nikon Z6" class="tooltip cursor-pointer image-fit zoom-in mr-1 h-8 w-8"><img class="rounded-md border border-white" src="{{asset('backend-assets/dist/images/fakers/profile-12.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template"></div>
                                            <div data-placement="top" title="Sony A7 III" class="tooltip cursor-pointer image-fit zoom-in mr-1 h-8 w-8"><img class="rounded-md border border-white" src="{{asset('backend-assets/dist/images/fakers/profile-9.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template"></div>
                                            <div data-placement="top" title="Nikon Z6" class="tooltip cursor-pointer image-fit zoom-in mr-1 h-8 w-8"><img class="rounded-md border border-white" src="{{asset('backend-assets/dist/images/fakers/profile-7.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x my-4 text-center text-xs text-slate-500">
                                12 November
                            </div>
                            <div class="intro-x relative mb-3 flex items-center">
                                <div class="before:absolute before:ml-5 before:mt-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                        <img src="{{asset('backend-assets/dist/images/fakers/profile-9.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="box zoom-in ml-4 flex-1 px-5 py-3">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            Angelina Jolie
                                        </div>
                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                    </div>
                                    <div class="mt-1 text-slate-500">
                                        Has changed
                                        <a class="text-primary" href="#">
                                            Nikon Z6
                                        </a> price and description
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x relative mb-3 flex items-center">
                                <div class="before:absolute before:ml-5 before:mt-5 before:block before:h-px before:w-20 before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="image-fit h-10 w-10 flex-none overflow-hidden rounded-full">
                                        <img src="{{asset('backend-assets/dist/images/fakers/profile-10.jpg') }}" alt="Midone - Tailwind Admin Dashboard Template">
                                    </div>
                                </div>
                                <div class="box zoom-in ml-4 flex-1 px-5 py-3">
                                    <div class="flex items-center">
                                        <div class="font-medium">
                                            Russell Crowe
                                        </div>
                                        <div class="ml-auto text-xs text-slate-500">07:00 PM</div>
                                    </div>
                                    <div class="mt-1 text-slate-500">
                                        Has changed
                                        <a class="text-primary" href="#">
                                            Sony A7 III
                                        </a> description
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Recent Activities -->
                    <!-- BEGIN: Important Notes -->
                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto">
                        <div class="intro-x flex h-10 items-center">
                            <h2 class="mr-auto truncate text-lg font-medium">
                                Important Notes
                            </h2>
                            <button data-tw-merge="" data-carousel="important-notes" data-target="prev" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed tiny-slider-navigator mr-2 border-slate-300 px-2 text-slate-600 dark:text-slate-300"><i data-tw-merge="" data-lucide="chevron-left" class="stroke-1.5 h-4 w-4"></i></button>
                            <button data-tw-merge="" data-carousel="important-notes" data-target="next" class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed tiny-slider-navigator mr-2 border-slate-300 px-2 text-slate-600 dark:text-slate-300"><i data-tw-merge="" data-lucide="chevron-right" class="stroke-1.5 h-4 w-4"></i></button>
                        </div>
                        <div class="intro-x mt-5">
                            <div class="box zoom-in">
                                <div data-config="" id="important-notes" class="tiny-slider">
                                    <div class="p-5">
                                        <div class="truncate text-base font-medium">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="mt-1 text-slate-400">20 Hours ago</div>
                                        <div class="mt-1 text-justify text-slate-500">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="mt-5 flex font-medium">
                                            <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-secondary/70 border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 px-2 py-1">View Notes</button>
                                            <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 ml-auto px-2 py-1">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="truncate text-base font-medium">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="mt-1 text-slate-400">20 Hours ago</div>
                                        <div class="mt-1 text-justify text-slate-500">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="mt-5 flex font-medium">
                                            <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-secondary/70 border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 px-2 py-1">View Notes</button>
                                            <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 ml-auto px-2 py-1">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="truncate text-base font-medium">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="mt-1 text-slate-400">20 Hours ago</div>
                                        <div class="mt-1 text-justify text-slate-500">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        </div>
                                        <div class="mt-5 flex font-medium">
                                            <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-secondary/70 border-secondary/70 text-slate-500 dark:border-darkmode-400 dark:bg-darkmode-400 dark:text-slate-300 [&:hover:not(:disabled)]:bg-slate-100 [&:hover:not(:disabled)]:border-slate-100 [&:hover:not(:disabled)]:dark:border-darkmode-300/80 [&:hover:not(:disabled)]:dark:bg-darkmode-300/80 px-2 py-1">View Notes</button>
                                            <button data-tw-merge="" type="button" class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 ml-auto px-2 py-1">Dismiss</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->
                    <!-- BEGIN: Schedules -->
                    <div class="col-span-12 mt-3 md:col-span-6 xl:col-span-4 xl:col-start-1 xl:row-start-2 2xl:col-span-12 2xl:col-start-auto 2xl:row-start-auto">
                        <div class="intro-x flex h-10 items-center">
                            <h2 class="mr-5 truncate text-lg font-medium">Schedules</h2>
                            <a class="ml-auto flex items-center truncate text-primary" href="#">
                                <i data-tw-merge="" data-lucide="plus" class="stroke-1.5 mr-1 h-4 w-4"></i> Add New Schedules
                            </a>
                        </div>
                        <div class="mt-5">
                            <div class="intro-x box">
                                <div class="p-5">
                                    <div class="flex">
                                        <i data-tw-merge="" data-lucide="chevron-left" class="stroke-1.5 w-5 h-5 text-slate-500"></i>
                                        <div class="mx-auto text-base font-medium">April</div>
                                        <i data-tw-merge="" data-lucide="chevron-right" class="stroke-1.5 w-5 h-5 text-slate-500"></i>
                                    </div>
                                    <div class="mt-5 grid grid-cols-7 gap-4 text-center">
                                        <div class="font-medium">Su</div>
                                        <div class="font-medium">Mo</div>
                                        <div class="font-medium">Tu</div>
                                        <div class="font-medium">We</div>
                                        <div class="font-medium">Th</div>
                                        <div class="font-medium">Fr</div>
                                        <div class="font-medium">Sa</div>
                                        <div class="relative rounded py-0.5 text-slate-500">29</div>
                                        <div class="relative rounded py-0.5 text-slate-500">30</div>
                                        <div class="relative rounded py-0.5 text-slate-500">31</div>
                                        <div class="relative rounded py-0.5">1</div>
                                        <div class="relative rounded py-0.5">2</div>
                                        <div class="relative rounded py-0.5">3</div>
                                        <div class="relative rounded py-0.5">4</div>
                                        <div class="relative rounded py-0.5">5</div>
                                        <div class="relative rounded bg-success/20 py-0.5 dark:bg-success/30">
                                            6
                                        </div>
                                        <div class="relative rounded py-0.5">7</div>
                                        <div class="relative rounded bg-primary py-0.5 text-white">
                                            8
                                        </div>
                                        <div class="relative rounded py-0.5">9</div>
                                        <div class="relative rounded py-0.5">10</div>
                                        <div class="relative rounded py-0.5">11</div>
                                        <div class="relative rounded py-0.5">12</div>
                                        <div class="relative rounded py-0.5">13</div>
                                        <div class="relative rounded py-0.5">14</div>
                                        <div class="relative rounded py-0.5">15</div>
                                        <div class="relative rounded py-0.5">16</div>
                                        <div class="relative rounded py-0.5">17</div>
                                        <div class="relative rounded py-0.5">18</div>
                                        <div class="relative rounded py-0.5">19</div>
                                        <div class="relative rounded py-0.5">20</div>
                                        <div class="relative rounded py-0.5">21</div>
                                        <div class="relative rounded py-0.5">22</div>
                                        <div class="relative rounded bg-pending/20 py-0.5 dark:bg-pending/30">
                                            23
                                        </div>
                                        <div class="relative rounded py-0.5">24</div>
                                        <div class="relative rounded py-0.5">25</div>
                                        <div class="relative rounded py-0.5">26</div>
                                        <div class="relative rounded bg-primary/10 py-0.5 dark:bg-primary/50">
                                            27
                                        </div>
                                        <div class="relative rounded py-0.5">28</div>
                                        <div class="relative rounded py-0.5">29</div>
                                        <div class="relative rounded py-0.5">30</div>
                                        <div class="relative rounded py-0.5 text-slate-500">1</div>
                                        <div class="relative rounded py-0.5 text-slate-500">2</div>
                                        <div class="relative rounded py-0.5 text-slate-500">3</div>
                                        <div class="relative rounded py-0.5 text-slate-500">4</div>
                                        <div class="relative rounded py-0.5 text-slate-500">5</div>
                                        <div class="relative rounded py-0.5 text-slate-500">6</div>
                                        <div class="relative rounded py-0.5 text-slate-500">7</div>
                                        <div class="relative rounded py-0.5 text-slate-500">8</div>
                                        <div class="relative rounded py-0.5 text-slate-500">9</div>
                                    </div>
                                </div>
                                <div class="border-t border-slate-200/60 p-5">
                                    <div class="flex items-center">
                                        <div class="mr-3 h-2 w-2 rounded-full bg-pending"></div>
                                        <span class="truncate">UI/UX Workshop</span>
                                        <span class="font-medium xl:ml-auto">23th</span>
                                    </div>
                                    <div class="mt-4 flex items-center">
                                        <div class="mr-3 h-2 w-2 rounded-full bg-primary"></div>
                                        <span class="truncate"> VueJs Frontend Development </span>
                                        <span class="font-medium xl:ml-auto">10th</span>
                                    </div>
                                    <div class="mt-4 flex items-center">
                                        <div class="mr-3 h-2 w-2 rounded-full bg-warning"></div>
                                        <span class="truncate">Laravel Rest API</span>
                                        <span class="font-medium xl:ml-auto">31th</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Schedules -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content -->
@endsection