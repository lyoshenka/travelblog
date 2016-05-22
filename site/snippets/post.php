<article>
  <div class="date">
    <a href="<?php echo $post->url() ?>" title="<?php echo $post->date('F d, Y') ?>">
      <?php echo $post->date('d M') ?>
    </a>
  </div>

  <h2><?php echo $post->title()->html() ?></h2>

  <?php echo $post->text()->kirbytext() ?>

  <?php $maxHeight = c::get('autothumb.height') ?>
  <?php if ($post->hasImages()): ?>
    <div class="photoset cf" data-google-image-layout data-max-height="<?php echo $maxHeight?>" data-no-instant>
      <?php foreach($post->images()->sortBy('sort', 'asc') as $image): ?>
        <?php $dimensions = clone $image->dimensions(); $dimensions->fitHeight($maxHeight); ?>
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
             data-normal="<?php echo thumb($image, ['width' => $dimensions->width(), 'height' => $dimensions->height(), 'quality' => c::get('autothumb.quality')])->url() ?>"
             data-width="<?php echo $dimensions->width() ?>" 
             data-height="<?php echo $dimensions->height() ?>" 
             alt="<?php echo $image->caption() != "" ? $image->caption() : $image->name() ?>"
             title="<?php echo $image->caption() != "" ? $image->caption() : "" ?>"
             style="background:<?php echo $image->avgcolor() != '' ? $image->avgcolor() : '#ffffff' ?>;"
        />
      <?php endforeach ?>
    </div>
  <?php endif ?>
</article>
