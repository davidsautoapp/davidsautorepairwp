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