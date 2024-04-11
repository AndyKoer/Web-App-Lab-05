<!DOCTYPE html>

<html>
	<head>
	
	<style>
	
	.mytext
	{ 
		font-family: Georgia;
		font-size:50px;
		color:orange;
		background-color:#DDD006;
		font-wieght:bold;
		text-shadow: 2px 2px 5px red;
	
	
	
	
	}
	.mytext2
	{ 
		font-family: Georgia;
		font-size:50px;
		color:orange;
		font-wieght:bold;
		text-shadow: 2px 2px 5px red;
	
	
	
	
	}
	button 
	{
			width: 20%;
			padding: 20px 100px;
			color: white;font-size: 24px;
			font-weight: bold;
			border: none;
			border-radius: 50px;
			background-color:#C7390B;
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
	</head>
	
	<body bgcolor="C5C812" >
	<center>
	
	<div id="fd" class="mytext">
		<h1> Students Page</h1> 
		<p>View All Students Details </p>
	</div>
	
	<?php
	include ("../connectems.php");
		$count=1;
		$sql_product="SELECT * FROM student_tab";
		$result_product=$connect->query($sql_product);
		?>
		<center>
		<table width=80% border=1 bgcolor="#C4E106">
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
	
	
	
	<div id="fd" class="mytext"> 
		<p>View All Courses(Name, Offered In, Department) </p>
	</div>
	
	<?php
	include ("../connectems.php");
		$count=1;
		$sql_product="SELECT * FROM courses_tab";
		$result_product=$connect->query($sql_product);
		?>
		<center>
		<table width=80% border=1 bgcolor="#C4E106">
		<tr>
		<?php
		while($row_product = $result_product->fetch_assoc())
			{
				
				?>
						<td>
							<div>
							<?php echo $row_product["course_name"]."<br>"; ?>
							<?php echo $row_product["offered_in"]."<br>"; ?>
							<?php echo $row_product["type"]."<br>"; ?>
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
		<p>View All Faculty(Name, Dept) </p>
	</div>
	
	<?php
	include ("../connectems.php");
		$count=1;
		$sql_product="SELECT * FROM faculty_tab";
		$result_product=$connect->query($sql_product);
		?>
		<center>
		<table width=80% border=1 bgcolor="#C4E106">
		<tr>
		<?php
		while($row_product = $result_product->fetch_assoc())
			{
				
				?>
						<td>
							<div>
							<?php echo $row_product["fac_name"]."<br>"; ?>
							<?php echo $row_product["department"]."<br>"; ?>
							</div>
						</td>
						
						
						
					
		<?php
		if ($count>=4)
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
	<!-- Add all course names, faculty name and dept, and edit color -->
	
	
	</center>
	</body>



</html>