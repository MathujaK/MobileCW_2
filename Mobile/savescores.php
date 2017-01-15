
<?php

  $connection = mysql_connect("localhost:3307", "root", "");

// Selecting Database 
  $db = mysql_select_db("game", $connection);
  
  //Fetching Values from URL  
$name=$_POST['name'];
$score=$_POST['score'];

//Insert query 
  $query = mysql_query("insert into scores(name,score) values ('$name','$score')");
  echo "Form Submitted succesfully";  
//connection closed
  mysql_close($connection);
?>