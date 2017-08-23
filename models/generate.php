 <?php            
require '/db.php';
$row = mysqli_query($conn, "SELECT * FROM store ");
$usersep = mysqli_query($conn, "SELECT user_name FROM store ");

while ($rowdata = mysqli_fetch_array($row) && $usersplit = mysqli_fetch_array($usersep) ) {
    $letter = $usersplit[0];
    echo $letter;
    echo $rowdata["user_name"] . ",  ";
}

echo '
                
                <div class="nf-item premium d spacing"><div class="item-box"><a href="#premium">
    <img alt="1" src="http://i.imgur.com/DVAxSJV.png" class="item-container">
        <div class="item-mask"><div class="item-caption">
            <h5 class="white">Example - $10</h5><p class="white">premium</p>
                </div></div></a></div></div>
      ';          
                
                
?>                