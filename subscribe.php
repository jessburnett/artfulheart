<?php
if( $_POST )
{
	$servername = "localhost";
	$username = "jburnett_artful";
	$password = "artful1";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
	} 

			mysql_select_db("jburnett_artful", $con);

			$subscribers_email = $_POST['email'];

			$query = "INSERT INTO `subscribers`.`email`(`email`) VALUES (NULL, NULL,
							NULL, '$subscribers_email);";
			mysql_query($query);

			// We can inform the user to what's going on by printing a message to
			// the screen using php's echo function
			echo "<h2>Thank you for your Comment!</h2>";

			// At this point, we've added the user's comment to the database, and we can
			// now close our connection to the database:
			mysql_close($con);
}
?>