<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="SaaS for sale">
    <meta name="keywords" content="Small Businesses For Sale, ">    

    <title>SaaSnomad | Proactive M&#38;A for SaaS businesses</title>
    <!-- Favicon -->
    <link rel="icon" href="img/logo.png" type="image/png" sizes="16x16"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
     <!-- Google Font: Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,mediuM&#38;Amp;lang=en">
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
                <h3 class="text-uppercase mb-1" style="margin: 2rem 2rem 1rem;line-height: 40px;"><b>Estimate your company valuation</b></h3>
                <div class="row form-wrapper">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">

                        <!-- Calculator form -->
                        <form id="calculator" action="#" role="form" method="POST" onsubmit="return checkForm(this);">
                            <div class="md-form form-group" style="width: 100%;margin-top: 0.8rem;margin-bottom: -13px;">
                                <select id="calculator_region" name="calculator_region" data-placeholder="Choose a Region" class="chosen-select" tabindex="2" required>
                                    <option value='' style="display:none">Choose a Region</option>
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
                        <div id="unicorn-wrapper" class="text-center hide">
                            <img id="unicorn" src="img/unicorn.png"><h3><b>Congrats, you got a Unicorn!</b></h3>
                        </div>
                        <div id="valuation-range">
                            <h4 id="from" style="margin-bottom:0;margin-top:5rem;">From:</h4>
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
                                <small>This valuation is indicative and the results may differ from those obtained using fundamental valuation techniques. Please read this <a href="<?php echo BASE_URL; ?>disclaimer.php" target="_blank" id="text-link-1" onClick="ga('send', 'event', 'disclaimer', 'click', 'info');">Important Disclaimer</a>. <a href="<?php echo BASE_URL; ?>contact.php" target="_blank" id="text-link-1" onClick="ga('send', 'event', 'contact us valuation', 'click', 'info');">Contact us</a> directly for a bespoke valuation service.</small>
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
        </div>
        <div class="row"> 
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="reason-1 text-center">
                    <img src="img/icon-anonymous.png">
                    <h4 class="text-uppercase">Anonymity</h4>
                    <p>We disclose your contacts only at your permission following the interest from buyers</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="reason-2 text-center">
                    <img src="img/icon-suit.png">
                    <h4 class="text-uppercase">Reach</h4>
                    <p>New M&#38;A opportunities are sent to hundreds of corporate M&#38;A people</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="reason-3 text-center">
                    <img src="img/icon-pay.png">
                    <h4 class="text-uppercase">Pay per Intro</h4>
                    <p>You pay only for the intro to interested acquirers</p>
                </div>
            </div>
        </div>
    </section>
    <!--/Section: Why us--> 

    <!--Section Testimonials -->
    <section id="testimonial">  
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-1 hidden-xs"></div>
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 text-center">
                <!--Card-->
                <div class="card">
                    <blockquote class="blockquote">
                        <p class="mb-0">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </br>
                            My SaaS was making over $60,000 in MRR but further growth became a challenge, so I decided to quit and start new business from scratch. Out of 40 or so contacts I got from SaaSNomad, 7 worked out and in three months the money hit my account.
                            <!--<i class="fa fa-quote-right" aria-hidden="true"></i>-->
                        </p>
                        <footer class="blockquote-footer"><span class="gray-box">Xxxx Xxxxxxx</span>, the founder of <span class="gray-box">XXXXXX</span>,  <cite title"Source Title">San Francisco</cite></footer>
                    </blockquote>
                </div>
                <!--/.Card-->
            </div>
            <div class="col-lg-2 col-md-2 col-sm-1 hidden-xs"></div>
        </div>
    </section>
    <!--/Section: Testimonials -->

 

    <!--Section: About-->
    <section id="about-section">
        <div class="text-center title-wrapper">
            <h2>How it works</h2></div>
        <div class="row" style="padding-bottom: 0;align-items: baseline;">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 left-side" style="padding-right: 0;">
                <blockquote class="blockquote bq-primary">
                    <p class="bq-title" style="padding:0">Step 1</p>
                    <h4>Apply and pass our review</h4> 
                </blockquote>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 right-side">
                <p>Fill in an extremely short form and get reviewed by our M&#38;A professionals</p>
            </div>
        </div>
        <div class="row" style="padding-top: 0;padding-bottom: 0;align-items: baseline;">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 left-side" style="padding-right: 0;">
                <blockquote class="blockquote bq-primary">
                    <p class="bq-title" style="padding:0">Step 2</p>
                    <h4>Buyers get notified</h4> 
                </blockquote>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 right-side">
                <p>Following the review of your application our specialist will send it to the most relevant buyers</p>
            </div> 
        </div>
        <div class="row" style="padding-top: 0;align-items: baseline;">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 left-side" style="padding-right: 0;">
                <blockquote class="blockquote bq-primary">
                    <p class="bq-title" style="padding:0">Step 3</p>
                    <h4>Get introduced</h4> 
                </blockquote>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 right-side">
                <p>After potential acquirers expressed their interest, we do introductions to those of your choice</p>
            </div>
        </div> 
        </div>
    </section>
    <!--/Section: About--> 

    <!--section Pricing-->
    <section id="pricing-section">
        <div class="text-center title-wrapper">
            <h2>Feature Your SaaS for FREE</h2> 
        </div>
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <!--Card-->
                        <div class="card text-center" style="background:#E7E8EA;margin-right: -50px; margin-left:50px;margin-top:20px">
                            <div class="card-block" style="padding-right: 2.5rem;">
                                <h4 class="text-muted"><b>Ninja</b></h4>
                                <h2 id="price-ninja"></h2>
                                <p class="card-text" style="padding-bottom: 10px;">
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Addition to our database*</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i>20 weeks featuring in our weekly newsletter for M&#38;A specialists (including the leads) + 3 times special featuring</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Full access to our database of corporate M&#38;A professionals and advisors</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i>90 days featuring on our website’s “Featured Companies” section</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Unlimited contact sharings to interested investors</li> 
                                    </ul>
                                </p>
                                <button style="margin:0;padding:0;background-color: transparent;color: #0275d8 !important; box-shadow: none; font-size:1rem; font-weight: 400;" id="request-btn" class="btn" type="submit" style="margin:0" data-toggle="modal" data-target="">Contact sales</button>
                            </div>
                        </div>
                        <!--/.Card-->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
                        <!--Card-->
                        <div class="card text-center">
                            <div class="card-block" style="padding: 4rem 3rem;">
                                <h4><b class="text-muted">PRO</b></h4>
                                <h2 id="price-pro">$120</h2>
                                <p class="card-text" style="padding-bottom: 10px;">
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Addition to our database*</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i>10 weeks featuring in our weekly newsletter for M&#38;A specialists (including the leads) + 3 times special featuring</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i>30 days featuring on our website’s “Featured Companies” section</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Unlimited contact sharings to interested investors</li> 
                                    </ul>
                                </p>
                                <button style="margin:0;padding:0;background-color: transparent;color: #0275d8 !important; box-shadow: none; font-size:1rem; font-weight: 400;" id="request-btn" class="btn" type="submit" style="margin:0" data-toggle="modal" data-target="">Apply Now</button>
                            </div>
                        </div>
                        <!--/.Card-->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding: 3rem 4rem">  
                                <h4><b class="text-muted">Not convinced yet?</b></br>
                                Why don't you try our</h4>
                                <h2 id="free-plan">FREE PLAN</h2>
                                <p class="card-text">
                                    <ul>
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Addition to our database*</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i>3 weeks featuring in our weekly newsletter for M&#38;A specialists (including the leads) + 1 time special featuring</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i>10 days featuring on our website’s “Featured Companies” section</li> 
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Up to 5 contact sharings to interested investors</li> 
                                    </ul>
                                </p>
                                <button style="margin:0;padding:0;background-color: transparent;color: #0275d8 !important; box-shadow: none; font-size:1rem; font-weight: 400;" id="request-btn" class="btn" type="submit" style="margin:0" data-toggle="modal" data-target="">Apply Now</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
        </div>
    </section>
    <!--/Section: Pricing-->


    <!--Section: Featured companies -->        
    <section id="featured-companies"> 
        <div class="text-center title-wrapper">
            <h1 class="display-4">Looking for acquisition targets?</h1>
            <!--<h2>Featured SaaS companies</h2>-->
        </div> 
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="slider">
                    <?php foreach($cards as $card) : ?>
                    <article>
                        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
                            <div class="card" style="background-color:#fff;color:#37474f;opacity:0.8;">
                                <div class="card-block">
                                    <h4 class="card-title"><?php echo $card->industry; ?></h4>
                                    <small style="padding-bottom: 15px;display: inline-block;line-height: 1.2rem">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</small>
                                    <p class="card-text" style="padding-bottom: 10px;">
                                        <?php echo $card->traction; ?>
                                        <br><?php echo $card->employees; ?> employees
                                        <br><?php echo $card->country; ?></p>
                                    <button style="margin:0;padding:0;background-color: transparent;color: #0275d8 !important; box-shadow: none; font-size:1rem; font-weight: 400;" id="request-btn" class="btn" type="submit" style="margin:0" data-toggle="modal" data-target="#requestContactModal" onClick="ga('send', 'event', 'request contact', 'click', 'buyers');">Request contact</button>
                                </div>
                            </div>
                        <!--</div>-->
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section> 
    <!--/Section: Featured companies-->

    <!--Section: Buyers get notified -->        
    <section id="buyer-get-notified"> 
        <div class="text-center">
            <h4>Get notified about new featured companies:</h4>
        </div>
        <div class="row" style="padding:20px 20px 0;">
            <div class="col-lg-4 col-md-3 col-sm-3 hidden-xs"></div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 text-center"> 
                <form id="buyers" action="#" method="post"> 
                    <div class="md-form input-group">
                        <input name="buyer_email" id="buyer_email" placeholder="Enter your email..." type="email" class="form-control" maxlength="50" required>
                        <input name="buyer_country" placeholder="Country" type="text" class="geotext[country]" style="display:none;">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit" style="margin:0" onClick="ga('send', 'event', 'get notified', 'submit', 'buyers');">Subscribe for free</button>
                        </span>
                    </div> 
                    <div class="text-center" style="width: 100%;">
                    <small>Your information is confidential and will not be sent to</br>the sellers or shown on the website</small>
                    <!--<small class="checkbox-label">By clicking the button, you agree that you have read and accepted</br>the <a href="privacy.php" target="_blank" onClick="ga('send', 'event', 'privacy forms', 'click', 'buyers');">Privacy Policy</a> and <a href="terms.php" target="_blank" onClick="ga('send', 'event', 'terms forms', 'click', 'buyers');">Terms of Use</a> </small>-->
                </div>
                </form>
                
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 hidden-xs"></div>
            

                        <!--<a id="buyer-ajax" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#buyerModal" onClick="ga('send', 'event', 'get notified', 'click', 'buyers');">subscribe for free</a> 
                            <a id="buyer-find" class="btn btn-primary btn-lg" href="coming-soon-subscribers.php" onClick="ga('send', 'event', 'find saas', 'click', 'buyers');">Find a target</a>-->
            
        </div>
    </section> 
    <!--/Section: Buyers get notified-->



    <!--section News-->
    <section id="news-section">
        <div class="text-center title-wrapper">
            <h2>Latest articles on SaaS M&#38;A</h2> 
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
                                                <input placeholder="Enter your email..." type="email" name="news_email" id="news_email" class="form-control change" maxlength="50" required>
                                                <!--<label for="news_email">Email *</label>-->
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

    <!--section FAQ-->
    <section id="faq-section">
        <div class="text-center title-wrapper">
            <h2>FAQ</h2> 
        </div>
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <section id="faq-1">                            
                            <h4>What is SaaSNomad?</h4>
                            <p>
                                SaaSNomad.com is just a place where you can meet a potential Buyer.
                            </p> 
                        </section>
                        <section id="faq-2">
                            <h4>Do I have to pay to register as a Seller?</h4>
                            <p>
                                It’s free to apply your SaaS for sale via SaaSNomad.com. 
                                Fees are paid when you decide to answer the Buyer's contact request.
                            </p> 
                        </section>
                        <section id="faq-3">
                            <h4>How does SaaSNomad preserve the anonymity of my offer?</h4>
                            <p>
                                SaaSNomad provides the opportunity to sale your SaaS absolutely anonymously. 
                                That's why SaaSNomad does not allow the display of your contact details within a Company card.
                                Buyer request will be delivered to you via the website. 
                                Then you decide to whom to reveal your contact. 
                            </p> 
                        </section>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <section id="faq-4">
                            <h4>Do I have to pay to apply as a Buyer?</h4>
                            <p>
                                SaaSNomad is absolutely free for you as a Buyer as well as all 
                                benefits which include the ability to get notified about all newly featured companies.
                            </p> 
                        </section>
                        <section id="faq-5">
                            <h4>How do I find out more about a featured company?</h4>
                            <p>
                                You can contact the Seller directly via the SaaSNomad site if you want further information about a featured company. 
                                Just fill out the request form following the link at the foot of the featured company card, 
                                and we will get back to you within 24 hours with response from the Seller.
                                In case of positive response from the Seller you will get his/her contact absolutely for free.
                                Then to find out more about a SaaS you just contact the Seller directly.
                            </p>
                            <p>
                                Please note: we may request more information from you before disclosing the Seller's contact.
                                They may also ask you to sign a confidentiality agreement. Also called a non-disclosure agreement, 
                                this protects the seller against the risk of confidential information, such as financial records, 
                                falling into the wrong hands – i.e. the press or competitors.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
        </div>
    </section>
    <!--/Section: FAQ-->
  
    <!--Section Contact Us--> 
    <section id="contact-us">
        <div class="text-center">
            <h2>Have Questions?</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-1 col-sm-1 hidden-xs"></div>
            <div class="col-lg-4 col-md-10 col-sm-10 col-xs-12">
                <form id="contact-form" action="" method="POST" role="form" style="padding: 14px;">                    
                    <!-- Message-->
                    <div class="md-form form-group">
                        <textarea placeholder="Describe your issues or share your ideas..." type="text" name="contact_msg" id="contact_msg" class="md-textarea form-control" rows="10" required></textarea>
                    </div> 
                    <!-- Role -->
                    <div class="md-form form-group">
                        <div class="radio-wrapper"> 
                            <input type="radio" name="contact_role" id="contact_saas_owner" class="radio" checked/>
                            <label class="for-radio" for="contact_saas_owner"><span><i id="radio1" class="fa fa-check" aria-hidden="true"></i></span>SaaS Owner</label>
                        </div>
                        <div class="radio-wrapper">
                            <input type="radio" name="contact_role" id="contact_acquirer" class="radio"/>
                            <label class="for-radio" for="contact_acquirer"><span><i id="radio2" class="fa fa-check" aria-hidden="true"></i></span>Acquirer</label>
                        </div>
                    </div>
                    <!-- Email-->
                    <div class="md-form form-group">
                        <input placeholder="Enter your email..." type="email" name="contact_email" id="contact_email" class="form-control" maxlength="50" required>
                         
                    </div> 
                    <!--<div>    
                        <input type="radio" name="radio" id="radio3" class="radio"/>
                        <label class="for-radio" for="radio3">Third Option</label>
                    </div>--> 
                    <!-- Role
                    <div class="md-form form-group">
                        <label for="radioBtn" style="position: relative;font-size: 0.8rem;top: 0;">Role *</label>
                        <div id="radioBtn" class="btn-group" style="font-size: 1rem;">
                            <a class="btn active" data-toggle="fun" data-title="Y">SaaS Owner</a>
                            <a class="btn notActive" data-toggle="fun" data-title="X">Acquirer</a>
                            <a class="btn notActive" data-toggle="fun" data-title="N">Other</a>
                        </div>
                        <input type="hidden" name="fun" id="fun">
                    </div> -->
                    
                    
                    <!--Country-->
                    <div class="md-form form-group" style="margin-top: 44px;display:none;">
                        <input type="text" name="_country" class="geotext[country]" id="_country" class="form-control"> 
                    </div> 
                     
                    <div class="md-form input-group" style="margin:0;width: 100%;">
                        <button class="btn btn-primary btn-lg" type="submit" style="width: 100%;margin-left:0;margin-right:0" onClick="ga('send', 'event', 'reques contact', 'submit', 'buyers');">Send Message</button>
                    </div>  
                </form>
            </div>
            <div class="col-lg-4 col-md-1 col-sm-1 hidden-xs"></div>
        </div>
    </section>
    <!--/Section: Contact Us--> 

    

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
                        <small class="checkbox-label">By clicking "Apply", you agree that you have read and accepted the <a href="<?php echo BASE_URL; ?>privacy.php" target="_blank" onClick="ga('send', 'event', 'privacy forms', 'click', 'sellers');">Privacy Policy</a> and <a href="<?php echo BASE_URL; ?>terms.php" target="_blank" onClick="ga('send', 'event', 'terms forms', 'click', 'sellers');">Terms of Use</a> </small>
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



<!-- Request Contact -->
<div class="modal fade" id="requestContactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" id="request-modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="modal-body">
                <h2 class="text-center" id="buyer-header">Request Seller's Contact</h2> 
                <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 request-card-left"> 
                                    <p>You are going to request seller's contact which SaaS is described on the card below</p>
                                    <!--Card-->
                                    <div class="card"> 
                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title"><?php echo $card->industry; ?></h4>
                                            <!--Text-->
                                            <p class="card-text"><?php echo $card->traction; ?><br><?php echo $card->employees; ?> Employees<br><?php echo $card->country; ?></p>
                                        </div>
                                        <!--/.Card content-->
                                        <h4 class="card-title"></h4>
                                            <!--Text-->
                                    </div>
                                    <!--/.Card-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  request-card-right">
                                    <form id="requests" action="requests.php" method="POST" role="form" style="padding-top: 14px;">

                                        <!--Name--> 
                                        <div class="md-form form-group">
                                            <input placeholder="John Doe" type="text" name="request_name" id="request_name" class="form-control" maxlength="50" required>
                                            <label for="request_name">Name *</label>
                                        </div> 
                                        <!--Email-->
                                        <div class="md-form form-group">
                                            <input placeholder="example@myemaildomain.com" type="email" name="request_email" id="request_email" class="form-control" maxlength="50" required>
                                            <label for="request_email">Email *</label>
                                        </div> 
                                        <!--Country-->
                                        <div class="md-form form-group" style="margin-top: 44px;display:none;">
                                            <input type="text" name="request_country" class="geotext[country]" id="request_country" class="form-control"> 
                                        </div>
                                        <!--Request ID-->
                                        <div class="md-form form-group" style="margin-top: 44px;display:none;">
                                            <input value="29" type="text" name="request_id" id="request_id" class="form-control"> 
                                        </div>  
                                        <!-- Checkbox
                                                    <div class="md-form form-group">
                                                        <div class="rkmd-checkbox checkbox-ripple">
                                                            <label class="input-checkbox checkbox-indigo" style="margin-bottom:0;">
                                                              <input type="checkbox" id="checkbox-1" required>
                                                              <span class="checkbox"></span>
                                                            </label>
                                                            <small for="checkbox-1" class="checkbox-label">I agree to the 
                                                            <a href="privacy.php" target="_blank">Privacy Policy</a> and 
                                                            <a href="terms.php" target="_blank">Terms of Use</a>
                                                            </small>
                                                        </div>
                                                    </div>  -->
                                        <div class="md-form input-group" style="margin:0;width: 100%;">
                                            <button class="btn btn-primary btn-lg" type="submit" style="width: 100%;margin-left:0;margin-right:0" onClick="ga('send', 'event', 'reques contact', 'submit', 'buyers');">Request Contact</button>
                                        </div>      
                                        <small class="checkbox-label">By clicking the button, you agree that you have read and accepted the <a href="<?php echo BASE_URL; ?>privacy.php" target="_blank" onClick="ga('send', 'event', 'privacy forms', 'click', 'buyers');">Privacy Policy</a> and <a href="<?php echo BASE_URL; ?>terms.php" target="_blank" onClick="ga('send', 'event', 'terms forms', 'click', 'buyers');">Terms of Use</a> </small>   
                                    </form>
                                    <div id="request-success" style="display:none;">
                                        <blockquote class='blockquote bq-primary' style='border-right: none;text-align: left;padding:0;'>
                                            <p id="request-success-title" class='bq-title' style='padding-left: 0;'></p>
                                        </blockquote>
                                        <div>
                                            <p id="request-success-message" style='margin-bottom:2.5rem;'></p>
                                        </div>
                                        <a href='https://saasnomad.com/' class='custom-link'><i class='fa fa-arrow-left' aria-hidden='true' style='margin-top: 2px;'></i> Go back to website</a>
                                    </div>
                                    <div id="request-error" style="display:none;">
                                        <blockquote class='blockquote bq-warning' style='border-left: none;padding:0;'>
                                            <p id="request-error-title" class='bq-title' style='padding-left: 0;margin-bottom:2.5rem;'></p>
                                        </blockquote>
                                        <div>
                                            <p id="request-error-message"></p>
                                        </div>
                                        <!--<a href='https://saasnomad.com/' class='custom-link'><i class='fa fa-arrow-left' aria-hidden='true' style='margin-top: 2px;'></i> Go back to website</a>-->
                                    </div>
                                    <div id="preloader" style="display:none;margin-top:150px;" class="text-center"><img src="img/preloader.gif" style="width:20%;"></div>
                                </div>
                </div> 
                <!--
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
                </div>-->
                <div id="preloader2" style="display:none;margin:50px 0;" class="text-center"><img src="img/preloader.gif" style="width:20%;"></div>
            </div>
        </div>
    </div>
</div>
<!-- end of Request contact -->



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
                        <small class="checkbox-label">By clicking the button, you agree that you have read and accepted the <a href="<?php echo BASE_URL; ?>privacy.php" target="_blank" onClick="ga('send', 'event', 'privacy forms', 'click', 'buyers');">Privacy Policy</a> and <a href="<?php echo BASE_URL; ?>terms.php" target="_blank" onClick="ga('send', 'event', 'terms forms', 'click', 'buyers');">Terms of Use</a> </small>
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
    <?php
        $OldDate = new DateTime('2014-01-29');
        $now = new DateTime(Date('Y-m-d'));
    ?>
    <div style="display:none;" id="oldDate"><?php echo $OldDate->diff($now)->format("%a"); ?></div>
    <div style="display:none;"><?php foreach($sellers as $seller) : ?><span class="rowsCount"><?php echo applicationsCount($seller->id); ?></span><?php endforeach; ?></div>
    <script type="text/javascript" src="js/script.js"></script> 
    
</body>
</html>