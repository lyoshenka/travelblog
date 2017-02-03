<article>
  <div class="date">
    <a href="<?php echo $post->url() ?>" title="<?php echo $post->date('F d, Y') ?>">
      <?php echo $post->date('d M') ?>
    </a>
  </div>

  <h2><?php echo $post->title()->html() ?></h2>

  <?php echo $post->text()->kirbytext() ?>

  <?php $maxHeight = c::get('autothumb.height') ?>
  <?php $maxWidth = 700 ?>
  <?php if ($post->hasImages()): ?>
    <?php $autoLayout = !$post->imagelayout()->value() ?>
    <?php $layoutProp = $autoLayout ?
      ('data-google-image-layout data-max-height="' . $maxHeight . '"') :
      ('data-layout="' . getPhotosetLayout($post->images()->count(), $post->imagelayout()) . '"')
    ?>
    <div class="photoset cf" data-no-instant <?php echo $layoutProp ?> >
      <?php foreach($post->images()->sortBy('sort', 'asc') as $image): ?>
        <?php $imgAttributes = [
          'src' => "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7",
          'data-full' => $image->url(),
          'data-full-size' => $image->width().'x'.$image->height(),
          'alt' => $image->caption() != "" ? $image->caption() : $image->name(),
          'title' => $image->caption() != "" ? $image->caption() : "",
          'style' => 'background:' . ($image->avgcolor() != '' ? $image->avgcolor() : '#ffffff') . ';',
        ] ?>
        <?php if ($autoLayout): ?>
          <?php $dimensions = clone $image->dimensions(); $dimensions->fitHeight($maxHeight); ?>
          <?php $imgAttributes = array_merge($imgAttributes, [
            'data-normal' => thumb($image, ['width' => $dimensions->width(), 'height' => $dimensions->height(), 'quality' => 70])->url(),
            'data-width' => $dimensions->width(),
            'data-height' => $dimensions->height(),
          ]) ?>
        <?php else: ?>
          <?php $dimensions = clone $image->dimensions(); $dimensions->fitWidth($maxWidth); ?>
          <?php $imgAttributes = array_merge($imgAttributes, [
            'src' => thumb($image, ['width' => $dimensions->width(), 'height' => $dimensions->height(), 'quality' => 80])->url(),
            'data-highres' => $image->url(),
            'width' => $dimensions->width(),
            'height' => $dimensions->height(),
          ]) ?>
        <?php endif ?>

        <img <?php foreach($imgAttributes as $k => $v) { echo $k.'="'.$v.'" '; } ?> />
      <?php endforeach ?>
    </div>
  <?php endif ?>
</article>
