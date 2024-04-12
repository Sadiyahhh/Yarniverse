@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-between">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination">
                <!-- {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true">
                        <a>@lang('pagination.previous')</a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true">
                        <a class="page-link">@lang('pagination.next')</a>
                    </li>
                @endif -->
            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
            <div>
                <p class="small text-muted" id="display-text">
                    {!! __('Displaying') !!}
                    <a class="fw-semibold"><b>{{ $paginator->firstItem() }}</b></a>
                    {!! __('to') !!}
                    <a class="fw-semibold"><b>{{ $paginator->lastItem() }}</b></a>
                    {!! __('of') !!}
                    <a class="fw-semibold"><b>{{ $paginator->total() }}</b></a>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <a class="page-link" aria-hidden="true">&lsaquo;</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item disabled" aria-disabled="true"><a class="page-link">{{ $element }}</a></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active" aria-current="page"><a class="page-link">{{ $page }}</a></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <a class="page-link" aria-hidden="true">&rsaquo;</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <style>
.pagination {
  display: inline-flex;
  position: relative;
  left: 50rem;
  bottom: 4rem;
}

.pagination a {
  color: black;
  background-color: #AF8683;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  border: 1px solid;
}

.pagination a.active {
  background-color: #A06F6A;
  color: white;
  /* border: 1px solid #4CAF50; */
}

.pagination a:hover:not(.active) {background-color: #A06F6A;}

.pagination a:first-child {
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}

.pagination a:last-child {
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

.pagination .page-item::marker {    
     color: transparent;
 }

#display-text {
    position: relative;
    left: 33rem;
}

</style>
@endif
