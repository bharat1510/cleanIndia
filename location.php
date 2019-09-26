<?php
	// receive all input values from the form
		$letitude = mysqli_real_escape_string($db, $_POST['letitude']);
		$longitude = mysqli_real_escape_string($db, $_POST['longitude']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO location (letitude, longitude) 
					  VALUES('$letitude', '$longitude')";
			mysqli_query($db, $query);

?>