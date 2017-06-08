<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SaaSNomad: Request Contact</title>
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
    <!-- Checkbox -->
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="stylesheet" href="css/checkbox.css"> 
    <!-- Template styles -->
    
</head>

<body>
<div id="top" class="content">
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <!--/.Header-->

 
    <!-- Main container-->
    <div class="container-fluid" id="main" style="background-color: #f3f3f3;">
        
            <div class="row" style="min-height:700px;">
                <div class="col-lg-2 col-md-2 col-sm-1 hidden-xs"> </div>
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">  
                            <h1 class="text-center" style="margin: 50px 0 10px;">Request Seller's Contact</h1>
                            <section id="coming-soon">
                            <div class="row" style="padding-top: 20px;padding-bottom: 20px;">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top:2.3rem;"> 
                                <p style="margin-bottom: 1.5rem;">You are going to request seller's contact</br>which SaaS is described on the card below</p>
                                    <!--Card-->
                                    <div class="card"> 
                                        <!--Card content-->
                                        <div class="card-block">
                                            <!--Title-->
                                            <h4 class="card-title">Marketplace</h4>
                                            <!--Text-->
                                            <p class="card-text">&#163;60,000 MRR<br>6 Employees<br>United Kingdom</p>
                                        </div>
                                        <!--/.Card content-->

                                        <h4 class="card-title"></h4>
                                            <!--Text-->
                                            


                                    </div>
                                    <!--/.Card-->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <form id="requests" style="padding-top: 10px;">

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
                                            <input value="267" type="text" name="request_id" id="request_id" class="form-control"> 
                                        </div>  
                                        <!-- Checkbox -->
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
                                                    </div> 
                                        <div class="md-form input-group" style="margin:0;width: 100%;">
                                            <button class="btn btn-primary btn-lg" type="submit" style="width: 100%;margin-left:0;margin-right:0">Request Contact</button>
                                        </div>          
                                    </form>
                                    <div id="request-success" style="display:none;">
                                        <blockquote class='blockquote bq-primary' style='border-right: none;text-align: left;padding:0;'>
                                            <p id="request-success-title" class='bq-title' style='padding-left: 0;'></p>
                                        </blockquote>
                                        <div>
                                            <p id="request-success-message" style='margin-bottom:2.5rem;'></p>
                                        </div>
                                        <a href='../index.php' class='custom-link'><i class='fa fa-arrow-left' aria-hidden='true' style='margin-top: 2px;'></i> Go back to website</a>
                                    </div>
                                    <div id="request-error" style="display:none;">
                                        <blockquote class='blockquote bq-warning' style='border-left: none;padding:0;'>
                                            <p id="request-error-title" class='bq-title' style='padding-left: 0;margin-bottom:2.5rem;'></p>
                                        </blockquote>
                                        <div>
                                            <p id="request-error-message"></p>
                                        </div>
                                        <a href='../index.php' class='custom-link'><i class='fa fa-arrow-left' aria-hidden='true' style='margin-top: 2px;'></i> Go back to website</a>
                                    </div>
                                    <div id="preloader" style="display:none;margin-top:150px;" class="text-center"><img src="img/preloader.gif" style="width:20%;"></div>
                                </div>
                            </div>
                        </section> 
                <div class="col-lg-2 col-md-2 col-sm-1 hidden-xs"></div>
            </div> 
 
    </div>
    <!--/ Main container-->
                                     
    <!--Footer-->
    <?php include 'includes/footer.php'; ?>
    <!--/.Footer-->



    <!-- SCRIPTS -->

    <!-- jQuery v2.0.3  -->
    <script type="text/javascript" src="js/jquery.min.js"></script> 
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>  
  
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    
    <!-- Checkbox -->
    <script type="text/javascript" src="js/checkbox.js"></script> 

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
    <script type="text/javascript" src="js/ajax/requests-ajax.js"></script>

     

</body>

</html>
