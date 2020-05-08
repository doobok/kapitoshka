@extends('layouts.app')

@section('head')
  @component('components.meta')

    @slot('title') 404 - Сторінку не знайдено @endslot
    @slot('description') @endslot
    @slot('image') @endslot
    @slot('date') @endslot

  @endcomponent
@endsection

@section('heading')
  @component('components.heading')
    @slot('title') 404 @endslot
  @endcomponent
@endsection

@section('content')

<div data-uk-scrollspy="target: > .animate; cls: uk-animation-slide-bottom-small uk-invisible; delay: 300">
  <div class="news-article uk-container-small animate uk-invisible uk-margin-medium-bottom uk-text-center">
      <img class="article-image uk-margin-bottom" src="/images/404.png">
      <div class="article-text">
        <p class="uk-h3 ">Сторінку не знайдено</p>
        <p>Сторінка, ймовірніше за усе, була переміщена, або видалена. <br>Скористайтесь меню, або перейдіть на головну, щоб розпочати з початку.</p>
        <a class="uk-button uk-button-default uk-align-center" href="{{route('mainpage')}}">На головну</a>



      </div>
  </div>
</div>

@endsection
