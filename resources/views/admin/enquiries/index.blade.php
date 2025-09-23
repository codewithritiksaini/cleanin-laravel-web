@extends('layout.backend')

@section('content')

    <h2 class="intro-y mt-10 text-lg font-medium">{{$title}}</h2>
    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">

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
                <table class="w-full text-left -mt-2 border-separate border-spacing-y-[10px]" id="data-table-ajax" data-table-url="https://www.ritiksaini.in/admin/ajax/load-message-table">
                    <thead class="">
                        <tr class="">
                            <th class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                S.NO
                            </th>
                            <th class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                Name
                            </th>
                            <th class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                Email
                            </th>
                            <th class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                Mobile
                            </th>
                            <th class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                Subject
                            </th>
                            <th class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0">
                                Message
                            </th>
                            <th class="font-medium px-5 py-3 dark:border-darkmode-300 whitespace-nowrap border-b-0 text-center">
                                ACTIONS
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $key => $item)
                            <tr id="row67" class="intro-x">
                                <td class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 text-center shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    {{ $key + 1 }}
                                </td>
                                <td class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <a class="whitespace-nowrap font-medium" href="#">
                                        {{ $item->name }}
                                    </a>
                                </td>
                                <td class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <a class="whitespace-nowrap font-medium" href="#">
                                        {{ $item->email }}
                                    </a>
                                </td>
                                <td class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <a class="whitespace-nowrap font-medium" href="#">
                                        {{ $item->mobile }}
                                    </a>
                                </td>
                                <td class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <a class="whitespace-nowrap font-medium" href="#">
                                        {{ $item->subject }}
                                    </a>
                                </td>
                                <td class="px-5 py-3 border-b dark:border-darkmode-300 box rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600">
                                    <a class="whitespace-nowrap font-medium" href="#">
                                        {{ $item->message }}
                                    </a>
                                </td>
                                <td class="px-5 py-3 border-b dark:border-darkmode-300 box w-56 rounded-l-none rounded-r-none border-x-0 shadow-[5px_3px_5px_#00000005] first:rounded-l-[0.6rem] first:border-l last:rounded-r-[0.6rem] last:border-r dark:bg-darkmode-600 before:absolute before:inset-y-0 before:left-0 before:my-auto before:block before:h-8 before:w-px before:bg-slate-200 before:dark:bg-darkmode-400">
                                    <div class="flex items-center justify-center">
                                        <form action="{{ route('enquiries.destroy', $item->id) }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this enquiry?');"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="flex items-center text-danger hover:underline">
                                                <i class="stroke-1.5 mr-1 h-4 w-4" data-lucide="trash"></i> Delete
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
            <div>
                {{ $items->links('vendor.pagination.custom') }}
            </div>
        </div>
        <!-- END: Pagination -->
    </div>
            </div>


@endsection
