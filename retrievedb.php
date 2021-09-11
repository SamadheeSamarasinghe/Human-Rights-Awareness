<?php

include_once '../index.php/dbconnect.php';

$sql="SELECT * FROM contactdetails;";

$result=mysqli_query($con,$sql); //result displayed as an associative array

echo "<center><h1>"."User details:"."</h1></center>";

echo "<center>"."<table border='1'>"; 
while($row=mysqli_fetch_assoc($result))
{
    
	echo "<tr><td>".$row['Name']."</td><td>".$row['Email']."</td><td>".$row['Message']."</td></tr>";

	echo "<br>";
}

echo "</table>"."</center>";

mysqli_close($con);

?>