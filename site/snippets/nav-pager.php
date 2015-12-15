<nav id="pager">
  <ul>

    <?php if($post->hasNextVisible()): ?>
      <li id="next-post">
        <a href="<?php echo $post->nextVisible()->url() ?>">
          next post:<?php echo $post->nextVisible()->title()->html() ?>
        </a>
      </li>
    <?php endif ?>

    <?php if($post->hasPrevVisible()): ?>
      <li class="previous-post">
        <a href="<?php echo $post->prevVisible()->url() ?>">
          previous post: <?php echo $post->prevVisible()->title()->html() ?>
        </a>
      </li>
    <?php endif ?>

  </ul>
</nav>
