<footer style="background-color:#37474f;">
            <div class="row" style="padding:0">
                <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12" style="display: flex;align-items: center;color: rgba(255,255,255,0.5);">
                    <!--<a href="https://saasnomad.com/" class="mb-1 logo" style="font-size:25px; margin: 0 !important;"><b>SaaSNomad</b></a>-->
                    <ul style="display:inline-block;">
                        <li>
                          <a href="<?php echo BASE_URL; ?>faq" target="_blank" class="text-uppercase" onClick="ga('send', 'event', 'faq footer', 'click', 'info');">
                            <b>FAQ</b>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo BASE_URL; ?>privacy" target="_blank" class="text-uppercase" onClick="ga('send', 'event', 'privacy footer', 'click', 'info');">
                            <b>Privacy</b>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo BASE_URL; ?>terms" target="_blank" class="text-uppercase" onClick="ga('send', 'event', 'terms footer', 'click', 'info');">
                            <b>Terms</b>
                          </a>
                        </li>  
                      </ul>
                      <!--Back to top
                      <a id="go-back" class="mdl-typography--font-light btn btn-info btn-rounded" onClick="ga('send', 'event', 'go up', 'click', 'uxui');"><i class="fa fa-arrow-up" aria-hidden="true" style="margin-top: 4px;"></i></a>
                      -->
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-10 col-xs-12" style="text-align:right;color: rgba(255,255,255,0.5);">
                   <p style="margin: 1.5rem 0 1rem;font-size: .8rem;"><i class="fa fa-copyright" aria-hidden="true"></i> 2017 SaaSNomad, All rights reserved.</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
            </div>   
</footer>


    <!-- SCRIPTS -->
    <!-- jQuery v2.0.3  -->
    <script type="text/javascript" src="js/jquery.min.js"></script> 
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script> 
    <!-- Carousel -->
    <script type="text/javascript" src="js/slick.min.js"></script> 
    <script type="text/javascript" src="js/slick.js"></script> 
    <!-- Checkbox --> 
    <script type="text/javascript" src="js/checkbox.js"></script>
    <!-- Select Jquery Chosen Plugin-->
    <script type="text/javascript" src="js/chosen/chosen.jquery.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/chosen/init.js" type="text/javascript" charset="utf-8"></script>
    <!-- Calculator Form -->
    <script type="text/javascript" src="js/calculator.js"></script>
    <!-- Load more --> 
    <script type="text/javascript" src="js/load-more.js"></script>
    <!-- Counter -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="js/counter.js"></script>

    <!-- Go top button animation -->
    <script type="text/javascript" src="js/go-top.js"></script> 
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <!-- Animations init-->
    <script>
        new WOW().init();
    </script>   
    <!-- Number formatting -->
    <script type="text/javascript" src="js/jquery.number.js"></script>
    <script type="text/javascript"  src="js/jquery.number-formatting.js"></script>
    <!-- Geolocation API (1.0)-->
    <script type="text/javascript" src="//maps.google.com/maps/api/js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQJ71Xgt3HCqIGW7YXoPtt9U-Jp-bXk9M&callback=initMap"
  type="text/javascript"></script>
    <script type="text/javascript" src="js/geotext-1.0.min.js"></script>
    <script>
    jQuery(function() { 
        new GeoText();  
    });
    </script>  
    <!-- Radio Btn -->
    <script type="text/javascript" src="js/radio-btn.js"></script>

    <!-- FORMS PROCESSING -->
    <!-- Form Submit: AJAX -->
    <script type="text/javascript" src="js/ajax/calculator-ajax.js"></script>
    <script type="text/javascript" src="js/ajax/seller-ajax.js"></script>
    <script type="text/javascript" src="js/ajax/buyer-ajax.js"></script>
    <script type="text/javascript" src="js/ajax/news-subscribers.js"></script>
    <script type="text/javascript" src="js/ajax/contact-us.js"></script>
    <?php
        $OldDate = new DateTime('2014-01-29');
        $now = new DateTime(Date('Y-m-d'));
    ?>
    <div style="display:none;" id="oldDate"><?php echo $OldDate->diff($now)->format("%a"); ?></div>
    <div style="display:none;"><?php foreach($sellers as $seller) : ?><span class="rowsCount"><?php echo applicationsCount($seller->id); ?></span><?php endforeach; ?></div>
    <script type="text/javascript" src="js/script.js"></script> 
    <!-- Featured Companies: Badge -->
    <script type="text/javascript" src="js/premium.js"></script> 
    <!-- Rotating words-->
    <script type="text/javascript" src="js/rotation.js"></script> 
</body>
</html>