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
echo $row . '</h3>';
echo '<p>';

echo '<br>Definition:<br>';
    $html = @file_get_html("https://www.merriam-webster.com/dictionary/" . $row );
 $title = $html->find("div.card-primary-content",0)->innertext;
    echo $title;



echo '</p></header>
<span class="image"><img src="/images/search.jpg" alt="" /></span>
</div>
</section> ';

?>

























<?php require 'models/disqus.php' ?>
<?php require 'models/footer.php' ?>