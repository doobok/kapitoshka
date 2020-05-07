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
      <img class="article-image" src="{{ Voyager::image($page->image) }}">
      <div class="article-text uk-margin-top">

          {!!$page->body!!}

          @if(count($tags) > 0)
            <span class="uk-margin-small-right">Теги:</span>
            @foreach ($tags as $tag)
              <span><a class="uk-button uk-button-small uk-button-default" href="{{route('news')}}?tag={{$tag->slug}}">{{$tag->title}}</a></span>
            @endforeach
          @endif

          {{-- Social share --}}
                @include('components.sh')

          <p class="article-info"><i class="far fa-calendar-alt"></i> {{substr($page->created_at, 0, 10)}}</p>

      </div>
  </div>
</div>

@endsection
