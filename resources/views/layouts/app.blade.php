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

              <menu-main></menu-main>

              <a class="uk-navbar-toggle uk-hidden@s" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a>


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
    <div id="offcanvas-nav" data-uk-offcanvas="mode: push; overlay: false">
      <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
        <button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>

        <menu-sidebar></menu-sidebar>

      </div>
    </div>
    <!-- /OFFCANVAS -->
  </div>
    <script src="{{ mix('js/app.js') }}"></script>

  </body>

</html>
