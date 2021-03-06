    
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
<style>
    .show {
        display:block;
    }
    .hide {
        display:none;
    } 
</style>
<!-- Main container-->
<div class="container-fluid" id="main">

    <!-- Section: Landing -->
    <div class="row" id="landing">
        <div id="left-side" class="col-lg-6 col-md-12 col-sm-12 col-xs-12 text-center">
            <div class="main-text"> 
                <h1 class="display-4">Anonymously</br>sell your SaaS</br>startup</h1> 
                <a id="apply-main" class="btn btn-secondary" data-toggle="modal" data-target="#sellerModal" onClick="ga('send', 'event', 'apply main', 'click', 'sellers');"> apply for free </a>
                <h3 class="text-center text-muted display-4" style="margin-top: 0.5rem;"><span class="counter" id="getTotalApplications"></span></h3>
                <h3 class="text-center text-muted">companies already listed</h3> 
                <a class="anchor" href="#saas-valuation-calculator"></a>
            </div>
        </div>
        <div id="right-side" class="col-lg-6 col-md-12 col-sm-12 col-xs-12 wow fadeInRight z-depth-1" data-wow-delay="0.2s">
            <div id="calculator-wrapper" class="white-text">
                <h3 class="text-uppercase mb-1" style="margin: 2rem 2rem 1rem;line-height: 40px;"><b>Get instant company valuation</b></h3>
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
                                <input type="text" name="calculator_mrr" id="calculator_mrr" placeholder="Last month's MRR" class="form-control to-number change" maxlength="8" style="padding-left: 6%;width: 94%;" required> 
                            </div>
                            <div class="md-form form-group"> 
                                <span class="input-group-addon" style="position: absolute;top: 6px;width:2%;border-bottom: none !important;padding-left: 0;padding-right: 0;">%</span>
                                <input type="text" name="calculator_mrr_growth" id="calculator_mrr_growth" placeholder="MRR monthly growth" class="form-control to-number change" maxlength="3" style="padding-left: 7%;width: 93%;" required> 
                            </div>
                            <div class="md-form form-group"> 
                                <span class="input-group-addon" style="position: absolute;top: 6px;width:2%;border-bottom: none !important;padding-left: 0;padding-right: 0;">%</span>
                                <input type="text" name="calculator_margin" id="calculator_margin" placeholder="Gross margin" class="form-control to-number change" maxlength="3" style="padding-left: 7%;width: 93%;" required>
                            </div>
                            <div class="md-form form-group"> 
                                <span class="input-group-addon" style="position: absolute;top: 6px;width:2%;border-bottom: none !important;padding-left: 0;padding-right: 0;">&#36;</span>
                                <input type="text" name="calculator_burn" id="calculator_burn" placeholder="Monthly burn" class="form-control to-number change" maxlength="8" style="padding-left: 6%;width: 94%;" required> 
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
                                <button type="submit" class="btn g-recaptcha invisible-recaptcha" name="calculate-btn" id="calculate-btn" data-sitekey="6LezoyoUAAAAAFIwSsAQTtbrNVx3rV6hLa1ojYqs" data-callback='verifyCaptcha' style="width:100%;background-color: transparent;border: 1px solid #ccc; padding: 0.85rem 1rem;margin:0;" onClick="ga('send', 'event', 'valuation', 'submit', 'sellers');">Calculate</button>
                            </div>                             
                        </form>
                        <!-- end of Calculator form -->

                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                        <div id="to-result"></div>
                        <div id="preloader-calculator" style="margin-top:180px;" class="text-center hide"><img src="<?php echo BASE_URL; ?>img/preloader.gif" style="width:20%;"></div>
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
                                <small>This valuation is indicative and the results may differ from those obtained using fundamental valuation techniques. Please read this <a href="<?php echo BASE_URL; ?>disclaimer" id="text-link-1" onClick="ga('send', 'event', 'disclaimer', 'click', 'info');">Important Disclaimer</a>. <a href="#contact-us" id="text-link-1" onClick="ga('send', 'event', 'contact us valuation', 'click', 'info');">Contact us</a> directly for a bespoke valuation service.</small>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!--Section: Why us-->
    <section id="why-us-section">
        <div class="text-center title-wrapper">
            <h2>Three reasons why to use SaaSNomad</h2> 
        </div>
        <a class="anchor" href="#why-saasnomad"></a>
        <div class="row"> 
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="reason-1 text-center">
                    <img src="<?php echo BASE_URL; ?>img/why-saasnomad-reason-1.png" alt="Anonymity">
                    <h4 class="text-uppercase">Anonymity</h4>
                    <p>We disclose your contacts only at your permission following the interest from buyers</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="reason-2 text-center">
                    <img src="<?php echo BASE_URL; ?>img/why-saasnomad-reason-2.png" alt="Reach">
                    <h4 class="text-uppercase">Reach</h4>
                    <p>New M&#38;A opportunities are sent to hundreds of corporate M&#38;A people</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="reason-3 text-center">
                    <img src="<?php echo BASE_URL; ?>img/why-saasnomad-reason-3.png" alt="Pay per Intro">
                    <h4 class="text-uppercase">Pay per Intro</h4>
                    <p>You pay only for the intro to interested acquirers</p>
                </div>
            </div>
        </div>
    </section>
    

    <!--Section Testimonial -->
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
                            <a class="anchor" href="#testimonial"></a>
                            My SaaS was making over $60,000 in MRR but further growth became a challenge, so I decided to quit and start new business from scratch. Out of 40 or so contacts I got from SaaSNomad, 7 worked out and in three months the money hit my account.
                            <!--<i class="fa fa-quote-right" aria-hidden="true"></i>-->
                        </p>
                        <footer class="blockquote-footer"><span class="gray-box">Saasy Nomadman</span>, the founder of <span class="gray-box">CoolCo Inc.</span>,  <cite title"Source Title">San Francisco</cite></footer>
                    </blockquote>
                </div>
                <!--/.Card-->
            </div>
            <div class="col-lg-2 col-md-2 col-sm-1 hidden-xs"></div>
        </div>
    </section>
   

    <!--Section: About-->
    <section id="about-section">
        <div class="text-center title-wrapper">
            <h2>How it works</h2>
        </div>
        <a class="anchor" href="#how-saasnomad-works"></a>
        <div class="row" style="padding-bottom: 2rem;align-items: center;">
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6 left-side" style="border-right: 1px solid #4285F4;text-align:right;">
                <h4 style="padding:1.5rem 0.5rem;margin-bottom:0;text-transform:uppercase;">Step 1</h4>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 right-side" style="padding-left: 1.5rem;">
                <h4>Apply and pass our review</h4> 
                <p style="margin-bottom:0;">Fill in an extremely short form and get reviewed by our M&#38;A professionals</p>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2"></div>
        </div>
        <div class="row" style="padding-top: 0;padding-bottom:  2rem;align-items: center;">
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6 left-side" style="border-right: 1px solid #4285F4;text-align:right;">
                <h4 style="padding:1.5rem 0.5rem;margin-bottom:0;text-transform:uppercase;">Step 2</h4>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 right-side" style="padding-left: 1.5rem;">
                <h4>Buyers get notified</h4> 
                <p style="margin-bottom:0;">Following the review of your application our specialist will send it to the most relevant buyers</p>
            </div> 
            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2"></div>
        </div>
        <div class="row" style="padding-top: 0;align-items: center;">
            <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6 left-side" style="border-right: 1px solid #4285F4;text-align:right;">
                <h4 style="padding:1.5rem 0.5rem;margin-bottom:0;text-transform:uppercase;">Step 3</h4>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 right-side" style="padding-left: 1.5rem;">
                <h4>Get introduced</h4> 
                <p style="margin-bottom:0;">After potential acquirers expressed their interest, we do introductions to those of your choice</p>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2"></div>
        </div> 
        </div>
    </section>
    

    <!--Section Pricing -->
    <section id="pricing-cta">
        <div class="title-wrapper text-center"> 
            <h2>Pricing Plans</h2>
        </div>
        <a class="anchor" href="#pricing-plans"></a>
        <div class="row">
            <div class="col-lg-2 col-md-1 col-sm-1 hidden-xs"></div>
            <div class="col-lg-8 col-md-10 col-sm-10 col-xs-12 text-center">
                <div class="card text-center" style="padding:0">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 plan-card" style="padding: 3rem 0; border-right: 1px solid #eee;">
                                        <h4 class="plan" style="padding-bottom:1rem;text-transform:uppercase;">Starter</h4>
                                        <p class="card-text">Great to start for free</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 plan-card" style="padding: 3rem 0;border-right: 1px solid #eee;"> 
                                        <h4 class="plan" style="padding-bottom:1rem;text-transform:uppercase;">Standard</h4>
                                        <p class="card-text">If you are not in a hurry</p> 
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 plan-card" style="padding: 3rem 0">
                                        <h4 class="plan" style="padding-bottom:1rem;text-transform:uppercase;">Power</h4>
                                        <p class="card-text">Full M&#38;A assistant</p>
                                    </div>
                                </div>
                                <div class="row" style="padding:3rem 0;background-color: #eee;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h4 style="padding-bottom:1rem;">Features included in every plan:</h4>
                                        <ul>
                                            <li style="padding-bottom: 15px;"><i class="fa fa-check" aria-hidden="true" style="color:#3CD7B2;"></i> Featuring in our weekly newsletter for M&A specialists</li>
                                            <li style="padding-bottom: 15px;"><i class="fa fa-check" aria-hidden="true" style="color:#3CD7B2;"></i> Featuring on our website’s “Featured Companies” section</li>
                                            <li style="padding-bottom: 15px;"><i class="fa fa-check" aria-hidden="true" style="color:#3CD7B2;"></i> Contact sharings to interested investors</li>
                                        </ul>
                                        <a class="btn btn-primary" href="<?php echo BASE_URL; ?>pricing" style="margin: 10px 0;" onClick="ga('send', 'event', 'view pricing', 'click', 'pricing');">View All Features &#38; Pricing</a>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-1 col-sm-1 hidden-xs"> 
        </div>
    </section>
    

    <!--Section: Featured companies -->
    <section id="featured-companies"> 
        <div class="text-center title-wrapper">
            <h1 class="display-4">Looking for acquisition targets?</h1>
            <!--<h2>Featured SaaS companies</h2>-->
        </div> 
        <a class="anchor" href="#featured-saas-companies"></a>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                <div class="slider">
                    <?php foreach($cards as $card) : ?>
                    <article>
                        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
                            <div class="card" style="background-color:#fff;color:#37474f;">
                                <div class="card-block">
                                    <div class="premium-banner" data-plan="FEATURED" data-status="premium"></div>
                                    <h4 class="card-title"><?php echo $card->industry; ?></h4>
                                    <small style="padding-bottom: 15px;display: inline-block;line-height: 1.2rem"><?php echo $card->description; ?></small>
                                    <p class="card-text" style="padding-bottom: 1rem;">
                                        <?php echo $card->traction; ?>
                                        <br><?php echo $card->employees; ?> employees
                                        <br><?php echo $card->country; ?></p>
                                    <a class="btn btn-primary-default btn-link" style="font-size:0.9rem;" id="request-btn" data-toggle="modal" data-target="#requestContactModal<?php echo $card->id; ?>" data-request-id="<?php echo $card->id; ?>" onClick="ga('send', 'event', 'request contact', 'click', 'buyers');">Request contact</a>
                                </div>
                            </div>
                        <!--</div>-->
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section> 
    

    <!--Section: Buyers get notified -->        
    <section id="buyer-get-notified"> 
        <div class="text-center">
            <h4>Get notified about new featured companies:</h4>
        </div>
        <a class="anchor" href="#get-notified-about-new-featured-saas"></a>
        <div class="row">
            <div class="col-lg-4 col-md-3 col-sm-3 hidden-xs"></div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 text-center"> 
                <form id="buyers" action="#" method="post" style="padding-top:20px;padding-bottom:20px"> 
                    <div class="md-form input-group">
                        <input name="buyer_email" id="buyer_email" placeholder="Enter your email..." type="email" class="form-control" maxlength="50" required>
                        <input name="buyer_country" placeholder="Country" type="text" class="geotext[country]" style="display:none;">
                        <span class="input-group-btn">
                            <button id="captcha5" class="btn btn-primary g-recaptcha invisible-recaptcha" data-sitekey="6LezoyoUAAAAAFIwSsAQTtbrNVx3rV6hLa1ojYqs" data-callback='verifyCaptcha' type="submit" style="margin:0" onClick="ga('send', 'event', 'get notified', 'submit', 'buyers');">Subscribe for free</button>
                        </span>
                    </div> 
                    <div class="text-center" style="width: 100%;">
                        <small>Your information is confidential and will not be sent to</br>the Sellers or shown on the website</small>
                    </div>
                </form>
                <div id="buyer-success" style="display:none;">
                    <blockquote class='blockquote bq-primary text-center' style='border-right: none;text-align: left;padding-top:0;margin-bottom: 0;'>
                        <p id="buyer-success-title" class='bq-title' style='padding-left: 0;'></p>
                    </blockquote>
                    <div class='text-center'>
                        <p id="buyer-success-message"></p>
                    </div>
                </div>
                <div id="buyer-error" style="display:none;">
                    <blockquote class='blockquote bq-warning text-center' style='border-left: none;padding-top:0;margin-bottom: 0;'>
                        <p id="buyer-error-title" class='bq-title' style='padding-left: 0;'></p>
                    </blockquote>
                    <div class='text-center'>
                        <p id="buyer-error-message"></p>
                    </div>
                </div>
                <div id="preloader2" style="display:none;margin:20px 0;" class="text-center"><img src="<?php echo BASE_URL; ?>img/preloader.gif" style="width:20%;"></div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-3 hidden-xs"></div>
            

                        <!--<a id="buyer-ajax" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#buyerModal" onClick="ga('send', 'event', 'get notified', 'click', 'buyers');">subscribe for free</a> 
                            <a id="buyer-find" class="btn btn-primary btn-lg" href="coming-soon-subscribers.php" onClick="ga('send', 'event', 'find saas', 'click', 'buyers');">Find a target</a>-->
            
        </div>
    </section> 
    

    <!--section News-->
    <section id="news-section">
        <div class="text-center title-wrapper">
            <h2>Latest articles on SaaS M&#38;A</h2> 
        </div>
        <a class="anchor" href="#latest-articles-on-saas-m&#38;a"></a>
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
                                        <h4 id="subscribe-msg">Want to keep up with the latest SaaS M&#38;A news?</h4>
                                        <form id="subscribers-for-news" action="#" method="POST" role="form">
                                            <div class="md-form form-group">
                                                <input placeholder="Enter your email..." type="email" name="news_email" id="news_email" class="form-control change" maxlength="50" required>
                                                <!--<label for="news_email">Email *</label>-->
                                            </div>
                                            <div class="md-form form-group" style="margin-top: 44px;display:none;">
                                                <input type="text" name="news_country" class="geotext[country]" id="news_country"> </div>
                                            <div class="md-form input-group" style="margin: 20px 0;width: 100%;">
                                                <button id="captcha4" class="btn btn-primary btn-lg g-recaptcha invisible-recaptcha" data-sitekey="6LezoyoUAAAAAFIwSsAQTtbrNVx3rV6hLa1ojYqs" data-callback='verifyCaptcha' type="submit" onClick="ga('send', 'event', 'subscribe news', 'submit', 'news');">Subscribe</button>
                                            </div>
                                        </form>
                                        <div id="news-success" style="display:none;">
                                            <blockquote class='blockquote bq-primary' style='border-right: none;text-align: left;padding:0;margin-bottom: 0;'>
                                                <p id="news-success-title" class='bq-title' style='padding-left: 0;'></p>
                                            </blockquote>
                                            <div>
                                                <p id="news-success-message"></p>
                                            </div>
                                        </div>
                                        <div id="news-error" style="display:none;">
                                            <blockquote class='blockquote bq-warning' style='border-left: none;padding:0;margin-bottom: 0;'>
                                                <p id="news-error-title" class='bq-title' style='padding-left: 0;'></p>
                                            </blockquote>
                                            <div>
                                                <p id="news-error-message"></p>
                                            </div>
                                        </div>
                                        <div id="preloader" style="display:none;margin-top:50px;" class="text-center"><img src="<?php echo BASE_URL; ?>img/preloader.gif" style="width:20%;"></div>
                                    </div>
                                </div>
                            </div>
                    </section>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                </div>
    </section>
    

    <!--section FAQ-->
    <section id="faq-section">
        <div class="text-center title-wrapper">
            <h2>FAQ</h2> 
        </div>
        <a class="anchor" href="#faq"></a>
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 seller-faq">
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
                                Buyer request will be delivered to you via the website. Then you decide to whom to reveal your contact. 
                            </p>
                            <p>
                                Please note: we may request more information from you before featuring your SaaS. 
                                This is our way of vetting applicants that the Buyers will come in contact with. 
                                This protects the Buyers against the unreliable Sellers.
                            </p>                             
                        </section>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 buyer-faq">
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
                                This protects the Seller against the risk of confidential information, such as financial records, 
                                falling into the wrong hands – i.e. the press or competitors.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
        </div>
    </section>
    

    <!--Section Contact Us--> 
    <section id="contact-us">
        <div class="text-center">
            <h2>Questions?</h2>
        </div>
        <a class="anchor" href="#contact-us"></a>
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
                            <input type="radio" name="contact_role" id="contact_saas_owner" class="radio" value="seller" checked/>
                            <label class="for-radio" for="contact_saas_owner"><span></span>Seller</label>
                        </div>
                        <div class="radio-wrapper">
                            <input type="radio" name="contact_role" id="contact_acquirer" class="radio" value="buyer"/>
                            <label class="for-radio" for="contact_acquirer"><span></span>Buyer</label>
                        </div>
                    </div>
                    <!-- Email-->
                    <div class="md-form form-group">
                        <input placeholder="Enter your email..." type="email" name="contact_email" id="contact_email" class="form-control" maxlength="50" required>
                    </div>  
                    
                    <!--Country-->
                    <div class="md-form form-group" style="margin-top: 44px;display:none;">
                        <input type="text" name="contact_country" class="geotext[country]" id="_country" class="form-control"> 
                    </div> 
                     
                    <div class="md-form input-group" style="margin:0;width: 100%;">
                        <button id="captcha2" class="btn btn-primary btn-lg g-recaptcha invisible-recaptcha" data-sitekey="6LezoyoUAAAAAFIwSsAQTtbrNVx3rV6hLa1ojYqs" data-callback='verifyCaptcha' type="submit" style="width: 100%;margin-left:0;margin-right:0" onClick="ga('send', 'event', 'contact form', 'submit', 'info');">Send Message</button>
                    </div>  
                </form>


                <div id="msg-success" style="display:none;">
                    <blockquote class='blockquote bq-primary text-center' style='border-right: none;text-align: left;padding-top:0;margin-bottom: 0rem;'>
                        <p id="msg-success-title" class='bq-title' style='padding-left: 0;'></p>
                    </blockquote>
                    <div class='text-center'>
                        <p id="msg-success-message"></p>
                    </div>
                </div>
                <div id="msg-error" style="display:none;">
                    <blockquote class='blockquote bq-warning text-center' style='border-left: none;padding-top:0;margin-bottom: 0;'>
                        <p id="msg-error-title" class='bq-title' style='padding-left: 0;'></p>
                    </blockquote>
                    <div class='text-center'>
                        <p id="msg-error-message"></p>
                    </div>
                </div>
                <div id="preloader3" style="display:none;margin:50px 0;" class="text-center"><img src="<?php echo BASE_URL; ?>img/preloader.gif" style="width:20%;"></div>
            </div>
            <div class="col-lg-4 col-md-1 col-sm-1 hidden-xs"></div>
        </div>
    </section>
    

</div>
<!--/ Main container--> 


<!-- MODALS -->

<!-- Request Contact -->
<?php foreach($cards as $card) : ?>
<div class="modal fade" id="requestContactModal<?php echo $card->id; ?>" data-сid="<?php echo $card->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
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
                                    <form id="requests" action="#" method="POST" role="form" style="padding-top: 14px;">

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
                                        <div class="md-form input-group" style="margin:0;width: 100%;">
                                            <button id="captcha3" class="btn btn-primary btn-lg g-recaptcha invisible-recaptcha" data-sitekey="6LezoyoUAAAAAFIwSsAQTtbrNVx3rV6hLa1ojYqs" data-callback='verifyCaptcha' type="submit" style="width: 100%;margin-left:0;margin-right:0" onClick="ga('send', 'event', 'reques contact', 'submit', 'buyers');">Request Contact</button>
                                        </div>      
                                        <small class="checkbox-label">By clicking the button, you agree that you have read and accepted the <a href="<?php echo BASE_URL; ?>privacy" target="_blank" onClick="ga('send', 'event', 'privacy forms', 'click', 'buyers');">Privacy Policy</a> and <a href="<?php echo BASE_URL; ?>terms" target="_blank" onClick="ga('send', 'event', 'terms forms', 'click', 'buyers');">Terms of Use</a> </small>   
                                    </form>
                                    <div id="request-success" style="display:none;">
                                        <blockquote class='blockquote bq-primary' style='border-right: none;text-align: left;padding:0;'>
                                            <p id="request-success-title" class='bq-title' style='padding-left: 0;'></p>
                                        </blockquote>
                                        <div>
                                            <p id="request-success-message" style='margin-bottom:2.5rem;'></p>
                                        </div>
                                    </div>
                                    <div id="request-error" style="display:none;">
                                        <blockquote class='blockquote bq-warning' style='border-left: none;padding:0;'>
                                            <p id="request-error-title" class='bq-title' style='padding-left: 0;margin-bottom:2.5rem;'></p>
                                        </blockquote>
                                        <div>
                                            <p id="request-error-message"></p>
                                        </div>
                                    </div>
                                    <div id="preloader" style="display:none;margin-top:150px;" class="text-center"><img src="<?php echo BASE_URL; ?>img/preloader.gif" style="width:20%;"></div>
                                </div>
                </div>  
                <div id="preloader2" style="display:none;margin:50px 0;" class="text-center"><img src="<?php echo BASE_URL; ?>img/preloader.gif" style="width:20%;"></div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<!-- end of Request contact -->

<!--Footer-->
<?php include 'includes/footer.php'; ?>
<!--/.Footer-->  