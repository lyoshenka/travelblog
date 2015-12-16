<?php

echo page('posts')->children()->visible()->sortBy('date','desc')->limit(20)->feed(array(
  'title'       => $page->title(),
  'description' => $page->description(),
  'link'        => 'blog',
));

?>
