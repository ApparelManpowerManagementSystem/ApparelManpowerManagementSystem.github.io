<?php
include('./includes/header.php');
?>
<h1>Contact us</h1>
<form action="contact-us-send.php" method="post">
<ul>
	<li><label for="name">Your Name</label> 
	    <input id="name" name="name" type="text" /></li>
	<li><label for="email">Your Email</label>
	    <input id="email" name="email" type="text" /></li>
	<li><label for="comment">Your Name</label>
	    <textarea id="comment" name="comment"></textarea></li>
	<li><input id="submit" name="submit" type="submit" 
		value="Click to Send Comments" /></li>
</ul>
</form>
<?php
include('./includes/footer.php')
?>
