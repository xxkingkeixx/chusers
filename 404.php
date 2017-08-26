<!-- create models and include them where you want your code-->
<?php require 'models/header.php' ?>
<?php require 'models/navbar.php' ?>
<?php require 'db.php' ?>

<style>
  
			#banner .content .image {
				border-radius: 100%;
				display: inline-block;
				height: 18em;
				margin-left: 0em;
				vertical-align: middle;
				width: 18em;
			}
			
</style>

			<!-- Banner -->
				<section id="banner">
					<title>404</title>
					<div class="content">
						<header>
						  <center><span class="image"><img src="/images/404.jpg" alt="" /></span></center>
							<center>
									    <h2>ERROR 404: Page Not Found</h2>
							        <p>Oops! Sorry, we couldn't find that page. Are you lost?</p>
							        <br><br>
						            <a href="/explore" class="button">Continue Shopping</a>
						      </center>
						</header>
						<!--span class="image"><img src="/images/pic01.jpg" alt="" /></span-->
					</div>
				</section>


				
				


<!-- all other models must be about this one!! -->
<?php require 'models/footer.php' ?>

