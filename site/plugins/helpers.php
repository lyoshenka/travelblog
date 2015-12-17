<?php


function getPhotosetLayout($count, $forcedLayout = null) {
  if ($forcedLayout != "") {
    return $forcedLayout;
  }

  if ($count > 3 && $count%3 == 1) {
    return str_repeat('3',$count/3 - 1) . '22';
  }

  return str_repeat('3',$count/3) . ($count % 3);
}


function getPostHtml($post) {

  $transPng = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'; // https://css-tricks.com/snippets/html/base64-encode-of-1x1px-transparent-gif/

  ob_start();
?>

<li class="post">

  <div class="meta">
    <h4>
      <a href="<?php echo getPostUrl($post) ?>" title="<?php echo $post->date('F d, Y') ?>"><?php echo $post->date('d M') ?></a>
    </h4>
  </div>

  <div class="content text-post">
    <h3 class="title_gap"><?php echo $post->title()->html() ?></h3>

    <?php /*snippet('post-footer', array('post'       => $post,
                                       'author'     => true,
                                       'avatar'     => true,
                                       'tags'       => true,
                                       'categories' => true)) */ ?>

    <?php // echo getCoverImage($post) ?>


    <?php if ($post->text() != ""): ?>
      <div class="text">
        <?php echo $post->text()->kirbytext() ?>
      </div>
    <?php endif ?>

    <?php if ($post->hasImages()): ?>
      <div class="photoset" data-layout="<?php echo getPhotosetLayout($post->images()->count(), $post->imagelayout()) ?>">
        <?php foreach($post->images()->sortBy('sort', 'asc') as $image): ?>
	  <?php $dimensions = $image->dimensions()->fitWidth(875) ?>
          <img src="<?php echo $transPng ?>" 
               data-src="<?php echo $image->url() ?>"
               width="<?php echo $dimensions->width() ?>" 
               height="<?php echo $dimensions->height() ?>" 
               alt="<?php echo $image->caption() != "" ? $image->caption() : $image->name() ?>"
               title="<?php echo $image->caption() != "" ? $image->caption() : "" ?>"
          />
        <?php endforeach ?>
      </div>
    <?php endif ?>

  </div>

</li>

<?php 

  return ob_get_clean();
}


/**
 * getPostUrl()
 *
 * Returns the full URL of a given post in wordpress-style.
 *
 * @param  mixed $post
 * @return string
 */
function getPostUrl($post) {
  $site = site();

  $uri  = $site->url();
  $uri .=   '/' . $post->date('Y')
          . '/' . $post->date('m')
          . '/' . $post->date('d')
          . '/' . $post->slug();

  return $uri;
}

/**
 * getAuthorName()
 *
 * Returns the full name of a given author instead of the username.
 *
 * @param  string $username
 * @return string
 */
function getAuthorName($username) {
  $site = site();
  $author = $site->users()->get($username);
  $name = $username;

  if($author) {
    if($author->firstname()) {
      $name =  $author->firstname();
      if($author->lastname()){
        $name .= ' ' . $author->lastname();
      }
    }
  }

  return $name;
}

/**
 * getCoverImage()
 *
 * Returns an img-element with the coverimage for a given post if exists.
 *
 * @param  mixed $post
 * @return string
 */
function getCoverImage($post) {

  $coverimage = (string)$post->coverimage();

  if($coverimage != "") {
    $img = brick('img');
    $img->attr('src', $post->image($coverimage)->url());
    $img->attr('alt', $post->title()->html());

    return $img;
  }
}

/**
 * getDatesArchive()
 *
 * Returns all years and months where posts exists.
 *
 * @return array
 */
function getDatesArchive() {
  $site = site();
  $posts = $site->find('posts')->children()->visible();

  if($posts->count() > 0) {
    foreach ($posts as $post) {
      $year = $post->date('Y');
      $month = $post->date('m');
      if(isset($dates[$year][$month])) {
        $dates[$year][$month] += 1;
      } else {
        $dates[$year][$month] = 1;
      }
    }
    return $dates;
  }
}

/**
 * getTagsArchive()
 *
 * Returns tagcloud.
 *
 * @return array
 */
function getTagsArchive() {
  return tagcloud(page('posts'), array('field'   => 'tags',
                                       'param'   => 'tag',
                                       'baseurl' => ''));
}

/**
 * getTagsArchive()
 *
 * Returns categorycloud.
 *
 * @return array
 */
function getCategoriesArchive() {
  return tagcloud(page('posts'), array('field'   => 'category',
                                       'param'   => 'category',
                                       'baseurl' => ''));
}

/**
 * getAuthorsArchive()
 *
 * Returns authorcloud.
 *
 * @return array
 */
function getAuthorsArchive() {
  return tagcloud(page('posts'), array('field'   => 'author',
                                       'param'   => 'author',
                                       'baseurl' => ''));
}
?>
