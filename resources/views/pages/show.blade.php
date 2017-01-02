@extends('layouts.app')

@section('content')

<h3>ESTAMOS VIENDO ESTA PÁGINA <strong>"<?= $page->name ?>"</strong></h3>
<h4><?= $page->url  ?></h4>

@include('elements.index')

<p>Para crear un elemento:</p>
<a href="/website/<?= $website->id ?>/page/<?= $page->id ?>/element/text/create">CREAR TEXTO</a>
<br><br>
<a href="/website/<?= $website->id ?>/page/<?= $page->id ?>/element/image/create">CREAR IMAGEN</a>



@stop
