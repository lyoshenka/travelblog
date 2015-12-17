<?php snippet( 'header') ?>

<section id="search">

<?php if($query): ?>
  <h1><?php echo $page->resultTitle() ?> "<?php echo $query ?>"</h1>

    <section id="searchresults">
    <?php if($results != "" ): ?>

      <?php foreach($results as $result): ?>
        <article>

              <?php if($result->template() == 'post'): ?>
                <header>
                  <h1>
                    Post:
                    <a href="<?php echo getPostUrl($result) ?>">
                      <?php echo $result->title()->html() ?>
                    </a>
                  </h1>
                </header>

                <?php snippet('post-footer', array('post' => $result)) ?>

              <?php else: ?>
                <header>
                  <h1>
                    Page:
                    <a href="<?php echo $result->url() ?>">
                      <?php echo $result->title()->html() ?>
                    </a>
                  </h1>
                </header>
              <?php endif ?>


        </article>

      <?php endforeach ?>

  <?php else: ?>
    <?php echo $page->noposts()->kirbytext() ?>
  <?php endif ?>
  </section>
<?php else: ?>
 <h1><?php echo $page->title() ?></h1>
 <?php echo $page->nosearch()->kirbytext() ?>
<?php endif ?>

</section>

<?php snippet( 'footer') ?>
