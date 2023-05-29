
<?php
session_start();


// Check if user is logged in
if(!isset($_SESSION["username"])){
    // Redirect to login page or show an error message
    header("Location: login.php");
    exit();
}


// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  
  // Update user data in database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "op";
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  
  $username = $_SESSION["username"];
  $sql = "UPDATE users SET name='$name', phone='$phone' WHERE username='$username'";
  $result = mysqli_query($conn, $sql);
  
  mysqli_close($conn);
  
  
}

// Get user data from database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "op";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_SESSION["username"];
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $name = $row["name"];
    $phone = $row["phone"];
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profile Page</title>
</head>
<body>
  <h1>Welcome, <?php echo $name; ?>!</h1>
  <form method="post" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $name; ?>">
    <br>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" value="<?php echo $phone; ?>">
    <br>
    <input type="submit" value="Save">
  </form>
  <a href="logout.php">Logout</a>
</body>
</html>
