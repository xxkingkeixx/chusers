<?php 

require 'models/header.php';
require 'models/navbar';

?>

<h1> Purchasing a Legendary</h1>


<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="CJ22MZ9JB3JYE">
<table>
<tr><td><input type="hidden" name="on0" value="chatangu.tk">chatangu.tk</td></tr><tr><td><select name="os0">
	<option value="Legendary">Legendary $20.00 USD</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="**Acc to Contact You On">**Acc to Contact You On</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
<tr><td><input type="hidden" name="on2" value="What account do you want?">What account do you want?</td></tr><tr><td><input type="text" name="os2" maxlength="200"></td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="submit" class='special' border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


<?php require 'models' ?>

