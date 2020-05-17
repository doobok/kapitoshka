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

          {{-- Youtube --}}
          @isset($page->youtube)
            <div class="uk-card uk-card-small uk-card-primary uk-card-body uk-margin-medium-top">
              <iframe src="https://www.youtube.com/embed/{{$page->youtube}}" width="100%" height="400px" frameborder="0" uk-video="automute: true; autoplay: false"></iframe>
            </div>
            <div class="uk-text-right">
              <a href="https://youtu.be/{{$page->youtube}}" target="_blank" class="uk-button uk-button-default uk-button-small" style="opacity: 0.5;">Переглянути на Youtube</a>
            </div>
          @endisset

          {{-- Social share --}}
          @include('components.sh')

      </div>
  </div>
</div>

@endsection
