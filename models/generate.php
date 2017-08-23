 <?php            

require 'db.php';
$row = mysqli_query($conn, "SELECT * FROM store ");
$usersep = mysqli_query($conn, "SELECT user_name FROM store ");

while ($rowdata = mysqli_fetch_array($row)  ) {
    $letter = $rowdata['user_name'];
    echo '<div class="nf-item ';
    echo $letter[0];  
    echo ' spacing"><div class="item-box"><a href="#premium">
    <img alt="1" src="http://i.imgur.com/DVAxSJV.png" class="item-container">
    <div class="item-mask"><div class="item-caption">
    <h5 class="white">';
    echo $rowdata["user_name"];
    echo '</h5><p class="white">premium</p></div></div></a></div></div>';
    
    
}

    
                
?>                