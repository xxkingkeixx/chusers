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
					<title>403</title>
					<div class="content">
						<header>
							<center>
							  <span class="image"><img src="/images/403.jpg" alt="" /></span>
								    <h2>ERROR 403: Page Forbidden</h2>
							        <p>Sorry, that page is forbidden. Please return to the homepage.</p>
							        <br><br>
						            <a href="/explore" class="button">Continue Shopping</a>
						      </center>
						</header>
					</div>
				</section>


				
				


<!-- all other models must be about this one!! -->
<?php require 'models/footer.php' ?>

