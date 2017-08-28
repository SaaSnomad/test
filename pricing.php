
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
                              <th><h4 class="plan" style="text-transform:uppercase;">Starter</h4></th>
                              <th><h4 class="plan" style="text-transform:uppercase;">Standard</h4></th>
                              <th><h4 class="plan" style="text-transform:uppercase;">Power</h4></th>
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
                              <td><a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#sellerModal" onClick="ga('send', 'event', 'apply pricing', 'click', 'sellers');">Start for free</a></td>
                              <td><a id="request-btn" class="btn btn-primary-default btn-link" style="font-size:0.9rem;" data-toggle="modal" data-target="#waitlist1Modal" onClick="ga('send', 'event', 'waitlist 1', 'click', 'sellers');">Join wait list</br><small>to get 40% off</small></a></td>
                              <td><a id="request-btn" class="btn btn-primary-default btn-link" style="font-size:0.9rem;" data-toggle="modal" data-target="#waitlist2Modal" onClick="ga('send', 'event', 'waitlist 2', 'click', 'sellers');">Join wait list</br><small>to get 50% off</small></a></td> 
                            </tr>
                          </tbody>
                        </table>  
              <a href="<?php echo BASE_URL; ?>#pricing-plans" class="custom-link" onClick="ga('send', 'event', 'go back to website', 'click', 'uxui');"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-top: 50px;"></i> Go back to website</a>
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
                                <h4 class="plan" style="text-transform:uppercase;">Starter</h4>
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Addition to our database*</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i><b>3</b> weeks featuring in our weekly newsletter for M&#38;A specialists (including the leads) + <b>1</b> time special featuring</li> 
                                        <!--<li><i class="fa fa-check" aria-hidden="true"></i><b>10</b> email addresses* and Linkedin profiles of corporate M&#38;A professionals and advisors</li> -->
                                        <li><i class="fa fa-check" aria-hidden="true"></i><b>10</b> days featuring on our website’s “Featured Companies” section</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Up to <b>5</b> contact sharings to interested investors</li> 
                                    </ul>
                                <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#sellerModal" onClick="ga('send', 'event', 'apply pricing', 'click', 'sellers');">Start for FREE</a>
                            </div>
                            <div class="col-sm-12 col-xs-12" id="pro">
                                <h4 class="plan" style="text-transform:uppercase;">Standard</h4>
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Addition to our database*</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i><b>10</b> weeks featuring in our weekly newsletter for M&#38;A specialists (including the leads) + <b>3</b> times special featuring</li> 
                                        <!--<li><i class="fa fa-check" aria-hidden="true"></i><b>100</b> email addresses* and linkedin profiles of corporate M&#38;A professionals and advisors</li> -->
                                        <li><i class="fa fa-check" aria-hidden="true"></i><b>30</b> days featuring on our website’s “Featured Companies” section</li>  
                                        <li><i class="fa fa-check" aria-hidden="true"></i><b>Unlimited</b> contact sharings to interested investors</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Expanded business profile</li>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Teaser document</li> 
                                    </ul>
                                <a id="request-btn" class="btn btn-primary-default btn-link" style="font-size:0.9rem;" data-toggle="modal" data-target="#waitlist1Modal" onClick="ga('send', 'event', 'waitlist 1', 'click', 'sellers');">Join wait list</br><small>to get 40% off</small></a>
                            </div>
                            <div class="col-sm-12 col-xs-12" id="ninja">
                                <h4 class="plan" style="text-transform:uppercase;">Power</h4>
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
                                <a id="request-btn" class="btn btn-primary-default btn-link" style="font-size:0.9rem;" data-toggle="modal" data-target="#waitlist2Modal" onClick="ga('send', 'event', 'waitlist 2', 'click', 'sellers');">Join wait list</br><small>to get 50% off</small></a>
                            </div>
                        </div>   
                    </div>
                </div>
                <a href="<?php echo BASE_URL; ?>" class="custom-link" onClick="ga('send', 'event', 'go back to website', 'click', 'uxui');"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-top: 50px;"></i> Go back to website</a>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
        </div>
    </section>
    <!--/Section: Pricing for Mobile -->
    
</div>
<!--/ Main container-->

<!-- MODALS --> 

<!-- 1st Wait List modal -->
<div class="modal fade" id="waitlist1Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="modal-body text-center">
                <div id="waitlist-1-header">
                  <h2 class="text-center">Join Wait List</h2>
                  <h3 style="font-weight: 600;"><b class="text-muted">to get 40% off</b></h3>
                  <h5>Be the first to get exclusive offer</h5>
                </div>
                <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                        <form id="waitlist-1" action="#" method="post"> 
                            <div class="md-form form-group">
                                <input name="waitlist1_email" id="waitlist1_email" placeholder="example@myemaildomain.com" type="email" class="form-control" maxlength="50" required>
                                <label for="waitlist1_email">Email *</label>
                            </div>
                            <div class="md-form form-group" style="margin-top: 44px;display:none;">
                                <input name="waitlist1_country" placeholder="Country" type="text" class="geotext[country]">
                            </div> 
                            <div class="md-form input-group" style="margin: 2rem 0 1.5rem;width: 100%;">
                                <button class="btn btn-primary" type="submit" style="width: 100%;margin:0" onClick="ga('send', 'event', 'waitlist 1 form', 'submit', 'sellers');">Get my 40% off</button>
                            </div>
                            <div class="text-center">
                                <small class="checkbox-label">By clicking the button, you agree that you have read and accepted the <a href="<?php echo BASE_URL; ?>privacy" target="_blank" onClick="ga('send', 'event', 'privacy forms', 'click', 'buyers');">Privacy Policy</a> and <a href="<?php echo BASE_URL; ?>terms" target="_blank" onClick="ga('send', 'event', 'terms forms', 'click', 'buyers');">Terms of Use</a> </small>
                            </div>
                        </form>
                        <div id="waitlist1-success" style="display:none;">
                            <blockquote class='blockquote bq-primary text-center' style='border-right: none;text-align: left;padding-top:0;'>
                                <p id="waitlist1-success-title" class='bq-title' style='padding-left: 0;'></p>
                            </blockquote>
                            <div class='text-center'>
                                <p id="waitlist1-success-message"></p>
                            </div>
                        </div>
                        <div id="waitlist1-error" style="display:none;">
                            <blockquote class='blockquote bq-warning text-center' style='border-left: none;padding-top:0;'>
                                <p id="waitlist1-error-title" class='bq-title' style='padding-left: 0;'></p>
                            </blockquote>
                            <div class='text-center'>
                                <p id="waitlist1-error-message"></p>
                            </div>
                        </div>
                        <div id="preloader5" style="display:none;margin:50px 0;" class="text-center"><img src="<?php echo BASE_URL; ?>img/preloader.gif" style="width:20%;"></div> 
                    </div>  
                </div>  
            </div>
        </div>
    </div>
</div>
<!-- end of 1st Wait List modal -->

<!-- 2nd Wait List modal -->
<div class="modal fade" id="waitlist2Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="modal-body text-center">
                <div id="waitlist-2-header">
                  <h2 class="text-center">Join Wait List</h2>
                  <h3 style="font-weight: 600;"><b class="text-muted">to get 50% off</b></h3>
                  <h5>Be the first to get exclusive offer</h5>
                </div>
                <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                        
                        <form id="waitlist-2" action="#" method="post">
                            <div class="md-form form-group">
                                <input name="waitlist2_email" id="waitlist2_email" placeholder="example@myemaildomain.com" type="email" class="form-control" maxlength="50" required>
                                <label for="waitlist2_email">Email *</label>
                            </div>
                            <div class="md-form form-group" style="margin-top: 44px;display:none;">
                                <input name="waitlist2_country" placeholder="Country" type="text" class="geotext[country]">
                            </div> 
                            <div class="md-form input-group" style="margin: 2rem 0 1.5rem;width: 100%;">
                                <button class="btn btn-primary" type="submit" style="width: 100%;margin:0" onClick="ga('send', 'event', 'waitlist 2 form', 'submit', 'sellers');">Get my 50% off</button>
                            </div>
                            <div class="text-center">
                                <small class="checkbox-label">By clicking the button, you agree that you have read and accepted the <a href="<?php echo BASE_URL; ?>privacy" target="_blank" onClick="ga('send', 'event', 'privacy forms', 'click', 'buyers');">Privacy Policy</a> and <a href="<?php echo BASE_URL; ?>terms" target="_blank" onClick="ga('send', 'event', 'terms forms', 'click', 'buyers');">Terms of Use</a> </small>
                            </div>
                        </form>
                        <div id="waitlist2-success" style="display:none;">
                            <blockquote class='blockquote bq-primary text-center' style='border-right: none;text-align: left;padding-top:0;'>
                                <p id="waitlist2-success-title" class='bq-title' style='padding-left: 0;'></p>
                            </blockquote>
                            <div class='text-center'>
                                <p id="waitlist2-success-message"></p>
                            </div>
                        </div>
                        <div id="waitlist2-error" style="display:none;">
                            <blockquote class='blockquote bq-warning text-center' style='border-left: none;padding-top:0;'>
                                <p id="waitlist2-error-title" class='bq-title' style='padding-left: 0;'></p>
                            </blockquote>
                            <div class='text-center'>
                                <p id="waitlist2-error-message"></p>
                            </div>
                        </div>
                        <div id="preloader6" style="display:none;margin:50px 0;" class="text-center"><img src="<?php echo BASE_URL; ?>img/preloader.gif" style="width:20%;"></div> 
                    </div>  
                </div>  
            </div>
        </div>
    </div>
</div>
<!-- end of 2nd Wait List modal -->
 
<!--Footer-->
<?php include 'includes/footer.php'; ?>
<!--/.Footer-->
