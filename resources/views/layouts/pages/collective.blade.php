@extends('layouts.app')

@section('head')
  @component('components.meta')

    @slot('title') Наш колектив @endslot
    @slot('description') @endslot
    @slot('image') @endslot
    @slot('date') @endslot

  @endcomponent
@endsection

@section('heading')
  @component('components.heading')
    @slot('title') Наш колектив @endslot
  @endcomponent
@endsection

@section('content')

  <div class="uk-container-small" data-uk-scrollspy="target: > .animate; cls: uk-animation-slide-bottom-small uk-invisible; delay: 200">
    <div class="animate uk-invisible uk-margin-medium-bottom">

      @foreach ($persons as $person)

      <div class="uk-card uk-grid-collapse uk-child-width-1-2@s uk-margin news-article" uk-grid>
          <div class="uk-card-media-left uk-cover-container article-image">
              <img src="{{ Voyager::image($person->photo) }}" uk-cover>
              <canvas width="600" height="600"></canvas>
          </div>
          <div>
              <div class="uk-card-body">
                  <h4>{{$person->position}}</h4>
                  <h2>{{$person->name}}</h2>
                  <p class="uk-h4">Освіта: {{$person->education}}</p>
                  <p class="uk-h5 uk-margin-remove-top">Кваліфікаційна категорія: {{$person->category}}</p>
                  @isset($person->rank)
                  <p class="uk-h5 uk-margin-remove-top">Звання: {{$person->rank}}</p>
                  @endisset
                  <a class="uk-button uk-button-default uk-width-1-1 uk-margin-medium-top" href="{{route('portfolio', $person->id)}}">Портфоліо</a>
              </div>
          </div>
      </div>

    @endforeach



    </div>
  </div>

@endsection
