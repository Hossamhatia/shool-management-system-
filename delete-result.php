<?php
require'./config/connect.php';
if(isset($_GET["delid"]))
{
	$stddid=$_GET["delid"];
	$delete="delete from results where std_num='$stddid'";
	$query=mysqli_query($con,$delete);
	if($query)
	{
		echo"<script>alert('record deleted');window.location.assign('show-result2.php')</script>";
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