<!DOCTYPE html>

<html>
	<head>
	<style>
	
	.mytext
	{ 
		font-family: Georgia;
		font-size:50px;
		color:cyan;
		background-color:blue;
		font-wieght:bold;
		text-shadow: 2px 2px 5px red;
	
	
	
	
	}
	.mytext2
	{ 
		font-family: Georgia;
		font-size:50px;
		color:cyan;
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
	
	<body bgcolor="128BC8" >
	<center>
	
	<div id="fd" class="mytext">
		<h1> Faculty Page</h1> 
		<p> View All Faculty Details </p>
	</div>	
	
	
		
		<?php
		 include ("../connectems.php"); 
		$count=1;
		$sql_product="SELECT * FROM faculty_tab";
		$result_product=$connect->query($sql_product);
		?>
		<center>
		<table width=80% border=1 bgcolor="#0DF5E4">
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
	
	
	
	</center>
	</body>



</html>