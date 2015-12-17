<?php snippet( 'header') ?>

<ol id="posts">
  <?php echo getPostHtml($post) // code in site/plugins/helpers.php ?>
</ol>

<?php snippet('nav-pager') ?>

<?php snippet('footer') ?>
