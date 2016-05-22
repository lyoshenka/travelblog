<?php


function getPhotosetLayout($count, $forcedLayout = null) {
  if ($forcedLayout != "") {
    return preg_replace('/[^0-9]/', '', $forcedLayout);
  }

  if ($count > 3 && $count%3 == 1) {
    return str_repeat('3',$count/3 - 1) . '22';
  }

  return str_repeat('3',$count/3) . ($count % 3);
}
