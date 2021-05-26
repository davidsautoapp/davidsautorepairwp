<?php
function main_slider($posts) {
  $len = count($posts);
  ?>
  
  <section id="main-slider" class="no-margin">
    <div class="carousel slide">
      <div class="ads-n-promos">

      </div>
      <ol class="carousel-indicators">
        <?php
        for ($i = 0; $i < $len; $i++) {
          ?>
          <li data-target="#main-slider" data-slide-to="<?php $i ?>" class="<?php if ($i == 0) echo "active" ?>"></li>
          <?php
        }
        ?>
      </ol>
      <div class="carousel-inner">
        <?php
        for ($i = 0; $i < $len; $i++) { 

          ?>

          <div class="item <?php if ($i == 0) echo "active" ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url($posts[$i]->ID) ?>)">
            <div class="container">
              <div class="row slide-margin">
                <div class="col-sm-6">
                  <div class="carousel-content">
                    <h1 class="animation animated-item-1"><?php echo $posts[$i]->post_title ?></h1>
                    <h2 class="animation animated-item-2"><?php echo $posts[$i]->post_content ?></h2>
                    <a class="btn-slide animation animated-item-3" href="/services.html#services">Read More</a>
                  </div>
                </div>

                <div class="col-sm-6 hidden-xs animation animated-item-4">
                  <div class="slider-img">
                    <!-- <img src="images/slider/img2.png" class="img-responsive"> -->
                  </div>
                </div>

              </div>
            </div>
          </div>

          <?php
        
        }
        ?>
        <!--/.item-->
        
      </div>
      <!--/.carousel-inner-->
    </div>
    <!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
      <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
      <i class="fa fa-chevron-right"></i>
    </a>
  </section>
  <!--/#main-slider-->

  <?php
}
?>
