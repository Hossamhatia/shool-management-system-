<!DOCTYPE html>

<?php
if(isset($_GET["g"]))
{
	session_start();
	require'./config/connect.php';
	include'./include/functions.php';
	$srch_value=$_GET["g"];
	$select="select * from students where std_fname like'".$srch_value."%'";
	$query=mysqli_query($con,$select);
	
	echo"<h1>searched student</h1>";
	echo "<table class='table table-hover' width=700px height=300px style='text-align:center' border='1' id='tbl1'>";
	 echo"<th style='background-color:lightgreen;text-align:center'>student-fname</th><th style='background-color:lightgreen;text-align:center'>student-lastbname</th><th style='background-color:lightgreen;text-align:center'>student-number</th><th style='background-color:lightgreen;text-align:center'>studentclass</th>";
	if(mysqli_num_rows($query)>0)
	{
		while($row=mysqli_fetch_array($query))
	{
		echo"<tr>";
	    echo"<td>".$row["std_fname"]."</td><td>".$row["std_lname"]."</td><td>".$row["std_num"]."</td><td>".$row["std_class"]."</td>";
	
	    echo"</tr>";
		
	}
	
	}
	else
	{
		echo"<tr>";
	    echo"<td colspan='4' style='color:red'>No Records Founded</td>";
	
	    echo"</tr>";
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
