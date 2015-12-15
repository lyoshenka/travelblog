<?php
if(!isset($class)) $class = false;
?>

<section id="dates" <?php if($class) echo 'class="' . $class . '"' ?>>
  <header>
    <h2>Dates:</h2>
  </header>
  <?php if($dates = getDatesArchive()): ?>
  <ul>
  <?php foreach ($dates as $year => $months): ?>
    <li>
      <a href="/<?php echo $year ?>">
        <?php echo $year ?>
      </a>
      <ul>
      <?php foreach ($months as $month => $number): ?>
        <?php $month = DateTime::createFromFormat('!m', $month) ?>
        <li>
          <a href="<?php echo $site->url()
                       . '/' . $year
                       . '/' . $month->format('m') ?>">
            <?php echo $month->format('F') ?> (<?php echo $number ?>)
          </a>
        </li>
      <?php endforeach ?>
      </ul>
    </li>
  <?php endforeach ?>
  </ul>
  <?php else: ?>
    <p><strong>No dates found.</strong></p>
  <?php endif ?>
</section>
