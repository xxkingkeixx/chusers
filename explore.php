<!-- create models and include them where you want your code-->
<?php require 'models/header.php' ?>
<?php require 'models/navbar.php' ?>
<?php include 'db.php' ; ?>
<!DOCTYPE html>
<html>
<head>
    
    <link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">

    <title>Explore</title>

  <!-- CSS -->
    <link href="assets/css/explorecss/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/explorecss/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/explorecss/font-awesome.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/explorecss/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/explorecss/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>

<body>
    

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->


			<!-- Banner -->
				<section id="banner">
					<title>Welcome!</title>
					<div class="content">
						<header>
							<center><h2>The Account Warehouse</h2>
							<p>Buy and offer for original accounts, or browse profile tutorials.<br />
							Learn about current projects coming soon!</p>
							</center>
						</header>
			
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>
				
			<!-- Two -->
				<section id="#one">
					<div class="content">

        <!-- CONTENT --------------------------------------------------------------------------------->
        <!-- About Section -->
        <section id="about" class="pt pt-sm-80">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="col-md-8 offset-md-2"></div>
                        <h2>
                            <span class="color"><a href="/"><font color="#e8ac4a">Chatangu.tk.</font></a></span> The biggest<br />
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
                        
                        <li><a class="categories active" data-filter="*">All</a></li>
                        <li><a class="categories" data-filter=".offer">offer</a></li>
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
                        <li><a class="categories" data-filter=".n">n</a></li>
                        <li><a class="categories" data-filter=".o">o</a></li>
                        <br>
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
 
 					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
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