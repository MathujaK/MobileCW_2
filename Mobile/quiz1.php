<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

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
<div class="position4">
    	<div class="container" id="content-container">

	<div id="page-wrap">

		<h1 class="title">Find the Name of Places in Colombo</h1>
		
		<form action="picture_result.php" method="post" id="quiz" align="center">
		<table>
            <ol>
			<tr>
            <th class="pic">
                <ul>
              
                    <img class="quiz" src="place/galle face.jpg" alt="galle face" style="width:240px;height:200px;border: 5px solid white; border-radius: 4px;padding: 5px;">
                    
                    
                       <ul class="radio"> <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">Marble beach </label></ul>
                    
                        <ul class="radio"><input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">Jungle beach </label></ul>
                    
                        <ul class="radio"><input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">Galle face beach</label></ul>
                   
                        <ul class="radio"><input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">None of the above</label><ul>
                    
                
                </ul> </th>
               
			<th class="pic" >
                <ul>
                
                     <img class="quiz" src="place/gangaramaya buddhist.jpg" alt="Gangaramaya Buddhist Temple" style="width:240px;height:200px;border: 5px solid white; border-radius: 4px;padding: 5px;">
                    
                    
                        <ul class="radio"><input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">Gangaramaya Buddhist Temple</label></ul>
                    
                        <ul class="radio"><input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">Viharamaha Devi Park</label></ul>
                    
                        <ul class="radio"><input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">St. Lucia's Cathedral</label></ul>
                   
                        <ul class="radio"><input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">Jami Ul-Alfar Mosque</label></ul>
                   
                
                </ul> </th>
				
				</tr>
				<tr>
                <th class="pic">
                <ul>
                
                    <h3></h3>
                     <img class="quiz" src="place/national museum.jpg" alt="National Museum" style="width:240px;height:200px;border: 5px solid white; border-radius: 4px;padding: 5px;">
                   
                        <ul class="radio"><input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">Royal Colombo Golf Club</label></ul>
                    
                        <ul class="radio"><input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">Colombo Port Maritime Museum</label></ul>
                  
                        <ul class="radio"><input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">National Museum of Colombo</label></ul>
                    
                        <ul class="radio"><input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">Colombo Dutch Museum</label></ul>
                    
                
                </ul></th>
				<th class="pic">
                
                <ul>
                
                   <img class="quiz" src="place/arcade Independence Square.jpg" alt="Arcade Independence Square" style="width:240px;height:200px;border: 5px solid white; border-radius: 4px;padding: 5px;">
                    
                    
                        <ul class="radio"><input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">Sambodhi Chaithya</label></ul>
                    
                        <ul class="radio"><input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">Aukana Buddha Statue</label></ul>
                    
                        <ul class="radio"><input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">Colombo Pilot Station Lighthouse</label></ul>
                    
                        <ul class="radio"><input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">Arcade Independence Square</label></ul>
                   
                
                </ul></th>
                </tr>
                            
            <input class="button1" type="submit" value="Submit Quiz" /></tr>
            
            </ol>
			
			</table>
		</form>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>
	

    <?php include 'footer2.html' ?>


</body>

</html>