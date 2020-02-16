<?php session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    // Make sure that code below does not get executed when we redirect.
    // TODO: create the SQL insert statement to insert the data passed to this
// page via the $_POST superglobal
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "march";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into team(seed,school,conference) VALUES ('".$_POST["seed"]."','".$_POST["school"]."','".$_POST["conf"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("location:index.php");

?>