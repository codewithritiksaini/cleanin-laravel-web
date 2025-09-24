@extends('layout.backend')

@section('content')
    <h2 class="intro-y mt-10 text-lg font-medium">{{ $title }}</h2>

    <div class="mt-5 grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 mt-2 flex flex-wrap items-center sm:flex-nowrap">
            <a href="{{ route('testimonials.create') }}"
               class="transition duration-200 border inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 bg-primary border-primary text-white shadow-md">
                <i data-lucide="plus-circle" class="w-5 h-5"></i>&nbsp; Add New {{ $title }}
            </a>

            <div class="mx-auto hidden text-slate-500 md:block" id="total_entries">
                Showing {{ $items->firstItem() }} to {{ $items->lastItem() }} of {{ $items->total() }} entries.
            </div>
        </div>

        <!-- Data Table -->
        <div class="intro-y col-span-12">
            <div class="overflow-auto">
                <table class="w-full text-left border-separate border-spacing-y-[10px]">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 text-center">#</th>
                            <th class="px-5 py-3 text-center">Image</th>
                            <th class="px-5 py-3 text-center">Name</th>
                            <th class="px-5 py-3 text-center">Company</th>
                            <th class="px-5 py-3 text-center">Position</th>
                            <th class="px-5 py-3 text-center">Rating</th>
                            <th class="px-5 py-3 text-center">Testimonial</th>
                            <th class="px-5 py-3 text-center">Status</th>
                            <th class="px-5 py-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $key => $item)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>

                                <td class="text-center">
                                    @if ($item->image)
                                        <img src="{{ asset('storage/testimonials/' . $item->image) }}"
                                             alt="{{ $item->name }}" width="80" class="rounded">
                                    @else
                                        <span>No Image</span>
                                    @endif
                                </td>

                                <td class="text-center">{{ $item->name }}</td>
                                <td class="text-center">{{ $item->company ?? '-' }}</td>
                                <td class="text-center">{{ $item->position ?? '-' }}</td>
                                <td class="text-center">{{ $item->rating ?? '-' }}</td>
                                <td class="text-center">{{ Str::limit($item->testimonial, 50) }}</td>

                                <td class="text-center">
                                    @if ($item->status == 1)
                                        <span class="text-green-600">Active</span>
                                    @else
                                        <span class="text-red-600">Inactive</span>
                                    @endif
                                </td>

                                <td class="w-56 text-center">
                                        <div class="flex items-center justify-center">
                                            <a class="mr-3 flex items-center" href="{{ route('testimonials.edit', $item->id) }}">
                                                <i class="stroke-1.5 mr-1 h-4 w-4" data-lucide="check-square"></i> Edit
                                            </a>
                                            <a class="flex items-center text-danger"
                                               onclick="event.preventDefault(); callDelete($(this))"
                                               href="{{ route('testimonials.destroy', $item->id) }}">
                                                <i class="stroke-1.5 mr-1 h-4 w-4" data-lucide="trash"></i> Delete
                                            </a>
                                        </div>
                                    </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $items->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>

    <!-- Hidden delete form -->
    <form id="delete-form" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    <script>
        function callDelete(element) {
            if (confirm('Are you sure you want to delete this Record?')) {
                const form = document.getElementById('delete-form');
                form.action = element.attr('href');
                form.submit();
            }
        }
    </script>
@endsection
