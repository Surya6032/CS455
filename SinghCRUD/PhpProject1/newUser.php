<?php session_start();
// TODO:
// 1. make sure user is not already in the database
// 2. make sure that pwd and repeat match
// 3. insert a new row

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "march";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from users where username='$username' && password='$password'";
$result= mysqli_query($conn, $sql);
$num= mysqli_num_rows($result);
if(isset($_POST['Submit'])){
  $password2= mysqli_real_escape_string($conn,$_POST['password2']);
  if ($_POST['password'] == $_POST['password2']) {
      if($num==1){
        echo "Username already taken";
        }
      else{
        $reg="insert into users(username,password) values ('$username','$password')";
        mysqli_query($conn,$reg);
        echo"registeration successful";
        header("location:index.php");
    }
       
  }
}
else{
    echo "Password doesn't match";
}

?>