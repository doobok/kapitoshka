<title>{{ $title }} - {{setting('site.title')}}</title>
<meta name="description" content="{{ $description }}">
<meta name="robots" content="index, follow">
<meta name="author" content="{{setting('site.title')}}">
<meta name="copyright" content="Copyright (c) 2019-{{ date("Y") }} by {{setting('site.title')}}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{url()->current()}}">
<meta name="twitter:title" content="{{ $title }} - {{setting('site.title')}}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ asset($image) }}">
<meta name="DC.title" content="{{ $title }} - {{setting('site.title')}}">
<meta name="DC.creator" content="{{setting('site.title')}}">
<meta name="DC.description" content="{{ $description }}">
<meta name="DC.publisher" content="{{setting('site.title')}}">
<meta name="DC.contributor" content="{{setting('site.title')}}">
<meta name="DC.date" content="{{ date('Y-m-d',strtotime($date))}}">
<meta name="DC.type" content="Text">
<meta name="DC.format" content="text/html">
<meta name="DC.identifier" content="{{url()->current()}}">
<meta name="DC.language" content="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="DC.coverage" content="World">
<meta name="DC.rights" content="/policy">
<meta name="DC.rightsHolder" content="{{setting('site.title')}}">
<meta property="og:url"           content="{{url()->current()}}">
<meta property="og:type"          content="article">
<meta property="og:title"         content="{{ $title }} - {{setting('site.title')}}">
<meta property="og:description"   content="{{ $description }}">
<meta property="og:image"         content="{{ asset($image) }}">
