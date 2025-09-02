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
                        <label for="rating" class="block mb-2">Rating</label>
                        <input type="number" id="rating" name="rating" min="1" max="5"
                            value="{{ old('rating', $item->rating) }}" class="w-full border rounded-md p-2">
                    </div>

                    {{-- Testimonial --}}
                    <div class="mb-4">
                        <label for="testimonial" class="block mb-2">Testimonial <b style="color:red">*</b></label>
                        <textarea id="testimonial" name="testimonial" rows="4"
                            class="w-full border rounded-md p-2">{{ old('testimonial', $item->testimonial) }}</textarea>
                    </div>

                    {{-- Image --}}
                    <div class="mb-4">
                        <label for="image" class="block mb-2">Image</label>
                        <input type="file" id="image" name="image" accept="image/*" class="w-full">
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

                </div>
            </div>
        </form>
        <!-- END: Input -->
    </div>
</div>

@endsection
