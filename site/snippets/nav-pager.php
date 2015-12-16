<nav id="pager">
  <ul>

    <?php if($post->hasNextVisible()): ?>
      <li id="next-post">
        next:
        <a href="<?php echo $post->nextVisible()->url() ?>">
          <?php echo $post->nextVisible()->title()->html() ?>
        </a>
      </li>
    <?php endif ?>

    <?php if($post->hasPrevVisible()): ?>
      <li class="previous-post">
        previous:
        <a href="<?php echo $post->prevVisible()->url() ?>">
          <?php echo $post->prevVisible()->title()->html() ?>
        </a>
      </li>
    <?php endif ?>

  </ul>
</nav>
