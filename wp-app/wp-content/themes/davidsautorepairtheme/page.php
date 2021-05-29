<?php
require_once('includes/secondary-slider.php');
require_once('includes/utils.php');

get_header();

$slider_data = new WP_Query([
  'post_type'   =>  'secondary-slider-pic'
]);

secondary_slider($slider_data->posts);

?>

<section id="about-us">

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

