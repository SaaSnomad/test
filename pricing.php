
<?php include 'includes/header.php'; ?> 
<!-- Main container-->
<style>
        .show {
            display:block;
        }
        .hide {
            display:none;
        } 
        #pricing-section, #pricing-section-mobile {
            padding-top:120px;
            padding-bottom:100px;
        }
</style>
<div class="container-fluid" id="main">
 

    <!--Section Pricing -->
    <section id="pricing-section">
        <div class="text-center title-wrapper">
            <h1>Pricing</h1> 
        </div>
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <table class="table table-hover" id="pricing-table">
                          <thead>
                            <tr>
                              <th></th>
                              <th><h3 class="plan"><b class="text-muted">Starter</b></h3></th>
                              <th><h3 class="plan"><b class="text-muted">Standard</b></h3></th>
                              <th><h3 class="plan"><b class="text-muted">Power</b></h3></th>
                            </tr>
                          </thead>
                          <tbody>  
                            <tr>
                              <th scope="row">Addition to our database*</th>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>  
                            <tr>
                              <th scope="row">Featuring in our weekly newsletter for M&#38;A specialists (including the leads) + special featuring</th>
                              <td><b>3</b> weeks</br>+ <b>1</b> time special featuring</td>
                              <td><b>10</b> weeks</br>+ <b>3</b> times special featuring</td>
                              <td><b>20</b> weeks</br>+ <b>3</b> times special featuring</td>
                            </tr> 
                            <tr>
                              <th scope="row">Featuring on our website’s &#8220;Featured Companies&#8221; section</th>
                              <td><b>10</b> days</td>
                              <td><b>30</b> days</td>
                              <td><b>90</b> days</td>
                            </tr>
                            <tr>
                              <th scope="row">Contact sharings to interested investors</th>
                              <td>Up to <b>5</b></td>
                              <td><b>Unlimited</b></td>
                              <td><b>Unlimited</b></td>
                            </tr>
                            <tr>
                              <th scope="row">Expanded business profile</th>
                              <td><i class="fa fa-times" aria-hidden="true"></i></td>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                              <th scope="row">Teaser document</th>
                              <td><i class="fa fa-times" aria-hidden="true"></i></td>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                              <th scope="row">Curated short-listing and ranking</th>
                              <td><i class="fa fa-times" aria-hidden="true"></i></td>
                              <td><i class="fa fa-times" aria-hidden="true"></i></td>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                              <th scope="row">Personal account manager</th>
                              <td><i class="fa fa-times" aria-hidden="true"></i></td>
                              <td><i class="fa fa-times" aria-hidden="true"></i></td>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                              <th scope="row">Stealth marketing</th>
                              <td><i class="fa fa-times" aria-hidden="true"></i></td>
                              <td><i class="fa fa-times" aria-hidden="true"></i></td>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                            <tr>
                              <th scope="row"></th>
                              <td><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#sellerModal">Start for free</a></td>
                              <td><a id="request-btn" class="btn btn-primary-default btn-link" style="font-size:0.9rem;" data-toggle="modal" data-target="#proPlanModal">Join wait list</br><small>to get 40% off</small></a></td>
                              <td><a id="request-btn" class="btn btn-primary-default btn-link" style="font-size:0.9rem;" data-toggle="modal" data-target="#ninjaPlanModal">Join wait list</br><small>to get 50% off</small></a></td> 
                            </tr>
                          </tbody>
                        </table>  
              <a href="<?php echo BASE_URL; ?>" class="custom-link"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-top: 50px;"></i> Go back to website</a>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
        </div>
    </section>
    <!--/Section: Pricing -->

    <!--Section Pricing for Mobile -->
    <section id="pricing-section-mobile">
        <div class="text-center title-wrapper">
            <h1>Pricing</h1> 
        </div>
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <div class="card text-center">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12" id="free">
                                <h3 class="plan"><b class="text-muted">Starter</b></h3>
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Addition to our database*</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i><b>3</b> weeks featuring in our weekly newsletter for M&#38;A specialists (including the leads) + <b>1</b> time special featuring</li> 
                                        <!--<li><i class="fa fa-check" aria-hidden="true"></i><b>10</b> email addresses* and Linkedin profiles of corporate M&#38;A professionals and advisors</li> -->
                                        <li><i class="fa fa-check" aria-hidden="true"></i><b>10</b> days featuring on our website’s “Featured Companies” section</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Up to <b>5</b> contact sharings to interested investors</li> 
                                    </ul>
                                <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#sellerModal">Start for FREE</a>
                            </div>
                            <div class="col-sm-12 col-xs-12" id="pro">
                                <h3 class="plan"><b class="text-muted">Standard</b></h3>
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Addition to our database*</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i><b>10</b> weeks featuring in our weekly newsletter for M&#38;A specialists (including the leads) + <b>3</b> times special featuring</li> 
                                        <!--<li><i class="fa fa-check" aria-hidden="true"></i><b>100</b> email addresses* and linkedin profiles of corporate M&#38;A professionals and advisors</li> -->
                                        <li><i class="fa fa-check" aria-hidden="true"></i><b>30</b> days featuring on our website’s “Featured Companies” section</li>  
                                        <li><i class="fa fa-check" aria-hidden="true"></i><b>Unlimited</b> contact sharings to interested investors</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Expanded business profile</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Teaser document</li> 
                                    </ul>
                                <a id="request-btn" class="btn btn-primary-default btn-link" style="font-size:0.9rem;" data-toggle="modal" data-target="#proPlanModal">Join wait list</br><small>to get 40% off</small></a>
                            </div>
                            <div class="col-sm-12 col-xs-12" id="ninja">
                                <h3 class="plan"><b class="text-muted">Power</b></h3>
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Addition to our database*</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i><b>20</b> weeks featuring in our weekly newsletter for M&#38;A specialists (including the leads) + <b>3</b> times special featuring</li> 
                                        <!--<li><i class="fa fa-check" aria-hidden="true"></i><b>Full access</b> to our database of corporate M&#38;A professionals and advisors</li> -->
                                        <li><i class="fa fa-check" aria-hidden="true"></i><b>90</b> days featuring on our website’s “Featured Companies” section</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i><b>Unlimited</b> contact sharings to interested investors</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Expanded business profile</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Teaser document</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Curated short-listing and ranking</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Personal account manager</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Stealth marketing</li>
                                    </ul>
                                <a id="request-btn" class="btn btn-primary-default btn-link" style="font-size:0.9rem;" data-toggle="modal" data-target="#ninjaPlanModal">Join wait list</br><small>to get 50% off</small></a>
                            </div>
                        </div>   
                    </div>
                </div>
                <a href="<?php echo BASE_URL; ?>" class="custom-link"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-top: 50px;"></i> Go back to website</a>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
        </div>
    </section>
    <!--/Section: Pricing for Mobile -->
    
</div>
<!--/ Main container-->

<!-- MODALS -->


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
                        <select name="seller_industry" id="seller_industry" data-placeholder="Industry" class="chosen-select form-control" tabindex="2">
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
                        <button class="btn btn-primary" class="g-recaptcha" data-sitekey="6LezoyoUAAAAAFIwSsAQTtbrNVx3rV6hLa1ojYqs" data-callback="YourOnSubmitFn" type="submit" style="width: 100%;margin:0" onClick="ga('send', 'event', 'application form', 'submit', 'sellers');">Apply</button>
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
                <div id="preloader1" style="display:none;margin:50px 0;" class="text-center"><img src="img/preloader.gif" style="width:20%;"></div>
            </div>
        </div>
    </div>
</div>  
<!-- end of Seller modal -->

<!-- Wait List Pro modal -->
<div class="modal fade" id="proPlanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="modal-body text-center">
                <div id="pro-plan-header">
                  <h2 class="text-center">Join Wait List</h2>
                  <h3 style="font-weight: 600;"><b class="text-muted">to get 40% off</b></h3>
                  <h5>Be the first to get exclusive offer</h5>
                </div>
                <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                        <form id="pro-plan-waitlist" action="#" method="post">
                            <div class="md-form form-group">
                                <input name="pro_plan_name" id="pro_plan_name" placeholder="John Doe" type="text" class="form-control" maxlength="50" required>
                                <label for="pro_plan_name">Name *</label>
                            </div>
                            <div class="md-form form-group">
                                <input name="pro_plan_email" id="pro_plan_email" placeholder="example@myemaildomain.com" type="email" class="form-control" maxlength="50" required>
                                <label for="pro_plan_email">Email *</label>
                            </div>
                            <div class="md-form form-group" style="margin-top: 44px;display:none;">
                                <input name="pro_plan_country" placeholder="Country" type="text" class="geotext[country]">
                            </div> 
                            <div class="md-form input-group" style="margin: 2rem 0 1.5rem;width: 100%;">
                                <button class="btn btn-primary" type="submit" style="width: 100%;margin:0" onClick="ga('send', 'event', 'get notified', 'submit', 'buyers');">Get my 40% off</button>
                            </div>
                            <div class="text-center">
                                <small class="checkbox-label">By clicking the button, you agree that you have read and accepted the <a href="<?php echo BASE_URL; ?>privacy" target="_blank" onClick="ga('send', 'event', 'privacy forms', 'click', 'buyers');">Privacy Policy</a> and <a href="<?php echo BASE_URL; ?>terms" target="_blank" onClick="ga('send', 'event', 'terms forms', 'click', 'buyers');">Terms of Use</a> </small>
                            </div>
                        </form>
                        <div id="pro-plan-success" style="display:none;">
                            <blockquote class='blockquote bq-primary text-center' style='border-right: none;text-align: left;padding-top:0;'>
                                <p id="pro-plan-success-title" class='bq-title' style='padding-left: 0;'></p>
                            </blockquote>
                            <div class='text-center'>
                                <p id="pro-plan-success-message"></p>
                            </div>
                        </div>
                        <div id="pro-plan-error" style="display:none;">
                            <blockquote class='blockquote bq-warning text-center' style='border-left: none;padding-top:0;'>
                                <p id="pro-plan-error-title" class='bq-title' style='padding-left: 0;'></p>
                            </blockquote>
                            <div class='text-center'>
                                <p id="pro-plan-error-message"></p>
                            </div>
                        </div>
                        <div id="preloader5" style="display:none;margin:50px 0;" class="text-center"><img src="img/preloader.gif" style="width:20%;"></div> 
                    </div>  
                </div>  
            </div>
        </div>
    </div>
</div>
<!-- end of Wait List Pro modal -->

<!-- Wait List Ninja modal -->
<div class="modal fade" id="ninjaPlanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="modal-body text-center">
                <div id="ninja-plan-header">
                  <h2 class="text-center">Join Wait List</h2>
                  <h3 style="font-weight: 600;"><b class="text-muted">to get 50% off</b></h3>
                  <h5>Be the first to get exclusive offer</h5>
                </div>
                <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                        
                        <form id="ninja-plan-waitlist" action="#" method="post">
                            <div class="md-form form-group">
                                <input name="ninja_plan_name" id="ninja_plan_name" placeholder="John Doe" type="text" class="form-control" maxlength="50" required>
                                <label for="ninja_plan_name">Name *</label>
                            </div>
                            <div class="md-form form-group">
                                <input name="ninja_plan_email" id="ninja_plan_email" placeholder="example@myemaildomain.com" type="email" class="form-control" maxlength="50" required>
                                <label for="ninja_plan_email">Email *</label>
                            </div>
                            <div class="md-form form-group" style="margin-top: 44px;display:none;">
                                <input name="ninja_plan_country" placeholder="Country" type="text" class="geotext[country]">
                            </div> 
                            <div class="md-form input-group" style="margin: 2rem 0 1.5rem;width: 100%;">
                                <button class="btn btn-primary" type="submit" style="width: 100%;margin:0" onClick="ga('send', 'event', 'get notified', 'submit', 'buyers');">Get my 50% off</button>
                            </div>
                            <div class="text-center">
                                <small class="checkbox-label">By clicking the button, you agree that you have read and accepted the <a href="<?php echo BASE_URL; ?>privacy" target="_blank" onClick="ga('send', 'event', 'privacy forms', 'click', 'buyers');">Privacy Policy</a> and <a href="<?php echo BASE_URL; ?>terms" target="_blank" onClick="ga('send', 'event', 'terms forms', 'click', 'buyers');">Terms of Use</a> </small>
                            </div>
                        </form>
                        <div id="ninja-plan-success" style="display:none;">
                            <blockquote class='blockquote bq-primary text-center' style='border-right: none;text-align: left;padding-top:0;'>
                                <p id="ninja-plan-success-title" class='bq-title' style='padding-left: 0;'></p>
                            </blockquote>
                            <div class='text-center'>
                                <p id="ninja-plan-success-message"></p>
                            </div>
                        </div>
                        <div id="ninja-plan-error" style="display:none;">
                            <blockquote class='blockquote bq-warning text-center' style='border-left: none;padding-top:0;'>
                                <p id="ninja-plan-error-title" class='bq-title' style='padding-left: 0;'></p>
                            </blockquote>
                            <div class='text-center'>
                                <p id="ninja-plan-error-message"></p>
                            </div>
                        </div>
                        <div id="preloader6" style="display:none;margin:50px 0;" class="text-center"><img src="img/preloader.gif" style="width:20%;"></div> 
                    </div>  
                </div>  
            </div>
        </div>
    </div>
</div>
<!-- end of Wait List Ninja modal -->
 
<!--Footer-->
<?php include 'includes/footer.php'; ?>
<!--/.Footer-->
