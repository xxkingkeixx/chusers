 <?php            
//require db connection
require 'db.php';
//select all from db
$row = mysqli_query($conn, "SELECT * FROM store ");

//while each username is fetched
while ($rowdata = mysqli_fetch_array($row)  ) {
    //set letter to the username
    $letter = $rowdata['user_name'];
    //echo out html
    echo '<div class="nf-item ';
    //get whether its legendary etc
    echo $rowdata['class'] . " ";
    //get the first letter of the word
    echo $letter[0];  
    //print html
    echo ' spacing"><a href="/checkout/';
    echo $rowdata['class'];
    echo '.php">';
    
    
    
    //print the username
    echo $rowdata["user_name"];
    //print a dollar sign
    echo ' - $';
    //print price from database
    echo $rowdata['price'] . '<br>';
    if ($rowdata['user_status'] == true){
        echo 'Available';
    }
    else
    {
        echo 'Bought by ' . $rowdata['buyer'];
    }
    //print html
    echo'</h5><p class="white">';
    //print class again
    echo $rowdata['class'];
    echo'</p></a></div>';
    
    
}

    
                
?>                