<!DOCTYPE html>
<?php
require'./config/connect.php';
if(isset($_POST["Update"]))
{
	$stdNum=$_POST["stnum"];
	$arabic_r=$_POST["arabic"];
	$math_r=$_POST["math"];
	$scince_r=$_POST["scince"];
	$r_id=$_POST["id"];
	
	$select="select std_num from results where result_id='$r_id'";
	$query=mysqli_query($con,$select);
	$row=mysqli_fetch_array($query);
	
	if($stdNum!=$row["std_num"])
	{
		echo"<script>alert('you changed your number,it is baned  ')</script>";
	}
	else
	{
		$update="update results set std_num='$stdNum',math='$math_r',sience='$scince_r',arabic='$arabic_r' where result_id='$r_id'";
		$queryupdate=mysqli_query($con,$update);
		
		if($queryupdate)
		{
			echo"<script>alert('Results updated Successfuly');window.location.assign('show-result2.php')</script>";
					
		}
	}
	
}

?>

<htm>
<head></head>
	<body>
	
	
	
	</body>
</htm>