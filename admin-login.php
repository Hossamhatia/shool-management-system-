<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<html> 
<head> 
<title>Login to Admin panel of sahjanand vidhyalay</title> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<link  rel="stylesheet" href="style.css" type="text/css"> 
</head> 
 
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"  onLoad=         			"window.document.adminLoginForm.formuser.focus()" bgcolor="#F4F4F4">
<table  width="100%" height="22%" border="0" align="center" cellpadding="0" cellspacing="0"> 
  <tr valign="top"> 
	  <td width="33.3%"></td>
    <td ><img  src="images/login-icon-3060.png" width="700" height="300"></td> 
	  <td width="33.3%"></td>
</tr>
</table>

<table border="" width="27%" align="center" vspace="30" cellspacing="0">
<form method="post" name="adminLoginForm" action="<?php echo $_SERVER["PHP_SELF"] ?>">	

    <tr>
	 <td width="35%"  >&nbsp;</td> 
      <td width="8%"  >&nbsp;</td>
      <td width="57%" ><font face="verdana" color="#009999"style="font-size:14px"><u><b>Admin Login</b></u></font></td>
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
      <td><input type="text" name="formuser" value="<?php echo $formuser;?>"></td>
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
      <td><input type="password" name="formpassword" value="<?php echo $formpassword;?>"></td>
    </tr>
	<tr>
	<td >&nbsp;</td>
	<td >&nbsp;</td>
	<td >&nbsp;</td>
	</tr>
	
    <tr> 
      <td >&nbsp;</td>
	  <td >&nbsp;</td>
      <td ><input class="listmenu" type="submit" name="submit" value="Login"></td>
    </tr>


</form>
</table>

</body>


</html>