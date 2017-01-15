<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pub Passion</title>

<?php
if (!isset($_POST['submit'])) {

	$errmsg_arr = array();
	
	$errflag = false;
	
	$con = mysql_connect("localhost:3307","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("argie_tamera", $con);

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
	$no_rooms = $_POST['gender1'];
	$price = $_POST['price'];
	$roomtype = $_POST['rm_type'];
$stat= 'Active';
	$roomid = $_POST['rm_id'];
	$result = $_POST['result'];
	$email = $_POST['email'];
	
	$result5 = mysql_query("SELECT * FROM reservation where email='$email'");
while($row2 = mysql_fetch_array($result5))
  {
  $name = $row2['firstname'];	
		
	$email = $row2['email'];
	
  
  }
	$result1 = mysql_query("SELECT * FROM room where room_id='$roomid'");
while($row = mysql_fetch_array($result1))
  {
  $rate=$row['rate'];
  $roomtype=$row['type'];
  
  }
  $payable= $price*$no_rooms;
	
	
	
	//send the email
		$mail_To = $email;
                $mail_Subject = "Reservation notification From Passion Pub";
                $mail_Body = "First Name: $name\n".
		
		"Email: $email \n".
		
		"Check In: $arival\n ".
		"Check Out: $departure\n ".
		"Number of Adults: $adults\n ".
		"Number of child: $child\n ".
		"Total nights of stay: $result\n ".
		
		"Number of rooms: $no_rooms\n ".
		"Payable amount: $payable\n ".
		"Confirmation Number: $confirmation\n ";
                mail($mail_To, $mail_Subject, $mail_Body);
	
	$sql="INSERT INTO reservation (arrival, departure, adults, child, result, room_id, email, payable, confirmation)
VALUES
('$arival','$departure','$adults','$child','$result','$roomid','$email','$payable','$confirmation')";
mysql_query("INSERT INTO roominventory (arrival, departure, qty_reserve, room_id, confirmation, status) VALUES ('$arival','$departure','$no_rooms','$roomid','$confirmation','$stat')");
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
<title>Pub passion</title>

 
</head>

<body>

<h2>RESERVATION DETAILS </h2>
<p>
  <ul>
      
 </ul>
    </p>
</p>
</div>


<form action="https://www.sandbox.paypal.com/cgi-bin/webscr"  method="post">
      
        <table width="460" border="0">
  <tr>
    <td colspan="2"><div align="center" class="style1">RESERVATION DETAILS </div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"></div></td>
  </tr>
  <tr>
    <td width="140"><div align="right">Check In Date </div></td>
    <td width="304"><?php echo $arival; ?></td>
  </tr>
  <tr>
    <td><div align="right">Check Out Date</div></td>
    <td><?php echo $departure; ?></td>
  </tr>
  <tr>
    <td><div align="right">Adults</div></td>
    <td><?php echo $adults; ?></td>
  </tr>
  <tr>
    <td><div align="right">Child</div></td>
    <td><?php echo $child; ?></td>
  </tr>
  <tr>
    <td><div align="right">Number of Rooms</div></td>
    <td><?php echo $no_rooms; ?></td>
  </tr>
  <tr>
    <td><div align="right">Room ID</div></td>
    <td><?php echo $roomid; ?></td>
  </tr>
  <tr>
    <td><div align="right">Number of nights</div></td>
    <td><?php echo $result; ?></td>
  </tr>
  <tr>
    <td><div align="right">Firstname</div></td>
    <td><?php echo $name; ?></td>
  </tr>  
   
  <tr>
    <td><div align="right">Email</div></td>
    <td><?php echo $email; ?></td>
  </tr>
  
</table>
	 
	<input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="business" value="argiep_1323161081_biz@gmail.com" />
        <input type="hidden" name="item_name" value="<?php echo $roomtype; ?>" />
        <input type="hidden" name="item_number" value="<?php echo $confirmation; ?>" />
        <input type="hidden" name="amount" value="<?php echo $payable; ?>" />
        <input type="hidden" name="no_shipping" value="1" />
        <input type="hidden" name="no_note" value="1" />
        <input type="hidden" name="currency_code" value="PHP" />
        <input type="hidden" name="lc" value="GB" />
        <input type="hidden" name="bn" value="PP-BuyNowBF" />
        <input type="image" src="images/PayPal.png" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" style="margin-left: 10px;" />
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

</body>
</html>



