<!DOCTYPE html>
<html lang="uk-UA">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head')

    <link rel="apple-touch-icon" sizes="57x57" href="/images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/images/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

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

              <a class="uk-navbar-item uk-logo" href="/">
                <img data-src="/images/logo.png" width="200" height="" alt="Капітошка" uk-img>
              </a>
            </div>
            <div class="uk-navbar-right">

              <menu-main></menu-main>

              <a class="uk-navbar-toggle uk-hidden@l" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a>


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
        <span class="uk-text-small uk-text-center">© 2019 - {{date("Y")}} | <a href="/policy" title="Ознафомитись із політикою">Політика конфіденційності</a> | Розробка і підтримка <a href="http://some.site" title="Розробник" target="_blank" data-uk-tooltip><i class="fas fa-layer-group"></i></a></span>
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
