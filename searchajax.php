<?php

require'./config/connect.php';

$varx=$_GET["g"];
$select="select * from classes where class_name='$varx'";
$qyuery=mysqli_query($con,$select);

if($qyuery)
{
	$row=mysqli_fetch_array($qyuery);
	echo $row["class_name"];
}
else
{
	echo "nooo data";
}