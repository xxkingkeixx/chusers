<?php require 'models/header.php';
      require 'models/navbar.php';
?>      



			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Add Usernames Here</h2><p>  (Or Multiple - Ex :  Username1,Username2 )</p>
							<form method="post" action=''>
  <br>
  <input type="text"  name="user_name"><br>
  <input type="submit" value="Insert">
</form><br>
<h2>Specify Price for username(s)</h2>
<div class="row uniform 50%">

<form method="post" action=''>
  <input type="text"  name="user_names"><br>
  <div class="6u$ 12u$(medium)">
  <input type="checkbox" name="class" value="legendary" checked>
  <label for="class">Legendary</label>
										</div>
  <div class="6u$ 12u$(medium)">
  <input type="checkbox" name="class" value="premium">
  <label for="class">Premium</label>
										</div>
  <div class="6u$ 12u$(medium)">
  <input type="checkbox" name="class" value="normal">
  <label for="class">Normal</label>
										</div>
  <div class="6u$ 12u$(medium)">
  <input type="checkbox" name="class" value="lowest">
  <label for="class">Lowest</label>
										</div>
  	
</div>											
											

										

</form>


						</header>
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
					</div>
						
				</section>
				
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Added Usernames</h2>
                        		<p><?php require 'post.php'; ?></p>	
							
						</header>
				
                            
					</div>
				</section>

		
!-- all other models must be about this one!! -->
<?php require 'models/footer.php' ?>		