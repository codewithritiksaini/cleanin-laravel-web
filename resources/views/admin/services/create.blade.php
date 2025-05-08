@extends('layout.backend')

@section('content')
<!-- BEGIN: Content -->
<div
class="md:max-w-auto min-h-screen min-w-0 max-w-full flex-1 rounded-[30px] bg-slate-100 px-4 pb-10 before:block before:h-px before:w-full before:content-[''] dark:bg-darkmode-700 md:px-[22px]">
<!-- BEGIN: Top Bar -->
<div class="relative z-[51] flex h-[67px] items-center border-b border-slate-200">
    <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="flex -intro-x mr-auto hidden sm:flex">
<ol class="flex items-center text-theme-1 dark:text-slate-300">
<li class="">
<a href="https://www.ritiksaini.in/admin/dashboard">Dashboard</a>
</li>
<li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-800 cursor-text dark:text-slate-400">
<a href="https://www.ritiksaini.in/admin/service">Services</a>
</li>
<li
class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-black before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-slate-800 cursor-text dark:text-slate-400">
<a href="#">Create Service</a>
</li>
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
            <i data-tw-merge="" data-lucide="search"
                class="stroke-1.5 w-5 h-5 dark:text-slate-500"></i>
        </a>
        <div data-transition="" data-selector=".show"
            data-enter="transition-all ease-linear duration-150"
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
                            <i data-tw-merge="" data-lucide="credit-card"
                                class="stroke-1.5 h-4 w-4"></i>
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
            <img src="https://www.ritiksaini.in/app-assets/images/fakers/profile-3.jpg"
                alt="MasterX Admin Panel">
        </button>
        <div data-transition="" data-selector=".show"
            data-enter="transition-all ease-linear duration-150"
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
                        data-tw-merge="" data-lucide="toggle-right"
                        class="stroke-1.5 mr-2 h-4 w-4"></i>
                    Logout
                </a>
                <form id="logout-form" action="https://www.ritiksaini.in/logout" method="POST" class="d-none">
                    <input type="hidden" name="_token" value="kc15lic7hhcKjGbGl5zCaxigNMTZi0n6UcQgMXWM" autocomplete="off">                                </form>
            </div>
        </div>
    </div>
    <!-- END: Account Menu -->
</div>
<!-- END: Top Bar -->

    <div class="intro-y mt-8 flex items-center">
<h2 class="mr-auto text-lg font-medium">Create Service</h2>
</div>
<div class="mt-5 grid grid-cols-12 gap-6">
<div class="intro-y col-span-12 lg:col-span-12">
<!-- BEGIN: Input -->
<form id="request-form" class="forms-sample" action="{{ route('services.store') }}" method="POST" data-form-reset="true" data-load-table="false" enctype="multipart/form-data">
    @csrf
<div class="preview-component intro-y box mb-4">
    <div class="p-5">
        <div class="pb-5"><h3 class="mr-auto text-lg font-medium">Basic Details</h3></div>                
        <div class="preview relative [&.hide]:overflow-hidden [&.hide]:h-0">
            <div class="masterx-validation">
                <label data-tw-merge="" for="title" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                    Post Title <small>(Meta)</small><b class="text-danger"> *</b>
                </label>
                <input data-tw-merge="" id="title" name="title" type="text" placeholder="Post Title" required
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
            </div>
            <div class="mt-4 masterx-validation">
                <label data-tw-merge="" for="name" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                    Post Name<b class="text-danger"> *</b>
                </label>
                <input data-tw-merge="" id="name" name="name" type="text" placeholder="Post Name" required
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
            </div>
            <div class="mt-4 masterx-validation">
                <label data-tw-merge="" for="slug" class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                    Post Slug<br><small>(If you leave it blank, it will be generated automatically)</small>
                </label>
                <input data-tw-merge="" id="slug" name="slug" type="text" placeholder="Post Slug"
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
            </div>
            <div class="mt-4 masterx-validation">
                <label data-tw-merge="" for="image"
                    class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                    Image<b class="text-danger"> *</b>
                </label>
                <input data-tw-merge="" id="image" name="image[]" type="file" 
                    accept=".jpeg, .jpg, .png, .webp" placeholder="Image" required 
                    multiple 
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
            </div>
        </div>
    </div>
</div>

<div class="preview-component intro-y box">
    <div class="p-5">
        <div class="pb-5"><h3 class="mr-auto text-lg font-medium">Content</h3></div>                
        <div class="preview relative [&.hide]:overflow-hidden [&.hide]:h-0">
            <div class="masterx-validation">
                <label data-tw-merge="" for="description"
                    class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                    Description <small>(Meta)</small><b class="text-danger"> *</b>
                </label>
                <textarea data-tw-merge="" id="description" name="description" rows="4" placeholder="Description" required
                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"></textarea>
            </div>

            <div class="mt-4 masterx-validation">
                <label data-tw-merge="" for="content"
                    class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                    Content<b class="text-danger"> *</b>
                </label>
                <textarea data-tw-merge="" id="content" name="content" placeholder="Content" required
                    class="tinyMCE disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10"></textarea>
            </div>
            <div class="text-right">
                <button data-tw-merge="" type="submit" id="request-btn"
                    class="transition duration-200 border shadow-sm inline-flex
                    items-center justify-center py-2 px-5 rounded-md font-medium cursor-pointer focus:ring-4 
                    focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 
                    dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center
                    disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mt-5">
                    <i data-tw-merge="" data-lucide="upload-cloud" class="stroke-1.5 w-5 h-5 mx-auto block"></i> &nbsp; Save
                </button>
            </div>

        </div>
    </div>
</div>
</form>
<!-- END: Input -->
</div>
</div>
</div>
<!-- END: Content -->
@endsection