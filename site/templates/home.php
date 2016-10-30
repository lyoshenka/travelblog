<?php snippet('header') ?>

<div class="homepage">
  <?php foreach(page('trips')->children() as $trip): ?>
    <a class="trip-box" href="<?php echo $trip->url() ?>" 
       style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), 
                                url('<?php echo $trip->hasImages() ? thumb($trip->images()->first(), ['width' => 875])->url() : '' ?>')">
      <div class="trip-box-title">
        <?php echo $trip->title() ?>
      </div>
    </a> 
  <?php endforeach ?>
</div>


<?php snippet('footer') ?>
