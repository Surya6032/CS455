<?php session_start();
// 1. make sure user is not already in the database
// 2. make sure that pwd and repeat match
// 3. insert a new row
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "una_bball";

$user = trim($_POST['user']);
$pwd = trim($_POST['pwd']);
$repeat = trim($_POST['repeat']);

if (!($pwd === $repeat)) {
    $_SESSION['error'] = 'invalid password';
    header("location:index.php");
    exit(0);
}

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE username = '$user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $_SESSION['error'] = 'invalid username';
    header("location:index.php");
    exit(0);
}



$password = password_hash($pwd, PASSWORD_DEFAULT);

$sql = "INSERT INTO users(username, password) VALUES('$user', '$password')";
if ($conn->query($sql) === TRUE) {
    $_SESSION['username'] = $user;
    $_SESSION['error'] = '';
} else {
    $_SESSION['error'] = "Error: " . $sql . " " . $conn->error;
}

$conn->close();
header("location:index.php");
?>
