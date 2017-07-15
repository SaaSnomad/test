<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SaaSNomad: Privacy</title>
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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css"> 
    <!-- Template styles -->
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
    
</head>

<body>
<div id="top" class="content">

    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <!--/.Header--> 

 
    <!-- Main container-->
    <div class="container-fluid" id="main">
        
        <section id="privacy"> 
            <div class="row" style="padding-top:100px;">
                <div class="col-lg-3 col-md-3 col-sm-1 hidden-xs"> </div>
                <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">  
                    <div id="content">
                        <section id="personal">
                        <a href="https://saasnomad.com/" class="custom-link"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-top: 2px;"></i> Go back to website</a>
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
 
    </div>
    <!--/ Main container-->

    <!--Footer-->
    <?php include 'includes/footer.php'; ?>
    <!--/.Footer-->



    <!-- SCRIPTS -->

    <!-- Load jquery via CDN -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>  

    <!-- Go top button animation -->
    <script>
    $('#go-back').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 600);
        return false;
    });
    </script> 

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script> 

</body>

</html>