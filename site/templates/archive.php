<?php snippet( 'header') ?>

<section id="blog">

<h1>Archive<? e(isset($archiveTitle), $archiveTitle) ?></h1>

<?php if($posts->count()): ?>

<?php
$tmpDate = getdate(0);
foreach($posts as $post): ?>
  <?php if(!isset($year)): ?>
    <?php
      $date = getdate($post->date());
      if ($tmpDate['year'] != $date['year']): ?>
        <header class="archive-year">
          <h2>
            <?php echo $date['year'] ?>
          </h2>
        </header>
    <?php endif ?>
  <?php endif ?>

  <article>
    <header>
      <h4>
        <a href="<?php echo getPostUrl($post) ?>">
          <?php echo $post->title()->html() ?>
        </a>
      </h4>
    </header>

    <?php snippet('post-footer', array('post' => $post)) ?>

  </article>
<?php
if(!isset($year)) $tmpDate = $date;
endforeach ?>


<?php else: ?>

  <?php echo $page->noposts()->kirbytext() ?>

<?php endif ?>

<?php snippet('nav-pagination') ?>

</section>

<?php snippet('archives', array('dates'      => true,
                                'authors'    => true,
                                'tags'       => true,
                                'categories' => true)) ?>

<?php snippet( 'footer') ?>
