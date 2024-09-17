<?php
$servername = "localhost";
$server_user = "root";
$server_pass = "";
$dbname = "food";


$conn = new mysqli($servername, $server_user, $server_pass, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Thank you for feedback           -SujalPramodfoods'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
