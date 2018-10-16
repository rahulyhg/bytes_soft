<ul class="desc" data-aos="fade-down" data-aos-delay="1200" itemscope itemtype="http://schema.org/BreadcrumbList">
    @foreach ($crumbs as $i => $crumb)
        @if ($i != (count($crumbs) - 1))
        <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <meta itemprop="position" content="{{ $i + 1}}" />
            <a href="{{ $crumb['url'] }}" itemprop="item" title="{{ $crumb['label'] }}">
                {!! $crumb['label'] !!}
                <meta itemprop="name" content="{{ $crumb['label'] }}" />
            </a>
        </span> / 
        @else
        <span class="active">{!! $crumb['label'] !!}</span>
        @endif
    @endforeach
</ul>