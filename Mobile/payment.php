<?php
if (!isset($_POST['submit'])) {

	$errmsg_arr = array();
	
	$errflag = false;
	
	$con = mysql_connect("localhost:3307","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("hotel", $con);

	function createRandomPassword() {



    $chars = "abcdefghijkmnopqrstuvwxyz023456789";

    srand((double)microtime()*1000000);

    $i = 0;

    $pass = '' ;



    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }



    return $pass;



}
$confirmation = createRandomPassword();
	$arival = $_POST['dayin'];
	$departure = $_POST['dayout'];
	$adults = $_POST['adult'];
	$child = $_POST['child'];	
	$roomNo = $_POST['gender1'];
	$roomid = $_POST['roomid'];
	$result = $_POST['result'];
	$name = $_POST['first_name'];	
	$address = $_POST['address'];	
	$email = $_POST['email'];	
$stat= 'Active';
	$result1 = mysql_query("SELECT * FROM room where room_id='$roomid'");
while($row = mysql_fetch_array($result1))
  {
  $rate=$row['rate'];
  $type=$row['type'];
  
  }
  $payable= $rate*$result*$roomNo;
	
	
	
	//send the email
		
		
		
$mail_To = $email;
                $mail_Subject = "Reservation notification From Pub Passion";
                $mail_Body = "First Name: $name\n".
		"Email: $email \n".		
		"Check In: $arival\n ".
		"Check Out: $departure\n ".
		"Number of Adults: $adults\n ".
		"Number of child: $child\n ".
		"Total nights of stay: $result\n ".
		"Room Type: $type\n ".
		"Number of rooms: $roomNo\n ".
		"Payable amount: $payable\n ".
		"Confirmation Number: $confirmation\n ";
                mail($mail_To, $mail_Subject, $mail_Body);		
		
		
		
		
		
	
	$sql="INSERT INTO reservation (arrival, departure, adults, child, result, room_id, no_room, firstname, address, email, payable, confirmation)
VALUES
('$arival','$departure','$adults','$child','$result','$roomid','$roomNo','$name','$address','$email','$payable','$confirmation')";
mysql_query("INSERT INTO roominventory (arrival, departure, qty_reserve, room_id, confirmation, status) VALUES ('$arival','$departure','$nroom','$roomid','$confirmation','$stat')");
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

}
mysql_close($con)

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tamera Plaza Inn</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<!--sa poip up-->
 <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<!--sa error trapping-->

<script type="text/javascript">
function validateForm()
{

var y=document.forms["personal"]["name"].value;
var a=document.forms["personal"]["last"].value;
var b=document.forms["personal"]["address"].value;
var c=document.forms["personal"]["city"].value;
var d=document.forms["personal"]["zip"].value;
var e=document.forms["personal"]["country"].value;
var f=document.forms["personal"]["email"].value;
var g=document.forms["personal"]["cemail"].value;
var x=document.forms["personal"]["cnumber"].value;
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
<script type="text/javascript">
function validateForm1()
{
var r=document.forms["log"]["email"].value;
var g=document.forms["log"]["password"].value;
var atpos=r.indexOf("@");
var dotpos=r.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=r.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }  

if ((a==null || a==""))
  {
  alert("pls.enter your password");
  return false;
  }
}
</script>

<!--sa input that accept number only-->
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    
    //called when key is pressed in textbox
	$("#zip").keypress(function (e)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if( e.which!=8 && e.which!=0 && (e.which<48 || e.which>57))
	  {
		//display error message
		$("#errmsg").html("Number Only").show().fadeOut("slow"); 
	    return false;
      }	
	});
	$("#cnumber").keypress(function (a)  
	{ 
	  //if the letter is not digit then display error and don't type anything
	  if( a.which!=8 && a.which!=0 && (a.which<48 || a.which>57))
	  {
		//display error message
		$("#errmsg1").html("Number Only").show().fadeOut("slow"); 
	    return false;
      }	
	});

  });
  </script>

</script>


 <script type="text/javascript">

   //Created / Generates the captcha function    
    function DrawCaptcha()
    {
        var a = Math.ceil(Math.random() * 10)+ '';
        var b = Math.ceil(Math.random() * 10)+ '';       
        var c = Math.ceil(Math.random() * 10)+ '';  
        var d = Math.ceil(Math.random() * 10)+ '';  
        var e = Math.ceil(Math.random() * 10)+ '';  
        var f = Math.ceil(Math.random() * 10)+ '';  
        var g = Math.ceil(Math.random() * 10)+ '';  
        var code = a + b +  c +  d +  e +  f +  g;
        document.getElementById("txtCaptcha").value = code
    }

    
 
    </script>
 <style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:249px;
	height:27px;
	z-index:1;
	top: 327px;
	margin-left:3px;
}
.style1 {
	font-size: 14px;
	font-weight: bold;
}
-->
 </style>
 


 
 
 
 
 
</head>

<body onload="DrawCaptcha();">

<!-- TOP -->
<div id="top1"><a href="index.php"><img src="images/logo.jpg" border="0" style="margin-top:27px; margin-left:20px;" /></a></div>





<!-- HEADER -->
<!-- CONTENT -->
<div id="content">

<div id="leftPan">

<div id="services">
<h2>RESERVATION DETAILS </h2>
<p>
  <ul>
      
 </ul>
    </p>
</p>
</div>

<div id="services">
<iframe src="https://www.facebook.com/plugins/like.php?href=tameraplazainn.x10.mx"
        scrolling="no" frameborder="0"
        style="border:none; width:180px; height:250px"></iframe>
</div>



</div><br /><br /><br />
<div id="featured">
  
  <br />
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr"  method="post">
        <!-- the cmd parameter is set to _xclick for a Buy Now button -->
        <table width="460" border="0">
  <tr>
    <td colspan="2"><div align="center" class="style1">RESERVATION DETAILS </div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"></div></td>
  </tr>
  <tr>
    <td width="140"><div align="right">Check In Date </div></td>
    <td width="304"><?php echo $_POST['dayin']; ?></td>
  </tr>
  <tr>
    <td><div align="right">Check Out Date</div></td>
    <td><?php echo $_POST['dayout']; ?></td>
  </tr>
  <tr>
    <td><div align="right">Adults</div></td>
    <td><?php echo $_POST['adult']; ?></td>
  </tr>
  <tr>
    <td><div align="right">Child</div></td>
    <td><?php echo $_POST['child']; ?></td>
  </tr>
  <tr>
    <td><div align="right">Number of Rooms</div></td>
    <td><?php echo $_POST['gender1']; ?></td>
  </tr>
  <tr>
    <td><div align="right">Room Type</div></td>
    <td><?php echo $_POST['$roomtype']; ?></td>
  </tr>
  <tr>
    <td><div align="right">Number of nights</div></td>
    <td><?php echo $_POST['result']; ?></td>
  </tr>
  <tr>
    <td><div align="right">Firstname</div></td>
    <td><?php echo $_POST['name']; ?></td>
  </tr>  
  <tr>
    <td><div align="right">Address</div></td>
    <td><?php echo $_POST['address']; ?></td>
  </tr>  
  <tr>
    <td><div align="right">Email</div></td>
    <td><?php echo $_POST['email']; ?></td>
  </tr> 
</table>
	 
	<input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="business" value="argiep_1323161081_biz@gmail.com" />
        <input type="hidden" name="item_name" value="<?php echo $type; ?>" />
        <input type="hidden" name="item_number" value="<?php echo $confirmation; ?>" />
        <input type="hidden" name="amount" value="<?php echo $payable; ?>" />
        <input type="hidden" name="no_shipping" value="1" />
        <input type="hidden" name="no_note" value="1" />
        <input type="hidden" name="currency_code" value="PHP" />
        <input type="hidden" name="lc" value="GB" />
        <input type="hidden" name="bn" value="PP-BuyNowBF" />
        <input type="image" src="http://ppcalc.com/buttons/x-click-but9_pay.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" style="margin-left: 157px;" />
        <img alt="fdff" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1" />
        <!-- Payment confirmed -->
        <input type="hidden" name="return" value="https://tameraplazainn.x10.mx/showconfirm.php" />
        <!-- Payment cancelled -->
        <input type="hidden" name="cancel_return" value="http://tameraplazainn.x10.mx/cancel.php" />
        <input type="hidden" name="rm" value="2" />
        <input type="hidden" name="notify_url" value="http://tameraplazainn.x10.mx/ipn.php" />
        <input type="hidden" name="custom" value="any other custom field you want to pass" />
    </form>
</div>
<div class="clear"> </div>

</div>

<!-- FOOTER -->

<div id="footer">

<img src="images/call.jpg" alt="" width="156" height="37" />

<p><a href="index.php">HOME</a> |<a href="about.php"> ABOUT US </a>|<a href="contact.php"> CONTACTS </a>|<a href="gallery.php"> GALLERY </a>|<a href="rates.php"> ROOM RATES </a></p>
</div>

<!-- BOTTOM -->

<div id="bottom">

<p>Copyright &copy; Tamera Plaza Inn. Designed by <a href="#" target="_blank">begie</a></p>
</div>

</body>
</html>
