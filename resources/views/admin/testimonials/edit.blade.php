@extends('layout.backend')

@section('content')

<div class="intro-y mt-8 flex items-center">
    <h2 class="mr-auto text-lg font-medium">Edit {{ $title }}</h2>
</div>

<div class="mt-5 grid grid-cols-12 gap-6">
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Input -->
        <form action="{{ route('testimonials.update', $item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="preview-component intro-y box mb-4">
                <div class="p-5">
                    <h3 class="text-lg font-medium mb-4">Basic Details</h3>

                    {{-- Name --}}
                    <div class="mb-4">
                        <label for="name" class="block mb-2">Name <b style="color:red">*</b></label>
                        <input type="text" id="name" name="name" value="{{ old('name', $item->name) }}"
                            class="w-full border rounded-md p-2">
                    </div>

                    {{-- Company --}}
                    <div class="mb-4">
                        <label for="company" class="block mb-2">Company</label>
                        <input type="text" id="company" name="company" value="{{ old('company', $item->company) }}"
                            class="w-full border rounded-md p-2">
                    </div>

                    {{-- Position --}}
                    <div class="mb-4">
                        <label for="position" class="block mb-2">Position</label>
                        <input type="text" id="position" name="position" value="{{ old('position', $item->position) }}"
                            class="w-full border rounded-md p-2">
                    </div>

                    {{-- Rating --}}
                    <div class="mb-4">
                            <label for="rating" class="block mb-2">Rating (1–5)</label>
                          <select name="rating" id="rating" data-tw-merge="" class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10" required>
                        <option value="{{ old('rating', $item->rating) }}" selected>Ratting {{ old('rating', $item->rating) }} Star</option>
                        @for ($i = 1; $i <= 5; $i += 0.5)
                            <option value="{{ $i }}" one>
                                Rating {{ $i }} Star
                            </option>
                        @endfor



                    {{-- Testimonial --}}
                    <div class="mb-4">
                        <label for="testimonial" class="block mb-2">Testimonial <b style="color:red">*</b></label>
                        <textarea id="testimonial" name="testimonial" rows="4"
                            class="w-full border rounded-md p-2">{{ old('testimonial', $item->testimonial) }}</textarea>
                    </div>

                    {{-- Image --}}
                    <div class="mb-4 mt-4">
                        <label for="image" class="block mb-2">Image</label>
                        <input type="file" id="image" name="image" accept="image/*" class="w-full mt-5">
                        @if($item->image)
                            <img src="{{ asset('storage/testimonials/'.$item->image) }}" alt="Current Image" class="h-20 mt-2">
                        @endif
                    </div>

                    {{-- Status --}}
                    <div class="mb-4">
                        <label for="status" class="block mb-2">Status <b style="color:red">*</b></label>
                        <select name="status" id="status" class="w-full border rounded-md p-2">
                            <option value="1" {{ $item->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $item->status == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-md">
                            Save
                        </button>
                    </div>
                    <div class="text-right">
        <button type="submit" id="request-btn"
            class="bg-primary border-primary text-white py-2 px-5 rounded-md shadow-sm mt-5">
            <i data-lucide="upload-cloud" class="w-5 h-5 inline-block mr-1"></i> Update
        </button>
    </div>

                </div>
            </div>
        </form>
        <!-- END: Input -->
    </div>
</div>

@endsection
