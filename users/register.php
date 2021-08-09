<!DOCTYPE html>
<?php
include('../config/connect.php');
if(isset($_POST["submit"]))
{
	$username=$_POST["user_Name"];
	$fname=$_POST["Fname"];
	$lname=$_POST["lname"];
	$email=$_POST["Email"];
	$tele=$_POST["Tele_num"];
	$password=$_POST["password"];
	$pic=$_FILES["file"];
	$picname=$pic["name"];
	$pic_tmp=$pic["tmp_name"];
	$exit=pathinfo("$picname",PATHINFO_EXTENSION);
	$new_pic_name=$username.time().".".$exit;
	
	$insert="insert into users (user_Name,Fname,Lname,Email,Password,Tele_num,img) values('$username','$fname','$lname','$email','$password','$tele','$picname')";
	if($email==$_POST["Confirm_Email"])
	{
		if($password=$_POST["confirm_password"])
		{
			$select="select Email from users where Email='$email' ";
			$queryselect=mysqli_query($con,$select);
			if(mysqli_num_rows($queryselect)>0)
			{
								echo "<script>alert(' Email Exist Before ')</script>";

			}
			else
			{
				
							$query=mysqli_query($con,$insert);
				mkdir("images/$username");
				move_uploaded_file("$pic_tmp","images/$username/$new_pic_name");
								echo "<script>alert(' User Registered Succssfuly ');window.location.assign('../index.php')</script>";


			}
			
		}
		else
		{
				echo "<script>alert(' Password Not Match ')</script>";

		}
			

	}
	else
	{
		       echo "<script>alert(' Email Not Match ')</script>";

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
		td{
			font-style: oblique;
			font-weight: bold;
			font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", "serif";
			text-align: center;
			
		}
		#btnn:hover{
			background-color: lightcoral
		}
	</style>
	</head>
	
	<body>
	<h1 style="text-align: center">New User Registeration</h1>
		<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data" class="form-group" >
		
		<table class="table" style="width: 80%;height: 800px" border="1">
			
			<tr><td>UserName</td><td><input type="text" name="user_Name" class="form-control"></td></tr>
			<tr><td>Fname</td><td><input type="text" name="Fname" class="form-control"></td></tr>
			<tr><td>Lname</td><td><input type="text" name="lname" class="form-control"></td></tr>
			<tr><td>Email</td><td><input type="email" name="Email" class="form-control"></td></tr>
			<tr><td>Confirm-Email</td><td><input type="email" name="Confirm_Email" class="form-control"></td></tr>
			<tr><td>password</td><td><input type="password" name="password" class="form-control"></td></tr>
			<tr><td>confirm-password</td><td><input type="password" name="confirm_password" class="form-control"></td></tr>
			<tr><td>Telephone Number</td><td><input type="tel" name="Tele_num" class="form-control"></td></tr>
			<tr><td>Upload Picture</td><td><input type="file" name="file" class="form-control"></td></tr>
			<tr><td colspan="2"><input type="submit" id="btnn" name="submit" class="form-control"  style="background-color:greenyellow"></td></tr>
			
			</table>
		</form>
	</body>
</html>