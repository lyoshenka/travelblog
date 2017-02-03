

    <footer>
      <!-- <a href="/feed">RSS</a> -->
    </footer>

  </div> <!-- .container -->

  <?php // jquery is ONLY here for photoset-grid ?>
  <script src="/assets/js/jquery-3.1.1.slim.min.js" data-no-instant></script>
  <script src="/assets/js/jquery.photoset-grid.min.js" data-no-instant></script>

  <script src="/assets/js/layzr.min.js" data-no-instant></script>
  <script src="/assets/js/instantclick.min.js" data-no-instant></script>
  <script src="/assets/js/google-image-layout.js" data-no-instant></script>
  <script src="/assets/js/photoswipe.min.js" data-no-instant></script>
  <script src="/assets/js/photoswipe-ui-default.min.js" data-no-instant></script>
  <script data-no-instant>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-48451015-5', 'auto');

    function ready(fn) {
      if (document.readyState != 'loading'){
        fn();
      } else {
        document.addEventListener('DOMContentLoaded', fn);
      }
    }
    function addClass(el, className) {
      if (el.classList) {
        el.classList.add(className);
      } else {
        el.className += ' ' + className;
      }
    }

    var touch = ('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch;

    var layzr = Layzr({threshold: 200});

    ready(function(){ 
      layzr.handlers(true);
      if (touch) {
        window.scrollBy(0, 1); // hack to fix layzr scroll detection on mobile
//        layzr.update().check();
      }
    });

    InstantClick.on('change', function() {
      addClass(document.body, touch ? 'touch' : 'no-touch');
      ga('send', 'pageview', location.pathname + location.search);

      var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
      if (width > 700) {
        $('.photoset[data-layout]').photosetGrid({
          gutter: "10px",
          highresLinks: true,
          lowresWidth: 875,
        });
      }
      GoogleImageLayout.init();

      layzr.update().check();
    });

      
    InstantClick.init('mousedown');
  </script>

  <?php snippet('photoswipe') ?>

</body>

</html>
