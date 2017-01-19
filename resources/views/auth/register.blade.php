@extends('layouts.auth')

@section('auth')

<h1 class="uk-text-center">REGISTRAR</h1>
<img class="uk-margin-bottom" width="140" height="120" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjQsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkViZW5lXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTQwcHgiIGhlaWdodD0iMTIwcHgiIHZpZXdCb3g9Ii0yOS41IDI3NS41IDE0MCAxMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTI5LjUgMjc1LjUgMTQwIDEyMCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8ZyBvcGFjaXR5PSIwLjciPg0KCTxwYXRoIGZpbGw9IiNEOEQ4RDgiIGQ9Ik0tNi4zMzMsMjk4LjY1NHY3My42OTFoOTMuNjY3di03My42OTFILTYuMzMzeiBNNzkuNzg4LDM2NC4zNTVIMS42NTZ2LTU3LjcwOWg3OC4xMzJWMzY0LjM1NXoiLz4NCgk8cG9seWdvbiBmaWxsPSIjRDhEOEQ4IiBwb2ludHM9IjUuODYsMzU4LjE0MSAyMS45NjIsMzQxLjIxNiAyNy45OTUsMzQzLjgyNyA0Ny4wMzIsMzIzLjU2MSA1NC41MjQsMzMyLjUyMyA1Ny45MDUsMzMwLjQ4IA0KCQk3Ni4yMDMsMzU4LjE0MSAJIi8+DQoJPGNpcmNsZSBmaWxsPSIjRDhEOEQ4IiBjeD0iMjQuNDYyIiBjeT0iMzIxLjMyMSIgcj0iNy4wMzQiLz4NCjwvZz4NCjwvc3ZnPg0K" alt="">
<form class="uk-panel uk-panel-box uk-form" role="form" method="POST" action="{{ url('/register') }}">
  {{ csrf_field() }}
  @if ($errors->has('name'))
  <div class="uk-alert uk-alert-danger" data-uk-alert>
    <a href="#" class="uk-alert-close uk-close"></a>
    <p>
      <strong>{{ $errors->first('name') }}</strong>
    </p>
  </div>
  @endif
  @if ($errors->has('email'))
  <div class="uk-alert uk-alert-danger" data-uk-alert>
    <a href="#" class="uk-alert-close uk-close"></a>
    <p>
      <strong>{{ $errors->first('email') }}</strong>
    </p>
  </div>
  @endif
  @if ($errors->has('password'))
  <div class="uk-alert uk-alert-danger" data-uk-alert>
    <a href="#" class="uk-alert-close uk-close"></a>
    <p>
      <strong>{{ $errors->first('password') }}</strong>
    </p>
  </div>
  @endif
  @if ($errors->has('password_confirmation'))
  <div class="uk-alert uk-alert-danger" data-uk-alert>
    <a href="#" class="uk-alert-close uk-close"></a>
    <p>
      <strong>{{ $errors->first('password_confirmation') }}</strong>
    </p>
  </div>
  @endif
  <div class="uk-form-row{{ $errors->has('name') ? ' has-error' : '' }}">
    <input id="name" class="uk-width-1-1 uk-form-large" type="text" name="name" placeholder="Nombre" value="{{ old('name') }}" required autofocus>
  </div>
  <div class="uk-form-row{{ $errors->has('email') ? ' has-error' : '' }}">
    <input id="email" class="uk-width-1-1 uk-form-large" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
  </div>
  <div class="uk-form-row{{ $errors->has('password') ? ' has-error' : '' }}">
    <input id="password" class="uk-width-1-1 uk-form-large" type="password" name="password" placeholder="Contraseña" required>
  </div>
  <div class="uk-form-row{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <input id="password-confirm" class="uk-width-1-1 uk-form-large" type="password" name="password_confirmation" placeholder="Repetir contraseña" required>
  </div>
  <div class="uk-form-row">
    <input type="submit" class="uk-width-1-1 uk-button uk-button-primary uk-button-large uk-text-contrast" value="Registrar">
  </div>
</form>

@endsection
