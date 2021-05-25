<?php
get_header();
?>

<section id="contact-info">
    <div class="center" id="page-title">
        <h2>How to Reach Us?</h2>
        <!-- <p class="lead"></p> -->
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-center">
                    <div class="gmap">
                        <iframe width='100%' height='100%' id='mapcanvas'
                          src='https://maps.google.com/maps?q=London,%20United%20Kingdom302%20McGuinness%20blvd,%20Brooklyn,%20NY%2011222&amp;t=&amp;z=10&amp;ie=UTF8&amp;iwloc=&amp;output=embed'
                          frameborder='0' scrolling='no' marginheight='0' marginwidth='0'>
                          <div class="zxos8_gm"><a href="https://sites.google.com/site/xenoncharles/samsung-galaxy-deals">galaxy</a></div>
                          <div style='overflow:hidden;'>
                            <div id='gmap_canvas' style='height:100%;width:100%;'></div>
                          </div>
                          <div><small>Powered by <a href="https://www.embedgooglemap.co.uk">Embed Google Map</a></small></div>
                        </iframe>
                    </div>
                </div>

                <div class="col-sm-4 map-content">
                    <ul class="row">
                        <li class="col-sm-12">
                            <address>
                                <h5>Office</h5>
                                <p>302 McGuiness Blvd,<br> Greenpoint, New York 11222</p>
                                <p>Phone: 718-383-4808</p>
                                <p>Email: Address:davidsarbk@gmail.com</p>
                            </address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>  <!--/gmap_area -->

<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>Drop Your Message</h2>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form class="contact-form" name="contact-form" method="post" action="/mail">
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" name="name" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Subject *</label>
                        <input type="text" name="subject" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Message *</label>
                        <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                    </div>
                    <div class="form-group">
                        <button id="sendBtn" type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                    </div>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->

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