 <?php            

require 'db.php';
$row = mysqli_query($conn, "SELECT * FROM store ");
$usersep = mysqli_query($conn, "SELECT user_name FROM store ");

while ($rowdata = mysqli_fetch_array($row) && $usersplit = mysqli_fetch_array($usersep) ) {
    $letter = $usersplit[0];
    echo $letter;
    echo $rowdata["user_name"] . ",  ";
}

    
                
?>                