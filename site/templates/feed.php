<?php

echo page('trips')->grandChildren()->visible()->sortBy('date','desc')->limit(50)->feed(array(
  'title'       => $page->title(),
  'description' => $page->description(),
  'link'        => 'home',
));

?>
