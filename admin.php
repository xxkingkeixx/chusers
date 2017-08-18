


<!DOCTYPE html>
<html lang = "en-us">
<head>
<title>Add Users</title>
<meta charset ='UTF-8'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="assets/favicon/favicon.ico" type="image/x-icon">
<link rel="icon" href="assets/favicon/favicon.ico" type="image/x-icon">
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
<audio id='beep' preload="auto">
	
<!--     Change Audio Here  -->   	
<source src="audio/ding.mp3"></source>
Your browser isn't invited for super fun audio time.
</audio>		
</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="http://chatangu.tk/">Chatangu</a></h1>
					<nav id="nav" style='margin-right:40px;'>
						<ul>
							<li id='list'><a href="index.html" class="fa fa-home fa-fw"></a></li>
							
							</ul>
							
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Add Usernames Here</h2><p>  (Or Multiple - Ex :  Username1,Username2 )</p>
							<form method="post" action-''>
  <br>
  <input type="text"  name="user_name"><br>
  <input type="submit" value="Insert">
</form>
						</header>
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
					</div>
						<a href="#five" class="goto-next scrolly">Next</a>
				</section>
				
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Added Usernames</h2>
                        		<p><?php require 'post.php'; ?></p>	
							
						</header>
				
                            
					</div>
				</section>

		
			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
						<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Chatangu All rights reserved.</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

<?php echo "<script type=\"text/javascript\">

$(\"#search\").on(\"keyup\",function(){
  $(\"#beep\")[0].pause();
  $(\"#beep\")[0].currentTime=0;
  $(\"#beep\")[0].play();
});

$(\"nav a\").on(\"mouseenter\",function(){
  $(\"#beep\")[0].pause();
  $(\"#beep\")[0].currentTime=0;
  $(\"#beep\")[0].play();
});

</script> "; ?>

	</body>
</html>