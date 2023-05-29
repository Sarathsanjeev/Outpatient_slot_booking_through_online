<?php
session_start();

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
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    // Check if user exists in database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $message = "You are logged in!";
            echo "<script>alert('$message');</script>";
            header('Location:index2.php');
            exit;
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "User not found.";
    }
}

$conn->close();

if (isset($error)) {
    echo "<p>$error</p>";
} elseif (isset($_SESSION['user_id'])) {
    echo "<script>alert('You are logged in!');</script>";
}
?>
