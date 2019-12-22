<!DOCTYPE html>
<html lang="uk-UA">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head')

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <link href="{{ mix('css/app.css')}}" rel="stylesheet">

  </head>

  <body class="uk-light wrap uk-background-norepeat uk-background-cover uk-background-center-center uk-background-secondary">

    <video autoplay muted loop id="myVideo">
      <source src="/images/video-bg.mp4" type="video/mp4">
    </video>
    <div class="mask"></div>

    <div id="app">

      <!-- NAV -->
      <div class="backgrount-transparent" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky;">
          <nav class="uk-navbar-container uk-navbar-transparent uk-margin-remove" uk-navbar style="position: relative; z-index: 980;">
            <div class="uk-navbar-left">
              <a class="uk-navbar-item uk-logo" href="/">Капітошка</a>
            </div>
            <div class="uk-navbar-right">
              <ul class="uk-navbar-nav uk-navbar-nav-primary">
                <li class="uk-visible@s"><a href="/"><span class="uk-button-text uk-button-small uk-margin-small"><i class="fas fa-home"></i></span></a></li>
                <li class="uk-visible@s"><a href="/news"><span class="uk-button-text uk-text-capitalize uk-text-bold uk-margin-small">Cторінки</span></a></li>
                <li class="uk-visible@s"><a href="#"><span class="uk-button-text uk-text-capitalize uk-text-bold uk-margin-small">Новини</span></a></li>
                <li class="uk-visible@s"><a href="{{route('contacts')}}"><span class="uk-button-text uk-button-small uk-margin-small"><i class="fas fa-id-card-alt"></i></span></a></li>
                <li class="uk-hidden@s"><a class="uk-navbar-toggle" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a></li>
              </ul>
            </div>
          </nav>
      </div>

    <div class="uk-flex uk-flex-center uk-flex-middle uk-height-viewport uk-position-z-index uk-position-relative" data-uk-height-viewport="min-height: 400">
      <div class="uk-section uk-padding-remove-top">

          @yield('heading')

        <div class="uk-container">


          @yield('content')

        </div>
      </div>

      <div class="uk-position-bottom-center uk-position-small">
        <span class="uk-text-small uk-text-center">© 2019 | <a href="https://github.com/zzseba78/Kick-Off" title="Created by KickOff">Created by KickOff</a> | Built with <a href="http://getuikit.com" title="Visit UIkit 3 site" target="_blank" data-uk-tooltip><span data-uk-icon="uikit"></span></a></span>
      </div>
      <!-- /FOOT -->
    </div>
    <!-- OFFCANVAS -->
    <div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: false">
      <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
        <button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
        <ul class="uk-nav uk-nav-default">
          <li class="uk-active"><a href="#">Active</a></li>
          <li class="uk-parent">
            <a href="#">Parent</a>
            <ul class="uk-nav-sub">
              <li><a href="#">Sub item</a></li>
              <li><a href="#">Sub item</a></li>
            </ul>
          </li>
          <li class="uk-nav-header">Header</li>
          <li><a href="#js-options"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: table"></span> Item</a></li>
          <li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: thumbnails"></span> Item</a></li>
          <li class="uk-nav-divider"></li>
          <li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: trash"></span> Item</a></li>
        </ul>
        <h3>Title</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
    <!-- /OFFCANVAS -->
  </div>
    <script src="{{ mix('js/app.js') }}"></script>

  </body>

</html>
