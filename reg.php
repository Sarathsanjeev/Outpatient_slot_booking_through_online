<?php
$alert_class = "alert-success";
$message = "Registration successful! Redirecting to index page...";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "op";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize user input
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
    $marital_status = mysqli_real_escape_string($conn, $_POST['marital_status']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
     $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $reason_for_registration = mysqli_real_escape_string($conn, $_POST['reason_for_registration']);
    $additional_notes = mysqli_real_escape_string($conn, $_POST['additional_notes']);

    // Validate confirm password
if ($password !== $confirm_password) {
    $alert_class = "alert-danger";
    $message = "Error: Password and Confirm Password do not match";
} else {
    // Hash password using bcrypt
    $password = password_hash($password, PASSWORD_BCRYPT);

    // Insert data into database
    $sql = "INSERT INTO users (name, email, phone, address, Gender, marital_status, password, reason_for_registration, additional_notes) VALUES ('$name', '$email', '$phone', '$address', '$sex', '$marital_status', '$password', '$reason_for_registration', '$additional_notes')";

    if ($conn->query($sql) === TRUE) {
    $alert_class = "alert-success";
    $message = "Registration successful! Redirecting to index page...";
    
    // Set session variable indicating user has registered
    session_start();
    $_SESSION['registered'] = true;

    // Redirect to index page after successful registration
    header("refresh:3;url=index1.php");
    echo "<p class='text-success'>Registration successful!</p>";
}

    
}
}

$conn->close();

?>
