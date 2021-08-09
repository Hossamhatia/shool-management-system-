<?php
$host="localhost";
$dbuser="root";
$dbpass="";
$dbname="school";
$con=mysqli_connect("$host","$dbuser","$dbpass","$dbname");
if(!$con)
	echo "Wrong connection...";