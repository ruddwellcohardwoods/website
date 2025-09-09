@if ($paginator->hasPages())
<div class="flex justify-between items-center mt-6">
    <!-- Showing results info -->
    <div class="text-sm text-gray-600">
        Showing
        <span class="font-medium">{{ $paginator->firstItem() }}</span>
        to
        <span class="font-medium">{{ $paginator->lastItem() }}</span>
        of
        <span class="font-medium">{{ $paginator->total() }}</span>
        results
    </div>

    <!-- Pagination Links -->
    <nav aria-label="Pagination Navigation">
        <ul class="inline-flex items-center space-x-1">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <li class="px-3 py-2 text-gray-400 bg-gray-200 cursor-not-allowed rounded-md">
                &lsaquo;
            </li>
            @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    class="px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-100"
                    aria-label="@lang('pagination.previous')">
                    &lsaquo;
                </a>
            </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
            <li class="px-3 py-2 text-gray-400 bg-gray-200 rounded-md">{{ $element }}</li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
            @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
            <li aria-current="page">
                <span class="px-3 py-2 text-white bg-indigo-500 border border-indigo-500 rounded-md">{{ $page }}</span>
            </li>
            @else
            <li>
                <a href="{{ $url }}"
                    class="px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-100"
                    aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                    {{ $page }}
                </a>
            </li>
            @endif
            @endforeach
            @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"
                    class="px-3 py-2 text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-100"
                    aria-label="@lang('pagination.next')">
                    &rsaquo;
                </a>
            </li>
            @else
            <li class="px-3 py-2 text-gray-400 bg-gray-200 cursor-not-allowed rounded-md">
                &rsaquo;
            </li>
            @endif
        </ul>
    </nav>
</div>
@endif