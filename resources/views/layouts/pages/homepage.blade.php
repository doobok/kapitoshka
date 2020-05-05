@extends('layouts.app')

@section('head')
  @component('components.meta')

    @slot('title') Дошкільний навчальний заклад (ясла-садок) комбінованого типу №5 @endslot
    @slot('description') @endslot
    @slot('image') @endslot
    @slot('date') @endslot

  @endcomponent
@endsection

@section('content')

  @include('layouts.partials.homepage.hello')
  @include('layouts.partials.homepage.registration')
  @include('layouts.partials.homepage.follow-us')

@endsection
