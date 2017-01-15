<!--Author :- Mathuja 2013050-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'>

    <link href='http://fonts.googleapis.com/css?family=Merienda One' rel='stylesheet'>




  <!--  <link href="css/datepicker.css" rel="stylesheet" type="text/css" />-->
   <!-- <link href="css/style.css" rel="stylesheet" type="text/css" />-->


    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

	<link href="css/header.css" rel="stylesheet">
	<link href="css/content.css" rel="stylesheet">
	<link href="css/backtotop.css" rel="stylesheet">
	<link href="css/newsletter.css" rel="stylesheet">
	<link href="css/responsive-slider.css" rel="stylesheet">
	
    <link rel="stylesheet" type="text/css" href="css/stylenew.css" media="all"/>



    <link href="css/rooms-css.css" rel="stylesheet">

<?php include 'header.php' ?>
<!-- 	<script type="text/javascript">
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
    });
    $(document).ready(function(){
        $("#myBtn1").click(function(){
            $("#myModal1").modal();
        });
    });

   /* $(function(){
        $("#addClass").click(function () {
            $('#sidebar_secondary').addClass('popup-box-on');
        });

        $("#removeClass").click(function () {
            $('#sidebar_secondary').removeClass('popup-box-on');
        });
    })*/
</script> -->
<?php
	
	$arival = $_POST['dayin'];
	$departure = $_POST['dayout'];
	$adults = $_POST['adult'];
	$child = $_POST['child'];
	$roomNo = $_POST['gender1'];
	$nightCount = $_POST['nightcount'];
	
?>
</head>
<body>

<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<style>
    .red-text {
        color: #202020;
        text-align: center;
    }

    h2 {
        font-family: Lobster, Monospace;
    }

    #heading {
        background-color: #a55c5c;

    }

    #sub-heading {
        font-family: Lobster, Monospace;
    }
    #sub-heading1 {
        font-family: Lobster, Monospace;
    }
    .modal-header,  .close {
        background-color: #A52A2A;
        color:white !important;
        text-align: center;
        font-size: 30px;
    }



</style>



<div>

    <div class="container-fluid">
        <div class="row" id="heading">
            <h2 class="red-text">

                <div class="round hollow text-center">
                    Luxury Rooms &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="open-btn" id="myBtn"><span
                            class="glyphicon glyphicon-info-sign"></span> </a>
                </div>
                <!--<button type="button" class="btn btn-info" id="myBtn">
                        <span class="glyphicon glyphicon-info-sign"></span>
                    </button>-->
                <!--<span class="glyphicon glyphicon-info-sign id="myBtn"></span></center>-->
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header" style="padding:35px 50px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h1>Luxury Facilities</h1>
                            </div>
                            <div class="modal-body" style="padding:40px 50px;">

                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><h3> Air Conditioning in Every Room</h3></li>
                                            <li><h3> Free Breakfast & Coffee</h3></li>
                                            <li><h3> Free Wi-Fi Zone</h3></li>
                                            <li><h3> Bar & Coffee Shop</h3></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6">
                                        <ul>
                                            <li><h3> Telephone & Cable TV</h3></li>
                                            <li><h3> City - Wide Taxi Service</h3></li>
                                            <li><h3> Hot & Cold Showers</h3></li>
                                            <li><h3> Laundry & Pressing</h3></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </h2>

        </div>
    </div>


<form action="piriyatesting.php" method="post" onsubmit="return validateForm()" name="room">
<input name="dayin" type="hidden" value="<?php echo $arival; ?>" />
  <input name="dayout" type="hidden" value="<?php echo $departure; ?>" />
  <input name="adult" type="hidden" value="<?php echo $adults; ?>" />
  <input name="child" type="hidden" value="<?php echo $child; ?>" />
  <input name="gender1" type="hidden" value="<?php echo $roomNo; ?>" />
  <input name="nightcount" type="hidden" value="<?php echo $nightCount; ?>" />
  
<div class="row">
    <br>
</div>

<!--<div class="container">-->
<div class="row">
    <div class="col-md-6">

        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner carousel-zoom">
                <div class="active item"><img class="img-responsive"
                                              src="img/del1.png">
                    <!--<div class="carousel-caption">
                        <h2>Title</h2>
                        <p>Description</p>
                    </div>-->
                </div>
                <div class="item"><img class="img-responsive"
                                       src="img/del3.png">
                    <!--<div class="carousel-caption">
                        <h2>Title</h2>
                        <p>Description</p>
                    </div>-->
                </div>
                <div class="item"><img class="img-responsive"
                                       src="img/jun5.png">
                    <!--<div class="carousel-caption">
                        <h2>Title</h2>
                        <p>Description</p>
                    </div>-->
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#carousel" data-slide="prev"></a>
            <a class="carousel-control right" href="#carousel" data-slide="next"></a>
        </div>
    </div>

 
  
  
   <div class="col-md-6">
        <div class="row" id="heading">
            <h2 id="sub-heading">
                <center>Luxury Single</center>
            </h2>
        </div>
        <br>

		<?php
$con = mysql_connect("localhost:3307","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hotel", $con);
function formatMoney($number, $fractional=false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) {
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return $number;
}				
$result = mysql_query("SELECT * FROM room");

while($row = mysql_fetch_array($result))
  {
  $a=$row['room_id'];
  $query = mysql_query("SELECT sum(qty_reserve) FROM roominventory where arrival <= '$arival' and departure >= '$departure' and room_id='$a'");
while($rows = mysql_fetch_array($query))
  {
  $inogbuwin=$rows['sum(qty_reserve)'];
  }
  $angavil = $row['qty'] - $inogbuwin;
  
  
        echo '<div class="row">';
            echo '<div class="col-md-4"><h4 id="sub-heading">'.$row['type'].'</h4></div>';
			$rt=$row['rate'];
            echo '<div class="col-md-4 sub-head"><h4 id="sub-heading1">'.'LKR: ';
			echo formatMoney($rt, true);
			echo '</h4></div>';
            echo '<div class="col-md-4">';
			if ($angavil > 0){
                echo '<button type="submit" name="roomid" value="' .$row["room_id"]. '" class="btn btn-danger btn-sm round">Book Now</button>';
			}
			if ($angavil <= 0){
	echo '<button type="button" class="btn btn-danger btn-sm round">Not Avilable</button>';
				    }
            echo '</div>';
        echo '</div>';
        echo '<br>';
		
		}

mysql_close($con);
?> 

 <div class="row" id="heading">
            <h2 id="sub-heading">
                <center>Luxury Double</center>
            </h2>
        </div>
        <br>

        <div class="row">
            <div class="col-md-4"><h4 id="sub-heading">Superior Double</h4></div>
            <div class="col-md-4"><h4 id="sub-heading1">LKR 23,300</h4></div>
            <div class="col-md-4">
                <button type="button" class="btn btn-danger btn-sm round">Book Now</button>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-4"><h4 id="sub-heading">Executive Double </h4></div>
            <div class="col-md-4"><h4 id="sub-heading1">LKR 28,996</h4></div>
            <div class="col-md-4">
                <button type="button" class="btn btn-danger btn-sm round">Book Now</button>
            </div>
        </div>
    </div>
</div>
<br>


    <div class="container-fluid">
        <div class="row" id="heading">
            <h2 class="red-text">

                <div class="round hollow text-center">
                    Premier Rooms &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="open-btn" id="myBtn"><span
                            class="glyphicon glyphicon-info-sign"></span> </a>
                </div>
                <!--<button type="button" class="btn btn-info" id="myBtn">
                        <span class="glyphicon glyphicon-info-sign"></span>
                    </button>-->
                <!--<span class="glyphicon glyphicon-info-sign id="myBtn"></span></center>-->
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header" style="padding:35px 50px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h1>Luxury Facilities</h1>
                            </div>
                            <div class="modal-body" style="padding:40px 50px;">

                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <li><h3> Air Conditioning in Every Room</h3></li>
                                            <li><h3> Free Breakfast & Coffee</h3></li>
                                            <li><h3> Free Wi-Fi Zone</h3></li>
                                            <li><h3> Bar & Coffee Shop</h3></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6">
                                        <ul>
                                            <li><h3> Telephone & Cable TV</h3></li>
                                            <li><h3> City - Wide Taxi Service</h3></li>
                                            <li><h3> Hot & Cold Showers</h3></li>
                                            <li><h3> Laundry & Pressing</h3></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </h2>

        </div>
    </div>



<div class="row">
    <br>
</div>

<!--<div class="container">-->
<div class="row">
    <div class="col-md-6">

        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner carousel-zoom">
                <div class="active item"><img class="img-responsive"
                                              src="img/del1.png">
                    <!--<div class="carousel-caption">
                        <h2>Title</h2>
                        <p>Description</p>
                    </div>-->
                </div>
                <div class="item"><img class="img-responsive"
                                       src="img/del3.png">
                    <!--<div class="carousel-caption">
                        <h2>Title</h2>
                        <p>Description</p>
                    </div>-->
                </div>
                <div class="item"><img class="img-responsive"
                                       src="img/jun5.png">
                    <!--<div class="carousel-caption">
                        <h2>Title</h2>
                        <p>Description</p>
                    </div>-->
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#carousel" data-slide="prev"></a>
            <a class="carousel-control right" href="#carousel" data-slide="next"></a>
        </div>
    </div>

 
  
  
   <div class="col-md-6">
        <div class="row" id="heading">
            <h2 id="sub-heading">
                <center>Premier Single</center>
            </h2>
        </div>
        <br>

		<?php
$con = mysql_connect("localhost:3307","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hotel", $con);
				
$result = mysql_query("SELECT * FROM room");

while($row = mysql_fetch_array($result))
  {
  $a=$row['room_id'];
  $query = mysql_query("SELECT sum(qty_reserve) FROM roominventory where arrival <= '$arival' and departure >= '$departure' and room_id='$a'");
while($rows = mysql_fetch_array($query))
  {
  $inogbuwin=$rows['sum(qty_reserve)'];
  }
  $angavil = $row['qty'] - $inogbuwin;
  
  
        echo '<div class="row">';
            echo '<div class="col-md-4"><h4 id="sub-heading">'.$row['type'].'</h4></div>';
			$rt=$row['rate'];
            echo '<div class="col-md-4 sub-head"><h4 id="sub-heading1">'.'LKR: ';
			echo formatMoney($rt, true);
			echo '</h4></div>';
            echo '<div class="col-md-4">';
                echo '<button type="submit" name="roomid" value="' .$row["room_id"]. '" class="btn btn-danger btn-sm round">Book Now</button>';
            echo '</div>';
        echo '</div>';
        echo '<br>';
		
		}

mysql_close($con);
?> 

  <div class="row" id="heading">
                    <h2 id="sub-heading">
                        <center>Premier Double</center>
                    </h2>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-4"><h4 id="sub-heading">Superior Double</h4></div>
                    <div class="col-md-4"><h4 id="sub-heading1">LKR 23,300</h4></div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-danger btn-sm round">Book Now</button>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-4"><h4 id="sub-heading">Executive Double </h4></div>
                    <div class="col-md-4"><h4 id="sub-heading1">LKR 28,996</h4></div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-danger btn-sm round">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
<br><br>
        <div>
            <!-- <center><button type="submit" name="roomid" class="btn btn-success">Book Now <span class="glyphicon glyphicon-menu-right"></span></button></center> -->
        </div>
		<input type="hidden" name="result" id="result" />
</form>
    <?php include 'footer.php' ?>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!--<script type="text/javascript" src="js/piriya.js"></script>-->
    <!--<script type="text/javascript" src="js/piriyajs.js"></script>-->

</body>

</html>

