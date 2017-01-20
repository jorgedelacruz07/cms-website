@extends('layouts.app')

@section('content')

<a class="uk-h2 uk-button uk-button-primary" href="#createModalPage" data-uk-modal="">CREAR PÁGINA</a>

<br><br>
@include('pages.index')

<div class="uk-margin-top">
  <div id="createModalPage" class="uk-modal">
    <div class="uk-modal-dialog">
      <a href="" class="uk-modal-close uk-close"></a>
      <p>
        <div class="uk-container uk-container-center">
          <h3 class="uk-text-center">CREAR PÁGINA</h3>
          {!! Form::open(['action' => ['PagesController@store', $website->id], 'method' => 'post', 'id' => 'form-contacto', 'class' => 'uk-form uk-position-relative uk-margin-large-top']) !!}
            {!! Form::token(); !!}
            <div class="uk-form-row">
              <input name="name" type="text" class="uk-width-1-1 uk-form-large" placeholder="Nombre" required="">
            </div>
            <div class="uk-form-row">
              <input name="url" type="url" class="uk-width-1-1 uk-form-large" placeholder="URL" required="">
            </div>
            <div class="uk-form-row uk-text-center">
              <button class="uk-button uk-button-primary">ENVIAR</button>
            </div>
            <div class="form-loader uk-hidden bg-white-transparent uk-position-cover uk-flex uk-flex-center uk-flex-middle">
              <div class="uk-text-muted uk-text-center uk-heading-large">
                <i class="uk-icon-spinner uk-icon-spin"></i>
              </div>
            </div>
          {!! Form::close() !!}
        </div>
      </p>
    </div>
  </div>
</div>



@stop
