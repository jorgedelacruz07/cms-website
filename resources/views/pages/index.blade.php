<?php foreach ($pages as $page): ?>
  <div>
    <h4><strong>Página "<?= $page->name ?>"</strong></h4>
    URL: <?= $page->url ?>
    <br>
    JSON: <?= $page->json ?>
    <br>
    <a href="/website/<?= $website->id ?>/page/<?= $page->id ?>">Ver página</a>
    <br>
    <br>
  </div>
<?php endforeach; ?>
