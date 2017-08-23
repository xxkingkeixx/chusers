<?php require 'models/header.php' ?>
<?php require 'models/navbar.php' ?>
<?php require 'db.php'     ?>
<?php require 'simple_html_dom.php'     ?>

<?php 
echo '	
<!-- Banner -->
<section id="banner">
<div class="content">
<header>
<h2>Matching Usernames</h2>
<p align="left">Results: ' ;

$query=mysqli_query($conn,"SELECT * FROM store WHERE user_name='$user_name' ");
$count=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);
echo $count;					
							
echo '<br>';
echo $row["user_name"];

if($count == 0){
	echo 'No results found. Did you mean: <br>';
	$format = strtoupper($user_name[0]);
	$sug = mysqli_query($conn,'SELECT * FROM store WHERE user_name LIKE "A%"');
	while ($printsuggestions = mysqli_fetch_array($sug)) {
    echo $printsuggestions["user_name"] . "<br>  ";
    echo $format;
}
}

echo '<br>Definition:<br>';
    $html = @file_get_html("https://www.merriam-webster.com/dictionary/" . $row["user_name"] );
 $title = $html->find("div.card-primary-content",0)->innertext;
    echo $title;


echo '
</p></header><span class="image"><img src="/images/search.jpg" alt="" /></span>
';
echo '</div></section> ';

?>

























<?php require 'models/disqus.php' ?>
<?php require 'models/footer.php' ?>