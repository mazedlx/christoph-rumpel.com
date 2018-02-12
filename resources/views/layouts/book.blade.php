<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.head')
    @include('layouts.partials.fonts-book')

    <meta property="og:url" content="https://christoph-rumpel.com/build-chatbots-with-php"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Build Chatbots with PHP"/>
    <meta property="og:description"
          content="Finally a PHP chatbot starting point!Benefit from my experience and let me teach you everything you need to know to build chatbots in PHP."/>
    <meta property="og:image" content="{{ asset('/images/book/book_ad.png') }}"/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@christophrumpel"/>
    <meta name="twitter:title" content="Build Chatbots with PHP"/>
    <meta name="twitter:description"
          content="Finally a PHP chatbot starting point!Benefit from my experience and let me teach you everything you need to know to build chatbots in PHP."/>
    <meta name="twitter:image" content="{{ asset('/images/book/book_ad.png') }}"/>
</head>
<body class="font-sans">

@yield('content')

@if(app()->environment('production'))
    @include('layouts.partials.analytics')
@endif
</body>
</html>
