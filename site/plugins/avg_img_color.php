<?php

kirby()->hook('panel.file.upload', 'avgimgcolorhook');
//kirby()->hook('panel.file.update', 'avgimgcolorhook');

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

function avgimgcolorhook( $file ) {
  if (!$file->isImage()) {
    return;
  }

  try 
  {
    if ($file->avgcolor() == "") {
      require_once kirby()->roots()->index() . '/vendor/autoload.php';
      $color = \ColorThief\ColorThief::getColor($file->root(), 100);
      $file->update([
        'avgcolor' => rgb2hex($color)
      ]);
    }
  } 
  catch(Exception $e) 
  {
    return response::error($e->getMessage());
  }
}
