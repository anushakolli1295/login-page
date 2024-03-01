<?php
session_start(); // Start the session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_error($conn)) {
    die("Connection failed" . mysqli_error($conn));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Sanitize inputs to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Check if the provided credentials exist in the database
    $sql = "SELECT * FROM rev WHERE Username='$username' AND Password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Valid credentials, start the session and store the username
        $_SESSION["username"] = $username;
        header("Location: detail.php"); // Redirect to detail.php
        exit;
    } else {
        echo "Invalid username or password";
    }
}
?>

<html>
<head>
    <h2 align="center">User Login</h2>
    <style>
        /* CSS styles */
    </style>
</head>
<body>
    <form action="" method="post"> <!-- Removed action="login.php" -->
        USERNAME:<input type="text" name="username" required><br><br>
        PASSWORD:<input type="password" name="password" required><br><br>
        <input type="submit" name="login">
    </form>
</body>
</html>
