<?php

kirby()->hook('panel.file.upload', 'autothumbhook');
kirby()->hook('panel.file.replace', 'autothumbhook');

function autothumbhook( $file ) {
  if (!c::get('autothumb.enabled', false) || !$file->isImage()) {
    return;
  }

  try 
  {
    $width = c::get('autothumb.width', 500);
    $quality = c::get('autothumb.quality', 70);

    $dimensions = clone $file->dimensions(); 
    $dimensions->fitWidth($width);
    $thumb = thumb($file, ['width' => $dimensions->width(), 'height' => $dimensions->height(), 'quality' => $quality]);
    echo $thumb->root();
  } 
  catch(Exception $e) 
  {
    return response::error($e->getMessage());
  }
}
