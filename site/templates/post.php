<?php snippet( 'header') ?>

<div id="posts">
  <?php snippet('post', ['post' => $post]) ?>
</div>

<?php snippet('nav-pager') ?>

<?php snippet('footer') ?>
