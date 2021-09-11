<!DOCTYPE html>
<html>
<body>
	<center>

<?php 

include_once '../index.php/dbconnect.php';

//insert values to table advicedetails

        $name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$description=$_POST['description'];

$insert="INSERT INTO advicedetails VALUES('$name','$email','$mobile','$description');";

if(mysqli_query($con,$insert))
{
	echo "Details stored in database successfully!".mysqli_affected_rows($con);
	echo nl2br("\n$name\n $email\n ". "$mobile"."$description");
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
