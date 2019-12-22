@extends('layouts.app')

@section('content')

  <div class="section animated-row">
                <div class="section-inner">
                    <div class="row justify-content-center">
                        <div class="col-md-8 wide-col-laptop">
                            <div class="title-block animate" data-animate="fadeInUp">
                                <h1 class="top-margin">{{$page->title}}</h1>
                            </div>
                            <div class="news-article animate" data-animate="fadeInUp">
                                <img class="article-image" src="{{ Voyager::image($page->image) }}">
                                <div class="article-text top-margin">
                                    {!!$page->body!!}
                                    <p class="article-info"><i class="far fa-calendar-alt"></i> {{substr($page->created_at, 0, 10)}}</p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

@endsection
