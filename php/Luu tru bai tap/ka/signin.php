<html>
    <body>
<p>Sign in...</p>
<?php
      if (isset($_GET['error'])) {
      	  if ($_GET['error']==1) {
      	  	  echo "<p> <strong> Your email is not exist </strong> </p>";}
      	  	  else { 
      	  	  	 echo"<p><strong> Your password is wrong</strong> </p>";
      	  	  	    }
      	  	  	}
      	  	  	if (isset($_GET['email']))
      	  	  		$email= $_GET['email'];
      	  	  	else
      	  	  		 $email='';
?>
<form method="post" action="dosignin.php">
   <p><label for="guess">Email:</label>
   <input type="text" name="email" size="40" id="guess"
   value="<?=$email;?>"/>
   </p>
   <p> <label for="pass">Password:</label>
        <input type="password" name="pwd" id="pass"/>
    </p>
    <input type="submit"/>
 </form>
 </body>
 </html>
