<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<?php
include'../config/connect.php';
if(isset($_POST["submit"]))
{
	$username=$_POST["formuser"];
	$password=$_POST["formpassword"];
	
	
	$select="select * from users where user_Name='$username' ";
	$query=mysqli_query($con,$select);
	if($query)
	{
		
	if(mysqli_num_rows($query)>0)
	{
		$row=mysqli_fetch_array($query);
		if($row["Password"]==$password)
		{
			session_start();
		$_SESSION["user_Name"]=$username;
					echo "<script>alert('welcome [".$row["user_Name"]."]');window.location.assign('../index.php')</script>";

			
		}
		else
		{
					echo "<script>alert('Password not Correct')</script>";

		}
	}
	else
	{
		echo "<script>alert('UserName does not exist');window.location.assign('register.php')</script>";
	}
	}
	else
	{
				echo "<script>alert('querry not done')</script>";
		

	}
	
}
	
	
?>

<html> 
<head> 
<!--<title>Login to Admin panel of sahjanand vidhyalay</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<link  rel="stylesheet" href="../style.css" type="text/css"> -->
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head> 
 
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"  onLoad=         			"window.document.userLoginForm.formuser.focus()" bgcolor="#F4F4F4">
<table  width="100%" height="22%" border="0" align="center" cellpadding="0" cellspacing="0"> 
  <tr valign="top"> 
	  <td width="33.3%"></td>
    <td ><img  src="../images/login-icon-3060.png" width="700" height="300"></td> 
	  <td width="33.3%"></td>
</tr>
</table>

<table  width="27%" align="center" vspace="30" cellspacing="0">
<form method="post" name="userLoginForm" action="<?php echo $_SERVER["PHP_SELF"] ?>" >	

    <tr>
	 <td width="35%"  >&nbsp;</td> 
      <td width="8%"  >&nbsp;</td>
      <td width="57%" ><font face="verdana" color="#009999"style="font-size:14px"><u><b>User Login</b></u></font></td>
    </tr>
	<tr> 
	 <td >&nbsp;</td>
      <td>&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
	<tr> 
	 <td >&nbsp;</td>
      <td>&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr> 
	 <td >&nbsp;</td>
      <td>&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr class="lgbg"> 
      <td  align="right"><font face="verdana" style="font-size:12px" color="#6A6A6A"><b>User Name</b></font></td>
	  <td align="center"><font face="verdana" style="font-size:12px" color="#6A6A6A"><b>:</b></font></td>
      <td><input type="text" name="formuser" placeholder="EnterEmail orUsername"></td>
    </tr>
	<tr> 
	<tr> 
	 <td >&nbsp;</td>
      <td>&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
	
    <tr class="lgbg"> 
      <td  align="right"><font face="verdana" style="font-size:12px" color="#6A6A6A"><b>Password</b></font></td>
	  <td align="center"><font face="verdana" style="font-size:12px" color="#6A6A6A"><b>:</b></font></td>
      <td><input type="password" name="formpassword" placeholder="EnterPassword"></td>
    </tr>
	<tr>
	<td >&nbsp;</td>
	<td >&nbsp;</td>
	<td >&nbsp;</td>
	</tr>
	
    <tr> 
      <td >&nbsp;</td>
	  <td >&nbsp;</td>
      <td ><input class="btn btn-primary" type="submit" name="submit" value="Login"></td>
    </tr>


</form>
</table>

</body>


</html>