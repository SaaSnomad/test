<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="SaaS for sale">
    <meta name="keywords" content="Small Businesses For Sale, ">    

    <title>SaaSnomad | Proactive M&A for SaaS businesses</title>
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
    <!-- Recaptcha   -->   
    <script src='https://www.google.com/recaptcha/api.js'></script> 
    <style>
        .show {
            display:block;
        }
        .hide {
            display:none;
        }
    </style>
               
</head>

<body>
<?php include 'includes/header.php'; ?>
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
    $db->query("SELECT * FROM news ORDER BY news.id DESC");
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

<!-- Main container-->
<div class="container-fluid" id="main">

    <!-- Section: Landing -->
    <div class="row" id="landing">
        <div id="left-side" class="col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
            <div class="main-text">
                <h1 class="display-4">Anonymously</br>reach out to hundreds</br>of corporate acquirers</h1> <a id="apply-main" class="btn btn-secondary" data-toggle="modal" data-target="#sellerModal" onClick="ga('send', 'event', 'apply main', 'click', 'sellers');"> apply</br>for free </a>
                <h3 class="text-center text-muted display-4" style="margin-top: 0.5rem;"><span class="counter" id="getTotalApplications"></span></h3>
                <h3 class="text-center text-muted">companies already did</h3> 
            </div>
        </div>
        <div id="right-side" class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight z-depth-1" data-wow-delay="0.2s">
            <div id="calculator-wrapper" class="white-text">
                <h3 class="text-uppercase mb-1" style="margin: 2rem 2rem 1rem;"><b>Estimate your company valuation</b></h3>
                <div class="row form-wrapper">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">

                        <!-- Calculator form -->
                        <form id="calculator" action="#" role="form" method="POST" onsubmit="return checkForm(this);">
                            <div class="md-form form-group" style="width: 100%;margin-top: 0.8rem;margin-bottom: -13px;">
                                <select id="calculator_region" name="calculator_region" data-placeholder="Choose a Region" class="chosen-select" tabindex="2" required>
                                    <option value=''></option>
                                    <option value='North America'>North America</option>
                                    <option value='Europe'>Europe</option>
                                    <option value='Asia'>Asia</option>
                                    <option value='Other'>Other</option>
                                </select>
                            </div>

                            <div class="md-form form-group"> 
                                <span class="input-group-addon" style="position: absolute;top: 6px;width:2%;border-bottom: none !important;padding-left: 0;padding-right: 0;">&#36;</span>
                                <input type="text" name="calculator_mrr" id="calculator_mrr" placeholder="Last month's MRR" class="form-control change" maxlength="8" aria-label="Amount (to the nearest dollar)" style="padding-left: 6%;width: 94%;" required> 
                            </div>
                            
                            <div class="md-form form-group"> 
                                <span class="input-group-addon" style="position: absolute;top: 6px;width:2%;border-bottom: none !important;padding-left: 0;padding-right: 0;">%</span>
                                <input type="text" name="calculator_mrr_growth" id="calculator_mrr_growth" placeholder="MRR monthly growth" class="form-control change" maxlength="3" aria-label="Amount (to the nearest dollar)" style="padding-left: 7%;width: 93%;" required> 
                            </div>
                            
                            <div class="md-form form-group"> 
                                <span class="input-group-addon" style="position: absolute;top: 6px;width:2%;border-bottom: none !important;padding-left: 0;padding-right: 0;">%</span>
                                <input type="text" name="calculator_margin" id="calculator_margin" placeholder="Gross margin" class="form-control change" maxlength="3" aria-label="Amount (to the nearest dollar)" style="padding-left: 7%;width: 93%;" required></div>
                            <div class="md-form form-group"> 
                                <span class="input-group-addon" style="position: absolute;top: 6px;width:2%;border-bottom: none !important;padding-left: 0;padding-right: 0;">&#36;</span>
                                <input type="text" name="calculator_burn" id="calculator_burn" placeholder="Monthly burn" class="form-control change" maxlength="8" aria-label="Amount (to the nearest dollar)" style="padding-left: 6%;width: 94%;" required> 
                            </div>
                            <!-- Calculator Number of Employees <div class="md-form form-group"> <input type="text" name="calculatorEmployees" id="calculatorEmployees" placeholder="Number of Employees *" class="form-control change" maxlength="4" aria-label="Amount (to the nearest dollar)" required> </div>-->
                            <div class="md-form form-group">
                                <input type="email" name="calculator_email" id="calculatorEmail" placeholder="Your email" class="form-control change" maxlength="50" required> 
                            </div>
                            <input class="range-from" type="text" name="range_from" style="display:none;" />
                            <input class="range-to" type="text" name="range_to" style="display:none;" />
                            <input class="geotext[country]" type="text" name="calculator_location" style="display:none;" />
                            <small>* All fields are required</small> 
                            <div class="md-form form-group" id="calculate-block" style="margin:2rem 0 0;">
                                <button type="submit" class="btn" name="calculate-btn" id="calculate-btn" style="width:100%;background-color: #0275d8;padding: 0.85rem 1rem;margin:0;" onClick="ga('send', 'event', 'valuation', 'submit', 'sellers');">Calculate</button>
                            </div>                             
                        </form>
                        <!-- end of Calculator form -->

                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div id="preloader-calculator" style="margin-top:180px;" class="text-center hide"><img src="img/preloader.gif" style="width:20%;"></div>
                        <div id="valuation-range">
                            <h4 style="margin-bottom:0;margin-top:5rem;">From:</h4>
                            <div class="md-form form-group"> 
                                <span class="input-group-addon-from">&#36;</span>
                                <input type="text" placeholder="0" class="range-from form-control change" disabled maxlength="11" aria-label="Amount (to the nearest dollar)"> </div>
                            <h4 class="calculator" style='margin-top: 5rem;'>To:</h4>
                            <div class="md-form form-group"> 
                                <span class="input-group-addon-to">&#36;</span>
                                <input type="text" placeholder="0" class="range-to form-control change" disabled maxlength="11" aria-label="Amount (to the nearest dollar)"> </div>
                        </div>
                        </br> 
                            <div>
                                <small>This valuation is indicative and the results may differ from those obtained using fundamental valuation techniques. Please read this <a href="disclaimer.php" target="_blank" id="text-link-1" onClick="ga('send', 'event', 'disclaimer', 'click', 'info');">Important Disclaimer</a>. <a href="contact.php" target="_blank" id="text-link-1" onClick="ga('send', 'event', 'contact us valuation', 'click', 'info');">Contact us</a> directly for a bespoke valuation service.</small>
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
 
<div id="anchor"></div>

    <!--Section: Why us-->
    <section id="why-us-section">
        <div class="text-center title-wrapper">
            <h2>Three reasons why to use SaaSnomad</h2> 
        <div class="row" style=""> 
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="reason-1 text-center">
                    <img src="img/icon-anonymous.png">
                    <h4 class="text-uppercase">Anonymity</h4>
                    <p>We don't disclose any names when approaching potential acquirers. We do it only at your permission and only when we receive preliminary interest from buyers.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="reason-2 text-center">
                    <img src="img/icon-suit.png">
                    <h4 class="text-uppercase">Reach</h4>
                    <p>New M&#38;A opportunities are sent to hundreds of corporate M&#38;A people</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="reason-3 text-center">
                    <img src="img/icon-pay.png">
                    <h4 class="text-uppercase">Pay per Intro</h4>
                    <p>You pay only for the intro to interested acquirers</p>
                </div>
            </div>
        </div>
    </section>
    <!--/Section: Why us--> 

    <!--Section: About-->
    <section id="about-section">
        <div class="text-center">
            <h2>How it works</h2></div>
        <div class="row" style="padding-bottom: 0;align-items: baseline;">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 left-side" style="padding-right: 0;">
                <blockquote class="blockquote bq-primary">
                    <p class="bq-title" style="padding:0">Step 1</p>
                    <h4>Apply and pass our review</h4> 
                </blockquote>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 left-side" style="padding-right: 0;">
                <p>Fill in an extremely short form </br>and get reviewed by our M&#38;A professionals</p>
            </div>
        </div>
        <div class="row" style="padding-top: 0;padding-bottom: 0;align-items: baseline;">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 left-side" style="padding-right: 0;">
                <blockquote class="blockquote bq-primary">
                    <p class="bq-title" style="padding:0">Step 2</p>
                    <h4>Buyers get notified</h4> 
                </blockquote>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 left-side" style="padding-right: 0;">
                <p>Following the review of your application </br>our specialist will send it to the most relevant buyers</p>
            </div> 
        </div>
        <div class="row" style="padding-top: 0;align-items: baseline;">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 left-side" style="padding-right: 0;">
                <blockquote class="blockquote bq-primary">
                    <p class="bq-title" style="padding:0">Step 3</p>
                    <h4>Get introduced</h4> 
                </blockquote>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 left-side" style="padding-right: 0;">
                <p>After potential acquirers expressed their interest,</br>we do introductions to those of your choice</p>
            </div>
        </div>

        <!--
            <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs-down left-side" style="padding-right: 0;">
                <blockquote class="blockquote bq-primary">
                    <p class="bq-title" style="padding:0">Step 1</p>
                    <h4>Apply and pass our review</h4> 
                </blockquote>
                <blockquote class="blockquote bq-primary">
                    <p class="bq-title" style="padding:0">Step 2</p>
                    <h4>Buyers get notified</h4> 
                </blockquote>
                <blockquote class="blockquote bq-primary">
                    <p class="bq-title" style="padding:0">Step 3</p>
                    <h4>Get introduced</h4> 
                </blockquote>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 right-side">
                <h3 style="display:none;">Apply and pass our review</h3>
                <p>Fill in an extremely short form </br>and get reviewed by our M&#38;A professionals</p>
                <h3 style="display:none;">Buyers get notified</h3>
                <p>Following the review of your application </br>our specialist will send it to the most relevant buyers</p>
                <h3 style="display:none;">Get introduced</h3>
                <p>After potential acquirers expressed their interest,</br>we do introductions to those of your choice</p>
            </div>
        -->

        </div>
    </section>
    <!--/Section: About--> 
 
    <!--Section: Featured companies -->        
    <section id="featured-companies"> 
        <div class="text-center title-wrapper">
            <h1 class="display-4">Looking for acquisition targets?</h1>
        </div> 
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
                <div class="slider">
                    <?php foreach($cards as $card) : ?>
                    <article>
                        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
                            <div class="card" style="background-color:#fff;color:#37474f;opacity:0.8;">
                                <div class="card-block">
                                    <h4 class="card-title"><?php echo $card->industry; ?></h4>
                                    <p class="card-text" style="padding-bottom: 10px;">
                                        <?php echo $card->traction; ?>
                                        <br><?php echo $card->employees; ?> employees
                                        <br><?php echo $card->country; ?></p><a href="<?php echo $card->id; ?>-contacts.php" class="" target="_blank" style="text-transform:uppercase;" onClick="ga('send', 'event', 'request contact', 'click', 'buyers');">Request contact</a> </div>
                            </div>
                        <!--</div>-->
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" id="buyer-get-notified" style="padding-top:5%;">
                <!--<h2>Featured SaaS companies</h2>-->
                <h4>Get notified about</br>new featured companies</h4>
                <div style="margin-top: 20px;">
                    <a id="buyer-ajax" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#buyerModal" onClick="ga('send', 'event', 'get notified', 'click', 'buyers');">subscribe for free</a> 
                    <!--<a id="buyer-find" class="btn btn-primary btn-lg" href="coming-soon-subscribers.php" onClick="ga('send', 'event', 'find saas', 'click', 'buyers');">Find a target</a>-->
                </div>
            </div>
        </div>
        
    </section> 
    <!--/Section: Featured companies-->

    <!--section: News-->
    <section id="news-section">
        <div class="text-center">
            <h2>Latest articles on SaaS M&A</h2> </div>
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
                                            <a href="<?php echo $news_item->news_link; ?>" class="article" target="_blank" onClick="ga('send', 'event', 'read news', 'click', 'news');">
                                                <h4><?php echo $news_item->news_title; ?></h4>
                                                <p class="text-muted"><?php echo $news_item->news_summary; ?></p>
                                            </a>    
                                            <span class="text-muted"><?php echo $news_item->news_date_posted; ?> 
                                                <b><?php echo $news_item->news_source; ?></b>
                                            </span>         
                                        </div>
                                        <?php endforeach; ?>
                                        <div class="text-center" style="margin-top:40px;"> <a href="#" id="loadMore" class="custom-link" onClick="ga('send', 'event', 'more news', 'click', 'news');">Load More</a> </div>
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
                                                <button class="btn btn-primary btn-lg" type="submit" onClick="ga('send', 'event', 'subscribe news', 'submit', 'news');">Subscribe</button>
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


<!-- Seller modal -->
<div class="modal fade" id="sellerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="modal-body">
                <h2 class="text-center" id="seller-header">Seller application</h2>
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
                        <input name="seller_mrr" id="seller_mrr" placeholder="Last month's MRR" type="text" class="form-control" maxlength="8" aria-label="Amount (to the nearest dollar)" aria-describedby="basic-addon2" style="padding-left: 3%;padding-right:3%;z-index:1000;width: 94%; margin-top: 2rem;">
                        <label for="seller_mrr">Last month's MRR</label>
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

<!-- Buyer modal -->
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
                    <!--<div class="md-form form-group" style="margin-bottom: 2.5rem;">
                        <div class="rkmd-checkbox checkbox-ripple">
                            <label class="input-checkbox checkbox-indigo" style="margin-bottom:0;">
                                <input type="checkbox" id="checkbox-1" required> 
                                <span class="checkbox"></span> 
                            </label> 
                            <small for="checkbox-1" class="checkbox-label">I agree to the <a href="privacy.php" target="_blank">Privacy Policy</a> and <a href="terms.php" target="_blank">Terms of Use</a> </small> 
                        </div>
                    </div>-->
                    <div class="md-form input-group" style="margin: 2rem 0 1.5rem;width: 100%;">
                        <button class="btn btn-primary" type="submit" style="width: 100%;margin:0" onClick="ga('send', 'event', 'get notified', 'submit', 'buyers');">Subscribe</button>
                    </div>
                    <div class="text-center">
                        <small class="checkbox-label">By clicking the button, you agree that you have read and accepted the <a href="privacy.php" target="_blank" onClick="ga('send', 'event', 'privacy forms', 'click', 'buyers');">Privacy Policy</a> and <a href="terms.php" target="_blank" onClick="ga('send', 'event', 'terms forms', 'click', 'buyers');">Terms of Use</a> </small>
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
<!-- end of Buyer modal -->

    


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
    <script type="text/javascript" src="js/script.js"></script> 
     
</body>
</html>