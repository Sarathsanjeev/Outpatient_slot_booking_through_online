<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
</head>
<body>
	<h1>Profile Page</h1>
	<?php
		//connect to database
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "op";

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		//check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		//query to retrieve data from database
		$sql = "SELECT name, phone, email, sex FROM users WHERE id = 1";
		$result = mysqli_query($conn, $sql);

		//check if data is retrieved
		if (mysqli_num_rows($result) > 0) {
			//output data of each row
			while ($row = mysqli_fetch_assoc($result)) {
				echo "Name: " . $row["name"] . "<br>";
				echo "Phone Number: " . $row["phone"] . "<br>";
				echo "Email Address: " . $row["email"] . "<br>";
				echo "Sex: " . $row["sex"] . "<br>";
			}
		} else {
			echo "No data found.";
		}

        //logout button
			echo "<br><br><a href='logout.php'>Logout</a>";
		//close connection
		mysqli_close($conn);
	?>
</body>
</html>
