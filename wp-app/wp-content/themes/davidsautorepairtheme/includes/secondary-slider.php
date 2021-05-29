<?php
function secondary_slider($slides) {
  ?>

  <section id="about-us">
    <!-- about us slider -->
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <?php for($i=0; $i<count($slides); $i++): ?>
            <li data-target="#carousel-slider" data-slide-to="$i" class="<?php if ($i == 0) echo "active" ?>"></li>
          <?php endfor; ?>
        </ol>

        <div class="carousel-inner">
          <?php for($i=0; $i<count($slides); $i++): ?>
            <div class="item <?php if ($i == 0) echo "active" ?>">
              <img src="<?php echo get_the_post_thumbnail_url($slides[$i]->ID) ?>" class="img-responsive" alt="">
            </div>
          <?php endfor; ?>
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

    <!--/#about-slider-->
    <!--/.container-->
  </section>

  <?php
}
?>