@if ($paginator->hasPages())
    <nav aria-label="Page navigation" class="flex justify-center items-center space-x-3 mt-4">
        <!-- Previous Page Link -->
        <div class="flex items-center">
            @if ($paginator->onFirstPage())
                <span class="px-4 py-2 bg-gray-300 text-black rounded-md cursor-not-allowed">Prev</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-2 bg-blue-500 text-black rounded-md hover:bg-blue-600">Prev</a>
            @endif
        </div>

        <!-- Pagination Elements -->
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="px-4 py-2 text-black">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <a href="{{ $url }}" class="px-4 py-2 text-black bg-blue-500 rounded-md hover:bg-blue-600">{{ $page }}</a>
                @endforeach
            @endif
        @endforeach

        <!-- Next Page Link -->
        <div class="flex items-center">
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-2 bg-blue-500 text-black rounded-md hover:bg-blue-600">Next</a>
            @else
                <span class="px-4 py-2 bg-gray-300 text-black rounded-md cursor-not-allowed">Next</span>
            @endif
        </div>
    </nav>
@endif
