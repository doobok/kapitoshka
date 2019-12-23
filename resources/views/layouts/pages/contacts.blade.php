@extends('layouts.app')

@section('head')
  @component('components.meta')

    @slot('title') Контакти @endslot
    @slot('description') @endslot
    @slot('image')  @endslot
    @slot('date')  @endslot

  @endcomponent
@endsection

@section('heading')
  @component('components.heading')
    @slot('title') Контакти @endslot
  @endcomponent
@endsection

@section('content')

<div data-uk-scrollspy="target: > .animate; cls: uk-animation-slide-bottom-small uk-invisible; delay: 300">

  <div class="news-article uk-container-small uk-margin-small-bottom animate uk-invisible">
    <span><i class="fas fa-map-marker-alt uk-margin-small-right uk-text-lead"></i>08292, Київська обл., м.Буча, б-р Б. Хмельницького, 8</span>
  </div>

  <div class="news-article uk-container-small uk-margin-small-bottom animate uk-invisible">
    <span><i class="fas fa-phone-alt uk-margin-small-right uk-text-lead"></i> <span class="uk-text-large"><a href="tel:+380459740365">+38 (045) 97-40-365</a> </span> </span>
  </div>

  <div class="news-article uk-container-small uk-margin-small-bottom animate uk-invisible">
    <span><i class="far fa-envelope uk-margin-small-right uk-text-lead"></i> <span class="uk-text-uppercase"><a href="mailto:sadok_kapitoshka@ukr.net">sadok_kapitoshka@ukr.net</a> </span> </span>
  </div>

</div>

@endsection
