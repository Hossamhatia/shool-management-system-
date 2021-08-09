<?php

if(isset($_POST["update"]))
{
	require'./config/connect.php';
	include'./check-session/check_session.php';
	$first_name=$_POST["fname"];
	$last_name=$_POST["lname"];
	$student_num=$_POST["stdnum"];
	$student_class=$_POST["stdclass"];
	$iid=$_POST["id"];
	
	
	
	$seletstdnum="select std_num from students where std_id='$iid'";
	$queryyy=mysqli_query($con,$seletstdnum);
	
		//$query2=mysqli_query($con,"INSERT INTO students(std_fname,std_lname,std_num,std_class) VALUES(,,,");
		
			
		       
				$row=mysqli_fetch_array($queryyy);
				
					if($student_num!=$row["std_num"])
					{
												echo"<script>alert('you changed your number ');window.location.assign('show_std.php')</script>";

					}
					else
					{
						 $uopdate="update  students set std_fname='$first_name', std_lname='$last_name', std_num='$student_num',       std_class='$student_class' where std_id='$iid'";
				           $queryy=mysqli_query($con,$uopdate);
	
						if($queryy)
		                  {
													echo"<script>alert('Student updated Successfuly');window.location.assign('show-std.php')</script>";
					
				           }
				         else
		                   {
			              echo"<script>alert('Data Not updated Successfuly')</script>";
		                   }

					}
				

		
		
	
	
	
	
}