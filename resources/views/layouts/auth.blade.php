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

  <!-- Scripts -->
  <script src="/js/jquery.min.js"></script>

  <script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
  </script>

</head>
<body>
  <div class="uk-container uk-container-center">
    <div class="uk-grid uk-margin-large-top">
      <div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-3 uk-container-center uk-text-center">
        @yield('auth')
      </div>
    </div>
  </div>

  <script src="/js/uikit.min.js"></script>
</body>
</html>
