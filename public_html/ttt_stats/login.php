<?php
/*------------------------\
|        TTT STATS        |
|          Beta           |
|=========================|
|� 2013 SNGaming.org      |
|   All Rights Reserved   |
|=========================|
|   Website printout      |
|      beta testing       |
|      by Handy_man       |
\------------------------*/				

include("./includes/header.php");
?>

<form name="form1" method="post" action="checklogin.php">

<p class="center">
<strong>Member Login</strong><br/>
<strong>Username</strong>
<input name="u" type="text" id="u" required>
<strong>Password</strong>
<input name="p" type="password" id="p" required>
<button class='button' type='submit'>Login</button>
</form>

<p class="center">Have no login? why not try and <a href="register.php">register</a>?</p>
</p>
<?PHP include("./includes/footer.php");?>