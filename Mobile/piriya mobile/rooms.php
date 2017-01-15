<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/stylenew.css" media="all"/>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Quattrocento' rel='stylesheet'>

    <link href='http://fonts.googleapis.com/css?family=Merienda One' rel='stylesheet'>
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Respomsive slider -->
    <!-- <link href="css/responsive-slider.css" rel="stylesheet">-->
    <link href="css/content.css" rel="stylesheet">


    <link href="css/rooms-css.css" rel="stylesheet">


</head>
<body>
<br/><br/>
<?php include 'header.php' ?>


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

<script>
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
</script>

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

        <div class="row">
            <div class="col-md-4"><h4 id="sub-heading">Superior Deluxe Suite</h4></div>
            <div class="col-md-4 sub-head"><h4 id="sub-heading1">LKR 30,345</h4></div>
            <div class="col-md-4">
                <button type="button" class="btn btn-danger btn-sm round">Select</button>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-4"><h4 id="sub-heading">Presidential Suite</h4></div>
            <div class="col-md-4"><h4 id="sub-heading1">LKR 33,716</h4></div>
            <div class="col-md-4">
                <button type="button" class="btn btn-danger btn-sm round">Select</button>
            </div>
        </div>
        <br>

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
                <button type="button" class="btn btn-danger btn-sm round">Select</button>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-4"><h4 id="sub-heading">Executive Double </h4></div>
            <div class="col-md-4"><h4 id="sub-heading1">LKR 28,996</h4></div>
            <div class="col-md-4">
                <button type="button" class="btn btn-danger btn-sm round">Select</button>
            </div>
        </div>
    </div>
</div>
<br>

        <div class="container-fluid">
            <div class="row" id="heading">
                <h2 class="red-text">
                    <div class="round hollow text-center">
                        Premier Rooms &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="open-btn" id="myBtn1"><span
                                class="glyphicon glyphicon-info-sign"></span> </a>
                    </div>

                    <div class="modal fade" id="myModal1" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header" style="padding:35px 50px;">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h1>Premier Facilities</h1>
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
                        <div class="active item"><img class="img-responsive" src="img/sup8.png">
                           <!-- <img class="img-responsive" src="https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1200">-->
                            <!--<div class="carousel-caption">
                                <h2>Title</h2>
                                <p>Description</p>
                            </div>-->
                        </div>
                        <div class="item"><img class="img-responsive" src="img/sup3.png">
                            <!--<div class="carousel-caption">
                                <h2>Title</h2>
                                <p>Description</p>
                            </div>-->
                        </div>
                        <div class="item"><img class="img-responsive" src="img/sup10.png">
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

                <div class="row">
                    <div class="col-md-4 "><h4 id="sub-heading">Superior Deluxe Suite</h4></div>
                    <div class="col-md-4 "><h4 id="sub-heading1">LKR 30,345</h4></div>
                    <div class="col-md-4 ">
                        <button type="button" class="btn btn-danger btn-sm round">Select</button>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-4"><h4 id="sub-heading">Presidential Suite</h4></div>
                    <div class="col-md-4"><h4 id="sub-heading1">LKR 33,716</h4></div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-danger btn-sm round">Select</button>
                    </div>
                </div>
                <br>

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
                        <button type="button" class="btn btn-danger btn-sm round">Select</button>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-4"><h4 id="sub-heading">Executive Double </h4></div>
                    <div class="col-md-4"><h4 id="sub-heading1">LKR 28,996</h4></div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-danger btn-sm round">Select</button>
                    </div>
                </div>
            </div>
        </div>
<br><br>
        <div>
            <a href="piriyatesting.php"><center><button type="button" class="btn btn-success">Book Now <span class="glyphicon glyphicon-menu-right"></span></button></center></a>
        </div>
    <?php include 'footer.php' ?>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!--<script type="text/javascript" src="js/piriya.js"></script>-->
    <!--<script type="text/javascript" src="js/piriyajs.js"></script>-->

</body>

</html>

