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
                        			<!-- Form -->
							<section>
								<h3>Form</h3>
								<form method="post" action="#">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											<input type="text" name="name" id="name" value="" placeholder="Name" />
										</div>
										<div class="6u$ 12u$(xsmall)">
											<input type="email" name="email" id="email" value="" placeholder="Email" />
										</div>
										<div class="12u$">
											<div class="select-wrapper">
												<select name="category" id="category">
													<option value="">- Category -</option>
													<option value="1">Manufacturing</option>
													<option value="1">Shipping</option>
													<option value="1">Administration</option>
													<option value="1">Human Resources</option>
												</select>
											</div>
										</div>
										<div class="4u 12u$(medium)">
											<input type="radio" id="priority-low" name="priority" checked>
											<label for="priority-low">Low Priority</label>
										</div>
										<div class="4u 12u$(medium)">
											<input type="radio" id="priority-normal" name="priority">
											<label for="priority-normal">Normal Priority</label>
										</div>
										<div class="4u$ 12u$(medium)">
											<input type="radio" id="priority-high" name="priority">
											<label for="priority-high">High Priority</label>
										</div>
										<div class="6u 12u$(medium)">
											<input type="checkbox" id="copy" name="copy">
											<label for="copy">Email me a copy of this message</label>
										</div>
										<div class="6u$ 12u$(medium)">
											<input type="checkbox" id="human" name="human" checked>
											<label for="human">I am a human and not a robot</label>
										</div>
										<div class="12u$">
											<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
										</div>
										<div class="12u$">
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="special" /></li>
												<li><input type="reset" value="Reset" /></li>
											</ul>
										</div>
									</div>
								</form>

							
						</header>
				
                            
					</div>
				</section>

		

<?php require 'models/footer.php' ?>		