<?php

	$connect = new mysqli("localhost", "root", "", "ems_db");
	
	
	
	
			if($connect->connect_errno)
			{
			
				die('Could not answer: ' . $connect->connect_errno);
			}


?>