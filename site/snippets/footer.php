

    <footer>
      <a href="/feed">RSS</a>
    </footer>

  </div> <!-- .container -->


  <script src="/assets/js/jquery-2.1.4.min.js" data-no-instant></script>
  <script src="/assets/js/jquery.photoset-grid.min.js" data-no-instant></script>
  <script src="/assets/js/jquery.unveil.min.js" data-no-instant></script>
  <script src="/assets/js/instantclick.min.js" data-no-instant></script>
  <script data-no-instant>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-48451015-2', 'auto');

    InstantClick.on('change', function() {
      ga('send', 'pageview', location.pathname + location.search);
      $(".photoset img").unveil(500);

      var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
      if (width > 700) {
        $('.photoset[data-layout]').photosetGrid({
          gutter: "10px",
          highresLinks: true,
          lowresWidth: 875,
        });
      }
    });
      
    InstantClick.init('mousedown');
  </script>

</body>

</html>
