<?php snippet( 'header') ?>

<?php foreach($posts as $post): ?>
  <?php echo getPostHtml($post) ?>
<?php endforeach ?>

<?php // snippet('nav-pagination') ?>

<?php /* snippet('archives', array('dates'      => true,
                                'authors'    => true,
                                'tags'       => true,
                                'categories' => true)) */ ?>

<?php snippet( 'footer') ?>
