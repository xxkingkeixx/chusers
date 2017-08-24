<?php require 'models/header.php' ?>
<?php require 'models/navbar.php' ?>
<?php require 'db.php'     ?>
<?php require 'simple_html_dom.php'     ?>
<?php require 'models/feed.php';
      require 'models/music.php'?>

<?php 
echo '	
<!-- Banner -->
<section id="banner">
<div class="content">
<br><br><header>
<h2>Matching Usernames</h2>
<p align="left">Results: ' ;
//find a username match
$query=mysqli_query($conn,"SELECT * FROM store WHERE user_name='$user_name' ");
//number of results
$count=mysqli_num_rows($query);
//the result
$row=mysqli_fetch_array($query);
echo $count;					
							
echo '<br>';
echo $row["user_name"];

//if the user isn't found print suggestions
if($count == 0){
echo 'No results found. Did you mean: <br>';
//take the first letter of the word and find words like it 	
$format = strtoupper($user_name[0] . '%');
$sug = mysqli_query($conn,"SELECT * FROM store WHERE user_name LIKE '$format'");
//print results	
while ($printsuggestions = mysqli_fetch_array($sug)) {
echo $printsuggestions["user_name"] . "<br>  ";
}
//print html
echo '
</p></header><span class="image"><img src="/images/search.jpg" alt="" /></span>
';
echo '</div></section> ';
}

//if results are found parse the definition
else {
echo '<br>Price: $' . $row["price"];
echo '<br>Type: ' . $row["class"];	
echo '
</p></header><span class="image"><img src="/images/search.jpg" alt="" /></span>
';
echo '<br><br>Definition:<br>';
$html = @file_get_html("https://www.merriam-webster.com/dictionary/" . $row["user_name"] );
$title = $html->find("div.card-primary-content",0)->innertext;
 echo $title;
 echo '</div></section> ';
}



?>

























<?php require 'models/disqus.php' ?>
<?php require 'models/footer.php' ?>