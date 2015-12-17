<?php snippet( 'header') ?>

<?php foreach($page->children() as $trip): ?>
  <div>
    <h2><?php echo $trip->title() ?></h2>
    <div><?php echo $trip->description() ?></div>
  </div>
<?php endforeach ?>

<?php snippet( 'footer') ?>
