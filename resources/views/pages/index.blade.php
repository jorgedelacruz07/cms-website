
<ul class="uk-tab" data-uk-tab="{swiping: false, connect:'#my-id<?= $website->id ?>'}">
  <?php foreach ($pages as $page): ?>
    <?php if ($num_pages==1): ?>
      <li class="uk-active"><a href="#<?= $page->id ?>"><?= $page->name ?></a></li>
      <?php $num_pages++ ?>
    <?php else: ?>
      <li><a href=""><?= $page->name ?></a></li>
    <?php endif; ?>
  <?php endforeach; ?>
</ul>

<ul id="my-id<?= $website->id ?>" class="uk-switcher uk-margin">
  <?php foreach ($pages as $page): ?>
    <li id="<?= $page->id ?>">
      @include('elements.index', array('page_id'=>$page->id, 'elements' => $page->element ))
    </li>
  <?php endforeach; ?>
</ul>
