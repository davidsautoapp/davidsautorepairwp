<?php
require_once('includes/utils.php');
?>

  <section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="widget">
            <h3>Company</h3>
            <ul>
              <li>Email(s): 
                <?php if ( have_rows( 'emails', 'option' ) ) : ?>
                  <?php while ( have_rows( 'emails', 'option' ) ) : the_row(); ?>
                    <a href="mailto:<?php the_sub_field( 'email' ); ?>"><?php the_sub_field( 'email' ); ?></a>, 
                  <?php endwhile; ?>
                <?php else : ?>
                  <?php // no rows found ?>
                <?php endif; ?>
              </li>
              <li>
                Tel(s):
                <?php if ( have_rows( 'phones', 'option' ) ) : ?>
                  <?php while ( have_rows( 'phones', 'option' ) ) : the_row(); ?>
                    <?php the_sub_field( 'type' ); ?>&nbsp;-&nbsp;<a href="tel:+<?php the_sub_field( 'phone' ); ?>"><?php echo phone_formater(get_sub_field( 'phone' )) ?></a>,
                  <?php endwhile; ?>
                <?php else : ?>
                  <?php // no rows found ?>
                <?php endif; ?>
              </li>
              <li>Address: <?php the_field( 'locations', 'option' ); ?></li>
              <li></li>
            </ul>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Navigation</h3>
            <ul>
              <li><a href="<?php echo get_site_url() . '/about-us' ?>">About us</a></li>
              <li><a href="<?php echo get_site_url() . '/services' ?>">Services</a></li>
              <li><a href="<?php echo get_site_url() . '/gallery' ?>">Gallery</a></li>
              <li><a href="<?php echo get_site_url() . '/contact-us' ?>">Contact us</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Social Media</h3>
            <ul>
              <?php if ( have_rows( 'sitenetwork', 'option' ) ) : ?>
                <?php while ( have_rows( 'sitenetwork', 'option' ) ) : the_row(); ?>
                  <li><a href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'name' ); ?></a></li>
                <?php endwhile; ?>
              <?php else : ?>
                <?php // no rows found ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->


      </div>
    </div>
  </section>
  <!--/#bottom-->

  <footer id="footer" class="midnight-blue">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          &copy; 2019 - David's Auto Repair
        </div>
        <div class="col-sm-6">
          <!-- <ul class="pull-right">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Faq</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul> -->
          <?php 
          wp_nav_menu([
            'theme_location'  =>  'secondary-menu',
            'container'       =>  'ul',
            'menu_class'      =>  'pull-right'
          ]) 
          ?>
        </div>
      </div>
    </div>
  </footer>
  <!--/#footer-->

  <!-- <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/wow.min.js"></script> -->
  <?php wp_footer(); ?>
</body>

</html>