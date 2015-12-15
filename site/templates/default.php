<?php snippet('header') ?>

<header>
  <h1><?php echo $page->title()->html() ?></h1>
</header>

<?php echo $page->text()->kirbytext() ?>

<?php snippet('footer') ?>
