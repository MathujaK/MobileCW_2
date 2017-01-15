<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>PUB CRAWL</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'>

    <link href='http://fonts.googleapis.com/css?family=Merienda One' rel='stylesheet'>

    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">


    <!-- Respomsive slider -->
    <link href="css/responsive-slider.css" rel="stylesheet">
    <link href="css/content.css" rel="stylesheet">
    <?php include 'gameheader.php' ?>

     
</head>
<body>
    	<div class="position1">
    	<div class="container" id="content-container"></div></div>
		
		
<form action="clue1.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>CSS Stands for...</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Computer Styled Sections </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Cascading Style Sheets</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Crazy Solid Shapes</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) None of the above</label>
                    </div>
                
                </li>
                
               
            
            </ol>
            
            <input type="submit" value="Submit Quiz" />
		
		</form>
		   <?php
            
            $answer1 = $_POST['question-1-answers'];
                        
            if ($answer1 == "B") { 
			
			}
                      
			?>
	
		
<div class="position2">
    <?php include 'gamefooter.php' ?>
</div>
</body>
</html>
