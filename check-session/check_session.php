<?php
session_start();
if(isset($_SESSION["usename"]))
{
	$admin_id=$_SESSION["usename"];
}
else
{
	echo "<script>alert('you loged in as Normal User,(admin data)-> user:hossam@direct-visa.net,password:123456 ');window.location.assign('./index.php')</script>";
}