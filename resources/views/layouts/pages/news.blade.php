@extends('layouts.app')

@section('head')
  @component('components.meta')

    @slot('title') Новини нашого садочку @endslot
    @slot('description') @endslot
    @slot('image') @endslot
    @slot('date') @endslot

  @endcomponent
@endsection

@section('heading')
  <div class="uk-text-center uk-section-small">
    <h1 class="uk-heading-line uk-text-center"><span>Новини нашого садочку</span></h1>
  </div>
@endsection

@section('content')

  <div class="uk-container-small">

    <news-article></news-article>

  </div>

@endsection
