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
  ' . . . Last 50 Added Usernames . . .</b>';
//last 50 added to the database
$lastusers = mysqli_query
("SELECT user_name FROM (
  SELECT * 
  FROM store 
  ORDER BY user_id DESC
  LIMIT 50
) AS store ORDER BY user_id ASC");

$row = mysqli_fetch_array($lastusers);
echo $row['user_name'];



echo '</marquee></div>';













?>