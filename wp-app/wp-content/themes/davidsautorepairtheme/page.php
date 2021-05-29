<?php
require_once('includes/secondary-slider.php');

get_header();

$slider_data = new WP_Query([
  'post_type'   =>  'secondary-slider-pic'
]);

secondary_slider($slider_data->posts);

?>

<section id="about-us">
  <!-- about us slider -->
  <div id="about-slider">
    <div id="carousel-slider" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators visible-xs">
        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-slider" data-slide-to="1"></li>
        <li data-target="#carousel-slider" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <img src="images/abslider1.jpg" class="img-responsive" alt="">
        </div>
        <div class="item">
          <img src="images/abslider2.jpg" class="img-responsive" alt="">
        </div>
        <div class="item">
          <img src="images/abslider3.jpg" class="img-responsive" alt="">
        </div>
      </div>

      <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
        <i class="fa fa-angle-left"></i>
      </a>

      <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
    <!--/#carousel-slider-->
  </div>

  <?php while(have_posts()): the_post(); ?>
    <div class="center wow fadeInDown">
      <h2><?php the_title(); ?></h2>
    </div>
    <div class="wow fadeInDown">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>

  <!--/#about-slider-->
  <!--/.container-->
</section>

<?php
get_footer();

