<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <link rel="shortcut icon" href="/assets/images/favicon.png"/>
  <link rel="alternate" type="application/rss+xml" title="RSS" href="/feed"/>

  <?php echo css('assets/styles/normalize.css') ?>
  <?php echo less('assets/styles/styles.less') ?>
</head>
<body>
  <div id="container">

    <header>
      <a href="<?php echo url() ?>"><h1><?php echo html($site->title()) ?></h1></a> 

      <p id="description"><?php echo html($site->description()) ?></p>
    </header>
