<?php snippet( 'header') ?>

<section id="posts">

<?php foreach($posts as $post): ?>
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
                                       'tags'       => true,
                                       'category'   => true)) ?>

    <?php echo getCoverImage($post) ?>

    <?php echo $post->text()->kirbytext() ?>

  </article>
<?php endforeach ?>

<?php snippet('nav-pagination') ?>

</section>

<?php snippet('archives', array('dates'      => true,
                                'authors'    => true,
                                'tags'       => true,
                                'categories' => true)) ?>

<?php snippet( 'footer') ?>
