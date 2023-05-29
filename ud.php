<?php
// create database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "op";
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind SQL statement with parameters
$stmt = $conn->prepare("INSERT INTO user_details (name, phone_no, email, date, time, area, city, state, pincode,Problem,Specilist) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)");
$stmt->bind_param("sssssssss", $name, $phone_no, $email, $date, $time, $area, $city, $state, $pincode);

// set parameter values from form data
$name = $_POST['name'];
$phone_no = $_POST['phone_no'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$area = $_POST['area'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = isset($_POST['pincode']) ? $_POST['pincode'] : '';
$Problem = $_POST['Problem'];
$Specialist = $_POST['Specialist'];

// execute SQL statement and check for errors
if ($stmt->execute() === TRUE) {
  // show popup alert after data is inserted
  echo "<script>alert('Appointment fixed!');</script>";

  // redirect the user using JavaScript
  echo "<script>window.location.href = 'index2.php';</script>";
} else {
  echo "Error: " . $stmt->error;
}

// close statement and connection
$stmt->close();
$conn->close();
?>
