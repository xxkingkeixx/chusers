<?php echo '<link rel="stylesheet" href="assets/css/music.css" />



 <div id="musicplayer" class="box fade-in one">
  <img src="http://68.media.tumblr.com/tumblr_lkl5w2p3Nn1qfamg6.gif">
  
  <div class="play">';
      echo '<embed src="https://www.youtube.com/embed/videoseries?list=PLSWJOy5Jg5IsAyrq1Anwjk1VpsU7RCtNf&index=';
      echo rand(0,2);
      echo '&autoplay=1&start=0&modestbranding=1&autohide=1&showinfo=0&controls=1" 
      type="text/html" width="100%" height="100%" ></embed>
      
  </div><!--play-->
</div><!--musicplayer-->




' ; ?>