<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>PubPassion</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'>

    <link href='http://fonts.googleapis.com/css?family=Merienda One' rel='stylesheet'>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link href="css/header.css" rel="stylesheet">
    <link href="css/backtotop.css" rel="stylesheet">
    <link href="css/contact.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">


    <?php include 'header.php' ?>


    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyCEDKr31koGRcaIXduVq6OIRn6hhFmtmT0&callback=initMap"></script>



    <style>


        #map {
            width:90%; height:60%;
            position:absolute;
            border:1px solid red;
        }

        .img-responsive, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img {
            display: block;
            max-width: 40%;
            height: auto;
        }

    </style>
</head>
<body>

<div class="container">
    <div class="row-fluid">
        <div id="map">
            <!--<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d15844.552957960768!2d79.84901761268571!3d6.8740352240876765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3ae25bbb4a007fd7%3A0x5ab32c8c580cdc79!2sWellawatte+Station+Rd%2C+Colombo%2C+Sri+Lanka!3m2!1d6.874014!2d79.8577724!5e0!3m2!1sen!2sus!4v1484261101990"></iframe>-->
        </div>
        </br>
        <table style="width:100%;margin-top:380px">
            <tr>
                <th>

                    <div class="span4">
                        <h2>Wella - Pub Passion</h2>
                        <form action="contact.php" method="post">
                            <input type="submit" name="walle" value="Add to Favorites"/>
                        </form>
                        <address>
                            <strong>Pub Passion</strong><br>
                            215 West Girard Avenue 19123<br>
                            SRILANKA<br>
                            <abbr title="Phone">P:</abbr> 01234 567 890
                        </address>
                    </div>
                </th>
                <th style="width:50%">

                    <div class="span4">
                        <a href="javascript:google.maps.event.trigger(gmarkers['Wella Pub Passion'],'click');"><img class="img-responsive" src="images/place1.jpg"></a>
                    </div>
    </div>
    </th>
    </tr>

    <tr>
        <th>

            <div class="span4">
                <h2>Bamba - Pub Passion</h2>
                <form action="contact.php" method="post">
                    <input type="submit" name="bamba" value="Add to Favorites"/>
                </form>
                <address>
                    <strong>Pub Passion</strong><br>
                    5360 Old York Road 19141<br>
                    SRILANKA<br>
                    <abbr title="Phone">P:</abbr> 01234 567 890
                </address>
            </div>
        </th>
        <th>

            <div class="span4">
                <a href="javascript:google.maps.event.trigger(gmarkers['Bamba Pub Passion'],'click');"><img class="img-responsive" src="images/place2.jpg"></a>
            </div>
</div>
</th>
</tr>

<tr>
    <th>

        <div class="span4">
            <h2>Mount - Pub Passion</h2>
            <form action="contact.php" method="post">
                <input type="submit" name="mount" value="Add to Favorites"/>
            </form>
            <address>
                <strong>Pub Passion</strong><br>
                1350 W Girard Avenue 19123<br>
                SRILANKA<br>
                <abbr title="Phone">P:</abbr> 01234 567 890
            </address>
        </div>
    </th>
    <th>

        <div class="span4">
            <a href="javascript:google.maps.event.trigger(gmarkers['Mount Pub Passion'],'click');"> <img class="img-responsive" src="images/place3.jpg"></a>
        </div>
        </div>
    </th>
</tr>

<tr>
    <th>

        <div class="span4">
            <h2>Mora - Pub Passion</h2>
            <form action="contact.php" method="post">
                <input type="submit" name="mora" value="Add to Favorites"/>
            </form>
            <address>
                <strong>Pub Passion</strong><br>
                1350 W Girard Avenue 19123<br>
                SRILANKA<br>
                <abbr title="Phone">P:</abbr> 01234 567 890
            </address>
        </div>
    </th>
    <th>

        <div class="span4">
            <a href="javascript:google.maps.event.trigger(gmarkers['Mora Pub Passion'],'click');"><img class="img-responsive"  src="images/place4.jpg"></a>
        </div>
        </div>
    </th>
</tr>
</table>


<?php

$con = mysqli_connect("localhost","root","","players");

if(isset($_POST['walle'])){

    $vote_walle = "update players set walle=walle+1";

    $run_walle = mysqli_query($con, $vote_walle);

    if($run_walle){

        echo "<h2 align='center'>You have added Wella - Pub Passion as your Favourite!</h2>";
        echo "<h2 align='center'><a href='contact.php?results'>View Favourites</a></h2>";
    }
}


if(isset($_POST['bamba'])){

    $vote_bamba = "update players set bamba=bamba+1";

    $run_bamba = mysqli_query($con, $vote_bamba);

    if($run_bamba){

        echo "<h2 align='center'>You have added Bamba - Pub Passion as your Favourite!</h2>";
        echo "<h2 align='center'><a href='contact.php?results'>View Favourites</a></h2>";
    }
}

if(isset($_POST['mount'])){

    $vote_mount = "update players set mount=mount+1";

    $run_mount = mysqli_query($con, $vote_mount);

    if($run_mount){

        echo "<h2 align='center'>You have added Mount - Pub Passion as your Favourite!</h2>";
        echo "<h2 align='center'><a href='contact.php?results'>View Favourites</a></h2>";
    }
}

if(isset($_POST['mora'])){

    $vote_mora = "update players set mora=mora+1";

    $run_mora = mysqli_query($con, $vote_mora);

    if($run_mora){

        echo "<h2 align='center'>You have added Mora - Pub Passion as your Favourite!</h2>";
        echo "<h2 align='center'><a href='contact.php?results'>View Favourites</a></h2>";
    }
}

if(isset($_GET['results'])){

    $get_votes = "select * from players";

    $run_votes = mysqli_query($con, $get_votes);

    $row_votes = mysqli_fetch_array($run_votes);

    $walle = $row_votes['walle'];
    $bamba = $row_votes['bamba'];
    $mount = $row_votes['mount'];
    $mora = $row_votes['mora'];

    $count = $walle+$bamba+$mount;

    $per_walle = round($walle*100/$count) . "%";
    $per_bamba = round($bamba*100/$count) . "%";
    $per_mount = round($mount*100/$count) . "%";
    $per_mora = round($mora*100/$count) . "%";

    echo "
	<div style='background:#FDCF67; padding:10px; text-align:center;'>

		<center>
		<h2>Favourites So Far:</h2>

		<p style='background:black; color:white; padding:10px; width:500px;'>

		<b>Walle:</b> $walle ($per_walle)

		</p>

		<p style='background:black; color:white; padding:10px; width:500px;'>

		<b>Bamba:</b> $bamba ($per_bamba)

		</p>

		<p style='background:black; color:white; padding:10px; width:500px;'>

		<b>Mount:</b> $mount ($per_mount)

		</p>

		<p style='background:black; color:white; padding:10px; width:500px;'>

		<b>Mora:</b> $mora ($per_mora)

		</p>
		</center>

	</div>
	";


}
?>



</div>
</div>

<br>


<script type="text/javascript">
    var locations = [
        [
            "Wella Pub Passion",
            "215 West Girard Avenue 19123",
            "6.871229",
            "79.858526"
        ],
        [
            "Bamba Pub Passion",
            "5360 Old York Road 19141",
            "6.896633",
            "79.853156"
        ],
        [
            "Mount Pub Passion",
            "1350 W Girard Avenue 19123",
            "6.838917",
            "79.863612"
        ],
        [
            "Mora Pub Passion",
            "1350 W Girard Avenue 19123",
            "6.788103",
            "79.891190"
        ]
    ];

    gmarkers = [];

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: new google.maps.LatLng(6.871229, 79.858526),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();


    function createMarker(latlng, html) {
        var marker = new google.maps.Marker({
            position: latlng,
            map: map
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.setContent(html);
            infowindow.open(map, marker);
        });
        return marker;
    }

    for (var i = 0; i < locations.length; i++) {
        gmarkers[locations[i][0]] =
            createMarker(new google.maps.LatLng(locations[i][2], locations[i][3]), locations[i][0] + "<br>" + locations[i][1]);
    }
</script>
</div>




<?php include 'footer.php' ?>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/jquery.event.move.js"></script>
<script src="js/responsive-slider.js"></script>
<script src="js/myscripts.js"></script>
<!--<script src="js/contact.js"></script>-->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>



</body>

</html>

