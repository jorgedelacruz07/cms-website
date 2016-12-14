@extends('layouts.main')

@section('content')

  <?php foreach ($images as $image): ?>
    <h2><?= $image->name ?></h2>
    <figure>
      <img src="image/<?= $image->id ?>" alt="">
    </figure>
  <?php endforeach; ?>

@endsection
