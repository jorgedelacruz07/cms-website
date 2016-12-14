@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }}</div>
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
</div>

<!--  -->
<div class="uk-container uk-container-center">
  <div class="uk-grid">
    <div class="uk-width-1-1">
      {{ Auth::user()->name }}
    </div>
  </div>
  <div class="uk-grid">
    <div class="uk-width-1-3">
      Perfil
    </div>
    <div class="uk-width-1-3">
      Profile
    </div>
    <div class="uk-width-1-3">
      User
    </div>
  </div>
</div>

<br>
<br>
<br>
<br>

<div class="uk-container">
  <div class="uk-grid">
    <a href="/website">Ir a website</a>
  </div>
</div>
@endsection
