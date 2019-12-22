@extends('layouts.app')

@section('head')
  @component('components.meta')

    @slot('title') ЗДО №5 @endslot
    @slot('description') @endslot
    @slot('image') @endslot
    @slot('date') @endslot

  @endcomponent
@endsection

@section('content')

  @include('layouts.partials.homepage.hello')

@endsection
