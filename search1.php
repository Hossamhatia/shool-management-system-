<!DOCTYPE html>

<?php
if(isset($_GET["g"]))
{
	session_start();
	require'./config/connect.php';
	include'./include/functions.php';
	$srch_value=$_GET["g"];
	$select="select * from staff where JobTitle='$srch_value'";
	$query=mysqli_query($con,$select);
	
	echo "<table class='table table-hover table-bordered' style='text-align:center'>";
	echo "<tr><th class='th_font' style='text-align:center;background-color:green'>employee_id</th><th class='th_font' style='text-align:center;background-color:green'>employee_name</th><th class='th_font' style='text-align:center;background-color:green'>Job_Title</th><th class='th_font' style='text-align:center;background-color:green'>employee_Address</th><th class='th_font' style='text-align:center;background-color:green'>Salary</th><th class='th_font' style='text-align:center;background-color:green'>telephon</th></tr>";
	if(isset($_SESSION["usename"]))
	{
		while($row=mysqli_fetch_array($query))
	{
		echo "<tr><td class='th_font'>".$row["Emp_id"]."</td><td class='th_font'>".$row["Emp_Name"]."</td><td class='th_font'>".$row["JobTitle"]."</td><td class='th_font'>".$row["Emp_Address"]."</td><td class='th_font'>".$row["Salary"]."</td><td class='th_font'>".$row["Telephone"]."</td></tr>";
	}
    }
	else
	{
		echo "<tr><td colspan='6' style='color:red;font-size:29px'>Access Denied,Login As Admin(admin data)-> user:hossam@direct-visa.net,password:123456</td></tr>";
	}
	
	echo "</table>";

	
	//$_SESSION["std_num"]=$srch_value;
	
	
	
}
?>
<html>
<head>
	
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="jquery.js"></script>
	</head>
	
	<body>

	</body>
</html>
