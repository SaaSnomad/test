<!-- Seller modal -->
<div class="modal fade" id="sellerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="modal-body">
                <h2 class="text-center" id="seller-header">Seller application</h2>
                <form id="sellers" action="#" method="post">
                    <div class="md-form form-group">
                        <input name="seller_email" id="seller_email" placeholder="example@myemaildomain.com" type="email" class="form-control" maxlength="50" required>
                        <label for="seller_email">Email *</label>
                    </div>
                    <div class="md-form form-group" style="display:none;">
                        <input name="seller_country" placeholder="Country" type="text" class="geotext[country]"> 
                    </div> 
                    <div class="md-form form-group" id="multiselect" style="width: 100%;top: -7px;">
                        <label for "seller_industry" style="font-size: 0.8rem;position: relative;z-index: 1000;top:8px;">Industry</label>
                        <select name="seller_industry" id="seller_industry" data-placeholder="Choose your industry" class="chosen-select form-control" tabindex="2">
                            <option value="" style="display:none;">Choose your industry</option>
                            <option value="AdTech">AdTEch</option>
                            <option value="AI">AI</option>
                            <option value="Big Data">Big Data</option>
                            <option value="Business Intelligence">Business Intelligence</option>
                            <option value="HR Tech">HR Tech</option>
                            <option value="Classifieds">Classifieds</option>
                            <option value="CleanTech">CleanTech</option>
                            <option value="Cloud Computing">Cloud Computing</option>
                            <option value="Customer Support">Customer Support</option>
                            <option value="Data Science">Data Science</option>
                            <option value="Dating">Dating</option>
                            <option value="E-Commerce">E-Commerce</option>
                            <option value="EdTech">EdTech</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Fashion">Fashion</option>
                            <option value="FinTech">FinTech</option>
                            <option value="Fitness &#38; Wellness">Fitness &#38; Wellness</option>
                            <option value="Food &#38; Beverages">Food &#38; Beverages</option>
                            <option value="Funerals">Funerals</option>
                            <option value="Gaming">Gaming</option>
                            <option value="Government">Government</option>
                            <option value="Health Tech">Health Tech</option>
                            <option value="Hospitality">Hospitality</option>
                            <option value="Human Resources">Human Resources</option>
                            <option value="Insurance">Insurance</option>
                            <option value="Internet of Things">Internet of Things</option>
                            <option value="Legal">Legal</option>
                            <option value="Market Research">Market Research</option>
                            <option value="Media">Media</option>
                            <option value="Music">Music</option>
                            <option value="Publishing">Publishing</option>
                            <option value="Security">Security</option>
                            <option value="Social Networking">Social Networking</option>
                            <option value="Storage">Storage</option>
                            <option value="Technical Support">Technical Support</option>
                            <option value="Telecommunications">Telecommunications</option>
                            <option value="Transportation">Transportation</option>
                            <option value="Travel">Travel</option>
                            <option value="Travel">Other</option>
                        </select>
                    </div>
                    <div class="md-form form-group"> 
                        <span class="input-group-addon" style="position: absolute;bottom:0;width:2%;border-bottom: none !important;padding: 0rem; margin-bottom: 7px;">&#36;</span>
                        <input name="seller_mrr" id="seller_mrr" placeholder="Last month's MRR" type="text" class="form-control" maxlength="8" aria-label="Amount (to the nearest dollar)" aria-describedby="basic-addon2" style="padding-left: 3%;padding-right:3%;z-index:1000;width: 94%; margin-top: 2rem;">
                        <label for="seller_mrr">Last month's MRR</label>
                    </div>
                    <div class="md-form form-group">
                        <input name="seller_employees" id="seller_employees" placeholder="Employees" type="text" class="form-control" maxlength="5">
                        <label for="seller_name">Number of Employees</label>
                    </div>  
                    <div class="md-form input-group" style="margin: 2rem 0 1.5rem;width: 100%;">
                        <button id="captcha1" class="btn btn-primary g-recaptcha invisible-recaptcha" data-sitekey="6LezoyoUAAAAAFIwSsAQTtbrNVx3rV6hLa1ojYqs" data-callback='verifyCaptcha' type="submit" style="width: 100%;margin:0" onClick="ga('send', 'event', 'application form', 'submit', 'sellers');">Apply</button>
                    </div>
                    <div class="text-center">
                        <small class="checkbox-label">By clicking "Apply", you agree that you have read and accepted the <a href="<?php echo BASE_URL; ?>privacy" target="_blank" onClick="ga('send', 'event', 'privacy forms', 'click', 'sellers');">Privacy Policy</a> and <a href="<?php echo BASE_URL; ?>terms" target="_blank" onClick="ga('send', 'event', 'terms forms', 'click', 'sellers');">Terms of Use</a> </small>
                    </div> 
                </form>
                <div id="seller-success" style="display:none;">
                    <blockquote class='blockquote bq-primary text-center' style='border-right: none;text-align: left;padding-top:0;'>
                        <p id="seller-success-title" class='bq-title' style='padding-left: 0;'></p>
                    </blockquote>
                    <div class='text-center'>
                        <p id="seller-success-message"></p>
                    </div>
                </div>
                <div id="seller-error" style="display:none;">
                    <blockquote class='blockquote bq-warning text-center' style='border-left: none;padding-top:0;'>
                        <p id="seller-error-title" class='bq-title' style='padding-left: 0;'></p>
                    </blockquote>
                    <div class='text-center'>
                        <p id="seller-error-message"></p>
                    </div>
                </div>
                <div id="preloader1" style="display:none;margin:50px 0;" class="text-center"><img src="<?php echo BASE_URL; ?>img/preloader.gif" style="width:20%;"></div>
            </div>
        </div>
    </div>
</div>  
<!-- end of Seller modal --> 

<footer style="background-color:#37474f;">
            <div class="row" style="padding:0">
                <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12" style="display: flex;align-items: center;color: rgba(255,255,255,0.5);">
                    <!--<a href="https://saasnomad.com/" class="mb-1 logo" style="font-size:25px; margin: 0 !important;"><b>SaaSNomad</b></a>-->
                    <ul style="display:inline-block;">
                        <li>
                          <a href="<?php echo BASE_URL; ?>faq" class="text-uppercase" onClick="ga('send', 'event', 'faq footer', 'click', 'info');">
                            <b>FAQ</b>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo BASE_URL; ?>privacy" class="text-uppercase" onClick="ga('send', 'event', 'privacy footer', 'click', 'info');">
                            <b>Privacy</b>
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo BASE_URL; ?>terms" class="text-uppercase" onClick="ga('send', 'event', 'terms footer', 'click', 'info');">
                            <b>Terms</b>
                          </a>
                        </li>  
                      </ul>
                      <!--Back to top
                      <a id="go-back" class="mdl-typography--font-light btn btn-info btn-rounded" onClick="ga('send', 'event', 'go up', 'click', 'uxui');"><i class="fa fa-arrow-up" aria-hidden="true" style="margin-top: 4px;"></i></a>
                      -->
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-10 col-xs-12" style="text-align:right;color: rgba(255,255,255,0.5);">
                   <p style="margin: 1.5rem 0 1rem;font-size: .8rem;"><i class="fa fa-copyright" aria-hidden="true"></i> <span id="year">2017</span> SaaSNomad</p>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
            </div>   
</footer>


    <!-- SCRIPTS -->
    <!-- jQuery v2.0.3  -->
    <script type="text/javascript" src="js/jquery.min.js"></script> 
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script> 
    <script type="text/javascript">
        
    </script>
    <!-- Carousel -->
    <script type="text/javascript" src="js/slick.min.js"></script> 
    <script type="text/javascript" src="js/slick.js"></script> 
    <!-- Checkbox --> 
    <script type="text/javascript" src="js/checkbox.js"></script>
    <!-- Select Jquery Chosen Plugin-->
    <script type="text/javascript" src="js/chosen/chosen.jquery.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/chosen/init.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript">
        document.getElementById('calculator_region').setAttribute('style','display:visible; position:absolute; clip:rect(0,0,0,0)');
    </script>
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
    <script type="text/javascript" src="js/ajax/seller-waitlist-1.js"></script>
    <script type="text/javascript" src="js/ajax/seller-waitlist-2.js"></script>
    <script type="text/javascript" src="js/ajax/buyer-ajax.js"></script>
    <script type="text/javascript" src="js/ajax/requests-ajax.js"></script>
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
    <!-- Url Changes on Scoll Event -->
    <script type="text/javascript" src="js/anchors.js"></script>  
    <!-- Recaptcha --> 
    <script src='https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit' async defer></script>  
    <script>
        function verifyCaptcha(token){
            console.log('success!');
        };

        var onloadCallback = function() {
            $( ".invisible-recaptcha" ).each(function() {
                grecaptcha.render($( this ).attr('id'), {
                    'sitekey' : '6LdwRC0UAAAAAK0hjA8O4y1tViGPk9ypXEH_LU22',
                    'callback' : verifyCaptcha
                });
            });
        };
    </script>
    <!-- GA for slider -->
    <script type="text/javascript">
        var sliderArrowPrev;
        sliderArrowPrev = document.getElementsByClassName("slick-prev");
        sliderArrowPrev[0].setAttribute("onClick","ga('send', 'event', 'previous featured saas', 'click', 'uxui');");
        var sliderArrowNexr;
        sliderArrowNexr = document.getElementsByClassName("slick-next");
        sliderArrowNexr[0].setAttribute("onClick","ga('send', 'event', 'next featured saas', 'click', 'uxui');");
        
        var sliderDots = document.getElementsByClassName('slick-dots');
        sliderDots[0].setAttribute("id","dots");
        var sliderDots = document.getElementById('dots').childNodes;
        for (i = 0; i < sliderDots.length; ++i) {
            sliderDots[i].setAttribute("onClick","ga('send', 'event', 'featured carousel dots', 'click', 'uxui');");
        }
 
    </script>
    
    
</body>
</html>