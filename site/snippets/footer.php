


    <div style="clear: both"></div>

<?php /*

    {block:PermalinkPage}
      <center>
        {PostNotes}
      </center>
    {block:PermalinkPage}

    <div style="clear: both;"></div>

    <div id="footer">
      <div id="pagination">
        {block:Pagination} {block:NextPage}

        <p class="back"><a href="{NextPage}">{lang:Next} →</a>
        </p>
        {/block:NextPage} {block:PreviousPage}

        <p class="forward"><a href="{PreviousPage}">← {lang:Prev}</a>
        </p>
        {/block:PreviousPage} {/block:Pagination} {block:PermalinkPagination} {block:PreviousPost}

        <p class="back"><a href="{PreviousPost}">{lang:Next} →</a>
        </p>
        {/block:PreviousPost} {block:NextPost}

        <p class="forward"><a href="{NextPost}">← {lang:Prev}</a>
        </p>
        {/block:NextPost} {/block:PermalinkPagination} {block:DayPagination} {block:PreviousDayPage}

        <p class="back"><a href="{PreviousDayPage}">{lang:Next} →</a>
        </p>
        {/block:PreviousDayPage} {block:NextDayPage}

        <p class="forward"><a href="{NextDayPage}">← {lang:Prev}</a>
        </p>
        {/block:NextDayPage} {/block:DayPagination}
      </div>
      
      <br><br>
*/ ?>

      <center><small><a href="/feed">RSS</a></small></center>

    </div> <!-- .footer -->

  </div> <!-- .container -->







  <footer>
    <?php echo kirbytext($site->copyright()) ?>
  </footer>

  <!-- jquery-2.1.4.min.js  jquery.photoset-grid.min.js -->
  <script src="/assets/js/jquery-2.1.4.min.js" data-no-instant></script>
  <script src="/assets/js/jquery.photoset-grid.min.js" data-no-instant></script>
  <script src="/assets/js/instantclick.min.js" data-no-instant></script>
  <script data-no-instant>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-48451015-2', 'auto');

    InstantClick.on('change', function() {
      ga('send', 'pageview', location.pathname + location.search);
      $('.photoset[data-layout]').photosetGrid({
        gutter: "10px",
        highresLinks: true,
      });
    });
      
    InstantClick.init('mousedown');
  </script>

</body>

</html>
