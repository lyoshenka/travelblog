<?php snippet( 'header') ?>

<ol id="posts">
  <?php foreach($posts as $post): ?>
    <?php echo getPostHtml($post) ?>
  <?php endforeach ?>
</ol>

<?php snippet('nav-pagination') ?>

<?php /* snippet('archives', array('dates'      => true,
                                'authors'    => true,
                                'tags'       => true,
                                'categories' => true)) */ ?>

<?php snippet( 'footer') ?>
