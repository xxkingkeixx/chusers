<?php

//display total records in db


//add html
echo '<link rel="stylesheet" href="assets/css/feed.css" /><div id="feed"><marquee>

<B>Available Accounts: </B>';

//fetch ammount of users
$usercount="SELECT user_name FROM store";
if ($res=mysqli_query($conn,$usercount))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($res);
  printf("%d",$rowcount);
  // Free result set
  mysqli_free_result($res);
  } 
  
 //add html 
 echo 
  
  '<b>' . 
  ' . . . Last 10 ' .
  'Added Usernames . . .</b>';
//last 10 added to the database
$lastusers = "SELECT * FROM 
(SELECT * FROM store ORDER BY user_id DESC LIMIT 50) 
sub ORDER BY user_id ASC";

if ($les=mysqli_query($conn,$lastusers))
  {
  // Return the number of rows in result set
  
  printf("%d",$lastusers);
  // Free result set
  mysqli_free_result($les);
  } 



 
 
 echo '</marquee></div>';













?>