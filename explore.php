<?php include 'db.php' ; ?>
<!DOCTYPE html>
<html>
<head>
    
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
    
    <meta charset="utf-8" />
    <title>Explore</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="nileforest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  <!-- CSS -->
    <link href="assets/css/explorecss/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/explorecss/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/explorecss/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/explorecss/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/explorecss/sidebar-menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/explorecss/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/explorecss/jquery-ui.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->



    <!-- Site Wraper -->
    <div class="wrapper">
        <!-- CONTENT --------------------------------------------------------------------------------->
        <!-- About Section -->
        <section id="about" class="pt pt-sm-80">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="col-md-8 offset-md-2"></div>
                        <h2>
                            <span class="color">Chatangu.tk.</span> The biggest<br />
                            repository of Chatango accounts
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->
        <!-- start work section-->
        
        <section class="ptb ptb-sm-80">
            <div class="container">
                <div class="row">
                    <ul class="col container-filter categories-filter">
                        
                        
                       <a href="http://chatangu.tk/"><img src="http://findicons.com/files/icons/1580/devine_icons_part_2/512/home.png" width="50"></a>
    
                        <li><a class="categories active" data-filter="*">All</a></li>
                        <li><a class="categories" data-filter=".legendary">legendary</a></li>
                        <li><a class="categories" data-filter=".premium">premium</a></li>
                        <li><a class="categories" data-filter=".regular">regular</a></li>
                        <li><a class="categories" data-filter=".lowest">lowest</a></li>
                        <br>
                        <li><a class="categories" data-filter=".a">a</a></li>
                        <li><a class="categories" data-filter=".b">b</a></li>
                        <li><a class="categories" data-filter=".c">c</a></li>
                        <li><a class="categories" data-filter=".d">d</a></li>
                        <li><a class="categories" data-filter=".e">e</a></li>
                        <li><a class="categories" data-filter=".f">f</a></li>
                        <li><a class="categories" data-filter=".g">g</a></li>
                        <li><a class="categories" data-filter=".h">h</a></li>
                        <li><a class="categories" data-filter=".i">i</a></li>
                        <li><a class="categories" data-filter=".j">j</a></li>
                        <li><a class="categories" data-filter=".k">k</a></li>
                        <li><a class="categories" data-filter=".l">l</a></li>
                        <li><a class="categories" data-filter=".m">m</a></li>
                        <br>
                        <li><a class="categories" data-filter=".n">n</a></li>
                        <li><a class="categories" data-filter=".o">o</a></li>
                        <li><a class="categories" data-filter=".p">p</a></li>
                        <li><a class="categories" data-filter=".q">q</a></li>
                        <li><a class="categories" data-filter=".r">r</a></li>
                        <li><a class="categories" data-filter=".s">s</a></li>
                        <li><a class="categories" data-filter=".t">t</a></li>
                        <li><a class="categories" data-filter=".u">u</a></li>
                        <li><a class="categories" data-filter=".v">v</a></li>
                        <li><a class="categories" data-filter=".w">w</a></li>
                        <li><a class="categories" data-filter=".x">x</a></li>
                        <li><a class="categories" data-filter=".y">y</a></li>
                        <li><a class="categories" data-filter=".z">z</a></li>
                    </ul>
                </div>
                
                <div class="row container-grid nf-col-5"> <!--how many in a row number-->  
     <?php require 'models/generate.php'; ?>
     
        </div> 
        </div>
        </div>
        </section>
 
        <!-- End Work Section -->
    

        <div class="spacer-60"></div>
        <!-- END CONTENT ---------------------------------------------------------------------------->
    </div>
    <!-- Site Wraper End -->

 <!-- JS -->
    <script src="assets/js/explorejs/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="assets/js/explorejs/jquery.easing.js" type="text/javascript"></script>
    <script src="assets/js/explorejs/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/js/explorejs/bootstrap.min.js" type="text/javascript"></script>

   
    <script src="assets/js/explorejs/jquery.viewportchecker.js" type="text/javascript"></script>
    <script src="assets/js/explorejs/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="assets/js/explorejs/wow.min.js" type="text/javascript"></script>
    <script src="assets/js/explorejs/jquery.colorbox-min.js" type="text/javascript"></script>
    
    <script src="assets/js/explorejs/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="assets/js/explorejs/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="assets/js/explorejs/imagesloaded.pkgd.min.js" type="text/javascript"></script>
  
    <script src="assets/js/explorejs/jquery.fs.tipper.min.js" type="text/javascript"></script>
   
    <script src="assets/js/explorejs/theme.js" type="text/javascript"></script>
    <script src="assets/js/explorejs/navigation.js" type="text/javascript"></script>


</body>
</html>