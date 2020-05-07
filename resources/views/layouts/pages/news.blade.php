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
  @component('components.heading')
    @slot('title') Новини нашого садочку @endslot
  @endcomponent
@endsection

@section('content')

  <div class="uk-container-small" data-uk-scrollspy="target: > .animate; cls: uk-animation-slide-bottom-small uk-invisible; delay: 200">
    <div class="animate uk-invisible">

      <news-article tag="{{request('tag')}}"></news-article>

    </div>
  </div>

@endsection
