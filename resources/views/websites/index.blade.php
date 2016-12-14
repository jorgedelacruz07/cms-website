@extends('layouts.app')

@section('content')

  <h2 class="uk-text-bold">LISTA DE SITIOS WEB</h2>
  <?php foreach ($websites as $website): ?>
    <div>
      <h2>
        <a href="/website/<?= $website->id ?>"><?= $website->name ?></a>
      </h2>
      <h4>
        <a href="<?= $website->url ?>" target="_blank">(Visitar página)</a>
      </h4>
    </div>
  <?php endforeach; ?>

  <br>
  <br>
  <br>
  <h3>Para crear una página web</h3>
  <a href="/website/create">CREAR PÁGINA</a>

@stop
