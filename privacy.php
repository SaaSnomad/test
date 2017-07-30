    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <!--/.Header--> 

    <style>
        h3 {
            margin: 2rem 0 1rem;
        }
        ul li {
            list-style-type: disc;
            margin-bottom: 10px;
            margin-left: 20px;
        }
    </style>

    <!-- Main container-->
    <div class="container-fluid" id="main" style="margin-bottom: 100px;">
        
        <section id="privacy"> 
            <div class="row" style="padding-top:100px;">
                <div class="col-lg-3 col-md-3 col-sm-1 hidden-xs"> </div>
                <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">  
                    <div id="content">
                        <section id="personal">
                        <a href="<?php echo BASE_URL; ?>" class="custom-link"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-top: 2px;"></i> Go back to website</a>
                        <h1 style="margin: 30px 0;">Privacy Policy</h1>
                            <h3>Personal Information</h3>
                            <p>
                                We collect personal information for various business purposes when you interact with us, such as providing you with a subscription, processing your order, responding to requests for service or assistance, creating and improving our products and services, suggesting additional or different products or services, and protecting our rights and property. We collect information about you in two basic ways: First, we receive information directly from you. Second, through use of Google technologies, we keep track of your interactions.
                            </p>
                        </section>
                        <section id="uses">
                            <h3>Uses of Information</h3>
                            <p>
                                Your information is used to fulfill your requests and communicate with you, operate, support and improve our site, products and services, conduct internal research, and personalize the content, products, services and advertisements offered to you.
                            </p>
                        </section>
                        <section id="choice">
                            <h3>Your Choices</h3>
                            <ul style="list-style-type: disc;">
                                <li>You can stop receiving promotional emails from us by following the instructions in the email you receive.</li>
                                <li>You may cancel your registration or deactivate your account, or update your preferences at any time.</li>
                                <!--<li>You can manage cookies using your browser controls.</li>-->
                                <!--<li>You can opt out of the use of certain cookies.</li>-->
                                <li>Individual products or services may offer additional controls or preferences.</li>
                            </p>
                        </section>
                        <section id="sharing">
                            <h3>Information Sharing</h3>
                            <p>
                                We do not sell, rent or provide your personal information to third parties that are unaffiliated with SaaSNomad. Your personal information is shared with third parties with your consent, except in circumstances where the law requires it to be shared. 
                            </p>
                        </section>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-1 hidden-xs"></div>
            </div> 
        </section>
        <!--/Section: --> 
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
                                    <option value=""></option>
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
                            <!--<div class="md-form form-group" style="margin-bottom: 2.5rem;">
                                <div class="rkmd-checkbox checkbox-ripple">
                                    <label class="input-checkbox checkbox-indigo" style="margin-bottom:0;">
                                        <input type="checkbox" id="checkbox-1" required> 
                                        <span class="checkbox"></span> 
                                    </label> 
                                    <small for="checkbox-1" class="checkbox-label">I agree to the <a href="privacy.php" target="_blank">Privacy Policy</a> and <a href="terms.php" target="_blank">Terms of Use</a> </small> </div>
                            </div>-->
                            <div class="md-form input-group" style="margin: 2rem 0 1.5rem;width: 100%;">
                                <button class="btn btn-primary" type="submit" style="width: 100%;margin:0" onClick="ga('send', 'event', 'application form', 'submit', 'sellers');">Apply</button>
                            </div>
                            <div class="text-center">
                                <small class="checkbox-label">By clicking "Apply", you agree that you have read and accepted the <a href="privacy.php" target="_blank" onClick="ga('send', 'event', 'privacy forms', 'click', 'sellers');">Privacy Policy</a> and <a href="terms.php" target="_blank" onClick="ga('send', 'event', 'terms forms', 'click', 'sellers');">Terms of Use</a> </small>
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

    </div>
    <!--/ Main container-->

    <!--Footer-->
    <?php include 'includes/footer.php'; ?>
    <!--/.Footer-->

 