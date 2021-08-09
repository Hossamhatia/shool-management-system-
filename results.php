<!DOCTYPE html>

<?php
require'./config/connect.php';
include'./check-session/check_session.php';
if(isset($_POST["add"]))
{
	
	$student_num=$_POST["stnum"];
	$arabic_rst=$_POST["arabic"];
	$math_rst=$_POST["math"];
	$scince_rst=$_POST["scince"];
	$select="select * from students where std_num='$student_num'";
	
	$query=mysqli_query($con,$select);
	if(mysqli_num_rows($query)>0)
	{
		$insert="INSERT INTO results (std_num,math,sience,arabic) VALUES('$student_num','$arabic_rst','$math_rst','$scince_rst')";
		$query=mysqli_query($con,$insert);
		
		if($query)
		{
					echo"<script>alert('..Results Added..');window.location.assign('show-results.php')</script>";

		}
		
	}
	else
	{
		echo"<script>alert('Student-Num - not exist... ')</script>";
	}
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
		
		<style>
		.div1{
		 margin: 200px 400px 0 650px;
		}
			
		</style>
		
	</head>
	<body style="background-color: darkgrey">
		<h1 style="color: springgreen;text-align: center">Add-Result</h1>
		<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post"  class="form-group" style="background-image: url('images/blog_pic2.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;background-color: rgba(243,125,127,0.36)">
			
		<div class="div1">
			
			<table border="0" width="500px" height="400px" style="text-align: center">
				<tr><td  colspan="2" style="text-align: center"></td></tr>
			<tr>
				<td style="font-size: 25px;color:greenyellow" >Student-Number:</td>
				<td><input type="text" name="stnum" class="form-control"></td>
				</tr>
				<tr>
				<td style="font-size: 25px;color: greenyellow">Arabic:</td>
				<td><input type="text" name="arabic" class="form-control"></td>
				</tr>
				<tr>
				<td style="font-size: 25px;color: greenyellow">Math:</td>
				<td><input type="text" name="math" class="form-control"></td>
				</tr>
				<tr>
				<td style="font-size: 25px;color: greenyellow">Scince:</td>
				<td><input type="text" name="scince" class="form-control"></td>
				</tr>
				<tr>
				<td colspan="4" style="text-align: center">
					<input type="submit" name="add" class="btn btn-primary" value="ADD-Result" style="width: 120px;height: 32px;background-color:lightgreen">
					</td>
				</tr>
				<tr>
				<td style="text-align: center" colspan="2">
					<a href="show-results.php" style="font-size: 30px"><span style="color:red">Back>></span></a>To Results Table
					</td>
				</tr>
				
			</table>
			</div>
		
		</form>
	
	</body>
</html>