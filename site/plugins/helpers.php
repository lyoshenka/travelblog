<?php


function getPhotosetLayout($count, $forcedLayout = null)
{
  if ($forcedLayout != "")
  {
    $numbers = str_split(preg_replace('/[^0-9]/', '', $forcedLayout));
    while (array_sum($numbers) < $count)
    {
      $remainder = $count - array_sum($numbers);
      if ($remainder == 4)
      {
        $numbers[] = 2;
        $numbers[] = 2;
      }
      else
      {
        $numbers[] = min(3, $remainder);
      }
    }

    return implode('', $numbers);
  }

  if ($count > 3 && $count % 3 == 1)
  {
    return str_repeat('3', $count / 3 - 1) . '22';
  }

  return str_repeat('3', $count / 3) . ($count % 3);
}