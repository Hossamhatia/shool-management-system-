<?php
  
	 
function show_students()
{
	  require './config/connect.php';
	$select="select * from students";
	$query=mysqli_query($con,$select);
	if($query)
	{
		while($row=mysqli_fetch_array($query))
	{
		echo"<tr>";
			echo "<td>".$row["std_id"]."</td><td>".$row["std_fname"]."</td><td>".$row["std_lname"]."</td><td>".$row["std_num"]."</td><td>".$row["std_class"]."</td><td><a href='edit.php?stdid=".$row["std_id"]."'>Edit</a></td><td><a href='delete.php?stdid=".$row["std_id"]."'>Delete</a></td>";
	    echo"</tr>";
	}
	}
	else
	{
		echo"<tr>";
		echo"<td cols='5' style='text-align:center'>No Records...</td>";
		echo"</tr>";
		
	}
	
	
}
function show_std_results()
{
	require'./config/connect.php';
	$select2="select * from results";
	$query2=mysqli_query($con,$select2);
	if($query2)
	{
		if(mysqli_num_rows($query2)>0)
		{
			while($row=mysqli_fetch_array($query2))
			{
				$var=$row["std_num"];
				$select="select std_fname from students where std_num='$var'";
				$query=mysqli_query($con,$select);
				$row2=mysqli_fetch_array($query);
				
				echo"<tr>";
			    echo "<td>".$row["result_id"]."</td><td>".$row2["std_fname"]."</td><td>".$row["math"]."</td><td>".$row["sience"]."</td><td>".$row["arabic"]."</td><td><a href='#'>Edit</a></td><td><a href='delete-result.php?delid=".$var."'>Delete</a></td>";
	            echo"</tr>";
			}
		}
		else{
				echo"<tr>";
		echo"<td cols='5' style='text-align:center'>No Records...</td>";
		echo"</tr>";
			
		}
	}
	else
	{
		echo"<tr>";
		echo"<td cols='5' style='text-align:center'>Error in selection...</td>";
		echo"</tr>";
	}
}

function get_serched_student()
{
	
	
	require'./config/connect.php';
	$srch_value=$_SESSION["std_num"];
	
	$select="select * from students where std_num='$srch_value' ";
	$query=mysqli_query($con,$select);
	
	echo"<h1>searched student</h1>";
	echo "<table border='2' width=700px height=300px style='text-align:center'>";
	 echo"<th style='background-color:lightgreen;text-align:center'>student-fname</th><th style='background-color:lightgreen;text-align:center'>student-lastbname</th><th style='background-color:lightgreen;text-align:center'>student-number</th><th style='background-color:lightgreen;text-align:center'>xtudentclass</th>";
	if(mysqli_num_rows($query)>0)
	{
		while($row=mysqli_fetch_array($query))
	{
		echo"<tr>";
	    echo"<td>".$row["std_fname"]."</td><td>".$row["std_lname"]."</td><td>".$row["std_num"]."</td><td>".$row["std_class"]."</td>";
	
	    echo"</tr>";
		
	}
	
	}
	else
	{
		echo"<tr>";
	    echo"<td colspan='4' style='color:red'>No Records Founded</td>";
	
	    echo"</tr>";
	}
		
	
	echo "</table>";
}
  function get_srhed_studentresult()
  {
	  
	require'./config/connect.php';
	$srch_value=$_SESSION["std_num"];
	
	$select="select * from results where std_num='$srch_value' ";
	$query=mysqli_query($con,$select);
	
	 echo"<h1>Result of searched student</h1>";
	echo "<table border='2' width=700px height=300px style='text-align:center'>";
	  echo"<th style='background-color:lightgreen;'>Student_num</th><th style='background-color:lightgreen'>math-result</th><th style='background-color:lightgreen'>scince-reesult</th><th style='background-color:lightgreen'>arabic-result</th>";
	if(mysqli_num_rows($query)>0)
	{
		while($row=mysqli_fetch_array($query))
	{
		echo"<tr>";
	    echo"<td>".$row["std_num"]."</td><td>".$row["math"]."</td><td>".$row["sience"]."</td><td>".$row["arabic"]."</td>";
	
	    echo"</tr>";
		
	}
	
	}
	else
	{
		echo"<tr>";
	    echo"<td colspan='4' style='color:red'>No Records Founded</td>";
	
	    echo"</tr>";
	}
		
	
	echo "</table>";
  }
function get_staf_dep()
{
	require'./config/connect.php';
	$select="select * from staff";
	$query=mysqli_query($con,$select);
	echo "<table class='table table-hover table-bordered' style='text-align:center'>";
	echo "<tr><th class='th_font' style='text-align:center;background-color:green'>employee_id</th><th class='th_font' style='text-align:center;background-color:green'>employee_name</th><th class='th_font' style='text-align:center;background-color:green'>Job_Title</th><th class='th_font' style='text-align:center;background-color:green'>employee_Address</th><th class='th_font' style='text-align:center;background-color:green'>Salary</th><th class='th_font' style='text-align:center;background-color:green'>telephon</th></tr>";
	if(isset($_SESSION["usename"]))
	{
		while($row=mysqli_fetch_array($query))
	{
		echo "<tr><td class='th_font'>".$row["Emp_id"]."</td><td class='th_font'>".$row["Emp_Name"]."</td><td class='th_font'>".$row["JobTitle"]."</td><td class='th_font'>".$row["Emp_Address"]."</td><td class='th_font'>".$row["Salary"]."</td><td class='th_font'>".$row["Telephone"]."</td></tr>";
	}
    }
	else
	{
		echo "<tr><td colspan='6' style='color:red;font-size:29px'>Access Denied,Login As Admin,(admin data)-> user:hossam@direct-visa.net,password:123456</td></tr>";
	}
	
	echo "</table>";
}