@extends('layout.backend')

@section('content')

<div class="intro-y mt-8 flex items-center">
    <h2 class="mr-auto text-lg font-medium">Create Video Gallery</h2>
</div>
<div class="mt-5 grid grid-cols-12 gap-6">
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Input -->
        <form id="request-form" class="forms-sample"
              action="{{ route('videos.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            <div class="preview-component intro-y box mb-4">
                <div class="p-5">
                    <div class="pb-5">
                        <h3 class="mr-auto text-lg font-medium">Basic Details</h3>
                    </div>
                    <div class="preview relative [&.hide]:overflow-hidden [&.hide]:h-0">

                        {{-- Title --}}
                        <div class="masterx-validation">
                            <label for="title" class="inline-block mb-2">
                                Video Title <b class="text-danger">*</b>
                            </label>
                            <input id="title" name="title" type="text" placeholder="Video Title" required
                                class="w-full text-sm border-slate-200 shadow-sm rounded-md">
                        </div>

                        {{-- Video File --}}
                            <div class="mt-4">
                                <label data-tw-merge="" for="Video"
                                    class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                    Video
                                </label>
                                <input data-tw-merge="" id="Video" name="video_url" type="text"
                                    value="" placeholder="Video URL" required
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10">
                            </div>


                        {{-- Thumbnail --}}
                        <div class="mt-4 masterx-validation">
                            <label for="thumbnail" class="inline-block mb-2">
                                Upload Thumbnail <b class="text-danger">*</b>
                            </label>
                            <input id="thumbnail" name="image" type="file"
                                   accept=".jpg, .jpeg, .png, .gif"
                                   required
                                   class="w-full text-sm border-slate-200 shadow-sm rounded-md">
                        </div>

                    </div>
                </div>
            </div>

            <div class="preview-component intro-y box">
                <div class="p-5">
                    <div class="pb-5">
                        <h3 class="mr-auto text-lg font-medium">Content</h3>
                    </div>
                    <div class="preview relative [&.hide]:overflow-hidden [&.hide]:h-0">

                        {{-- Description --}}
                        <div class="masterx-validation">
                            <label for="description" class="inline-block mb-2">
                                Description <b class="text-danger">*</b>
                            </label>
                            <textarea id="description" name="description" rows="4" placeholder="Description" required
                                class="w-full text-sm border-slate-200 shadow-sm rounded-md"></textarea>
                        </div>

                        {{-- Status --}}
                        <div class="mb-4 mt-4">
                            <label for="status" class="block mb-2">Status <b class="text-danger">*</b></label>
                            <select name="status" id="status"
                                class="w-full text-sm border-slate-200 shadow-sm rounded-md">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        {{-- Submit --}}
                        <div class="text-right">
                            <button type="submit" id="request-btn"
                                class="py-2 px-5 rounded-md font-medium bg-primary text-white border border-primary shadow-sm">
                                <i data-lucide="upload-cloud" class="w-5 h-5 inline-block"></i> &nbsp; Save
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
        <!-- END: Input -->
    </div>
</div>

@endsection
