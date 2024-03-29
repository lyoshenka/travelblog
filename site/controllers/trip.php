<?php

return function($site, $pages, $page) {
  $posts = $page
//    ->find('posts')
    ->children()
    ->visible()
//    ->filterBy('category', $page->slug())
    ->sortBy('date', 'asc')
    ->paginate(c::get('pagination-posts'));

  $pagination = $posts->pagination();

  return compact('posts', 'pagination');
};
