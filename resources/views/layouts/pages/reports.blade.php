@extends('layouts.app')

@section('head')
  @component('components.meta')

    @slot('title') @lang('site.' . $category) @endslot
    @slot('description') @endslot
    @slot('image') @endslot
    @slot('date') @endslot

  @endcomponent
@endsection

@section('heading')
  @component('components.heading')
    @slot('title') @lang('site.' . $category) @endslot
  @endcomponent
@endsection

@section('content')

  <div class="uk-container-small" data-uk-scrollspy="target: > .animate; cls: uk-animation-slide-bottom-small uk-invisible; delay: 200">
    <div class="news-article uk-container-small animate uk-invisible">
        <img class="article-image uk-margin-bottom" src="/images/report.png">
        <div class="article-text">
          <p class="uk-text-italic">Для завантаження бажаного документа натисніть на його назву</p>

          <ul class="uk-list uk-list-large uk-list-striped">
            @foreach ($reports as $report)
              <li><i class="fas fa-eye uk-margin-small-right"></i> 

                <?php $file = (json_decode($report->file))[0]->download_link; ?>
                <a href="{{ Voyager::image( $file ) }}" target="_blank">{{$report->title}}</a>

              </li>
            @endforeach
          </ul>


        </div>
    </div>
  </div>

@endsection
