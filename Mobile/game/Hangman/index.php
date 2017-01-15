<?php
$content ='<style type="text/css">

h2.header1 {
margin-left: 40px;
}

div.header1{
    font-family:Merienda!important;
}
canvas#out-canvas {
    border-style: groove;
    border-width: 0px;
}
body{
    font-family:Merienda!important;
    width:100%;
    text-align:center;
    background-image: url("back1.jpg");
}
#qrfile{
    width:320px;
    height:240px;
}
#v{
    width:320px;
    height:240px;
}
#qr-canvas{
    display:none;
}
#iembedflash{
    margin:0;
    padding:0;
}
#mp1{
    text-align:center;
    font-size:25px;
}
.header {
    visibility: collapse;
}
.ggd {
    visibility: collapse;
}
div#widget_bounds {
    margin-left: 200px;
    visibility: collapse;
}
#mp2{
    text-align:center;
    font-size:25px;
    color:red;
}
.selector{
    border: solid;
    border-width: 3px 3px 1px 3px;
    margin:0;
    padding:0;
    cursor:pointer;
    margin-bottom:-5px;
}
#outdiv {
width: 327px;
height: 246px;
border: solid;
border-width: 3px 3px 3px 3px;
margin-left: 540px;
}
#result {
border: solid;
border-width: 3px 3px 3px 3px;
padding: 20px;
width: 37.3%;
margin-left: 435px;
margin-top: 35px;
height: 99px;
}

#imghelp{
    position:relative;
    left:0px;
    top:-160px;
    z-index:100;
    font:18px arial,sans-serif;
    background:#f0f0f0;
    margin-left:35px;
    margin-right:35px;
    padding-top:10px;
    padding-bottom:10px;
    border-radius:20px;
}
p.helptext{
    margin-top:54px;
    font:18px arial,sans-serif;
}
p.helptext2{
    margin-top:100px;
    font:18px arial,sans-serif;
}
ul{
    margin-bottom:0;
    margin-right:40px;
}
li{
    display:inline;
    padding-right: 0.5em;
    padding-left: 0.5em;
    font-weight: bold;
    border-right: 1px solid #333333;
}
li a{
    text-decoration: none;
    color: black;
}

#footer a{
    color: black;
}
.tsel{
    padding:0;
}

@media (min-width : 1024px) and (max-width : 1050px) {
#outdiv {
        margin-left: 366px!important;
    }
    #result {
        margin-left: 334px!important;
    }
}

@media (min-width : 320px) and (max-width : 568px) {
img.header_img {
width: 300px!important;
height: 100px!important;
}

h2.header1 {
font-size: 16px;
margin-left: -5px!important;
}

#outdiv {
margin-left: 17px;
width: 282px;
height: 250px;
}

#imghelp {
margin-left: 40px;
font-size: 14px;
width: 200px;
}

#result {
margin-left: 17px;
width: 282px;
height: 142px;
}

canvas#out-canvas {
width: 271px;
margin-left: -44px;
height: 242px;
}
}
<style><link rel="stylesheet" type="text/css" href="newstyles.css"></style>
</style><script type="text/javascript" src="llqrcode.js"></script>
<link href=\'http://fonts.googleapis.com/css?family=Merienda\' rel=\'stylesheet\'>
<link href=\'//fonts.googleapis.com/css?family=Sofia\' rel=\'stylesheet\'>
<script src="http://www.w3schools.com/lib/w3data.js"></script>
<script type="text/javascript" src="webqr.js"></script>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<script>
$(document).ready(function() {
load();
setimg();            
});
</script>
<div id="main">
<div id="mainbody">


<div id="outdiv">

</div>
<div id="result"></div>
</div></div>           <canvas id="qr-canvas" width="800" height="600"></canvas>';

echo<<<endHTML
<img class="header_img" src="pubcrawl.png" alt="some_text" style="width:545px;height:175px">
<hr>
<h2 class="header1" style="font-family:Merienda; color:saddlebrown">Decode our QR Code to Find Your Next Clue!
</h2>

<div w3-include-html="footer2.html"></div>
<script>
    w3IncludeHTML();
</script>
endHTML;

$pre = 1;
$title = "Decode QR code";
$heading = "";
include("html.inc");

?>