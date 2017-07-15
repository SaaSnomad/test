<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SaaSNomad: Coming Soon...</title>
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

</head>

<body>
<div id="top" class="content" style="background-color: #f3f3f3;">
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <!--/.Header--> 

 
    <!-- Main container-->
    <div class="container-fluid" id="main">
        
            <div class="row" style="min-height:700px;">
                <div class="col-lg-2 col-md-2 col-sm-1 hidden-xs"> </div>
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">  
                            <h1 style="margin: 50px 0 30px;">Coming soon ...</h1>
                            

                            <section id="coming-soon">
                            <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding:0;"> 
                                    <p style="margin-bottom: 0;" class="sorry-msg">We are sorry, but this feature is being developed now. Join our newsletter to be notified.</p>
                                
                                    <form id="coming_soon_subscribers" action="#" method="POST" style="padding-top: 10px;">
                                        <!--Email-->
                                        <div class="md-form form-group">
                                            <input placeholder="example@myemaildomain.com" type="email" name="coming_soon_email" id="coming_soon_email" class="form-control" maxlength="50" required>
                                            <label for="coming_soon_email">Email *</label>
                                        </div> 
                                        <!--Country-->
                                        <div class="md-form form-group" style="margin-top: 44px;display:none;">
                                            <input type="text" name="coming_soon_country" class="geotext[country]" id="coming_soon_country" class="form-control"> 
                                        </div>

                                        <div class="md-form input-group" style="margin: 20px 0 0;width: 100%;">
                                            <button class="btn btn-primary btn-lg" type="submit" style="width: 100%;margin-left:0;margin-right:0" onClick="ga('send', 'event', 'find saas', 'submit', 'buyers');">Get notified</button>
                                        </div>
                                        <small class="checkbox-label">We respect your privacy and will not spam you.</small>
                                    </form>
                                    <div id="coming-soon-success" style="display:none;">
                                        <blockquote class='blockquote bq-primary' style='border-right: none;text-align: left;padding:0;'>
                                            <p id="coming-soon-success-title" class='bq-title' style='padding-left: 0;'></p>
                                        </blockquote>
                                        <div>
                                            <p id="coming-soon-success-message" style='margin-bottom:2.5rem;'></p>
                                        </div>
                                        <a href='https://saasnomad.com/' class='custom-link'><i class='fa fa-arrow-left' aria-hidden='true' style='margin-top: 2px;'></i> Go back to website</a>
                                    </div>
                                    <div id="coming-soon-error" style="display:none;">
                                        <blockquote class='blockquote bq-warning' style='border-left: none;padding:0;'>
                                            <p id="coming-soon-error-title" class='bq-title' style='padding-left: 0;margin-bottom:2.5rem;'></p>
                                        </blockquote>
                                        <div>
                                            <p id="coming-soon-error-message"></p>
                                        </div>
                                        <a href='https://saasnomad.com/' class='custom-link'><i class='fa fa-arrow-left' aria-hidden='true' style='margin-top: 2px;'></i> Go back to website</a>
                                    </div>
                                    <div id="preloader" style="display:none;margin-top:50px;" class="text-center"><img src="img/preloader.gif" style="width:20%;"></div>
                                </div>
                                <div class="col-lg-7 col-md-7 hidden-sm">
                                    <img src="img/coming-soon.png" style="width: 90%;margin: 0 5%;">
                                </div>
                            </div>
                        </section> 
                <div class="col-lg-2 col-md-2 col-sm-1 hidden-xs"></div>
            </div> 
 
    </div>
    <!--/ Main container-->

    <!--Footer-->
    
        <footer style="background-color:#37474f;">
            <div class="row" style="padding:0">
                <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="display: flex;align-items: center;color: rgba(255,255,255,0.5);">

                    <a href="../https://saasnomad.com/" class="mb-1 logo" style="font-size:25px; margin: 0 !important;"><b>SaaSNomad</b></a>
                    <ul style="display:inline-block;">
                        <li>
                          <a href="faq.php" target="_blank" class="text-uppercase">
                            <b>FAQ</b>
                          </a>
                        </li>
                        <li>
                          <a href="privacy.php" target="_blank" class="text-uppercase">
                            <b>Privacy</b>
                          </a>
                        </li>
                        <li>
                          <a href="terms.php" target="_blank" class="text-uppercase">
                            <b>Terms</b>
                          </a>
                        </li> 
                      </ul> 
                </div> 
                <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
            </div>   
        </footer>
    <!--/.Footer-->



    <!-- SCRIPTS -->

    <!-- Load jquery via CDN -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> 
  
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
 
    <!-- Geolocation API -->
    <script src="//maps.google.com/maps/api/js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQJ71Xgt3HCqIGW7YXoPtt9U-Jp-bXk9M&callback=initMap"
    type="text/javascript"></script>
    <script type="text/javascript" src="js/geotext-1.0.min.js"></script>
    <script>
        jQuery(function() { 
            new GeoText();  
        });
    </script> 
    <!-- Ajax -->
    <script type="text/javascript" src="js/ajax/coming-soon-subscribers.js"></script>
</body>

</html>