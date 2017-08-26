<?php
//connect to DB
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
$conn = new mysqli($server, $username, $password, $db);

//echo $_SERVER['DOCUMENT_ROOT'];
//display total records in db
$usercount="SELECT user_name FROM store";

if ($res=mysqli_query($conn,$usercount))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($res);
  printf("Total usernames: %d \n",$rowcount);
  // Free result set
  mysqli_free_result($res);
  }


// show records in db
$sql2 = "SELECT * FROM store ORDER BY user_name"; $mydata = $mydata = mysqli_query($conn,$sql2); 
while($record = $mydata->fetch_assoc())
{ 
    //show user names
    echo "<br>"; 
    echo $record['user_name'];
    // show if user is available
    $capture = $record['user_status'];
    if (($capture) == true ){
        
     echo "  - Status : Available";
     
    }
     else
     {
     echo " - Status : Taken by"; 
     echo ' ' . $record['buyer'];
     }
     } 
//assign post from form
$user_name = $_POST['user_name']; 
mysqli_select_db($db,$conn);

//if form is empty
if(empty($_POST) ) {die(); }
//if form has commas , allow multiple entries  
else
{
    $exploded = preg_split('@,@', $user_name, NULL, PREG_SPLIT_NO_EMPTY);
    foreach ($exploded as $value) 
    {$result = $value;$sql = "INSERT INTO store(user_name) VALUES ('$result')";
    mysqli_query($conn,$sql); 
    header("Refresh:0; url=admin.php"); }
    
}

//set class
$explode = preg_split('@,@', $_POST['user_names'], NULL, PREG_SPLIT_NO_EMPTY);
    foreach ($explode as $value) 
{

if(isset($_POST['class']) &&
$_POST['class'] == 'legendary')
{
mysqli_query($conn, "UPDATE store SET class = 'legendary', price = '20' WHERE  user_name = '$value'");
}
if(isset($_POST['class']) &&
$_POST['class'] == 'premium')
{
mysqli_query($conn, "UPDATE store SET class = 'premium' , price = '10' WHERE  user_name = '$value'");
}
if(isset($_POST['class']) &&
$_POST['class'] == 'regular')
{
mysqli_query($conn, "UPDATE store SET class = 'regular' , price = '5' WHERE  user_name = '$value'");
}
if(isset($_POST['class']) &&
$_POST['class'] == 'lowest')
{
mysqli_query($conn, "UPDATE store SET class = 'lowest' , price= '1' WHERE  user_name = '$value'");
}
if(isset($_POST['class']) &&
$_POST['class'] == 'offer')
{
mysqli_query($conn, "UPDATE store SET class = 'offer' , price= '1' WHERE  user_name = '$value'");
}
}





    
            
        
      
?>