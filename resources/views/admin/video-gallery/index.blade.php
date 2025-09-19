{{-- @php
    dd($items);
@endphp --}}
@extends('layout.backend')

@section('content')
    <h2 class="intro-y mt-10 text-lg font-medium">{{ $title }}</h2>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
            <a href="{{ route('videos.create') }}"
                class="transition duration-200 border inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer bg-primary border-primary text-white shadow-md mr-2">
                <i data-lucide="plus-circle" class="stroke-1.5 w-5 h-5"></i> &nbsp; Add New {{ $title }}
            </a>

            <div class="mx-auto hidden text-slate-500 md:block" id="total_entries">
                Showing {{ $items->firstItem() }} to {{ $items->lastItem() }} of {{ $items->total() }} entries.
            </div>

            <div class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto">
                <div class="relative w-56 text-slate-500">
                    <input type="text" id="table-search-bar" onchange="loadAjaxTable()" name="s"
                        placeholder="Search..." class="w-56 pr-10 text-sm border-slate-200 rounded-md shadow-sm">
                    <i data-lucide="search" class="absolute right-0 inset-y-0 my-auto mr-3 h-4 w-4"></i>
                </div>
            </div>
        </div>

        <!-- Data Table -->
        <div class="intro-y col-span-12">
            <div class="intro-y col-span-12 overflow-auto">
                <table class="w-full text-left -mt-2 border-separate border-spacing-y-[10px]">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 text-center">#</th>
                            <th class="px-5 py-3 text-center">THUMBNAIL</th>
                            <th class="px-5 py-3 text-center">VIDEO</th>
                            <th class="px-5 py-3 text-center">TITLE</th>
                            <th class="px-5 py-3 text-center">STATUS</th>
                            <th class="px-5 py-3 text-center">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $key => $item)
                            <tr>
                                <td class="text-center">{{ $items->firstItem() + $key }}</td>
                                {{-- Thumbnail --}}
                                <td class="text-center">
                                    <img style="max-width: 150px;" src="{{asset('storage/images/' . $item->image)}}" alt="">

                                </td>

                                {{-- Video --}}
                                <td class="text-center">
                                 {{ ($item->video_url)}}

                                </td>


                                <td class="text-center">{{ $item->title }}</td>

                                <td class="text-center">
                                    @if ($item->status == 1)
                                        <span class="text-green-600">Active</span>
                                    @else
                                        <span class="text-red-600">Inactive</span>
                                    @endif
                                </td>

                                <td class="text-center">
                                    <div class="flex items-center justify-center">
                                        <a class="mr-3 flex items-center" href="{{ route('videos.edit', $item->id) }}">
                                            <i class="stroke-1.5 mr-1 h-4 w-4" data-lucide="check-square"></i> Edit
                                        </a>
                                        <a class="flex items-center text-danger"
                                            onclick="event.preventDefault(); callDelete($(this))"
                                            href="{{ route('videos.destroy', $item->id) }}">
                                            <i class="stroke-1.5 mr-1 h-4 w-4" data-lucide="trash"></i> Delete
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div>
                {{ $items->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>

    {{-- Hidden delete form --}}
    <form id="delete-form" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    <script>
        function callDelete(element) {
            if (confirm('Are you sure you want to delete this video?')) {
                const form = document.getElementById('delete-form');
                form.action = element.attr('href');
                form.submit();
            }
        }
    </script>
@endsection
