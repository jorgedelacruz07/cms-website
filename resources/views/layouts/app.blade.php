<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link rel="stylesheet" href="/css/uikit.min.css">
  <link rel="stylesheet" href="/css/components/sticky.min.css">
  <link rel="stylesheet" href="/css/master.css">

  <!-- Scripts -->
  <script src="/js/jquery.min.js"></script>

  <script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
  </script>
</head>
<body>
  <a href="#offcanvas" class="uk-visible-small" data-uk-offcanvas>Barra lateral</a>
  <div id="offcanvas" class="uk-offcanvas">
    <div class="uk-offcanvas-bar">
      <div class="uk-text-contrast">
        @include('layouts.panel')
      </div>
    </div>
  </div>
  <div class="uk-grid">
    <div class="uk-width-small-1-5 uk-hidden-small">
      <div class="uk-panel uk-panel-box uk-height-viewport" data-uk-sticky="{media: 768}">
        @include('layouts.panel')
      </div>
    </div>
    <div class="uk-width-small-4-5">
      <div class="uk-container uk-container-center uk-margin-top">
        @yield('content')
      </div>
    </div>
  </div>
  <script src="/js/uikit.min.js"></script>
  <script src="/js/components/sticky.min.js"></script>
</body>
</html>
