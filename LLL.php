<?php

$userid = $_POST['userid'];
$password = $_POST['pwd'];

if ($userid =="andy")
	echo "Valid UserId";
else
	echo "Invalid Login";

if ($password =="open")
	echo "Valid UserId";
else
	echo "Invalid Login";

echo $userid;
echo $password;
?>