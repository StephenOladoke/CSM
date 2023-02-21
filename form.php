<?php
// Connect to the database
$dbhost = 'localhost';
$dbuser = 'username';
$dbpass = 'password';
$dbname = 'database_name';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check for errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape user inputs for security
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

// Attempt to insert the data into the database
$sql = "INSERT INTO bookings (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
if (mysqli_query($conn, $sql)) {
    echo "Booking submitted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
