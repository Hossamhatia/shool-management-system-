<!DOCTYPE html>
<?php
include'./config/connect.php';
if(isset($_POST["submit"]))
{
	$fname=$_POST["txt1"];
	$lname=$_POST["txt2"];
	$std_num=$_POST["num1"];
	$std_class=$_POST["selctlist"];
	
	$select="select * from students where 	std_num='$std_num'";
	$query=mysqli_query($con,$select);
	if(!mysqli_num_rows($query)>0)
	{
		$insert="insert into students (std_fname,std_lname,std_num,std_class) values('$fname','$lname','$std_num','$std_class')";
		$query=mysqli_query($con,$insert);
		if($query)
		{
					echo "<script>alert('Sutdent Added Successfuly');window.location.assign('./show-std.php')</script>";

		}
		else
		{
					echo "<script>alert('Student didn't added-you have Error')</script>";

		}
	}
	else
	{
		echo "<script>alert('this student number Exist Before')</script>";
	}
}
?>
<htm>
<head>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	.tbl
		{
		margin-left: 700px;
			margin-top: 200px;
			width: 250px;
			height: 400px;
			
		}
		
	</style>
	</head>
	
	<body style="background-color: darkgrey">
	
	<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data" class="form-group" style="background-image: url('images/slider_bg.jpg');background-position: center;background-repeat: no-repeat;background-size: cover">
		<table border="0" class="tbl">
			<tr><td  colspan="2" style="text-align: center"><h1 style="color: springgreen">Add-Student</h1></td></tr>
		    <tr><td>FirstName:</td>	<td><input type="text" name="txt1" class="form-control"></td></tr>
			<tr><td>LastName:</td><td><input type="text" name="txt2" class="form-control"></td></tr>
			<tr><td>Student-Number:</td><td><input type="number" name="num1" class="form-control"></td></tr>
			<tr><td>Student-Class:</td><td>
				<select name="selctlist" class="form-control">
					<?php
	
				
					$queryy=mysqli_query($con,"select std_class from students");
					while($row=mysqli_fetch_array($queryy))
					{
						echo "<option>";
						echo $row["std_class"];
						echo "</option>";
						
					}
					
	                ?>
				</select>
				
				
				</td></tr>
			<tr><td colspan="2" style="text-align: center"><input type="submit" name="submit" class="btn btn-primary form-control"></td>
			
			</tr>
			<tr style="text-align: center"><td colspan="2"><a href="index.php">Back</a> to home page</td></tr>
		
		
		</table>
		
		</form>
	</body>
</htm>