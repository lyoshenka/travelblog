<?php

return function($site, $pages, $page) {

  // get all posts
  $posts = $page->children()
                ->visible()
                ->sortBy('date', 'desc');

  // add pagination
  $posts = $posts->paginate(c::get('pagination-posts'));
  $pagination = $posts->pagination();

  // pass all variables to the template
  return compact('posts', 'pagination');

};

?>
