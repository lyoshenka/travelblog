<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->text()) ?>

    <?php $showGallery = $page->hasImages() && in_array($page->hidegallery()->value, ['false','']) ?>
    <?php if ($showGallery): ?>
      <ul class="gallery unstyled">
        <?php foreach($page->images() as $image): ?>
          <li>
            <a data-no-instant href="<?php echo $image->url() ?>"><img src="<?php echo $image->url() ?>" alt="<?php echo $image->name() ?>"></a>
          </li>
        <?php endforeach ?>
      </ul>
    <?php endif ?>

    <?php $showFilelist = $page->hasFiles() && in_array($page->hidefilelist()->value, ['false','']) && (!$showGallery || $page->files()->count() > $page->images()->count()) ?>
    <?php if ($showFilelist): ?>
      <h2>Files</h2>
      <ul class="filelist">
        <?php foreach($page->files() as $file): ?>
          <?php if ($file->type() != 'content' && (!$showGallery || $file->type() != 'image')): ?>
            <li>
              <a data-no-instant href="<?php echo $file->url() ?>"><?php echo $file->filename() ?></a>
            </li>
          <?php endif ?>
        <?php endforeach ?>
      </ul>
    <?php endif ?>

  </article>

</section>

<?php snippet('footer') ?>
