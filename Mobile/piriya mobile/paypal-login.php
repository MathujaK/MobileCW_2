<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="css/paypal-css.css" rel="stylesheet">
</head>
<body>
<div class="container">

    <header>
        <!-- <h1>Login and Registration Form</h1>-->

    </header>
    <section>
        <div id="container_demo" >
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="login" class="animate form">
                    <!--<form  action="hotel.php" autocomplete="on">-->
                    <form>

                        <img class="img-responsive" src="img/PayPal.svg.png" height="100px" width="450px">


                        <h1>Already a Member?</h1>

                        <p>
                            <label for="username" class="uname" > Your email or username </label>
                            <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd"> Your password </label>
                            <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                        </p>
                        <p class="keeplogin">
                            <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                            <label for="loginkeeping">Stay login for faster checkout</label>
                        </p>
                        <p class="login button">
                            <a href="paypal-process.php"><input type="button" value="Login" /></a>
                        </p>
                        <p class="change_link">
                            Not a member yet ?
                            <a href="#toregister" class="to_register">Join us</a>
                        </p>
                    </form>
                </div>

                <div id="register" class="animate form">
                    <!--<form  action="hotel.php" autocomplete="on">-->
                    <form>
                        <img class="img-responsive" src="img/PayPal.svg.png" height="100px" width="450px">
                        <h1> Set up your account </h1>
                        <p>
                            <label for="usernamesignup" class="uname" >Your username</label>
                            <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                        </p>
                        <p>
                            <label for="emailsignup" class="youmail"  > Your email</label>
                            <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/>
                        </p>
                        <p>
                            <label for="passwordsignup" class="youpasswd" >Your password </label>
                            <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                        </p>
                        <p>
                            <label for="passwordsignup_confirm" class="youpasswd" >Please confirm your password </label>
                            <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                        </p>
                        <p class="signin button">
                            <a href="paypal-process.php"><input type="button" value="Sign Up"/></a>
                        </p>
                        <p class="change_link">
                            Already a member ?
                            <a href="#tologin" class="to_register"> Go and log in </a>
                        </p>
                    </form>
                </div>



            </div>
        </div>
    </section>
</div>
</body>
</html>