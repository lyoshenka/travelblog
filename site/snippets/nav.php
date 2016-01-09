<nav>
<a href="/">
  <svg height="20px" style="margin-bottom:-2px;" version="1.1" viewbox="0 0 512 512" width="24px" x="0px" 
       xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px">
    <g>
      <path d="M512,296l-96-96V56h-64v80l-96-96L0,296v16h64v160h160v-96h64v96h160V312h64V296z">
      </path>
    </g>
  </svg>
</a>

<?php foreach(page('trips')->children() as $trip): ?>
  <a href="<?php echo $trip->url() ?>"><?php echo $trip->title() ?></a> 
<?php endforeach ?>
</nav>
