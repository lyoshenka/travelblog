<?php snippet( 'header') ?>

<div id="posts">
  <?php foreach($posts as $post): ?>
    <?php snippet('post', ['post' => $post]) ?>
  <?php endforeach ?>
</div>

<?php snippet('nav-pagination') ?>

<?php /* snippet('archives', array('dates'      => true,
                                'authors'    => true,
                                'tags'       => true,
                                'categories' => true)) */ ?>

<?php snippet( 'footer') ?>
