<?php

//display total records in db


//add html
echo '<link rel="stylesheet" href="assets/css/feed.css" /><div id="feed"><marquee>

<B>Available Accounts: ';

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
  
   
  ' . . . Last 100 Added Usernames . . .';
//last 50 added to the database


$row = mysqli_query($conn, "SELECT user_name FROM (
  SELECT * 
  FROM store 
  ORDER BY user_id DESC
  LIMIT 100
) AS store ORDER BY user_id ASC");

while ($lastusers = mysqli_fetch_array($row)) {
    echo $lastusers["user_name"] . ",  ";
}



echo '....Bot info and documentation still under construction...</b></marquee></div>';













?>