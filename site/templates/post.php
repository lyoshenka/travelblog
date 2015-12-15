<?php snippet( 'header') ?>

<section id="post">

<article>
  <header>
    <h1>
      <a href="<?php echo getPostUrl($post) ?>">
        <?php echo $post->title()->html() ?>
      </a>
    </h1>
  </header>

  <?php snippet('post-footer', array('post'       => $post,
                                     'author'     => true,
                                     'avatar'     => true,
                                     'tags'       => true,
                                     'categories' => true)) ?>

  <?php echo getCoverImage($post) ?>

  <?php echo $post->text()->kirbytext() ?>

</article>

<?php echo snippet('nav-pager') ?>

</section>

<?php snippet('footer') ?>
