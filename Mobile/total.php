<html>
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<title>PUB CRAWL - Treasure Hunt Picture Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/hangman.css"/>
	<link rel="stylesheet" type="text/css" href="css/picturequiz.css"/>
	<link rel="stylesheet" type="text/css" href="css/content.css"/>
	<link rel="stylesheet" type="text/css" href="css/newstyles.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Merienda One' rel='stylesheet'>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">


    <!-- Respomsive slider -->
   
    <?php include 'gameheader.php' ?>

     

</head>
<body>

<?php

$mm="Shazmina";
$clue =1;
$qr = 0;
$a = $_POST ['quiz_score'];
$H =5;
$total = $clue + $a + $H +$qr;
echo "<center>";
echo "<h1>Hey &nbsp" .$mm ." <br></h1>";
echo "<h2><u> Your Score Details</u></h2>";
echo "<h3>Clue Score :&nbsp" .$clue."<br></h3>";
echo "<h3>Hangman Score :&nbsp" . $H. "<br></h3>";
echo "<h3>QR CODE Score :&nbsp" .$qr ."<br></h3>";
echo "<h3>Quiz Score :&nbsp" .$a ."<br><br></h3>";


echo "<h2>Total Score :&nbsp" . $total;
echo "</center>";

?>

</body>
</html>