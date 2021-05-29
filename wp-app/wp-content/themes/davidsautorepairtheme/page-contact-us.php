<?php
require_once('includes/utils.php');

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
                                <p><?php the_field( 'locations', 'option' ); ?></p>
                                <p>Phone(s):
                                  <?php if ( have_rows( 'phones', 'option' ) ) : ?>
                                    <?php while ( have_rows( 'phones', 'option' ) ) : the_row(); ?>
                                    <?php the_sub_field( 'type' ); ?> - <a href="tel:+<?php the_sub_field( 'phone' ); ?>"><?php echo phone_formater(get_sub_field( 'phone' )); ?></a>
                                    <?php endwhile; ?>
                                  <?php else : ?>
                                    <?php // no rows found ?>
                                  <?php endif; ?>
                                </p>
                                <p>Email(s):
                                  <?php if ( have_rows( 'emails', 'option' ) ) : ?>
                                    <?php while ( have_rows( 'emails', 'option' ) ) : the_row(); ?>
                                      <a href="mailto:<?php the_sub_field( 'email' ); ?>"><?php the_sub_field( 'email' ); ?></a>, 
                                    <?php endwhile; ?>
                                  <?php else : ?>
                                    <?php // no rows found ?>
                                  <?php endif; ?>
                                </p>
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

<?php
get_footer();
?>