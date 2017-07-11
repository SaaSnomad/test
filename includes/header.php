
<!-- Google Analytics -->
<?php include 'includes/analyticstracking.php'; ?>

<header id="top" class="navbar fixed-top">
        <div class="row">
            <div class="col-6">
                <h4 class="text-muted" id="logo" >
                    <a class="text-muted" href="index.php">
                        <img src="img/logo.svg" alt="logo" onClick="ga('send', 'event', 'logo', 'click', 'uxui');">
                    <b>SaaS</b>Nomad</a>
                </h4>
            </div>
            <div class="col-6">
                <a class="btn scrolling-navbar text-center flex-center" data-toggle="modal" data-target="#sellerModal"  id="apply-navbar" onClick="ga('send', 'event', 'apply header', 'click', 'sellers');">Apply for free</a> 
            </div>
        </div>        
</header> 