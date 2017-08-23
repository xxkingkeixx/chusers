 <?php            

require 'db.php';
$row = mysqli_query($conn, "SELECT * FROM store ");
$usersep = mysqli_query($conn, "SELECT user_name FROM store ");

while ($rowdata = mysqli_fetch_array($row)  ) {
    $letter = $rowdata['user_name'];
    echo $letter[0];
    //echo $rowdata["user_name"] . ",  ";
}

    
                
?>                