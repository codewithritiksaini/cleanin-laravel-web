@extends('layout.backend')

@section('content')
    <div class="intro-y mt-8 flex items-center">
        <h2 class="mr-auto text-lg font-medium">Create Team Member</h2>
    </div>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 lg:col-span-12">
            <!-- BEGIN: Input -->
            <form id="request-form" class="forms-sample" action="{{ route('teams.store') }}" method="POST"
                data-form-reset="true" data-load-table="false" enctype="multipart/form-data">
                @csrf

                <div class="preview-component intro-y box mb-4">
                    <div class="p-5">
                        <div class="pb-5">
                            <h3 class="mr-auto text-lg font-medium">Basic Details</h3>
                        </div>
                        <div class="preview relative [&.hide]:overflow-hidden [&.hide]:h-0">

                            {{-- Name --}}
                            <div class="masterx-validation">
                                <label for="name" class="inline-block mb-2">
                                    Name <b class="text-danger">*</b>
                                </label>
                                <input id="name" name="name" type="text"
                                    value="{{ old('name', $team->name ?? '') }}" placeholder="Enter team member name"
                                    required
                                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
                            </div>

                            {{-- Slug --}}
                            <div class="mt-4 masterx-validation">
                                <label for="slug" class="inline-block mb-2">
                                    Slug <b class="text-danger">*</b>
                                </label>
                                <input id="slug" name="slug" type="text"
                                    value="{{ old('slug', $team->slug ?? '') }}" placeholder="Enter team member slug"
                                    required
                                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
                            </div>

                            {{-- Position --}}
                            <div class="mt-4 masterx-validation">
                                <label for="position" class="inline-block mb-2">
                                    Position
                                </label>
                                <input id="position" name="position" type="text"
                                    value="{{ old('position', $team->position ?? '') }}"
                                    placeholder="Enter position (e.g. Developer, Manager)"
                                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
                            </div>

                            {{-- Content --}}
                            <div class="mt-4 masterx-validation">
                                <label for="content" class="inline-block mb-2">
                                    Content
                                </label>
                                <textarea id="content" name="content" rows="4"
                                    placeholder="Enter content"
                                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">{{ old('content', $team->content ?? '') }}</textarea>
                            </div>

                            {{-- Role --}}
                            <div class="mt-4 masterx-validation">
                                <label for="role" class="inline-block mb-2">
                                    Role
                                </label>
                                <input id="role" name="role" type="text"
                                    value="{{ old('role', $team->role ?? '') }}" placeholder="Enter role"
                                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
                            </div>

                            {{-- Image --}}
                            <div class="mt-4 masterx-validation">
                                <label for="image" class="inline-block mb-2">
                                    Image
                                </label>
                                <input id="image" name="image" type="file" accept=".jpeg, .jpg, .png, .webp"
                                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
                            </div>

                            {{-- Facebook --}}
                            <div class="mt-4 masterx-validation">
                                <label for="facebook" class="inline-block mb-2">
                                    Facebook
                                </label>
                                <input id="facebook" name="facebook" type="url"
                                    value="{{ old('facebook', $team->facebook ?? '') }}"
                                    placeholder="Enter Facebook profile link"
                                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
                            </div>

                            {{-- Instagram --}}
                            <div class="mt-4 masterx-validation">
                                <label for="instagram" class="inline-block mb-2">
                                    Instagram
                                </label>
                                <input id="instagram" name="instagram" type="url"
                                    value="{{ old('instagram', $team->instagram ?? '') }}"
                                    placeholder="Enter Instagram profile link"
                                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
                            </div>

                            {{-- Twitter --}}
                            <div class="mt-4 masterx-validation">
                                <label for="twitter" class="inline-block mb-2">
                                    Twitter
                                </label>
                                <input id="twitter" name="twitter" type="url"
                                    value="{{ old('twitter', $team->twitter ?? '') }}"
                                    placeholder="Enter Twitter profile link"
                                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
                            </div>

                            {{-- Whatsapp --}}
                            <div class="mt-4 masterx-validation">
                                <label for="whatsapp" class="inline-block mb-2">
                                    WhatsApp
                                </label>
                                <input id="whatsapp" name="whatsapp" type="text"
                                    value="{{ old('whatsapp', $team->whatsapp ?? '') }}"
                                    placeholder="Enter WhatsApp number with country code (e.g. +91...)"
                                    class="w-full text-sm border-slate-200 shadow-sm rounded-md focus:ring-4 focus:ring-primary">
                            </div>

                        </div>
                    </div>
                </div>


                <div class="text-right">
                    <button type="submit" id="request-btn"
                        class="bg-primary border-primary text-white py-2 px-5 rounded-md shadow-sm mt-5">
                        <i data-lucide="upload-cloud" class="w-5 h-5 inline-block mr-1"></i> Save
                    </button>
                </div>

            </form>
            <!-- END: Input -->
        </div>
    </div>
@endsection
