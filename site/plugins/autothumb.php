<?php

kirby()->hook('panel.file.upload', 'autothumbhook');
kirby()->hook('panel.file.replace', 'autothumbhook');

function autothumbhook( $file ) {
  if (!c::get('autothumb.enabled', false) || !$file->isImage()) {
    return;
  }

  try 
  {
    $height = c::get('autothumb.height', 500);
    $quality = c::get('autothumb.quality', 70);

    $dimensions = clone $file->dimensions(); 
    $dimensions->fitHeight($height);
    $thumb = thumb($file, ['width' => $dimensions->width(), 'height' => $dimensions->height(), 'quality' => $quality]);
    echo $thumb->root();
  } 
  catch(Exception $e) 
  {
    return response::error($e->getMessage());
  }
}
