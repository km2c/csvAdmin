<?php
include '../includes/config.php';
$link = mysql_connect($host, $user, $pass) or die("Can not connect." . mysql_error());

$query  = 'CREATE DATABASE $db';
$result = mysql_query($query);

mysql_select_db($db) or die('Cannot select database'); 

$query = 'CREATE TABLE Persons( '.
         'id INT NOT NULL AUTO_INCREMENT, '. 
         'first_name VARCHAR(20) NOT NULL, '.
         'last_name VARCHAR(30) NOT NULL, '. 
         'email VARCHAR(50) NOT NULL, '.
         'address VARCHAR(30) NOT NULL, '.
         'city VARCHAR(30) NOT NULL, '.
         'state VARCHAR(30) NOT NULL, '.
         'zip VARCHAR(30) NOT NULL, '.
         'phone VARCHAR(30) NOT NULL, '.
         'pig_roast VARCHAR(30) NOT NULL, '.
         'casino_night VARCHAR(30) NOT NULL, '.
				 'ribbon_cutting VARCHAR(30) NOT NULL, '.
         'date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, '.
         'PRIMARY KEY(id))';



$result = mysql_query($query);
//mysql_close($link)  
//include 'closedb.php';

echo 'Congratulations!<br><br>
The database has been installed <br>
Please remove the installation directory.';
?>