<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  </head>
  <body>

  <header>
    <h1>
      <a href="<?php echo $site->url() ?>"><?php echo $site->title()->html() ?></a>
    </h1>

  <?php snippet('nav-main') ?>

  <?php snippet('search') ?>
  </header>

  <main>
