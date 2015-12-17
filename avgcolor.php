#!/usr/bin/env php
<?php

require_once __DIR__ . '/vendor/autoload.php';

function rgb2hex($r, $g=null, $b=null)
{
  if (is_array($r) && count($r) == 3) {
    list($r, $g, $b) = $r;
  }

  $r = intval($r); 
  $g = intval($g);
  $b = intval($b);

  $r = dechex($r < 0 ? 0 : ($r > 255 ? 255 : $r));
  $g = dechex($g < 0 ? 0 : ($g > 255 ? 255 : $g));
  $b = dechex($b < 0 ? 0 : ($b > 255 ? 255 : $b));

  return '#' . 
         (strlen($r) < 2 ? '0' : '') . $r . 
         (strlen($g) < 2 ? '0' : '') . $g . 
         (strlen($b) < 2 ? '0' : '') . $b;
}


foreach(glob(__DIR__.'/content/posts/2*') as $postDir) {

  foreach(glob($postDir.'/*.jpg') as $img) {

    $metaFile = $img.'.txt';
    $meta = file_exists($metaFile) ? file_get_contents($metaFile) : '';

    if (strpos($meta,'Avgcolor') !== false) continue;

    $avgColor = \ColorThief\ColorThief::getColor($img, 100);
    
    file_put_contents($metaFile, ($meta ? $meta . "\n\n----\n\n" : '') . "Avgcolor: " . rgb2hex($avgColor));
    echo $img . ' => ' . rgb2hex($avgColor) . "\n";
  }
}
