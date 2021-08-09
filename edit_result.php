<!DOCTYPE html>

<?php
require'./config/connect.php';
include'./check-session/check_session.php';
if(isset($_GET["delid"]))
{
	$var=$_GET["delid"];
	
	$select="select * from results where std_num='$var'";
	
	$query=mysqli_query($con,$select);
	$row=mysqli_fetch_array($query);
	
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
		<h1 style="color: springgreen;text-align: center">Update-Result</h1>
		<form action="update_result.php" method="post"  class="form-group" style="background-image: url('images/blog_pic2.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;background-color: rgba(243,125,127,0.36)">
			
		<div class="div1">
			
			<table border="0" width="500px" height="400px" style="text-align: center">
				<tr><td  colspan="2" style="text-align: center"></td></tr>
			<tr>
				<td style="font-size: 25px;color:greenyellow" >Student-Number:</td>
				<td><input type="text" name="stnum" class="form-control" value="<?php echo $row["std_num"] ?>"></td>
				</tr>
				<tr>
				<td style="font-size: 25px;color: greenyellow">Arabic:</td>
				<td><input type="text" name="arabic" class="form-control" value="<?php echo $row["arabic"] ?>"></td>
				</tr>
				<tr>
				<td style="font-size: 25px;color: greenyellow">Math:</td>
				<td><input type="text" name="math" class="form-control" value="<?php echo $row["math"] ?>"></td>
				</tr>
				<tr>
				<td style="font-size: 25px;color: greenyellow">Scince:</td>
				<td><input type="text" name="scince" class="form-control" value="<?php echo $row["sience"] ?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?php echo $row["result_id"]; ?>" </td>
				<td colspan="4" style="text-align: center">
					<input type="submit" name="Update" class="btn btn-primary" value="ADD-Result" style="width: 120px;height: 32px;background-color:lightgreen">
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