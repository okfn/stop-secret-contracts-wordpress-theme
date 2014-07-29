
    </div>
    
    <footer class="footer">
      <div class="container">
        <div class="row footer-top">
          <div class="col-sm-12">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) : ?>
		        <?php endif; ?>
          </div>
        </div>
        <div class="row footer-bottom">
          <div class="col-md-7">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) : ?>
		        <?php endif; ?>
          </div>
          <div class="col-md-5">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		        <?php endif; ?>
          </div>
        </div>
        <div class="okf-footer" id="okf-footer"></div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="thanksModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="close" href="./">&times;</a>
            <h4 class="modal-title" id="myModalLabel">Thank you</h4>
          </div>
          <div class="modal-body">
            <p>Your signature has been added to the list of petition signers.</p>
            <p>If you'd like to get more involved in the campaign, let us know <a href="./?page=get-involved">here</a>.</p>
          </div>
          <div class="modal-footer">
            Please share the campaign: <a href="http://www.facebook.com/share.php?u=http://stopsecretcontracts.org/"><i class="fa fa-facebook-square"></i></a> <a href="http://ctt.ec/6Gsm_"><i class="fa fa-twitter"></i></a> <a href="mailto:contact@stopsecretcontracts.org"><i class="fa fa-envelope"></i></a>
          </div>
        </div>
      </div>
    </div>
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
    
    <script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/js/vendor/placeholders.min.js"></script>
    <script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
    <script src="//assets.okfn.org/themes/okfn/okf-footer/okf-footer.js?v2" type="text/javascript"></script>
    
    <!-- Feed
    <script src="<?php echo get_bloginfo('stylesheet_directory'); ?>/js/vendor/moment.min.js"></script>
    <script type="text/javascript" src="http://momentjs.com/downloads/moment-with-langs.min.js"></script>
    <script type="text/javascript" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/js/vendor/FeedEk.js"></script>
    -->
    
    <script>
      <!-- Google Analytics -->
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-33874954-26', 'stopsecretcontracts.org');
      ga('send', 'pageview');
    </script>

	</body>

</html>