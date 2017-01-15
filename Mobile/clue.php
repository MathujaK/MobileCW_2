<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300">
	
	 
    <title>The Time Travel Trivia Quiz</title>
</head>
<body>
<header>
    <div class="content">
        <h1><span>The</span> <span>Time Travel</span> <span>Trivia Quiz</span></h1>
    </div>
</header>
<main id="main" role="main">

    <div class="content"> 

        <section id="quiz" class="hidden">
            <div id="stats" class="clearfix">
                <div id="stats-score">SCORE: <span class="score" name="score">1</span></div>
                <div id="stats-progress">QUESTION: <span class="progress">0/0</span></div>
				<div id="stats-name"><input type="text" id="name" value="" /> <span class="Name"></span></div>
               
            </div>
            <div id="question">
                <div id="icon"><i class="fa fa-bolt"></i></div>
                <p id="text">[question text goes here]</p>
                <form>
                <div><input type="radio" name="ans" value="1"> <span id="option-1">[option one]</span> </div>
                <div><input type="radio" name="ans" value="2"> <span id="option-2">[option two]</span> </div>
                <div><input type="radio" name="ans" value="3"> <span id="option-3">[option three]</span> </div>
                <div><input type="radio" name="ans" value="4"> <span id="option-4">[option four]</span> </div>
                <div><input type="radio" name="ans" value="5"> <span id="option-5">[option five]</span> </div>
                </form>
                <button type="submit" id="answer-btn">Submit Answer</button>  
            </div>
        </section>

        <section id="start" class="clearfix">
            <div id="instruct">
                <h2>How to Play</h2>
                <p><strong>STEP 1</strong>: Answer selected trivia questions regarding time travel in popular culture.</p>
                <p><strong>STEP 2</strong>: Do well,find the location,play the challenges and claim offer.</p>
            </div>
            <div id="btn-area">
                <button id="start-btn"> NEW GAME </button>            
            </div>
			<div id="btn-area">
            <a href="getscores.php"><button id="score-btn">SCORE BOARD</button></a>            
            </div>
        </section>

        <section id="testimonials">
            
            <p><sup><i class="fa fa-quote-left"></i></sup> Not this again! I can't go through this again. <sup><i class="fa fa-quote-right"></i></sup> <br> &mdash; <em>Phil Conners</em></p>
            
            <p class="hidden"><sup><i class="fa fa-quote-left"></i></sup> Are you Sarah Connor? <sup><i class="fa fa-quote-right"></i></sup> <br> &mdash; <em>The Terminator</em></p>
            
            <p class="hidden"><sup><i class="fa fa-quote-left"></i></sup> What is this infernal contraption? Who are you and what are you doing in my residence? Constable! <sup><i class="fa fa-quote-right"></i></sup> <br> &mdash; <em>Charles Dickens</em></p>
            
            <p class="hidden"><sup><i class="fa fa-quote-left"></i></sup> Time travel. It'll turn your brain into spaghetti if you let it. Best not to think about it. <sup><i class="fa fa-quote-right"></i></sup> <br> &mdash; <em>Ray</em></p>
        
        </section>

        <section id="correct" class="pop-up hidden">
            <h2>Correct!<br>+1</h2>
            <p class="answer-exp">[x]</p>
            <p>Congratulations, you now have <span class="score">1</span> point(s).</p>
            <br>
            <a href="Hangman/aboutgame.html"><p><button class="cont-btn">Continue</button></p></a>
        </section>

        <section id="wrong" class="pop-up hidden">
            <h2>Wrong!</h2>
            <p class="answer-exp">[x]</p>
            <p>Oh, I am sorry no points for you.<br>... you know, because you were so wrong.<br>Your have <span class="score">0</span> point(s).</p>
            <br>
            <p><button class="cont-btn">Continue</button></p>
        </section>

        <section id="final" class="pop-up hidden">
            <h2>Final Score: <span class="score">0</span>/10</h2>
            <p>You achieved a rank of ...<br><span class="rank">[rank]</span></p>
            <p><span class="rank-msg">[msg]</span></p>
            <br>
            <p><button id="start-over">Try Again</button></p>
        </section> 

    </div>

</main>
<footer>
    <div class="content">        
        <div id="copyright">Copyright <i class="fa fa-copyright"></i> 2016, All copyrights reserved</div>    
    </div>    
</footer>
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>