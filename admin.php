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
	<!-- Form -->
							<section>
								<h3>Form</h3>
								<form method="post" action="">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="user_names" id="name" value="" placeholder="usernames here" />
										</div>
<center>
										<div class="4u 12u$(medium)">
											<input type="checkbox" id="priority-low" name="class" value='legendary' checked>
											<label for="priority-low">Legendary</label>
										</div>
										<div class="4u 12u$(medium)">
											<input type="checkbox" id="priority-normal" name="class" value='premium'>
											<label for="priority-normal">Premium</label>
										</div>
										<div class="4u$ 12u$(medium)">
											<input type="checkbox" id="priority-high" name="class" value='regular'>
											<label for="priority-high">Regular</label>
										</div>
										<div class="4u$ 12u$(medium)">
											<input type="checkbox" id="priority-h" name="class" value='lowest'>
											<label for="priority-h">Lowest</label>
										</div>
											<div class="4u$ 12u$(medium)">
											<input type="checkbox" id="priority-c" name="class" value='offer'>
											<label for="priority-c">Offer</label>
										</div>
</center>
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Send" class="special" /></li>
											
											</ul>
										</div>
									</div>
								</form>
								
								<!-- specify buyer here -->
									<h2>Set BUYER here</h2>
								<form method="post" action="">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="bought" id="n" value="" placeholder="username they got here" />
										</div>
										<div class="6u 12u$(xsmall)">
											<input type="text" name="buyer" id="n" value="" placeholder="buyer name here" />
										</div>

										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Send" class="special" /></li>
											
											</ul>
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
                        	<?php require 'post.php'?>	
							
						</header>
				
                            
					</div>
				</section>

		

<?php require 'models/footer.php' ?>		