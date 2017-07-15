<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SaaSNomad: FAQ</title>
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
    <style>
        h3 {
            margin: 2rem 0 1rem;
        }
        #content ul li {
            margin-bottom: 10px;
            margin-left: 0;
        }
        #content ul li:before {
            content: "";
            line-height: .5em;
            width: .3em;
            height: .3em;
            background-color: #0275d8;
            float: left;
            margin: .55em 1.25em .55em 0;
            border-radius: 50%;
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
        
        <section id="faq"> 
            <div class="row" style="padding-top:100px;">
                <div class="col-lg-3 col-md-3 col-sm-1 hidden-xs"> </div>
                <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12">  
                    <div id="content">
                        <a href="https://saasnomad.com/" class="custom-link"><i class="fa fa-arrow-left" aria-hidden="true" style="margin-top: 2px;"></i> Go back to website</a>
                        <h1 style="margin: 30px 0;">FAQ</h1>
                        <ul>
                            <li><a class="anchor" href="#about">What is SaaSNomad?</a></li>
                            <li><a class="anchor" href="#seller">Do I have to pay to register as a Seller?</a></li>
                            <li><a class="anchor" href="#anonymity">How does SaaSNomad preserve the anonymity of my offer?</a></li>
                            <li><a class="anchor" href="#buyer">Do I have to pay to apply as a Buyer?</a></li>
                            <li><a class="anchor" href="#more">How do I find out more about a featured company?</a></li>
                        </ul>
                        <section id="about">                            
                            <h3>What is SaaSNomad?</h3>
                            <p>
                                SaaSNomad.com is just a place where you can meet a potential Buyer.
                            </p> 
                        </section>
                        <section id="seller">
                            <h3>Do I have to pay to register as a Seller?</h3>
                            <p>
                                It’s free to apply your SaaS for sale via SaaSNomad.com. 
                                Fees are paid when you decide to answer the Buyer's contact request.
                            </p> 
                        </section>
                        <section id="anonymity">
                            <h3>How does SaaSNomad preserve the anonymity of my offer?</h3>
                            <p>
                                SaaSNomad provides the opportunity to sale your SaaS absolutely anonymously. 
                                That's why SaaSNomad does not allow the display of your contact details within a business card.
                                Buyer request will be delivered to you via the website. 
                                Then you decide to whom to reveal your contact. 
                            </p> 
                        </section>
                        <section id="buyer">
                            <h3>Do I have to pay to apply as a Buyer?</h3>
                            <p>
                                SaaSNomad is absolutely free for you as a Buyer as well as all 
                                benefits which include the ability to get notified about all newly featured companies.
                            </p> 
                        </section>
                        <section id="more">
                            <h3>How do I find out more about a featured company?</h3>
                            <p>
                                You can contact the Seller directly via the SaaSNomad site if you want further information about a featured company. 
                                Just fill out the request form following the link at the foot of the featured company card, 
                                and we will get back to you within 24 hours with response from the Seller.
                                In case of positive response from the Seller you will get his/her contact absolutely for free.
                                Then to find out more about a SaaS you just contact the seller directly.
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
    $(document).on('click', '.anchor', function(event){
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 600);
    });
    </script> 

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script> 
 
</body>

</html>