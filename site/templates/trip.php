<?php snippet('header') ?>

<h1><?php echo $page->title() ?></h1>

<?php if($posts->count()): ?>
  <ol id="posts">
    <?php foreach($posts as $post): ?>
      <?php echo getPostHtml($post) ?>
    <?php endforeach ?>
  </ol>
<?php else: ?>
  Nothing here yet
<?php endif ?>

<?php snippet('nav-pagination') ?>

<?php snippet('footer') ?>
