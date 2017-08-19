<?php

//display total records in db



echo '<link rel="stylesheet" href="assets/css/feed.css" /><div id="feed"><marquee>

<B>Available Accounts: 
  
  </B>';
$usercount="SELECT user_name FROM store";
if ($res=mysqli_query($conn,$usercount))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($res);
  printf("%d",$rowcount);
  // Free result set
  mysqli_free_result($res);
  } 
 echo 
  
  '<b>' . 
  '|   Last 10' .
  'Added Usernames</b>' .
  '</marquee></div>';












?>