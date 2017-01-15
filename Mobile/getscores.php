<html>


        
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="css/gamescore.css" />
</head>
<body>



<?php
header('Access-Control-Allow-Origin: *');




$host="localhost:3307"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="game"; // Database name 
$tbl_name="scores"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Retrieve data from database 
$sql="SELECT * FROM scores ORDER BY score DESC LIMIT 10";
$result=mysql_query($sql);
     echo "<table class='rwd-table'>";	  
     echo "<tr>";     
	 echo "<th>Name</th>";	
	 echo "<th>Score</th>";     
     echo "</tr>";	
     echo "</table>";
// Start looping rows in mysql database.
while($rows=mysql_fetch_array($result)){
	
	$name=$rows['name'];
	$score=$rows['score'];

	
     echo "<table class='rwd-table'>";	  
     echo "<tr>";     
	 echo "<td>".$name."</td>";	
	 echo "<td>".$score."</td>";     
     echo "</tr>";	
     echo "</table>";


// close while loop 
}

// close MySQL connection 
mysql_close();
?>
</body>
</html>