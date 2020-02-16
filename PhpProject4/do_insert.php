<?php session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    // Make sure that code below does not get executed when we redirect.
    exit(0);
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "una_bball";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO opponent (school,city, state) VALUES ('$_POST[school]','$_POST[city]','$_POST[state]')";
if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    $_SESSION['error'] = '';
} else {
    $_SESSION['error'] = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("location:index.php");
?>
