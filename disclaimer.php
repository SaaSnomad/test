<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SaaSNomad | Disclaimer</title>
    <!-- Favicon -->
    <link rel="icon" href="img/logo.png" type="image/png" sizes="16x16"> 

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Google Font: Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <!-- Custom Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">
    <!-- MDL Select -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://rawgit.com/MEYVN-digital/mdl-selectfield/master/mdl-selectfield.min.css">
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>    
    <script defer src="https://rawgit.com/MEYVN-digital/mdl-selectfield/master/mdl-selectfield.min.js"></script> 
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css"> 
    <!-- Sidebar Scroll -->
    <link rel="stylesheet" type="text/css" href="css/sidebar-scroll.css">

</head>

<body>
<div id="top" class="content">
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <!--/.Header--> 

 
    <!-- Main container-->
    <div class="container-fluid" id="main">
        
            <div class="row" style="padding-top:100px;">
                <div class="col-lg-3 col-md-3 col-sm-1 hidden-xs"> </div>
                <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">  
                            <a href="<?php echo BASE_URL; ?>" class="custom-link"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-top: 2px;"></i> Go back to website</a>
                            <h1 style="margin:30px 0;">Disclaimer</h1>
                            <section id="disclaimer" style="padding-bottom: 100px;">
                            <p>Please note that this calculator is intended primarily for educational and entertainment purposes. Our goal is to highlight the key factors that investors tend to consider when evaluating the value of a potential investment, and to provide some directionally correct guidance. The actual results may make sense in some situations, but it will not in many others. There is no way that a 5-field calculator can capture the many unique attributes of your business, so please do not rely on this model to make any financial decisions.</p>
                            <p>
                            Also notice that we are not a broker or dealer or investment advisor and do not provide investment advice. We do not advise individuals as to the advisability of purchasing, or selling their business. Nothing provided by our service constitutes an offer or solicitation to buy or sell any security. Neither we nor recommend any particular financial products or services. Nothing contained in our service is intended to constitute professional advice, including but not limited to, investment or tax advice.
                            </p>
                            <p> 
                        </section> 
                <div class="col-lg-3 col-md-3 col-sm-1 hidden-xs"></div>
            </div> 
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
    </div>
    </div>
    <!--/ Main container-->

    <!--Footer-->
    <?php include 'includes/footer.php'; ?>
    <!--/.Footer-->



    <!-- SCRIPTS -->

    <!-- Load jquery via CDN -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
  
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
      
    <!-- MDL Select Script -->
    <script type="application/javascript" src="js/select.js"></script>
    <!-- /.MDL Select Script --> 
 
</body>

</html>