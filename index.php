<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="SaaS for sale">
    <meta name="keywords" content="Small Businesses For Sale, ">    

    <title>Welcome to SaaSNomad</title>
    <!-- Favicon -->
    <link rel="icon" href="img/logo.png" type="image/png" sizes="16x16"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
     <!-- Google Font: Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet"> 
    <!-- Custom Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Select Jquery Chosen Plugin-->
    <link rel="stylesheet" href="css/chosen.css"> 
    <!-- Checkbox -->
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="stylesheet" href="css/checkbox.css"> 
    <!-- Carousel -->
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css'>
    <link rel="stylesheet" href="css/slick.css">
    <!-- Load More -->
    <link rel="stylesheet" href="css/load-more.css">
    <!-- Dots -->
    <link rel="stylesheet" href="css/dots.css"> 
    <!-- Recaptcha  
    <script src='https://www.google.com/recaptcha/api.js'></script>  -->   
    <style>
        .show {
            display:block;
        }
        .hide {
            display:none;
        }
        #about-section .steps {
            border: 0;
            border-radius: 50%;
            padding: 2px 10px;
            margin-right: 10px;
            color: #fff;
            background-color: #4285F4;
            opacity: 0.7;
        }
        #about-section .blockquote {
            padding: 1.3rem 3rem !important;
        }
    </style>
               
</head>
<body>
<?php include 'core/init.php'; ?>
<?php include 'helpers/db_helper.php'; ?>

<!-- Fetch all cards in Featured Companies Section from DB -->
<?php  
    // Create  DB Object
    $db = new Database();
    // Run Query 
    $db->query("SELECT * FROM cards");
    // Assign Result Set
    $cards = $db->resultset();
?>

<!-- Fetch all news in News Section from DB -->
<?php  
    // Create  DB Object
    $db = new Database();
    // Run Query 
    $db->query("SELECT * FROM news");
    // Assign Result Set
    $news = $db->resultset();
?>

<!-- Fetch all Applications from DB -->
<?php  
    // Create  DB Object
    $db = new Database();
    // Run Query 
    $db->query("SELECT * FROM sellers");
    // Assign Result Set
    $sellers = $db->resultset();
?>
<!-- Header -->
<?php include 'includes/header.php'; ?>
<!--/.Header-->


<!-- Main container-->
<div class="container-fluid" id="main">

    <!-- Landing -->
    <div class="row" id="landing">
        <div id="left-side" class="col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
            <div class="main-text">
                <h1 class="display-4">Anonymously</br>place your SaaS</br>for sale</h1> <a id="apply-main" class="btn btn-secondary" data-toggle="modal" data-target="#sellerModal"> apply</br>for free </a>
                <h3 class="text-center text-muted display-4" style="margin-top: 0.5rem;"><span class="counter" id="getTotalApplications"></span></h3>
                <h3 class="text-center text-muted">companies applied</h3> 
            </div>
        </div>
        <div id="right-side" class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight z-depth-1" data-wow-delay="0.2s">
            <div id="calculator-wrapper" class="white-text">
                <h3 class="text-uppercase mb-1" style="margin: 2rem 2rem 1rem;"><b>Get your valuation range</b></h3>
                <div class="row form-wrapper">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                        <form id="calculator" action="#" role="form" method="POST" onsubmit="return checkForm(this);">
                            <div class="md-form form-group" style="width: 100%;margin-top: 0.8rem;margin-bottom: -13px;">
                                <select id="calculator_region" name="calculator_region" data-placeholder="Choose a Region *" class="chosen-select" tabindex="2" required>
                                    <option value=''></option>
                                    <option value='North America'>North America</option>
                                    <option value='Europe'>Europe</option>
                                    <option value='Asia'>Asia</option>
                                    <option value='Other'>Other</option>
                                </select>
                            </div>

                            <div class="md-form form-group"> 
                                <span class="input-group-addon" style="position: absolute;top: 6px;width:2%;border-bottom: none !important;padding-left: 0;padding-right: 0;">&#36;</span>
                                <input type="text" name="calculator_mrr" id="calculator_mrr" placeholder="Last Month MRR *" class="form-control change" maxlength="7" aria-label="Amount (to the nearest dollar)" style="padding-left: 6%;width: 94%;" required> 
                            </div>
                            
                            <div class="md-form form-group"> 
                                <span class="input-group-addon" style="position: absolute;top: 6px;width:2%;border-bottom: none !important;padding-left: 0;padding-right: 0;">%</span>
                                <input type="text" name="calculator_mrr_growth" id="calculator_mrr_growth" placeholder="MRR Monthly Growth *" class="form-control change" maxlength="3" aria-label="Amount (to the nearest dollar)" style="padding-left: 7%;width: 93%;" required> 
                            </div>
                            
                            <div class="md-form form-group"> 
                                <span class="input-group-addon" style="position: absolute;top: 6px;width:2%;border-bottom: none !important;padding-left: 0;padding-right: 0;">%</span>
                                <input type="text" name="calculator_margin" id="calculator_margin" placeholder="Gross Margin *" class="form-control change" maxlength="3" aria-label="Amount (to the nearest dollar)" style="padding-left: 7%;width: 93%;" required></div>
                            <div class="md-form form-group"> 
                                <span class="input-group-addon" style="position: absolute;top: 6px;width:2%;border-bottom: none !important;padding-left: 0;padding-right: 0;">&#36;</span>
                                <input type="text" name="calculator_burn" id="calculator_burn" placeholder="Monthly Cash Burn *" class="form-control change" maxlength="7" aria-label="Amount (to the nearest dollar)" style="padding-left: 6%;width: 94%;" required> 
                            </div>
                            <!-- Calculator Number of Employees <div class="md-form form-group"> <input type="text" name="calculatorEmployees" id="calculatorEmployees" placeholder="Number of Employees *" class="form-control change" maxlength="4" aria-label="Amount (to the nearest dollar)" required> </div>-->
                            <div class="md-form form-group">
                                <input type="email" name="calculator_email" id="calculatorEmail" placeholder="Type Your Email *" class="form-control change" maxlength="50" required> 
                            </div>
                            <input class="range-from" type="text" name="range_from" style="display:none;" />
                            <input class="range-to" type="text" name="range_to" style="display:none;" />
                            <input class="geotext[country]" type="text" name="calculator_location" style="display:none;" />
                            <div class="md-form form-group" id="calculate-block" style="margin:2rem 0 0;">
                                <button type="submit" class="btn" name="calculate-btn" id="calculate-btn" style="width:100%;background-color: #0275d8;padding: 0.85rem 1rem;margin:0;">Calculate</button>
                            </div>
                            <div class="md-form form-group" id="refresh-block" style="margin:2rem 0 0;display:none;">
                                <a class="btn" href="index.php" id="refresh-btn" style="width:100%;background-color: #0275d8;padding: 0.85rem 1rem;margin:0;">Please Refresh <i class="fa fa-refresh" aria-hidden="true" style="color:white;"></i></a>
                            </div>
                        </form>

                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div id="preloader-calculator" style="margin-top:180px;" class="text-center hide"><img src="img/preloader.gif" style="width:20%;"></div>
                        <div id="valuation-range">
                            <h4 style="margin-bottom:0;margin-top:5rem;">From:</h4>
                            <div class="md-form form-group"> 
                                <span class="input-group-addon-from">&#36;</span>
                                <input type="text" placeholder="0" class="range-from form-control change" disabled maxlength="11" aria-label="Amount (to the nearest dollar)"> </div>
                            <h4 class="calculator" style='margin-top: 3rem;'>To:</h4>
                            <div class="md-form form-group"> 
                                <span class="input-group-addon-to">&#36;</span>
                                <input type="text" placeholder="0" class="range-to form-control change" disabled maxlength="11" aria-label="Amount (to the nearest dollar)"> </div>
                            </br> <small>The model above is intended more for educational purposes than for performing serious valuations. Please read this <a href="disclaimer.php" target="_blank" id="disclaimer">Important Disclaimer.</a></small> <small>We respect your privacy and will not spam you.</small> 
                        </div>
                        <div id="unicorn-wrapper" class="text-center hide">
                            <img id="unicorn" src="img/unicorn.png"><h3><b>Congrats, you got a Unicorn!</b></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Section: Landing--> 

    <!--Section: Why Us-->
    <section id="why-us-section">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div id="dots">
                    <div class="dot">
                        <div class="centraldot1"></div>
                        <div class="wave1"></div>
                        <div class="wave1.2"></div>
                    </div>
                    <div class="dot">
                        <div class="centraldot2"></div>
                        <div class="wave2"></div>
                        <div class="wave2.2"></div>
                    </div>
                    <div class="dot">
                        <div class="centraldot3"></div>
                        <div class="wave3"></div>
                        <div class="wave3.2"></div>
                    </div>
                    <div class="dot">
                        <div class="centraldot4"></div>
                        <div class="wave4"></div>
                        <div class="wave4.2"></div>
                    </div>
                    <div class="dot">
                        <div class="centraldot5"></div>
                        <div class="wave5"></div>
                        <div class="wave5.2"></div>
                    </div>
                    <div class="dot">
                        <div class="centraldot6"></div>
                        <div class="wave6"></div>
                        <div class="wave6.2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 align-middle" style="padding-left: 0;">
                <h2 class="display-4" style="margin-top: 50px;">HIGH VALUES</h2><h4>Our success is not only due to the quality of our work; it’s down to attitude, our approach and the way we treat our clients.</h4>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
        </div>
    </section>
    <!--/Section: Why Us --> 

    <!--Section: About-->
    <section id="about-section">
        <div class="text-center text-muted">
            <h2>How it Works</h2> 
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs-down left-side" style="padding-right: 0;">
                <blockquote class="blockquote bq-primary">
                    <p class="bq-title" style="margin-right: 57px;"><span class="steps">1</span>Apply for Free</p>
                </blockquote>
                <blockquote class="blockquote bq-primary">
                    <p class="bq-title"><span class="steps">2</span>Buyers Get Notified</p>
                </blockquote>
                <blockquote class="blockquote bq-primary">
                    <p class="bq-title" style="margin-right: 50px;"><span class="steps">3</span>Receive Offers</p>
                </blockquote>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 right-side">
                <h3 style="display:none;">Apply SaaS for Review</h3>
                <p>Describe the state of your business</br>so that the potential buyer will be</br>able to assess your proposal</p>
                <h3 style="display:none;">Buyers Get Notified</h3>
                <p>Following the review of your application</br>our specialist will send it to the buyers </br>in our Database with relevant criterias</p>
                <h3 style="display:none;">Receive Offers</h3>
                <p>Buyers that have shown interest</br>will request more details. Then you</br>decide to whom to reveal your contact</p>
            </div>
        </div>
    </section>
    <!--/Section: About--> 

    <!--Section: Featured Companies -->        
    <section id="featured-companies">
        <div class="text-center title-wrapper text-muted">
            <h2>Featured Companies</h2> 
        </div>
        <div class="slider">
            <?php foreach($cards as $card) : ?>
            <article>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="background-color:#37474f;color:#fff;opacity:0.8;">
                        <div class="card-block">
                            <h4 class="card-title"><?php echo $card->industry; ?></h4>
                            <p class="card-text">
                                <?php echo $card->traction; ?>
                                <br><?php echo $card->employees; ?> Employees
                                <br><?php echo $card->country; ?></p><a href="<?php echo $card->id; ?>-contacts.php" class="btn btn-primary-default btn-link text-right mdl-button mdl-button--raised mdl-js-button" target="_blank">Request Contact</a> </div>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </section> 
    <!--/Section: Featured Companies-->

    <!--Section: For Buyers-->
    <section id="buyers-section">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
            <div class="col-lg-10 col-md-10 col-sm-112 col-xs-12 text-center buyers-section">
                <h2 class="display-4 white-text">For Buyers</h2>
                <p class="white-text"> SaaSNomad is the place where you can find the SaaS</br>to buy according to your criterias </p>
                <a id="buyer-ajax" class="btn btn-outline-success" data-toggle="modal" data-target="#buyerModal">Get notified</a> 
                <a id="buyer-find" href="coming-soon-subscribers.php" class="btn btn-outline-success">Find SaaS</a> 
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
        </div>
    </section>
    <!--Section: For Buyers-->        
        
    <!--Section: News-->
    <section id="news-section">
        <div class="text-center title-wrapper text-muted">
            <h2>Latest articles on SaaS M&A</h2> 
        </div>
        <div class="row" style="padding-top:0;">
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <div class="news-wrapper">
                    <section id="content">
                        <div id="container">
                            <div class="row news text-left" style="display: flex;align-items:stretch;">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 first-block">
                                    <div id="wrapper">
                                        <?php foreach($news as $news_item) : ?>
                                        <div class="news-item">
                                            <a href="<?php echo $news_item->news_link; ?>" class="article" target="_blank">
                                                <h4><?php echo $news_item->news_title; ?></h4>
                                                <p class="text-muted"><?php echo $news_item->news_summary; ?></p>
                                            </a>    
                                            <span class="text-muted"><?php echo $news_item->news_date_posted; ?> 
                                                <b><?php echo $news_item->news_source; ?></b>
                                            </span>         
                                        </div>
                                        <?php endforeach; ?>
                                        <div class="text-center" style="margin-top:40px;"> <a href="#" id="loadMore" class="custom-link">Load More</a> </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 white-text second-block">
                                    <div class="news-subscription">
                                        <p style="margin-bottom: 15px;" id="subscribe-msg">Subscribe here and we will keep you in the loop on the latest SaaS M&#38;A news</p>
                                        <form id="subscribers-for-news" action="#" method="POST" role="form">
                                            <div class="md-form form-group">
                                                <input placeholder="example@myemaildomain.com" type="email" name="news_email" id="news_email" class="form-control change" maxlength="50" required>
                                                <label for="news_email">Email *</label>
                                            </div>
                                            <div class="md-form form-group" style="margin-top: 44px;display:none;">
                                                <input type="text" name="news_country" class="geotext[country]" id="news_country"> </div>
                                            <div class="md-form input-group" style="margin: 20px 0;width: 100%;">
                                                <button class="btn btn-primary btn-lg" type="submit">Subscribe</button>
                                            </div>
                                        </form>
                                        <div id="news-success" style="display:none;">
                                            <blockquote class='blockquote bq-primary' style='border-right: none;text-align: left;padding:0;'>
                                                <p id="news-success-title" class='bq-title' style='padding-left: 0;'></p>
                                            </blockquote>
                                            <div>
                                                <p id="news-success-message"></p>
                                            </div>
                                        </div>
                                        <div id="news-error" style="display:none;">
                                            <blockquote class='blockquote bq-warning' style='border-left: none;padding:0;'>
                                                <p id="news-error-title" class='bq-title' style='padding-left: 0;'></p>
                                            </blockquote>
                                            <div>
                                                <p id="news-error-message"></p>
                                            </div>
                                        </div>
                                        <div id="preloader" style="display:none;margin-top:50px;" class="text-center"><img src="img/preloader.gif" style="width:20%;"></div>
                                    </div>
                                </div>
                            </div>
                    </section>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                </div>
    </section>
    <!--/Section: News--> 

    </div>
    <!--/ Main container-->

    <!--Footer-->
    <?php include 'includes/footer.php'; ?>
    <!--/.Footer-->

<!-- MODALS -->


<!-- Seller Modal -->
<div class="modal fade" id="sellerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="modal-body">
                <h2 class="text-center" id="seller-header">Seller Application</h2>
                <form id="sellers" action="#" method="post">
                    <div class="md-form form-group">
                        <input name="seller_name" id="seller_name" placeholder="John Doe" type="text" class="form-control" maxlength="50" required>
                        <label for="seller_name">Name *</label>
                    </div>
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
                        <input name="seller_mrr" id="seller_mrr" placeholder="Last Month MRR" type="text" class="form-control" maxlength="8" aria-label="Amount (to the nearest dollar)" aria-describedby="basic-addon2" style="padding-left: 3%;padding-right:3%;z-index:1000;width: 94%; margin-top: 2rem;">
                        <label for="seller_mrr">Last Month MRR</label>
                    </div>
                    <div class="md-form form-group" style="margin-bottom: 2.5rem;">
                        <div class="rkmd-checkbox checkbox-ripple">
                            <label class="input-checkbox checkbox-indigo" style="margin-bottom:0;">
                                <input type="checkbox" id="checkbox-1" required> 
                                <span class="checkbox"></span> 
                            </label> 
                            <small for="checkbox-1" class="checkbox-label">I agree to the <a href="privacy.php" target="_blank">Privacy Policy</a> and <a href="terms.php" target="_blank">Terms of Use</a> </small> </div>
                    </div>
                    <div class="md-form input-group" style="margin: 1rem 0;width: 100%;">
                        <button class="btn btn-primary" type="submit" style="width: 100%;margin:0">Apply</button>
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

<!-- Seller Modal -->
<!-- Buyer Modal -->
<div class="modal fade" id="buyerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="modal-body">
                <h2 class="text-center" id="buyer-header">Get notified about new Featured Companies</h2> 
                <small id="buyer-subheader" style="display:block;margin: 1rem 0;" class="text-center">Your information is confidential and will not be sent to</br>the sellers or shown on the website</small>
                <form id="buyers" action="#" method="post">
                    <div class="md-form form-group">
                        <input name="buyer_name" id="buyer_name" placeholder="John Doe" type="text" class="form-control" maxlength="50" required>
                        <label for="buyer_name">Name *</label>
                    </div>
                    <div class="md-form form-group">
                        <input name="buyer_email" id="buyer_email" placeholder="example@myemaildomain.com" type="email" class="form-control" maxlength="50" required>
                        <label for="buyer_email">Email *</label>
                    </div>
                    <div class="md-form form-group" style="margin-top: 44px;display:none;">
                        <input name="buyer_country" placeholder="Country" type="text" class="geotext[country]">
                    </div>
                    <div class="md-form form-group" style="margin-bottom: 2.5rem;">
                        <div class="rkmd-checkbox checkbox-ripple">
                            <label class="input-checkbox checkbox-indigo" style="margin-bottom:0;">
                                <input type="checkbox" id="checkbox-1" required> 
                                <span class="checkbox"></span> 
                            </label> 
                            <small for="checkbox-1" class="checkbox-label">I agree to the <a href="privacy.php" target="_blank">Privacy Policy</a> and <a href="terms.php" target="_blank">Terms of Use</a> </small> 
                        </div>
                    </div>
                    <div class="md-form input-group" style="margin: 1rem 0;width: 100%;">
                        <button class="btn btn-primary" type="submit" style="width: 100%;margin:0">Get notified</button>
                    </div>
                </form>
                <div id="buyer-success" style="display:none;">
                    <blockquote class='blockquote bq-primary text-center' style='border-right: none;text-align: left;padding-top:0;'>
                        <p id="buyer-success-title" class='bq-title' style='padding-left: 0;'></p>
                    </blockquote>
                    <div class='text-center'>
                        <p id="buyer-success-message"></p>
                    </div>
                </div>
                <div id="buyer-error" style="display:none;">
                    <blockquote class='blockquote bq-warning text-center' style='border-left: none;padding-top:0;'>
                        <p id="buyer-error-title" class='bq-title' style='padding-left: 0;'></p>
                    </blockquote>
                    <div class='text-center'>
                        <p id="buyer-error-message"></p>
                    </div>
                </div>
                
                <div id="preloader2" style="display:none;margin:50px 0;" class="text-center"><img src="img/preloader.gif" style="width:20%;"></div>
            </div>
        </div>
    </div>
</div>
<!-- Buyer Modal -->

    


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
    <script type="text/javascript"  src="js/jquery.number-formatting.js">
    </script>
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

    <!-- FORMS PROCESSING -->
    <!-- Form Submit: AJAX -->
    <script type="text/javascript" src="js/ajax/calculator-ajax.js"></script>
    <script type="text/javascript" src="js/ajax/seller-ajax.js"></script>
    <script type="text/javascript" src="js/ajax/buyer-ajax.js"></script>
    <script type="text/javascript" src="js/ajax/news-subscribers.js"></script>
    <?php
        $OldDate = new DateTime('2014-01-29');
        $now = new DateTime(Date('Y-m-d'));
    ?>
    <div style="display:none;" id="oldDate"><?php echo $OldDate->diff($now)->format("%a"); ?></div>
    <div style="display:none;"><?php foreach($sellers as $seller) : ?><span class="rowsCount"><?php echo applicationsCount($seller->id); ?></span><?php endforeach; ?></div>
    
    <script>
        var oldDate = $('#oldDate').html();
        var numItems = $('.rowsCount').length;
        var result = parseInt(oldDate) + parseInt(numItems);
        $('#getTotalApplications').html(result);
        $('#getTotalApplications').number( true ); 
    </script>  
 
</body>
</html>