<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="SaaS for sale">
    <meta name="keywords" content="Small Businesses For Sale, ">

    <title>SaaSNomad | Anonymously reach potential buyers of your SaaS startup</title>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo BASE_URL; ?>img/logo.png" type="image/png" sizes="16x16"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font/font-awesome/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">-->
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
    <script type="application/ld+json">
        {   
            "@context" : "http://schema.org",
            "@type" : "Organization",
            "name" : "SaaSNomad",
            "alternateName" : "saasnomad", 
            "logo" : "https://saasnomad.com/img/logo.png",
            "url" :  "https://saasnomad.com/"
        }
    </script> 
</head>

<body>
<!-- Google Analytics -->
<?php include 'core/init.php'; ?>
<?php include 'helpers/db_helper.php'; ?>
<?php include 'includes/analyticstracking.php'; ?>

<header id="top" class="navbar fixed-top">
        <div class="row">
            <div class="col-6">
                <h4 class="text-muted" id="logo" onClick="ga('send', 'event', 'logo', 'click', 'uxui');">
                    <a class="text-muted" href="<?php echo BASE_URL; ?>">
                        <img src="img/saasnomad-logo.svg" alt="SaaSNomad logo"/>
                    <b>SaaS</b>Nomad</a>
                </h4>
                <small class="text-muted motto" style="padding-left: .7rem;font-size: .8rem;">The Smart Way to Sell SaaS Startup</small>
            </div>
            <div class="col-6">
                <a class="btn scrolling-navbar text-center flex-center" data-toggle="modal" data-target="#sellerModal"  id="apply-navbar" onClick="ga('send', 'event', 'apply header', 'click', 'sellers');">Apply for free</a> 
            </div>
        </div>        
</header> 