@extends('layout.backend')

@section('content')

<div class="intro-y mt-8 flex items-center">
    <h2 class="mr-auto text-lg font-medium">Create {{ $title }}</h2>
</div>

<div class="mt-5 grid grid-cols-12 gap-6">
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Input -->
        <form id="request-form" action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="preview-component intro-y box mb-4">
                <div class="p-5">
                    <div class="pb-5"><h3 class="mr-auto text-lg font-medium">Basic Details</h3></div>
                    <div class="preview relative">

                        <!-- Name -->
                        <div class="masterx-validation">
                            <label for="name" class="block mb-2">Name <b class="text-danger">*</b></label>
                            <input id="name" name="name" type="text" placeholder="Enter name" required
                                class="w-full text-sm border-slate-200 shadow-sm rounded-md" />
                        </div>

                        <!-- Company -->
                        <div class="mt-4 masterx-validation">
                            <label for="company" class="block mb-2">Company</label>
                            <input id="company" name="company" type="text" placeholder="Enter company"
                                class="w-full text-sm border-slate-200 shadow-sm rounded-md" />
                        </div>

                        <!-- Position -->
                        <div class="mt-4 masterx-validation">
                            <label for="position" class="block mb-2">Position</label>
                            <input id="position" name="position" type="text" placeholder="Enter position"
                                class="w-full text-sm border-slate-200 shadow-sm rounded-md" />
                        </div>

                        <!-- Image -->
                        <div class="mt-4 masterx-validation">
                            <label for="image" class="block mb-2">Image <b class="text-danger">*</b></label>
                            <input id="image" name="image" type="file" accept=".jpeg,.jpg,.png,.webp" required
                                class="w-full text-sm border-slate-200 shadow-sm rounded-md" />
                        </div>

                        <!-- Rating -->
                        <div class="mt-4 masterx-validation">
                            <label for="rating" class="block mb-2">Rating (1–5)</label>
                          <select name="rating" id="rating" data-tw-merge="" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10" required>
                        <option>Select Rating</option>
                        @for ($i = 1; $i <= 5; $i += 0.5)
                            <option value="{{ $i }}" one>
                                Rating {{ $i }} Star
                            </option>
                        @endfor
                    </select>
                        </div>

                    </div>
                </div>
            </div>

            <div class="preview-component intro-y box">
                <div class="p-5">
                    <div class="pb-5"><h3 class="mr-auto text-lg font-medium">Testimonial</h3></div>
                    <div class="preview relative">

                        <!-- Testimonial -->
                        <div class="masterx-validation">
                            <label for="testimonial" class="block mb-2">Testimonial <b class="text-danger">*</b></label>
                            <textarea id="testimonial" name="testimonial" rows="5" placeholder="Write testimonial..." required
                                class="w-full text-sm border-slate-200 shadow-sm rounded-md"></textarea>
                        </div>

                        <!-- Status -->
                        <div class="mt-4 masterx-validation">
                            <label for="status" class="block mb-2">Status <b class="text-danger">*</b></label>
                            <select name="status" id="status"
                                class="w-full text-sm border-slate-200 shadow-sm rounded-md">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        <!-- Submit -->
                        <div class="text-right">
                            <button type="submit"
                                class="mt-5 px-5 py-2 rounded-md font-medium bg-primary text-white border border-primary shadow-sm">
                                <i data-lucide="upload-cloud" class="w-5 h-5 inline-block"></i> Save
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
