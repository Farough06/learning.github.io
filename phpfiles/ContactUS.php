<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form action="submit.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="message">Message:</label>
        <textarea name="message" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
    <?php
// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact_form";

$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Insert data into the database
$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you! Your message has been sent.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

</body>
</html>