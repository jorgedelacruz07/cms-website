@extends('layouts.app')

@section('content')

<div class="uk-text-center uk-text-bold uk-h1 uk-text-uppercase">
  Lista de Websites
</div>

<div class="uk-grid uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-small-1-2 uk-margin-top" data-uk-grid-margin>
  <?php foreach ($websites as $website): ?>
    <div>
      <div class="uk-panel uk-panel-box uk-panel-box-primary">
        <div class="uk-panel-badge uk-badge"><?= $num_websites++ ?></div>
        <h3 class="uk-panel-title"><a href="/website/<?= $website->id ?>"><?= $website->name ?></a></h3>
        <p>URL: <a href="<?= $website->url ?>" target="_blank"><?= $website->url ?></a></p>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<hr class="uk-grid-divider">
<a class="uk-h2 uk-button uk-button-primary" href="#createWebsite" data-uk-modal="">CREAR WEBSITE</a>

<div class="uk-margin-top">
  <div id="createWebsite" class="uk-modal">
    <div class="uk-modal-dialog">
      <a href="" class="uk-modal-close uk-close"></a>
      <p>
        <div class="uk-container uk-container-center">
          <h3 class="uk-text-center">CREAR SITIO WEB</h3>
          {!! Form::open(['action' => 'WebsitesController@store', 'method' => 'post', 'id' => 'form-contacto', 'class' => 'uk-form uk-position-relative uk-margin-large-top']) !!}
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
