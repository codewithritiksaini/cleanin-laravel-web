@extends('layout.backend')

@section('content')
        <h2 class="intro-y mt-10 text-lg font-medium">{{$title}}</h2>
        <div class="mt-5 grid grid-cols-12 gap-6">
            <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
                <a href="{{route('blogs.create')}}" data-tw-merge=""
                    class="transition duration-200 border inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 shadow-md">
                    <i data-tw-merge="" data-lucide="plus-circle" class="stroke-1.5 w-5 h-5 mx-auto block"></i> &nbsp; Add
                    New
                    {{$title}}
                </a>

                <div class="mx-auto hidden text-slate-500 md:block" id="total_entries">
                    Showing {{ $items->firstItem() }} to {{ $items->lastItem() }} of {{ $items->total() }} entries.
                </div>
                <div class="mt-3 w-full sm:ml-auto sm:mt-0 sm:w-auto md:ml-0">
                    <div class="relative w-56 text-slate-500">
                        <input data-tw-merge="" type="text" id="table-search-bar" onchange="loadAjaxTable()" name="s"
                            value="" placeholder="Search..."
                            class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out text-sm border-slate-200 shadow-sm rounded-md placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 !box w-56 pr-10">
                        <i data-tw-merge="" data-lucide="search"
                            class="stroke-1.5 absolute inset-y-0 right-0 my-auto mr-3 h-4 w-4"></i>
                    </div>
                </div>
            </div>

            <!-- Ajax DataTable -->
            <div class="intro-y col-span-12" id="ajax_data_table">
                <!-- BEGIN: Data List -->
                <div class="intro-y col-span-12 overflow-auto">
                    <table data-tw-merge="" class="w-full text-left -mt-2 border-separate border-spacing-y-[10px]"
                        id="data-table-ajax" data-table-url="{{ route('blogs.index') }}">
                        <thead data-tw-merge="" class="">
                            <tr data-tw-merge="" class="">
                                <th
                                    class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                    #</th>
                                <th class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                    IMAGE
                                </th>
                                <th
                                    class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                    POST TITLE</th>

                                <th

                                    class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                    Keywords</th>

                                <th
                                    class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                    POST DESCRIPTION</th>
                                <th
                                    class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                    POST STATUS</th>
                                <th
                                    class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                    ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $key => $item)
                                <tr class="intro-x">
                                    <td class="text-center">{{ $key + 1 }}</td>

                                    {{-- <td class="text-center; align-items-center">
                                        @if ($item->image && count($item->image) > 0)
                                        <img class="rounded" src="{{ asset('storage/blogs/' . $item->image) }}"
                                            alt="{{ $item->title }}" style="width: 100px">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                    </td> --}}
                                    {{-- <td class="text-center align-items-center">
                                            @if(!empty($item->image))
                                                <img class="rounded" src="{{ asset('uploads/'.$item->image) }}" alt="{{ $item->title }}" style="width: 300px">
                                            @else
                                                <span>No Image</span>
                                            @endif
                                        </td> --}}
                                    <td class="text-center align-items-center">
                                        @if(!empty($item->image))
                                            <img class="rounded" src="{{ asset('storage/blogs/'.$item->image) }}"
                                                alt="{{ $item->title }}" style="width: 120px; height: auto;">
                                        @else
                                            <span>No Image</span>
                                        @endif
                                    </td>



                                    <td class="text-center">{{ $item->title }}</td>
                                    <td class="text-center">{{ $item->keywords }}</td>

                                    <td class="text-center">{{ Str::limit($item->description, 100) }}</td>

                                    <td class="text-center">
                                        <div class="mt-4 masterx-validation">
                                            <label for="status"
                                                class="inline-block mb-2 group-[.form-inline]:mb-2 group-[.form-inline]:sm:mb-0 group-[.form-inline]:sm:mr-5 group-[.form-inline]:sm:text-right">
                                            </label>
                                            <select id="status" name="status" class="form-select" disabled>
                                                <option value="1" {{ old('status', $item->status ?? '') == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ old('status', $item->status ?? '') == 0 ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                    </td>

                                    <td class="w-56 text-center">
                                        <div class="flex items-center justify-center">
                                            <a class="mr-3 flex items-center" href="{{ route('blogs.edit', $item->id) }}">
                                                <i class="stroke-1.5 mr-1 h-4 w-4" data-lucide="check-square"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger"
                                               onclick="event.preventDefault(); callDelete($(this))"
                                               href="{{ route('blogs.destroy', $item->id) }}">
                                                <i class="stroke-1.5 mr-1 h-4 w-4" data-lucide="trash"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                        {{-- Hidden delete form --}}
                        <form id="delete-form" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>

                        {{-- JS function --}}
                        <script>
                            function callDelete(element) {
                                if (confirm('Are you sure you want to delete this Record?')) {
                                    const form = document.getElementById('delete-form');
                                    form.action = element.attr('href');
                                    form.submit();
                                }
                            }
                        </script>


                    </table>
                </div>
                <!-- END: Data List -->

                <div>
                    {{ $items->links('vendor.pagination.custom') }}
                </div>


            </div>
            <!-- END: Pagination -->
        </div>

        <!-- END: Content -->

@endsection
