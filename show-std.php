<!DOCTYPE html>
<?php
require'./config/connect.php';
include'./include/functions.php';
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
		.tbl
		{
		margin-left: 440px;
			margin-top: 100px;
			
			
		}
			tr:hover{
			background-color:cadetblue;
		}
		</style>
	
	</head>
	<body  style="background-color: darkgrey">
		<h1 style="text-align: center">---Students Records---</h1>
		<div style="margin-top:100px;background-image: url('images/slider_bg.jpg');background-position: center;background-repeat: no-repeat;background-size: cover" >
		<div class="tbl">
		
		<a href="Add-Student.php" style="font-size: 30px; text-decoration-line: none" class="btn btn-primary">Add-student </a><a href="index.php" style="font-size: 30px; text-decoration-line: none;margin-left: 510px" class="btn btn-primary">Home</a><b/r>
	<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post"  class="form-group" >
			<table border="2" class="hover" width="800px" height="400px" style="text-align: center">
			    <tr>
					<th style="background-color: chartreuse">Student-ID</th><th style="background-color: chartreuse">Student-FirstName</th><th style="background-color: chartreuse">Student-LastName</th><th style="background-color: chartreuse">Student-Number</th><th style="background-color: chartreuse">Student-Class</th><th style="background-color: chartreuse">Edit</th><th style="background-color: chartreuse">Delete</th>
				</tr>
				
				<?php
	  				show_students();
		  
	              ?>
				
				
			</table>
		</div>
			</div>
		
	<div style="width:100%;text-align: center;font-size: 32px;margin-top: 50px">
		
		</div>
	</body>
</html>
	