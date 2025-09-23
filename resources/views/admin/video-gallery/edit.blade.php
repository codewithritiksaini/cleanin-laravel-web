@extends('layout.backend')

@section('content')
<div class="intro-y mt-8 flex items-center">
    <h2 class="mr-auto text-lg font-medium">Edit {{ $title }}</h2>
</div>

<div class="mt-5 grid grid-cols-12 gap-6">
    <div class="intro-y col-span-12 lg:col-span-12">

        <!-- BEGIN: Input -->
        <form id="request-form"
              action="{{ route('videos.update', $item->id) }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="preview-component intro-y box mb-4">
                <div class="p-5">
                    <div class="pb-5">
                        <h3 class="mr-auto text-lg font-medium">Basic Details</h3>
                    </div>

                    <div class="preview relative">
                        <!-- Title -->
                        <div class="masterx-validation">
                            <label for="title" class="inline-block mb-2">Video Title <b class="text-danger">*</b></label>
                            <input id="title"
                                   name="title"
                                   type="text"
                                   value="{{ old('title', $item->title) }}"
                                   placeholder="Video Title"
                                   class="w-full text-sm border rounded-md shadow-sm">
                        </div>

                            <!-- Thumbnail -->
                                            <!-- Image -->
 <!-- Image -->
    <div class="mt-4 masterx-validation">
        <label for="image" class="inline-block mb-2">Image <b class="text-danger">*</b></label>
        <input id="image"
               name="image"
               type="file"
               accept="image/jpeg,image/jpg,image/png,image/webp"
               class="w-full text-sm border rounded-md shadow-sm">

        @if($item->image)
            <div class="mt-3">
                <p class="mb-1">Current Image:</p>
                <img src="{{ asset('storage/images/' . $item->image) }}"
                     alt="Current Image"
                     class="h-32 rounded-md shadow">
            </div>
        @endif
    </div>




                        <!-- Video -->
                        <div class="mt-4 masterx-validation">
                            <label for="video_url" class="inline-block mb-2">Video URL <b class="text-danger">*</b></label>
                            <input id="video_url"
                                name="video_url"
                                type="url"
                                value="{{ old('video_url', $item->video_url) }}"
                                class="w-full text-sm border rounded-md shadow-sm"
                                placeholder="Enter YouTube or Vimeo URL">

                            @if($item->video_url)
                                <div class="mt-3">

                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="preview-component intro-y box">
                <div class="p-5">
                    <div class="pb-5">
                        <h3 class="mr-auto text-lg font-medium">Content</h3>
                    </div>

                    <div class="preview relative">
                        <!-- Description -->
                        <div class="masterx-validation">
                            <label for="description" class="inline-block mb-2">
                                Description <b class="text-danger">*</b>
                            </label>
                            <textarea id="description"
                                      name="description"
                                      rows="4"
                                      placeholder="Description"
                                      class="w-full text-sm border rounded-md shadow-sm">{{ old('description', $item->description) }}</textarea>
                        </div>

                        <!-- Status -->
                        <div class="mt-4">
                            <label for="status" class="block mb-2">Status <b class="text-danger">*</b></label>
                            <select id="status" name="status" class="w-full text-sm border rounded-md shadow-sm">
                                <option value="active" {{ $item->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $item->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <!-- Submit -->
                        <div class="text-right">
                            <button type="submit"
                                    class="mt-5 py-2 px-5 rounded-md bg-primary text-white shadow">
                                <i data-lucide="upload-cloud" class="w-5 h-5 inline-block"></i> &nbsp; Update
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
