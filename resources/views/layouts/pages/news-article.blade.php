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
  <div class="uk-text-center uk-section-small">
    <h1 class="uk-heading-line uk-text-center"><span>{{$page->title}}</span></h1>
  </div>
@endsection

@section('content')

  <div class="news-article uk-container-small">
      <img class="article-image" src="{{ Voyager::image($page->image) }}">
      <div class="article-text uk-margin-top">

          {!!$page->body!!}
          
          {{-- Social share --}}
                @include('components.sh')

          <p class="article-info"><i class="far fa-calendar-alt"></i> {{substr($page->created_at, 0, 10)}}</p>

      </div>
  </div>


@endsection
