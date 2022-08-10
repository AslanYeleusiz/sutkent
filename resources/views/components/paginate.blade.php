@if ($paginator->hasPages())
<div class="wraper">
    <ul class="pagination">
        @if ($paginator->onFirstPage())

        <li class="disabled leftBtn">
            <div class="pgBtn"></div>
        </li>

        @else

        <li class="leftBtn">
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                <div class="pgBtn"></div>
            </a>
        </li>

        @endif
        @foreach ($elements as $element)
        @if (is_string($element))

        <li class="disabled"><span>{{ $element }}</span></li>

        @endif
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())

        <li class="active"><span>{{ $page }}</span></li>

        @else

        <li><a href="{{ $url }}">{{ $page }}</a></li>

        @endif
        @endforeach
        @endif
        @endforeach
        @if ($paginator->hasMorePages())

        <li class="rightBtn">
            <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                <div class="pgBtn"></div>
            </a>
        </li>

        @else

        <li class="disabled rightBtn">
            <span>
                <div class="pgBtn"></div>
            </span>
        </li>

        @endif
    </ul>
</div>
@endif
