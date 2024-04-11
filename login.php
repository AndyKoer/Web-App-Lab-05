<!DOCTYPE html>

<html>
	<head>
	<style>
	
	.mytext
	{ 
		font-family: Georgia;
		font-size:50px;
		color:cyan;
		background-color:green;
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
	
	<body bgcolor="3EC812" >
	<center>
	
	<div id="fd" class="mytext">
		<h1>Login into Pages</h1> 
		<p>Enter UserID and Password:</p>
	</div>
	<font class="mytext">	
	
	<form name="login-form" method="POST" action="LLF.php">
	
	<div id="us" class="mytext">
	UserID: <input type="text" name="userid" id="userid" /> <br><br>
	</div>
	<div id="ps" class="mytext">
	Password: <input type="password" name="password" id="password" /> <br>
	
	<input type="reset" value="Reset"> <br>
	
	<input type="submit" value="Submit">
	</div>
	</form>
	 </font>
	 
	 <br>
	 <br>
	
	<div id="ps" class="mytext">
	
	<button onclick=> Admin </button>
	<button class="button1" onclick=> Faculty </button>
	<button class="button2" onclick=> Student </button>
	
	 </div>
	
	</center>
	</body>



</html>