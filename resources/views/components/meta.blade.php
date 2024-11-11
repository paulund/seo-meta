<title>{{ $title }}</title>
<link rel="canonical" href="{{ $canonical }}">
<link rel="icon" href="{{ asset('favicon.ico') }}">
<meta name="title" content="{{ $title }}">
<meta name="description" content="{{ $description }}">
<meta charset="{{ $charset }}">
<meta name="viewport" content="{{ $viewport }}">
@empty(!$keywords)<meta name="keywords" content="{{ $keywords }}">@endempty
@empty(!$author)<meta name="author" content="{{ $author }}">@endempty
@empty(!$robots)<meta name="robots" content="{{ $robots }}">@endempty
@empty(!$csp)<meta http-equiv="Content-Security-Policy" content="default-src 'self' data: 'unsafe-inline' 'unsafe-hashes' 'unsafe-eval' {{ $csp }}">@endempty

<meta property="og:type" content="{{ $type }}">
<meta property="og:url" content="{{ $url ?? url()->current() }}"/>
<meta property="og:locale" content="{{ app()->getLocale() }}"/>
<meta property="og:title" content="{{ $title }}"/>
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $image }}">

<meta name="twitter:card" content="{{ $card }}"/>
<meta name="twitter:url" content="{{ $url ?? url()->current() }}">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $image }}">
