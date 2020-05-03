@extends('layouts.app')

@section('head')
  @component('components.meta')

    @slot('title') {{$page->position}} - {{$page->name}} @endslot
    @slot('description') @endslot
    @slot('image') {{ Voyager::image($page->photo) }} @endslot
    @slot('date') {{substr($page->created_at, 0, 10)}} @endslot

  @endcomponent
@endsection

@section('heading')
  @component('components.heading')
    @slot('title') {{$page->position}}@endslot
  @endcomponent
@endsection

@section('content')

<div data-uk-scrollspy="target: > .animate; cls: uk-animation-slide-bottom-small uk-invisible; delay: 300">
  <div class="news-article uk-container-small animate uk-invisible uk-margin-large-bottom">

    <div class="uk-child-width-expand@s uk-text-center" uk-grid>
        <div>
            <img class="article-image" src="{{ Voyager::image($page->photo) }}">
        </div>
        <div>
          <p class="uk-h1">{{$page->name}}</p>
          <p class="uk-h2">Освіта: {{$page->education}}</p>
          @isset($page->stand)
            <p class="uk-h3">Педагогічний стаж: {{$stand}} р.</p>
          @endisset
          @isset($page->category)
            <p class="uk-h4 uk-margin-remove-top">Кваліфікаційна категорія: «{{$page->category}}»</p>
          @endisset
          @isset($page->rank)
            <p class="uk-h4 uk-margin-remove-top">Звання: «{{$page->rank}}»</p>
          @endisset
          @isset($page->credo)
            <p class="uk-h4 uk-margin-remove-top">Кредо: <span class="uk-text-italic">{{$page->credo}}</span></p>
          @endisset
        </div>
    </div>
    <div class="article-text uk-margin-top">

        {!!$page->text!!}

    </div>
  </div>
</div>

@endsection
