@extends('layout.backend')

@section('content')

<div class="intro-y mt-8 flex items-center">
    <h2 class="mr-auto text-lg font-medium">Edit Team Member</h2>
</div>

<div class="mt-5 grid grid-cols-12 gap-6">
    <div class="intro-y col-span-12 lg:col-span-12">
        <!-- BEGIN: Input -->
        <form id="request-form" class="forms-sample"
              action="{{ route('teams.update', $item->id) }}"
              method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

          <div class="preview-component intro-y box mb-4">
    <div class="p-5">
        <div class="pb-5">
            <h3 class="mr-auto text-lg font-medium">Basic Details</h3>
        </div>
        <div class="preview relative">

            {{-- Name --}}
            <div class="masterx-validation">
                <label for="name" class="inline-block mb-2">
                    Name <b class="text-danger">*</b>
                </label>
                <input id="name" name="name" type="text"
                    value="{{ old('name', $item->name) }}"
                    placeholder="Enter team member name" required
                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
            </div>
            {{-- Slug --}}
            <div class="mt-4 masterx-validation"></div>
                <label for="slug" class="inline-block mb-2">
                    Slug <b class="text-danger">*</b>
                </label>
                <input id="slug" name="slug" type="text"
                    value="{{ old('slug', $item->slug) }}"
                    placeholder="Enter team member slug" required
                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
            </div>

            {{-- Position --}}
            <div class="mt-4 masterx-validation">
                <label for="position" class="inline-block mb-2">
                    Position <b class="text-danger">*</b>
                </label>
                <input id="position" name="position" type="text"
                    value="{{ old('position', $item->position) }}"
                    placeholder="Enter position (e.g. Developer, Manager)" required
                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
            </div>

            {{-- Content --}}
            <div class="mt-4 masterx-validation"></div>
                <label for="content" class="inline-block mb-2">
                    Content
                </label>
                <textarea id="content" name="content" rows="4"
                    placeholder="Enter content"
                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">{{ old('content', $item->content ?? '') }}</textarea>
            </div>

            {{-- Role --}}
            <div class="mt-4 masterx-validation">
                <label for="role" class="inline-block mb-2">
                    Role <b class="text-danger">*</b>
                </label>
                <input id="role" name="role" type="text"
                    value="{{ old('role', $item->role) }}"
                    placeholder="Enter role" required
                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
            </div>

            {{-- Facebook --}}
            <div class="mt-4 masterx-validation">
                <label for="facebook" class="inline-block mb-2">Facebook</label>
                <input id="facebook" name="facebook" type="text"
                    value="{{ old('facebook', $item->facebook) }}"
                    placeholder="Enter Facebook profile link"
                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
            </div>

            {{-- Instagram --}}
            <div class="mt-4 masterx-validation">
                <label for="instagram" class="inline-block mb-2">Instagram</label>
                <input id="instagram" name="instagram" type="text"
                    value="{{ old('instagram', $item->instagram) }}"
                    placeholder="Enter Instagram profile link"
                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
            </div>

            {{-- Twitter --}}
            <div class="mt-4 masterx-validation">
                <label for="twitter" class="inline-block mb-2">Twitter</label>
                <input id="twitter" name="twitter" type="text"
                    value="{{ old('twitter', $item->twitter) }}"
                    placeholder="Enter Twitter profile link"
                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
            </div>

            {{-- WhatsApp --}}
            <div class="mt-4 masterx-validation">
                <label for="whatsapp" class="inline-block mb-2">WhatsApp</label>
                <input id="whatsapp" name="whatsapp" type="text"
                    value="{{ old('whatsapp', $item->whatsapp) }}"
                    placeholder="Enter WhatsApp number or link"
                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
            </div>

            {{-- Image --}}
            <div class="mt-4 masterx-validation">
    <label for="image" class="inline-block mb-2">
        Image
    </label>
    <input id="image" name="image" type="file" accept=".jpeg, .jpg, .png, .webp"
        class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary"
        onchange="previewImage(event)">

    {{-- Show existing image --}}
    <div class="mt-2">
        <img id="imagePreview"
             src="{{ !empty($item->image) ? asset('storage/teams/'.$item->image) : '' }}"
             alt="{{ $item->name ?? 'Team Image' }}"
             style="width: 120px; height:auto; display: {{ !empty($item->image) ? 'block' : 'none' }};"
             class="rounded border shadow">
    </div>
</div>


        </div>
    </div>
</div>


            <div class="text-right">
                <button type="submit" id="request-btn"
                    class="bg-primary border-primary text-white py-2 px-5 rounded-md shadow-sm mt-5">
                    <i data-lucide="upload-cloud" class="w-5 h-5 inline-block mr-1"></i> Update
                </button>
            </div>

        </form>
        <!-- END: Input -->
    </div>
</div>

@endsection
<script>
    function previewImage(event) {
        let reader = new FileReader();
        reader.onload = function(){
            let output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

