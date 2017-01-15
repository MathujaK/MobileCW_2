<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>PubPassion</title>

    <!-- Bootstrap Core CSS -->
     <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Merienda One' rel='stylesheet'>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link href="css/header.css" rel="stylesheet">
	<link href="css/content.css" rel="stylesheet">
	<link href="css/backtotop.css" rel="stylesheet">
	<link href="css/newsletter.css" rel="stylesheet">
	<link href="css/responsive-slider.css" rel="stylesheet">
	
    <link href="css/hotel-css.css" rel="stylesheet">
	
    <link rel="stylesheet" href="css/media-screen-xs-min.css">
    <link rel="stylesheet" href="css/media-screen-sm-min.css">
    <link rel="stylesheet" href="css/media-screen-lg-min.css">


    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <?php include 'header.php' ?>
	</script>

<!--sa error trapping-->
<script type="text/javascript">
function validateForm()
{
var x=document.forms["index"]["dayin"].value;
if (x==null || x=="")
  {
  alert("you must enter your check in Date(click the calendar icon)");
  return false;
  }
var y=document.forms["index"]["dayout"].value;
if (y==null || y=="")
  {
  alert("you must enter your check out Date(click the calendar icon)");
  return false;
  }
}
</script>

</head>

<body>
<div>
    <!-- Responsive slider - START -->
    <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
        <div class="slides" data-group="slides">
            <ul>
                <li>
                    <div class="slide-body" data-group="slide">
                        <img src="img/hotel-banner_05.jpg" class="img-responsive">
                        <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="200" data-length="300">
                            <h2>&nbsp;-UNIQUE EXPERIENCE-</h2>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="slide-body" data-group="slide">
                        <img src="img/hotel-banner_01.jpg" class="img-responsive">
                        <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="200" data-length="300">
                            <h2> -SIGNATURE COCKTAILS-</h2>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="slide-body" data-group="slide">
                        <img src="img/hotel-banner_04.jpg" class="img-responsive">
                        <div class="caption header" data-animate="slideAppearRightToLeft" data-delay="200" data-length="300">
                            <h2>-COMFORTING CUISINE-</h2>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <a class="slider-control left"  data-jump="prev">&#10094;</a>
        <a class="slider-control right" data-jump="next">&#10095;</a>
    </div>
</div>


<div class="position">
    <div class="container" id="content-container">
       
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-7">
                <h2>WELCOME TO THE HOTEL PASSION</h2>
                <h4>PERSONAL AND UNIQUELY YOURS.</h4>
                <p align="justify"><b>HOTEL PASSION</b> is all about enterprise and entertainment right in the heart of the city of Colombo; the commercial, cultural, economic and educational centre of Sri Lanka. Besides being the closest Hotel to the City Centre, it is also built to cater to the needs of a discerning, tech savvy, business clientele.</p>

                <p align="justify">State-of-the art, astute in its 24 hour concierge services that begin from the point of airport transfer, Hotel Passion offers its business guests a hassle free and all-encompassing staying experience that facilitates them stay ahead of the game. The conveniences at the Hotel extend beyond the 24 hour Reception, 24 hour In-room dining, 24 hour Coffee shop and Currency exchange services; it also ventures to indulge its guests in pleasurable moments of lobby and restaurant music reveries, and rooftop siestas during business breaks.</p>
                <div class="container outerpadding">
                        <div class="col-lg-3 col-sm-3 col-md-3">
                            <div class="panel">
                                <div class="panel-heading" style="background-color:#2F4F4F; color:#fff;"><strong><center>Our Hotel</center></strong></div>
                                <div class="panel-body" style="background-color:#000;color:#fff; box-shadow:0 -12px 13px #2F4F4F inset;">

                                    <div class="boximg">
                                        <img src="img/hotel4.jpg" class="img-responsive">


                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-3 col-md-3">
                            <div class="panel">
                                <div class="panel-heading" style="background-color:#2F4F4F; color:#fff;"><strong><center>Our Hotel</center></strong></div>
                                <div class="panel-body" style="background-color:#000;color:#fff; box-shadow:0 -12px 13px #2F4F4F inset;">

                                    <div class="boximg">
                                        <img src="img/hotel2.jpg" class="img-responsive">


                                    </div>

                                </div>
                            </div>
                        </div>




                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-5" id="collapse-content">
                <div class="rightother">
				
<form method="post" action="rooms.php" name="index" onsubmit="return validateForm()">

                    <div class="reservation">
                        <div class="row my-heading" align="center"><h2>RESERVE YOUR STAY</h2></div>
                        <div class="row check-form">
                            <form>
                               
                                <h4 style="color:red; text-align: left; padding-left: 4%;"></h4>

                                <div class="row">
                                <div class="col-md-6">Check In <br><input type="text" id="dayin" name="dayin"  placeholder=" Check In" required><span class="glyphicon glyphicon-calendar white" aria-hidden="true"></span></div>
                                    <div class="col-md-6">Check Out <br><input type="text" id="dayout" name="dayout"  placeholder=" Check Out" required><span class="glyphicon glyphicon-calendar white" aria-hidden="true"></span></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">No. of Nights <br><input type="text" id="nightcount" readonly="readonly" name="nightcount" placeholder="  No. of Nights" required></div>
                                    <div class="col-md-3"></div>
                                </div>

                               
                                <hr>

                                <div class="row">

                                    <div class="col-md-6">Rooms & Persons <br><input type="text"  id="display" name="display" data-toggle="modal" data-target="#smallModal" placeholder="  Rooms & Persons" required> </div>
                                    <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                             
                                                <div class="modal-body">
                                                   
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label for="gender1" class="col-sm-6 control-label">No. of Rooms:</label></div>
                                                            <div class="col-sm-4">
                                                                
                                                                <select class="form-control" id="gender1" name="gender1">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
																                                                            </div>
                                                            <div class="col-md-4">

                                                            </div>
                                                        </div>

                                                        <div class="row" id="room-1">
                                                            <div class="col-sm-4">
                                                                <label for="gender2" class="col-sm-4 control-label"><b>Rooms</b></label><br>Room 1
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label for="gender2" class="col-sm-4 control-label"><b>Adults</b></label><br>
                                                                <select class="form-control selcls" id="gender2" name="adult">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <label for="gender2" class="col-sm-4 control-label"><b>Child</b></label>
                                                                <select class="form-control selcls" id="gender3" name="child">
                                                                    <option value="0">0</option>
                                                                    <option value="1">1</option>

                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" id="showTxt" value="Done" class="btn btn-primary" data-dismiss="modal" >
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="col-md-6"> Promo Code <br><input type="text"  id="dis" name="dis" placeholder="  Promo Code" > </div>
                                            </div><br><br>

                               
                                 <button type="submit" id="check" name="check" class="check-btn c-button">Serach Availability</button>


                            </form><br><br>
                        </div>

                    </div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php include 'footer.php' ?>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/jquery.event.move.js"></script>
<script src="js/responsive-slider.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="js/date.js"></script>
<script src="js/roomselecter.js"></script>
<script src="js/selecter.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>




</body>

</html>