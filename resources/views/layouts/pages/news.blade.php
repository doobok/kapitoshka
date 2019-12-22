@extends('layouts.app')

@section('content')

<div class="section animated-row">
  <div class="section-inner">
    <div class="row justify-content-center">
      <div class="col-md-8 wide-col-laptop">
      <div class="title-block animate" data-animate="fadeInUp">
        <h1 class="top-margin">Новини нашого садочку</h1>
      </div>

        <news-article></news-article>

      </div>
    </div>
  </div>
</div>


@endsection
