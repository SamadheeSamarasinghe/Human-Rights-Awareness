<?php

$servername="localhost";
$username="root";
$password="";
$dbname="userdetails";
$con=mysqli_connect($servername,$username,$password,$dbname);

mysqli_connect($servername,$username,$password,$dbname);//mysqli_connect method is used to make the connection between apache and mysql servers. It returns a boolean value

/*
if($con)
  {
	echo "Connection successful";
  }
else
  {
	echo "Connection failed".mysqli_error($con); //error is specifically defined
  }

*/

?>