<?PHP

include("./includes/config.php");




// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$encrypted_mypassword=md5($mypassword);

$check = mysql_query("SELECT * FROM admin_users WHERE user='$myusername'");


// Mysql_num_row is counting table row
$users = mysql_num_rows($check);

// If result matched $myusername and $mypassword, table row must be 1 row

if($users==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
echo "That username is unavaliable!";
}
else {
echo $myusername ." " . $mypassword . "<br/>";
$check = mysql_query("INSERT INTO `handyman_ttt_stats`.`admin_users` (`ID`, `user`, `pass`, `last_login`, `last_ip`) VALUES (NULL, '$myusername', MD5('$mypassword'), '0000-00-00 00:00:00', '127.0.0.1');");
echo "registration successful, please login <a href='/ttt_stats/login.php'>here</a>";
}

?>