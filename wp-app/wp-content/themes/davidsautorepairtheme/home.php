<?php
require_once('includes/main-slider.php');
require_once('includes/services-summary.php');

get_header();

$home_slider_qy = new WP_Query([
  'post_type' =>  'home-slide-picture',
  'order'   =>  'asc'
]);

main_slider($home_slider_qy->posts);

$services_summary_qy = new WP_Query([
  'post_type' =>  'services-summary'
]);

services_summary($services_summary_qy->posts);

?>



<section id="services" class="service-item">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2>Our Service</h2>
      <!-- <p class="lead"></p> -->
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-6">
        <div class="media services-wrap wow fadeInDown">
          <div class="pull-left">
            <!-- <img class="img-responsive" src="images/services/services3.png"> -->
            <i class="flaticon-voltmeter"></i>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Repair Services</h3>
            <ul>
              <li>Diagnostics & system evaluation</li>
              <li>Brakes</li>
              <li>Steering & suspension</li>
              <li>Heating & cooling</li>
              <li>Brakes</li>
              <li>Belts & hoses</li>
              <li>Clutch installation services</li>
              <li>Transmissions</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-6">
        <div class="media services-wrap wow fadeInDown">
          <div class="pull-left">
            <!-- <img class="img-responsive" src="images/services/services2.png"> -->
            <i class="flaticon-oil"></i>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Preventive Maintenance</h3>
            <ul>
              <li>Scheduled maintenances</li>
              <li>Oil changes</li>
              <li>Filter replacements</li>
              <li>Fuel system cleaning</li>
              <li>Fluid exchanges</li>
              <li>Auto air conditioning repairs</li>
              <li>Windshield wipers</li>
              <li>Car batteries</li>
              <li>Headlights</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6 col-md-6">
        <div class="media services-wrap wow fadeInDown">
          <div class="pull-left">
            <!-- <img class="img-responsive" src="images/services/services1.png"> -->
            <i class="flaticon-wrench"></i>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Car Wash</h3>
            <ul>
              <li>Hand Wash</li>
              <li>RainX</li>
              <li>AmorAll Dashboard</li>
              <li>Spray Wax</li>
              <li>Hand Wax</li>
              <li>Leather Wax</li>
              <li>ArmorAll Interior</li>
              <li>Compond</li>
              <li>Shampoo</li>
              <li>Engine wash</li>
              <li>Full detail</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-6">
        <div class="media services-wrap wow fadeInDown">
          <div class="pull-left">
            <!-- <img class="img-responsive" src="images/services/services4.png"> -->
            <i class="flaticon-car-wash"></i>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Tire Services</h3>
            <ul>
              <li>Alignment</li>
              <li>Tire rotation</li>
              <li>Tire balancing</li>
              <li>Tire pressure monitoring system</li>
              <li>Flat tires</li>
              <li>Tire sales</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/.row-->
  </div>
  <!--/.container-->
</section>
<!--/#services-->

<section id="recent-works">
  <div class="container">
    <div class="center wow fadeInDown">
      <h2>Some of our Works</h2>
      <!-- <p class="lead"></p> -->
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="images/gallery/recent/item9.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">Wheel Alignment</a> </h3>
              <p>Chevy Malibu</p>
              <a class="preview" href="images/gallery/full/item9.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                View</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="images/gallery/recent/item10.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">Flat tire repair & Oil change</a></h3>
              <p>
                  Alpha Romeo Giulia
              </p>
              <a class="preview" href="images/gallery/full/item10.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                View</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="images/gallery/recent/item6.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">Hand Wash</a></h3>
              <p></p>
              <a class="preview" href="images/gallery/full/item6.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                View</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="images/gallery/recent/item8.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">Accessories Sales</a></h3>
              <p></p>
              <a class="preview" href="images/gallery/full/item8.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                View</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="images/gallery/recent/item27.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">Hand Wash</a></h3>
              <p></p>
              <a class="preview" href="images/gallery/full/item27.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                View</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="images/gallery/recent/item3.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">Hand Wash</a></h3>
              <p></p>
              <!-- <a class="preview" href="images/gallery/full/item3.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                View</a> -->
            </div>
            <a class="preview" href="/gallery.html" rel="prettyPhoto"><i class="fa fa-eye"></i>
              View</a>
          </div>
        </div>
      </div>

      <!-- <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="images/gallery/recent/item4.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">Job Performed </a></h3>
              <p>Description...</p>
              <a class="preview" href="images/gallery/full/item4.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                View</a>
            </div>
          </div>
        </div>
      </div> -->

      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="images/gallery/recent/item5.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">Hand Wash</a></h3>
              <p></p>
              <a class="preview" href="images/gallery/full/item5.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                View</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-sm-4 col-md-3">
        <div class="recent-work-wrap">
          <img class="img-responsive" src="images/gallery/recent/item7.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">Accessories Sales</a></h3>
              <p></p>
              <a class="preview" href="images/gallery/full/item7.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i>
                View</a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--/.row-->
    <div class="row text-center">
      <a class="btn-slide wow fadeInDown" href="/gallery.html">See More</a>
    </div>
  </div>
  <!--/.container-->
</section>
<!--/#recent-works-->

<section id="conatcat-info">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="media contact-info wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
          <div class="pull-left">
            <a href="tel:+17183834808"><i class="fa fa-phone"></i></a>
          </div>
          <div class="media-body">
            <h2>Have a question or need a custom quote?</h2>
            <p>Please give us a call at <a href="tel:+17183834808">(718) 383-4808</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/.container-->
</section>
<!--/#conatcat-info-->

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