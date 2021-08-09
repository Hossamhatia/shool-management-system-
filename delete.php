<?php
require'./config/connect.php';
if(isset($_GET["stdid"]))
{
	$stddid=$_GET["stdid"];
	$delete="delete from students where std_id='$stddid'";
	$query=mysqli_query($con,$delete);
	if($query)
	{
		echo"<script>alert('record deleted');window.location.assign('show-std.php')</script>";
	}
	else
	{
		echo"some thing wronggggg";
	}
}
else
{
	echo"some thing wrong";
}