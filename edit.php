
<!DOCTYPE html>
<?php
require'./config/connect.php';
if(isset($_GET["stdid"]))
   {
	   $stdid=$_GET["stdid"];
	$seletstd="select * from students where std_id='$stdid'";
	$querystd=mysqli_query($con,$seletstd);
	$row2=mysqli_fetch_array($querystd);
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
		<script src="jquery.js"></script>
		<script>
		$(document).ready(function(){
			
			$("#selopt").change(function(){
				
				var x = $("#selopt").val();
				$.ajax({
					
					url:'searchajax.php',
					method:'GET',
					data:{g:x},
					datatype:'text',
					success:function(data){
						
						$("#txt").val(data);
					}
				});
			});
		});
		</script>
	</head>
	<body  style="background-color: darkgrey">
		<h1 style="text-align: center">---Students Records---</h1>
		<div style="margin-top:100px;background-image: url('images/slider_bg.jpg');background-position: center;background-repeat: no-repeat;background-size: cover" >
		<div class="tbl">
		
		
		<form action="update.php" method="post"  class="form-group">
		<div class="div1">
			<table border="0" width="600px" height="300px" style="text-align: center">
			<tr>
				<td>FirstName:</td>
				<td><input type="text" name="fname" class="form-control" value="<?php echo $row2["std_fname"];?>"></td>
				</tr>
				<tr>
				<td>LastName:</td>
				<td><input type="text" name="lname" class="form-control" value="<?php echo $row2["std_lname"];?>"></td>
				</tr>
				<tr>
				<td>studentNumber:</td>
				<td><input type="number" name="stdnum" class="form-control"  value="<?php echo $row2["std_num"];?>" ></td>
				</tr>
				<tr>
				<td>studentClass:</td>
					<td><select id="selopt" class="form-control" value="<?php echo $row2["std_class"];?>">
					
					<option >-select class-</option>
						<?php
						require'./config/connect.php';
			  $select="select * from classes";
			  $querry=mysqli_query($con,$select);
			  if($querry)
			  {
				    while($row=mysqli_fetch_array($querry))
			  {
				  echo"<option>".$row["class_name"]."</option>";
			  }
			  }
			  else
			  {
				  echo "erorin query";
			  }
			
						?>
					</select></td>
				<td><input type="text" name="stdclass" class="form-control" id="txt" ></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?php echo $row2["std_id"]; ?>" </td>
				<td colspan="4" style="text-align: center">
					<input type="submit" name="update" class="btn btn-primary" value="update" style="width: 80px;height: 32px;background-color: lightgreen">
					</td>
				</tr>
				
			</table>
			</div>
		
		</form>
			</div>
		</div>
	
	</body>
</html>
