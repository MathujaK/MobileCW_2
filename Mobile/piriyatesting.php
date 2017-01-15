<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/stylenew.css" media="all" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Shadows+Into+Light" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Merienda One' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merienda+One" />
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Respomsive slider -->
    <link href="css/header.css" rel="stylesheet">
	<link href="css/content.css" rel="stylesheet">
	<link href="css/backtotop.css" rel="stylesheet">
	<link href="css/newsletter.css" rel="stylesheet">
	<link href="css/responsive-slider.css" rel="stylesheet">


    <link href="css/payment-css.css" rel="stylesheet">

	<script type="text/javascript">
function validateForm()
{

var y=document.forms["personal"]["first_name"].value;
var a=document.forms["personal"]["last"].value;
var b=document.forms["personal"]["address"].value;
var c=document.forms["personal"]["city"].value;
var d=document.forms["personal"]["zip"].value;
var e=document.forms["personal"]["country"].value;
var f=document.forms["personal"]["email"].value;
var g=document.forms["personal"]["cemail"].value;
var x=document.forms["personal"]["phone"].value;
var i=document.forms["personal"]["password"].value;

var code=document.forms["personal"]["codetype"].value;
var codetype=document.forms["personal"]["codetypecopy"].value;

var atpos=f.indexOf("@");
var dotpos=f.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=f.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }

if( codetype != code ) {
alert("Invalid Code Pls. try again........ thank you");
  return false;
}



if( f != g ) {
alert("email does not match");
  return false;
} 
if ((a=="Lastname" || a=="") || (b=="Address" || b=="") || (c=="City" || c=="") || (d=="ZIP Code" || d=="") || (e=="Country" || e=="") || (f=="Email" || f=="") || (g=="Confirm Email" || g=="")|| (x=="Contact Number" || x=="") || (y=="Firstname" || y=="") || (i=="Password" || i==""))
  {
  alert("all field are required!");
  return false;
  }
 
if (document.personal.condition.checked == false)
{
alert ('pls. agree the term and condition of this hotel');
return false;
}
else
{
return true;
}
}
</script>

<?php include 'header.php' ?>
<?php
$con = mysql_connect("localhost:3307","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hotel", $con);
	
	$arival = $_POST['dayin'];
	$departure = $_POST['dayout'];
	$adults = $_POST['adult'];
	$child = $_POST['child'];	
	$no_rooms = $_POST['gender1'];
	$nightCount = $_POST['nightcount'];
	$roomid = $_POST['roomid'];	
	$results = $_POST['result'];

$result = mysql_query("SELECT * FROM room WHERE room_id='$roomid'");

while($row1 = mysql_fetch_array($result))
  {
  $roomtype=$row1['type'];
  $price=$row1['rate'];
  }
	
?>

</head>


<body>
<!--<br/><br/><br/>-->


<div class="container">
    <div class="row">
        <section>
            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">

                        <li role="presentation" class="active" id="presentation">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Your Details">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                            </a>
                        </li>

                        <li role="presentation" class="disabled">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Payment Details">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                            </a>
                        </li>
                        <!--<li role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                            </a>
                        </li>-->

                        <li role="presentation" class="disabled">
                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <form role="form">
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="step1">
                            <div class="step1">
                                <div class="row" >

                                    <div class="col-md-6">
                                        <legend style="font-family: Merienda One; font-size: 30px; color: #330000;">Final Price</legend>
                                        <div class="col-md-6" style="font-family: Merienda One; ">
                                            <h4>Check In : <b><?php echo $arival; ?> </b></h4>
                                            <h4>Check Out : <b><?php echo $departure; ?></b></h4>
											<h4>No of Nights : <b><?php echo $nightCount; ?></b></h4>
                                            <h4>Rooms : <b><?php echo $no_rooms; ?></b></h4>
                                            <h4>Adult : <b><?php echo $adults; ?></b></h4>
                                            <h4>Child : <b><?php echo $child; ?></b></h4>
											<h4>Room Type : <b><?php echo $roomtype; ?></b></h4>
                                            <h4>Price : <b><?php echo $price; ?></b></h4>
                                        </div>
                                        <div class="col-md-6">
                                        <img class="img-responsive" src="img/room_view.jpg">

                                        </div>



                                    </div>
                                <div class="col-md-6" id="your-details" >
                                <form class="well form-horizontal" action="payment1.php" method="post" style="margin-top: -31px;" onsubmit="return validateForm()" name="personal" id="contact_form">
                                
                                   <!-- <fieldset><legend class="text-center">Valid information is required to register. <span class="req"><small> required *</small></span></legend>-->
                                    <fieldset>

                                        <!-- Form Name -->
                                        <legend style="font-family: Merienda One; font-size: 30px;  color: #330000;">Your Details ...</legend>
                                        <h6><b><i><font size="4px"; style="font-family: Merienda One;  color: #330000;" > Fill in your contact details here to proceed the booking. </font></i></b></h6>

                                        <!-- Text input-->

                                        <div class="form-group">
                                            <!--<label class="col-md-4 control-label">First Name</label>-->
                                            <div class="cols-sm-10 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input  name="first_name" placeholder=" Name"  class="form-control"  type="text" required>
                                                </div>
                                            </div>
                                        </div>



                                        <!-- Text input-->

                                        <div class="form-group">
                                            <!--<label class="col-md-4 control-label">E-Mail</label>-->
                                            <div class="cols-sm-10 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                    <input name="email" placeholder="E-Mail Address"  class="form-control"  type="text" required>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Text input-->

                                        <div class="form-group">
                                            <!--<label class="col-md-4 control-label">Phone #</label>-->
                                            <div class="cols-sm-10 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                                    <input name="phone" placeholder="Mobile Number"  class="form-control" type="text" required>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Text input-->

                                        <div class="form-group">
                                            <!--<label class="col-md-4 control-label">Address</label>-->
                                            <div class="cols-sm-10 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                                    <input name="address" placeholder="Address" class="form-control" type="text" required>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Text area -->

                                        <div class="form-group">
                                            <!--<label class="col-md-4 control-label">Project Description</label>-->
                                            <div class="cols-sm-10 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                    <textarea class="form-control" name="comment" placeholder="Special Request" required></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <ul class="list-inline pull-right">
                                            <li><button type="submit" class="btn btn-black next-step" style="background-color: #2d100d"><font color="white"> Continue Booking</font></button></li>
                                        </ul>

                                    </fieldset>
                                </form>
                                </div>
                                </div>

                            </div>

                        </div>
                     <div class="tab-pane" role="tabpanel" id="step2">
                            <div class="step2">
                                <div class="step_21">
                                    <div class="row" >

                                        <div class="col-md-6">
                                            <legend style="font-family: Merienda One; font-size: 30px; color: #330000;">Final Price</legend>
                                            <div class="col-md-6" style="font-family: Merienda One; ">
                                               <h4>Check In : <b><?php echo $arival; ?> </b></h4>
                                            <h4>Check Out : <b><?php echo $departure; ?></b></h4>
											<h4>No of Nights : <b><?php echo $nightCount; ?></b></h4>
                                            <h4>Rooms : <b><?php echo $no_rooms; ?></b></h4>
                                            <h4>Adult : <b><?php echo $adults; ?></b></h4>
                                            <h4>Child : <b><?php echo $child; ?></b></h4>
											<h4>Room Type : <b><?php echo $roomtype; ?></b></h4>
                                            <h4>Price : <b><?php echo $price; ?></b></h4>
                                            </div>
                                            <div class="col-md-6">
                                                <img class="img-responsive" src="img/room_view.jpg">

                                            </div>



                                        </div>
                                        <div class="col-md-6" id="payment">
											<form class="well form-horizontal" action="payment1.php" method="post"  onsubmit="return validateForm()" name="personal">
                                           <input name="dayin" type="hidden" value="<?php echo $arival; ?>" />
  <input name="dayout" type="hidden" value="<?php echo $departure; ?>" />
  <input name="adult" type="hidden" value="<?php echo $adults; ?>" />
  <input name="child" type="hidden" value="<?php echo $child; ?>" />
  <input name="gender1" type="hidden" value="<?php echo $no_rooms; ?>" />
  <input name="nightcount" type="hidden" value="<?php echo $nightCount; ?>" />
  <input name="rm_type" type="hidden" value="<?php echo $roomtype; ?>" />
   <input name="rm_id" type="hidden" value="<?php echo $roomid; ?>" />
   <input name="result" type="hidden" value="<?php echo $results; ?>" />
  <input name="price" type="hidden" value="<?php echo $price; ?>" />
  
                                                <fieldset>

                                                    <legend style="font-family: Merienda One; font-size: 30px;  color: #330000;">Your Payment...</legend>

                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div id="tab">

                                                                <!--<label class="radio-inline active"><input type="radio" name="optradio" data-target="#prices" data-toggle="tab"><img class="img-responsive" src="img/visa.png" height="200px" width="200px"> </label>
                                                                <label class="radio-inline"><input type="radio" name="optradio" data-target="#features" data-toggle="tab"><img class="img-responsive" src="img/paypal.jpg" height="200px" width="200px"></label>
                                                                   -->
                                                                    <input type="radio" name="optradio" data-target="#prices" data-toggle="tab"><img class="img-responsive radio-inline active" src="img/visa.png" height="200px" width="200px">
                                                                    <input type="radio" name="optradio" data-target="#features" data-toggle="tab"><img class="img-responsive radio-inline " src="img/paypal.jpg" height="200px" width="200px">
                                                                </div>




                                                                <div class="tab-content">

                                                                    <div class="tab-pane active" id="prices">

                                                                        <!-- Text input-->

                                                                        <div class="form-group">
                                                                            <!--<label class="col-md-4 control-label">First Name</label>-->
                                                                            <div class="cols-sm-10 inputGroupContainer">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                                                    <input  name="first_name" placeholder=" Card Holder Name" class="form-control"  type="text">
                                                                                </div>
                                                                            </div>
                                                                        </div>



                                                                        <!-- Text input-->

                                                                        <div class="form-group">
                                                                            <!--<label class="col-md-4 control-label">E-Mail</label>-->
                                                                            <div class="cols-sm-10 inputGroupContainer">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                                                                                    <input name="email" placeholder="Credit/Debit Card Number" class="form-control"  type="text">
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <!-- Text input-->

                                                                        <div class="form-group">
                                                                            <!--<label class="col-md-4 control-label">Phone #</label>-->
                                                                            <div class="cols-sm-10 inputGroupContainer">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                                                    <input name="phone" placeholder="Security (CVV) Code" class="form-control" type="text">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <!-- Text input-->

                                                                        <div class="form-group">
                                                                            <!--<label class="col-md-4 control-label">Address</label>-->
                                                                            <div class="cols-sm-10 inputGroupContainer">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                                                    <input name="address" placeholder="Expiration Date (MM/YYYY)" class="form-control" type="text">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <center><div class="checkbox"><input type="checkbox" name="" value="" ><font size="4px"; style="font-family: Merienda One;  color: #330000;" >I agree with Terms and Conditions</font></div></center><br>
                                                                            <ul class="list-inline pull-right">
                                                                                <li><button type="button" class="btn btn-default prev-step" style="background-color: white"><font color="black">Previous</font></button></li>
                                                                                <li><button type="button" class="btn btn-primary next-step" style="background-color: #2d100d"><font color="white"> Confirm Payment</font></button></li>
                                                                            </ul>
                                                                        </div>





                                                                    </div>
																	
                                                                    <div class="tab-pane" id="features"><font size="4px"; style="font-family: Georgia, serif" >Once you click 'Confirm Payment' you will receive a confirmation email with a booking number. A confirmation message will also be sent to your mobile phone. Your transaction will appear on your card statement under the name Pub Passion (pvt.) Ltd. </font>
                                                                        <center><div class="checkbox"><input type="checkbox" name="" value="" ><font size="4px"; style="font-family: Merienda One;  color: #330000;" >I agree with Terms and Conditions</font></div></center><br>
                                                                        <ul class="list-inline pull-right">
                                                                            <li><button type="button" class="btn btn-default prev-step" style="background-color: white"><font color="black">Previous</font></button></li>
                                                                            <li><button type="submit" class="btn btn-primary" style="background-color: #2d100d"><font color="white"> Confirm Payment</font></button></a></li>
                                                                        </ul>
                                                                    </div>
																   
                                                                    <div class="row">
                                                                    <!--<center><div class="checkbox"><input type="checkbox" name="" value="" ><font size="4px"; style="font-family: Merienda One;  color: #330000;" >I agree with Terms and Conditions</font></div></center><br>-->

                                                                    <!--<ul class="list-inline pull-right">
                                                                        <li><button type="button" class="btn btn-default prev-step" style="background-color: white"><font color="black">Previous</font></button></li>
                                                                        <li><button type="button" class="btn btn-primary next-step" style="background-color: #2d100d"><font color="white"> Confirm Payment</font></button></li>
                                                                    </ul>-->
                                                                    </div>

                                                                    </div>
                                                            </div>
                                                        </div>



                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="step-22">

                                </div>-->
                            </div>
                           <!-- <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                            </ul>-->
                        </div>

                        <div class="tab-pane" role="tabpanel" id="complete">
                            <div class="step44">
                                <div class="row" >

                                    <div class="col-md-6">
                                        <legend style="font-family: Merienda One; font-size: 30px; color: #330000;">Final Price</legend>
                                        <div class="col-md-6" style="font-family: Merienda One; ">
                                            <h4>Check In : <b><?php echo $arival; ?> </b></h4>
                                            <h4>Check Out : <b><?php echo $departure; ?></b></h4>
											<h4>No of Nights : <b><?php echo $nightCount; ?></b></h4>
                                            <h4>Rooms : <b><?php echo $no_rooms; ?></b></h4>
                                            <h4>Adult : <b><?php echo $adults; ?></b></h4>
                                            <h4>Child : <b><?php echo $child; ?></b></h4>
											<h4>Room Type : <b><?php echo $roomtype; ?></b></h4>
                                            <h4>Price : <b><?php echo $price; ?></b></h4>
                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-responsive" src="img/room_view.jpg">
                                        </div>
                                    </div>
                                    <div class="col-md-6">


                                        <form class="well form-horizontal" action=" " method="post"  id="contact_form">


                                                <legend style="font-family: Merienda One; font-size: 30px;  color: #330000;">Thank You !!!</legend>

                                            <font size="4px"; style="font-family: Merienda One;  color: #330000;" >Thank you very much for your booking request. We will check the availability of rooms and send you a response shortly.</font><br><br>

                                               <!-- <font size="4px"; style="font-family: Merienda One;  color: #330000;" >We will check the availability of rooms and send you a response shortly.</font><br><br>-->

                                            <font size="4px"; style=" color: black;" > <b><i> Transaction ID : 145638</i></b></font><br><br>

                                                    <font size="4px"; style="font-family: Merienda One;  color: #330000;" >Please check your email for a response.</font><br><br>

                                            <font size="4px"; style=" color: black;" ><b><i> Confirmation mail to : abc@gmail.com</i></b></font>
<div class="row ">
                                            <ul class="list-inline pull-right" id="confirm-button">
                                               <a href="hotel.php"> <li><button type="button" class="btn btn-primary" style="background-color: #2d100d"><font color="white">Go to Booking Page</font></button></li></a>
                                            </ul>
</div>
                                        </form>


                                        </div>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </section>
    </div>

   </div>

<?php include 'footer.php' ?>

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!--<script type="text/javascript" src="js/piriya.js"></script>-->
<script type="text/javascript" src="js/piriyajs.js"></script>

</body>
</html>
