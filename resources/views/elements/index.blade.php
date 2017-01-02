<?php foreach ($elements as $element): ?>
  <h2><?= $element->title ?></h2>
  <h4><?= $element->type ?></h4>
  <?php if (strcmp($element->type,"text") == 0): ?>
    
  <?php else: ?>
    
  <?php endif; ?>
  <br><br><br>
<?php endforeach; ?>

<?php
  // foreach ($elements as $element) {
  //   $element->title;
  //   $element->content;
  // }
 ?>
