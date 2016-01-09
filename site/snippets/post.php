<article>
  <div class="date">
    <a href="<?php echo getPostUrl($post) ?>" title="<?php echo $post->date('F d, Y') ?>">
      <?php echo $post->date('d M') ?>
    </a>
  </div>

  <h2><?php echo $post->title()->html() ?></h2>

  <?php echo $post->text()->kirbytext() ?>

  <?php if ($post->hasImages()): ?>
    <div class="photoset cf" data-layout="<?php echo getPhotosetLayout($post->images()->count(), $post->imagelayout()) ?>">
      <?php foreach($post->images()->sortBy('sort', 'asc') as $image): ?>
      <?php $dimensions = clone $image->dimensions(); $dimensions->fitWidth(c::get('autothumb.width')); ?>
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
             data-src="<?php echo thumb($image, ['width' => $dimensions->width(), 'height' => $dimensions->height(), 'quality' => c::get('autothumb.quality')])->url() ?>"
             data-highres="<?php echo $image->url() ?>"
             width="<?php echo $dimensions->width() ?>" 
             height="<?php echo $dimensions->height() ?>" 
             alt="<?php echo $image->caption() != "" ? $image->caption() : $image->name() ?>"
             title="<?php echo $image->caption() != "" ? $image->caption() : "" ?>"
             style="background:<?php echo $image->avgcolor() != '' ? $image->avgcolor() : '#ffffff' ?>;"
        />
      <?php endforeach ?>
    </div>
  <?php endif ?>
</article>
