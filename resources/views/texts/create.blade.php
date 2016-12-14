@extends('layouts.app')

@section('content')

<div class="uk-container uk-container-center">
  <div class="uk-width-small-1-2 uk-container-center">
    <h3 class="uk-h2">CREAR TEXTO DE PÁGINA WEB</h3>
    {!! Form::open(['action' => ['TextsController@store', $website->id, $page->id], 'method' => 'post', 'id' => 'form-contacto', 'class' => 'uk-form uk-position-relative']) !!}
      {!! Form::token(); !!}
      <div class="uk-form-row">
        <input name="name" type="text" class="uk-width-1-1 uk-form-large" placeholder="Nombre del elemento" required="">
      </div>
      <div class="uk-form-row">
        <input name="title" type="text" class="uk-width-1-1 uk-form-large" placeholder="Título" required="">
      </div>
      <div class="uk-form-row">
        <textarea name="content" class="uk-width-1-1 uk-form-large" rows="3" placeholder="Escribir texto" cols="40" required=""></textarea>
      </div>
      <div class="uk-form-row uk-text-center">
        <button class="uk-button uk-button-large">ENVIAR</button>
      </div>
      <div class="form-loader uk-hidden bg-white-transparent uk-position-cover uk-flex uk-flex-center uk-flex-middle">
        <div class="uk-text-muted uk-text-center uk-heading-large">
          <i class="uk-icon-spinner uk-icon-spin"></i>
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>

@stop
