<title>{{ $meta['title']  }} | {{ config('app.name') }}</title>
<meta name="description" content="{{ $meta['description'] }}"/>

<meta property="fb:app_id" content="{{ config('social-media.facebook.app_id') }}"/>
{{--  HTML Meta Tags--}}
<meta property="og:url" content="{{  URL::current() }}"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="{{ config('app.name') }}| {{ $meta['title']  }}">
<meta property="og:description" content="{{ $meta['description'] }}">
<meta property="og:image" content="{{ $meta['image'] ?? '' }}">

{{--  Twitter Meta Tags --}}
<meta name="twitter:card" content="summary_large_image"/>
<meta property="twitter:domain" content="farmersfriend.co.za"/>
<meta property="twitter:url" content="{{ URL::current() }}"/>
<meta name="twitter:title" content="{{ config('app.name') }}| {{ $meta['title']  ?? 'Supplier and installer of Shutters and Blinds.' }}">
<meta name="twitter:description" content="{{ $meta['description']  }}">
<meta name="twitter:image" content="{{ $meta['image'] ?? '' }}">
