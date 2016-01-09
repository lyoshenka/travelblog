<?php snippet('header-with-nav') ?>

<h1><?php echo $page->title() ?></h1>

<?php if($posts->count()): ?>
  <div id="posts">
    <?php foreach($posts as $post): ?>
      <?php snippet('post', ['post' => $post]) ?>
    <?php endforeach ?>
  </div>
<?php else: ?>
  Nothing here yet
<?php endif ?>

<?php snippet('nav-pagination') ?>

<?php snippet('footer') ?>
