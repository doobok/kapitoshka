@extends('layouts.app')

@section('head')
  @component('components.meta')

    @slot('title') {{$page->title}} @endslot
    @slot('description') @endslot
    @slot('image') {{ Voyager::image($page->image) }} @endslot
    @slot('date') {{substr($page->created_at, 0, 10)}} @endslot

  @endcomponent
@endsection

@section('heading')
  @component('components.heading')
    @slot('title') {{$page->title}} @endslot
  @endcomponent
@endsection

@section('content')

<div data-uk-scrollspy="target: > .animate; cls: uk-animation-slide-bottom-small uk-invisible; delay: 300">
  <div class="news-article uk-container-small animate uk-invisible">
    @isset($page->image)
      <img class="article-image uk-margin-bottom" src="{{ Voyager::image($page->image) }}">      
    @endisset
      <div class="article-text">

          {!!$page->body!!}

          {{-- Social share --}}
                @include('components.sh')

      </div>
  </div>
</div>

@endsection
