<!DOCTYPE html>

<html>
	<head>
	<style>
	
	.mytext
	{ 
		font-family: Georgia;
		font-size:50px;
		color: #E8400F;
		background-color:black;
		font-wieght:bold;
		text-shadow: 2px 2px 5px red;
	
	
	
	
	}
	.mytext2
	{ 
		font-family: Georgia;
		font-size:25px;
		color: black;
		font-wieght:bold;
		
	
	
	}
	button 
	{
			width: 20%;
			padding: 20px 100px;
			color: white;font-size: 24px;
			font-weight: bold;
			border: none;
			border-radius: 50px;
			background-color:black;
			}
	.button1 {
			background-color: #128BC8;
			color:yellow;
		} 
	.button2{
			background-color: #C5C812;
			color:black;
		}
	button:hover {
			background-color: green;
		}
		
	</style>
	<script>
	function mystudent()
	{
		document.getElementById("stu").style.display="block";
		document.getElementById("fac").style.display="none";
		}
		
	function myfaculty(){
		document.getElementById("stu").style.display="none";
		document.getElementById("fac").style.display="block";
	
	
	}
	
	
	
	
	
	
	
	</script>
	</head>
	
	<body bgcolor="C7390B" >
	<center>
	
	<div id="fd" class="mytext">
		<h1> Admin Page</h1> 
		<p> View All Stduent, Faculty, Departments, and Courses </p>
	</div>
	
	<div id="fd" class="mytext">
		
		<p> View Faculty </p>
	</div>
	
	<font class="mytext2">	
	
	
	<?php
		 include ("../connectems.php"); 
		$count=1;
		$sql_product="SELECT * FROM faculty_tab";
		$result_product=$connect->query($sql_product);
		?>
		<center>
		<table width=80% border=1 bgcolor="#DFD9D1">
		<tr>
		<?php
		while($row_product = $result_product->fetch_assoc())
			{
				
				?>
						<td>
							<div>
							<?php echo $row_product["fac_name"]."<br>"; ?>
							<?php echo $row_product["qualification"]."<br>"; ?>
							<?php echo $row_product["department"]."<br>"; ?>
							</div>
						</td>
						
						
						
					
		<?php
		if ($count>=6)
		{ echo "</tr><tr>";
			$count=1;
			}
		
		else
		{
			$count++;
			}
		}
		?>
		</table>
	
	<div id="fd" class="mytext">
		
		<p> View Students </p>
	</div>
	
		<?php
	include ("../connectems.php");
		$count=1;
		$sql_product="SELECT * FROM student_tab";
		$result_product=$connect->query($sql_product);
		?>
		<center>
		<table width=80% border=1 bgcolor="#DFD9D1">
		<tr>
		<?php
		while($row_product = $result_product->fetch_assoc())
			{
				
				?>
						<td>
							<div>
							<?php echo $row_product["stu_name"]."<br>"; ?>
							<?php echo $row_product["stu_major"]."<br>"; ?>
							<?php echo $row_product["CGPA"]."<br>"; ?>
							</div>
						</td>
						
						
						
					
		<?php
		if ($count>=5)
		{ echo "</tr><tr>";
			$count=1;
			}
		
		else
		{
			$count++;
			}
		}
		?>
		</table>
	
	
	<!--Adding code-->
	
	
	<div id="fd" class="mytext">
		
		<p> View Departmetns </p>
	</div>
	
	<?php
	include ("../connectems.php");
		$count=1;
		$sql_product="SELECT * FROM department_tab";
		$result_product=$connect->query($sql_product);
		?>
		<center>
		<table width=80% border=1 bgcolor="#DFD9D1">
		<tr>
		<?php
		while($row_product = $result_product->fetch_assoc())
			{
				
				?>
						<td>
							<div>
							<?php echo $row_product["dept_name"]."<br>"; ?>
							<?php echo $row_product["budget"]."<br>"; ?>
							</div>
						</td>
						
						
						
					
		<?php
		if ($count>=5)
		{ echo "</tr><tr>";
			$count=1;
			}
		
		else
		{
			$count++;
			}
		}
		?>
		</table>
	
	<div id="fd" class="mytext">
		
		<p> View Courses </p>
	</div>
	
	<?php
	include ("../connectems.php");
		$count=1;
		$sql_product="SELECT * FROM courses_tab";
		$result_product=$connect->query($sql_product);
		?>
		<center>
		<table width=80% border=1 bgcolor="#DFD9D1">
		<tr>
		<?php
		while($row_product = $result_product->fetch_assoc())
			{
				
				?>
						<td>
							<div>
							<?php echo $row_product["course_name"]."<br>"; ?>
							<?php echo $row_product["offered_in"]."<br>"; ?>
							</div>
						</td>
						
						
						
					
		<?php
		if ($count>=5)
		{ echo "</tr><tr>";
			$count=1;
			}
		
		else
		{
			$count++;
			}
		}
		?>
		</table>
		
		<div id="fd" class="mytext">
		
		<p> Make New </p>
		</div>
		<button onclick="mystudent()"> Make new Student </button></div>
		<button onclick="myfaculty()"> Make New Faculty </button></div>
		
		
		<div id="stu" class="sign-div" style="display:none"> 
					<form method="post" action="add.php">
					
						<label for="stu_id">Student ID:</label>
						<input type="text" id="stu_id" name="stu_id" required><br>
						<label for="stu_name">Name:</label>
						<input type="text" id="stu_name" name="stu_name" required><br>
						<label for="stu_major">Major:</label>
						<input type="text" id="stu_major" name="stu_major" required><br>
						<label for="stu_year_of_enrollment">Year of Enrollment:</label>
						<input type="text" id="stu_year_of_enrollment" name="stu_year_of_enrollment" required><br>
						<label for="cgpa">CGPA:</label>
						<input type="text" id="cgpa" name="cgpa" required><br>
						<label for="year_of_graduation">Year of Graduation:</label>
						<input type="text" id="year_of_graduation" name="year_of_graduation" required><br>
						<input type="submit" name="add_student" value="add_student">
						
					</form>
		</div>
		<div id="fac" class="login-div" style="display:none">
				<form method="post" action="add.php">
				
					<label for="fac_id">Faculty ID:</label>
					<input type="text" id="fac_id" name="fac_id" required><br>
					<label for="fac_name">Name:</label>
					<input type="text" id="fac_name" name="fac_name" required><br>
					<label for="fac_DOJ">Date of Joining:</label>
					<input type="text" id="fac_DOJ" name="fac_DOJ" required><br>
					<label for="qualification">Qualification:</label>
					<input type="text" id="qualification" name="qualification" required><br>
					<label for="department">Department:</label>
					<input type="text" id="department" name="department" required><br>
					<input type="submit" name="add_faculty" value="add_faculty">
					
				</form>
		
		</div>
		
	</center>
	</body>



</html>