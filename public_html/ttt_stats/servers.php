<?php
/*------------------------\
|        TTT STATS        |
|	       Beta       |
|=========================|
|� 2013 SNGaming.org      
|  All Rights Reserved    |
|=========================|
| 	Website printout  |
| 	   beta testing   |
| 	   by Handy_man   |
\------------------------*/
include("./includes/header.php");
include("./includes/config.php");	
/*Setup variables for SQL statements */

$server_list = mysql_query("SELECT * FROM `server_track`");

/*Stats SQL queries end here */

/*Maths for any functions go here */
				
/*Maths for functions end here */

/*print statements */

echo "<div id='primary_content'>";


echo"<h3>This is a live list of the game servers running the server tracker module!</h3><table border ='1' class='servertable'><tr><th>Hostname</th><th>Players</th><th>Current Map</th><th>Connect to server</th></tr>";

while($row2 = mysql_fetch_array( $server_list )) {
		
	echo "<tr><td>"; 
	echo $row2['hostname']; 
	echo "</td><td> " . $row2['players'] . "/ " . $row2['maxplayers'] . "</td>";
	echo "<td> " . $row2['map'] . "</td>";
	echo "<td> <form action='steam://connect/" . $row2['hostip'] . "'><button class='button' type='submit'>Connect</button></form> </td>";
	echo "</tr>";
	
} 


echo "</table>";
echo "</div>";
include("./includes/footer.php");
?>