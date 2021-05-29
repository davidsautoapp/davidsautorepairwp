<?php
get_header();

$jobs_qy = new WP_Query([
  'post_type'   =>  'jobs'
]);

// echo "<pre>";
// print_r($jobs_qy->posts[0]);
// print_r(get_fields($jobs_qy->posts[0]));
// echo "</pre>";
?>

<section id="gallery">
    <div class="center" id="page-title">
        <h2>Gallery</h2>
        <!-- <p class="lead"></p> -->
    </div>
    <div class="container">
        <ul class="gallery-filter text-center">
            <li><a class="btn btn-default active" href="#" data-filter="*">All Works</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".auto-repair">Auto Repair</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".car-wash-regular">Car Wash - Regular</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".car-wash-details">Car Wash - Details</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".regular-cars">Regular Cars</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".vintage-cars">Vintage Cars</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".two-wheelers">Two-Wheelers</a></li>
            <li><a class="btn btn-default" href="#" data-filter=".accessories-sales">Accessories Sales</a></li>
        </ul><!--/#gallery-filter-->

        <div class="row">
            <div class="gallery-items">

              <?php 
               
                foreach($jobs_qy->posts as $job):
                    $job_details = get_fields($job);
                    $job_cats = get_the_terms($job->ID, 'job_category');
                    $cat_list = array_reduce($job_cats, function($c, $i) {
                      return $c . ' ' . $i->slug;
                    }, '');
                    foreach($job_details['pictures'] as $picture): ?>
                        
                        <div class="<?= $cat_list ?> gallery-item col-xs-12 col-sm-4 col-md-3">
                            <div class="recent-work-wrap">
                                <div class="sign-over"><?= $picture['caption'] ?></div>
                                <img class="img-responsive" src="<?= $picture['url'] ?>" alt="">                     
                                <div class="overlay">
                                    <div class="recent-work-inner">
                                        <h3><a href="#"><?php echo $job->post_title ?></a></h3>
                                        <p><?php echo $job_details['brand'] . ": " . $job_details['model'] . " " . $job_details['year'] ?></p>
                                        <a class="preview" href="<?= $picture['sizes']['large'] ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                    </div>
                                </div>
                            </div>
                        </div><!--/.gallery-item-->

                    <?php 
                    endforeach;
                endforeach; ?>

            </div>
        </div>
    </div>
</section><!--/#gallery-item-->

<section id="bottom">
  <div class="container wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="widget">
          <h3>Company</h3>
          <ul>
            <li>Email: davidsarbk@gmail.com</li>
            <li>Tel: 718 383 4808</li>
            <li>Address: 302 McGuiness Blvd,
              Greenpoint, New York 11222</li>
            <li></li>
          </ul>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="widget">
          <h3>Navigation</h3>
          <ul>
            <li><a href="/services.html">About us</a></li>
            <li><a href="/services.html#services">Services</a></li>
            <li><a href="/gallery.html">Gallery</a></li>
            <li><a href="/contact-us.html">Contact us</a></li>
          </ul>
        </div>
      </div>
      <!--/.col-md-3-->

      <div class="col-md-3 col-sm-6">
        <div class="widget">
          <h3>Social Media</h3>
          <ul>
            <li><a href="https://www.facebook.com/davidsautorepair1/">FaceBook</a></li>
            <li><a href="https://www.yelp.com/biz/davids-auto-repair-brooklyn">Yelp</a></li>
          </ul>
        </div>
      </div>
      <!--/.col-md-3-->
    </div>
  </div>
</section>
<!--/#bottom-->

<?php

get_footer();
?>