        </div> <!-- .main -->

        <footer class="site-footer" role="content-info">
            <!-- Site footer here -->
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/assets/components/jquery/jquery.min.js"><\/script>')</script>

        <!-- bower:js -->
        <!-- endbower -->

        <script src="/assets/js/build/site.min.js"></script>

        <?php if(isset($additional_scripts)) echo $additional_scripts; ?>

        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>