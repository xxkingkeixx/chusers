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
<p>Results: ' ;

$query=mysqli_query($conn,"SELECT * FROM store WHERE user_name='$user_name' ");
$count=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);
echo $count;					
							
echo '</p><h3>';
echo $row["user_name"] . '</h3></header>';
echo '</p>
<span class="image"><img src="/images/search.jpg" alt="" /></span>
</div>';
echo '<p>';

echo '<br>Definition:<br>';
    $html = @file_get_html("https://www.merriam-webster.com/dictionary/" . $row["user_name"] );
 $title = $html->find("div.card-primary-content",0)->innertext;
    echo $title;



echo '</section> ';

?>

























<?php require 'models/disqus.php' ?>
<?php require 'models/footer.php' ?>