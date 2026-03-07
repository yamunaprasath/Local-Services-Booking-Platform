<div class="breadcrumb-bar breadcrumb-bg-04 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">@yield('breadcrumb')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('partner.dashboard') }}">
                                <i class="isax isax-home5"></i>
                            </a>
                        </li>

                        @php
                        $allSegments = collect(request()->segments());

                        // Build full URL map including numeric IDs (for correct links)
                        $urlMap = [];
                        $url = '/partner';
                        foreach ($allSegments as $segment) {
                        if ($segment === 'partner') continue;
                        $url .= '/' . $segment;
                        $urlMap[$segment] = $url;
                        }

                        // Display segments: skip 'partner' and numeric IDs
                        $segments = $allSegments
                        ->reject(fn($s) => $s === 'partner' || is_numeric($s))
                        ->values();
                        @endphp

                        @foreach ($segments as $index => $segment)
                        @php
                        $isLast = $index === $segments->count() - 1;
                        $label = ucwords(str_replace('-', ' ', $segment));
                        $link = $urlMap[$segment] ?? '#';
                        @endphp

                        @if ($isLast)
                        <li class="breadcrumb-item active" aria-current="page">
                            {{ $label }}
                        </li>
                        @else
                        <li class="breadcrumb-item">
                            <a href="{{ $link }}">{{ $label }}</a>
                        </li>
                        @endif
                        @endforeach

                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>