<!DOCTYPE html>
<html>
<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "contact");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$name = $_REQUEST['fname'];
		$email = $_REQUEST['em'];
		$pno = $_REQUEST['mobile'];
		$des = $_REQUEST['des'];
		
		$sql = "INSERT INTO info VALUES ('$name',
			'$email','$pno','$des')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in the contact database successfully."
				. " Check the localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$name\n $email\n "
				. "$pno\n $des");
		} else{
			echo "ERROR: Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>
	</center>
</body>
</html>
