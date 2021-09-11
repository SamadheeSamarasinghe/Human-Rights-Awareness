<!DOCTYPE html>
<html>
<body>
	<center>

<?php 

include_once '../index.php/dbconnect.php';


                $name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		

//insert values to table contactdetails

$insert="INSERT INTO contactdetails VALUES('$name','$email','$message');";

if(mysqli_query($con,$insert))
{
	echo "Details stored in database successfully!".mysqli_affected_rows($con);
	echo nl2br("\n$name\n $email\n ". "$message");
}
else
{
	echo "Failed to store data".mysqli_error($con);
}


mysqli_close($con);

?>

</center>
</body>

</html>
