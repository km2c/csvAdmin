<?php
require("includes/config.php");

$con = mysql_connect($host, $user, $pass);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db, $con);

$sql="INSERT INTO $table (first_name, last_name, email, address, city, state, zip, phone, pig_roast, casino_night, ribbon_cutting)
VALUES
	(               
	'$_POST[first_name]',
	'$_POST[last_name]', 
	'$_POST[email]',
	'$_POST[address]',
	'$_POST[city]',
	'$_POST[state]',
	'$_POST[zip]',
	'$_POST[phone]',
	'$_POST[pig_roast]',
	'$_POST[casino_night]',
	'$_POST[ribbon_cutting]'
	)";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
//echo "1 record added";
header('Location: thankyou.php');

mysql_close($con)
?>
