@extends('layouts.app')

@section('content')

<?= $website->name ?>
<br><br>
<?= $website->url ?>

<div>
  <h3>Estos son todas las páginas de este sitio web</h3>
  <br>
  @include('pages.index')
  <br><br>
  <p>Para crear una página:</p>
  <a href="/website/<?= $website->id ?>/page/create">CREAR PÁGINA</a>
</div>

@stop
