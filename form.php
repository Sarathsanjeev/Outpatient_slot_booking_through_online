<?php
// Start the session
session_start();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Retrieve the form data and sanitize it
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $feedback = filter_var($_POST['FB'], FILTER_SANITIZE_STRING);

    // Connect to the MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "op";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert the contact details into the contacts table
    $sql = "INSERT INTO contacts (name, email, mobile, message) VALUES ('$name', '$email', '$phone', '$feedback')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
        exit();
    } else {
        // If the insert failed, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<!-- JavaScript code for alert message -->
<script>
    // Check if the session variable exists and is true
    if (<?php echo isset($_SESSION['success']) && $_SESSION['success'] ? 'true' : 'false'; ?>) {
        // Display the alert message
        alert('Thank you for contacting us!');
        // Unset the session variable
        <?php unset($_SESSION['success']); ?>
    }
</script>