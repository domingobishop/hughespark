<footer id="footer" class="footer">
  <div class="container">
<div class="row">
	<div class="col-md-4">
        <h4>Hughes Park</h4>
        <p>
            <?php echo get_option('hp_address_1'); ?><br>
            <?php echo get_option('hp_address_2'); ?><br>
            Tel: <a href="tel:<?php echo get_option('hp_tel'); ?>"><?php echo get_option('hp_tel'); ?></a><br>
            <a href="mailto:<?php echo get_option('hp_email'); ?>"><?php echo get_option('hp_email'); ?></a>
        </p>
        <h4>Follow us</h4>
        <p>
            <a href="<?php echo get_option('hp_facebook'); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/facebook.png"></a>
            <a href="<?php echo get_option('hp_twitter'); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/twitter.png"></a>
        </p>
	</div>
    <div class="col-md-4 text-center heart">
    </div>
	<div class="col-md-4 text-right bb-logo">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/bb-logo.png" class="pull-right img-responsive">
	</div>
      <div class="col-md-12 text-center site-info">
        <p><small>Hughes Park copyright © <?php echo date("Y"); ?> <br>
          Website by <a href="http://creatistic.com.au/" target="_blank">Creatistic</a></small></p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>