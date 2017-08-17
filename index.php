<?php 
require 'db.php';
session_start();
?>


<!DOCTYPE html>
<html lang = "en-us">
<head>
<title>Shop</title>
<meta charset ='UTF-8'>
<meta name="description" content="The chatango username warehouse">
<meta name="keywords" content="chatango,chatangu,shop,buy,purchase,usernames">
<meta name="author" content="Kei, Aeri">
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
							<li id='list'> <input id='search' type="text" style ='border-radius:33px;height:25px;' method="post" maxlength="50" action="searchresults.php" class="form-control" placeholder="Search for Usernames" /></li>
						<!-- Developers -->
							<li id='list'>
								<a href="/">Developers</a>
							</li>
						<!--Tutorials -->
							<li id='list'>
								<a href="http://chatango-themes.tumblr.com/">Tutorials</a>
							</li>
						<!-- Bot -->	
							<li id='list'>
								<a href="bot.php">Bot</a>
							<ul>
								<li><a href="#">Info</a>
								<ul>
							<li><a href="#"> Developer</a></li>
							<li><a href="#">Documentation</a></li>
							<li><a href="#">Progress</a></li>
							<li><a href="#">Suggestions</a></li>
							</ul>
							</li>
							<li><a href="#">Report Bugs</a></li></ul>
							</ul>
							</li>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>The Chatango Warehouse</h2>
							<p>Buy and offer for original accounts, or browse profile tutorials.<br />
							Learn about current projects coming soon!</p>
						</header>
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="4u 12u$(medium)">
									<header>
										<h2>Over 500 Original Usernames Available</h2>
										<p>The biggest repository of original usernames you'll ever find.</p>
									</header>
								</div>
								<div class="4u 12u$(medium)">
									<p>Below you will be able to search for alphabetically for a username that fits you. Because of the ridiculous amount of usernames available, the prices of these usernames will be vastly lower than original market prices. This will put an end to the elitists selling accounts for $300 or more.</p>
								</div>
								<div class="4u$ 12u$(medium)">
									<p>All accounts are secured as chats to make transactions smooth and create an easy transition of ownership. Because of the high volume of requests for usernames you should expect a wait-time of at least 5 minutes. All transactions are safely secured with Paypal and once you pay for a username, you will be told when the username is free to register. Furthermore, all transactions are final.</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/pic03.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Security is Our Priority</h2>
							<p>Developers: Debugger / Aeri<br>  Bot: Iceball </p>
						</header>
						<p>As recently stated, every account is secured as a chat, and when a purchase is made, the account will be freed to register. Warning: Do NOT disclose the username to ANYONE before purchasing it. Failure to listen to this warning may lead to someone you know registering your account. If you have any questions or concerns you can message the developers listed, or the helper bot (coming soon).</p>
						
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/pic04.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Chatango Tutorials and Upcoming Projects</h2>
							<p>Have problems creating a full profile or mini profile? Visit our free tutorials page.</p>
						</header>
						<p>The companion bot project is currently being developed, and details of the construction will be posted on the bot progress page.</p>
						
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Accumsan sed tempus adipiscing blandit</h2>
							<p>Iaculis ac volutpat vis non enim gravida nisi faucibus posuere arcu consequat</p>
						</header>
						<div class="box alt">
							<div class="row uniform">
								<section class="4u 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-area-chart"></span>
									<h3>Ipsum sed commodo</h3>
									<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
								</section>
								<section class="4u 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-comment"></span>
									<h3>Eleifend lorem ornare</h3>
									<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
								</section>
								<section class="4u$ 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-flask"></span>
									<h3>Cubilia cep lobortis</h3>
									<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
								</section>
								<section class="4u 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-paper-plane"></span>
									<h3>Non semper interdum</h3>
									<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
								</section>
								<section class="4u 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-file"></span>
									<h3>Odio laoreet accumsan</h3>
									<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
								</section>
								<section class="4u$ 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-lock"></span>
									<h3>Massa arcu accumsan</h3>
									<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
								</section>
							</div>
						</div>
						<footer class="major">
							<ul class="actions">
								<li><a href="#" class="button">Magna sed feugiat</a></li>
							</ul>
						</footer>
					</div>
				</section>

			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Comments:</h2>
							
						</header>
					<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://cloudstrato.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
                            
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
<script id="dsq-count-scr" src="//cloudstrato.disqus.com/count.js" async></script>
	</body>
</html>