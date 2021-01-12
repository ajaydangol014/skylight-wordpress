    <footer class="site-footer bg-dark" role="contentinfo">
      <div class="container">
        <div class="row">
           <?php dynamic_sidebar('sidebar-4');?>
          <div class="col-md-3">
            <ul class="list-unstyled footer-link">
              <li><span class="mr-3 d-block">Address:</span><span class="text-white"><?php echo get_theme_mod('address'); ?></span></li>
              <li><span class="mr-3 d-block">Phone:</span><span class="text-white"><?php echo get_theme_mod('phone'); ?></span></li>
              <li><span class="mr-3 d-block">Fax:</span><span class="text-white"><?php echo get_theme_mod('fax'); ?></span></li>
              <li><span class="mr-3 d-block">E-mail:</span><span class="text-white"><?php echo get_theme_mod('email'); ?></span></li>
            </ul>
          </div>
            <?php dynamic_sidebar('sidebar-3');?>

          <div class="col-md-3">
            <h3 class="text-white">Social</h3>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="<?php echo get_theme_mod('twitter_link'); ?>" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="<?php echo get_theme_mod('facebook_link'); ?>" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="<?php echo get_theme_mod('linkedin_link'); ?>" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="<?php echo get_theme_mod('instagram_link'); ?>" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
    <?php wp_footer();?>
  </body>
</html>