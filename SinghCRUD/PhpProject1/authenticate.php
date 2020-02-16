<?php session_start();

$con=mysqli_connect('localhost','root','','march');
if(!$con)
{
    die('Please Check Your Connection'.mysqli_error());
}
// TODO: use the users table for authentication
 if(isset($_POST['submit']))
 {
     if(empty($_POST['username'])||empty($_POST['password'])){
         header("location:index.php?Empty=Please fill the username and password");
     }
 }
 else{
     $query="SELECT * FROM users WHERE username='".$_POST['username']."'and password='".$_POST['password']."'";
     $result=mysqli_query($con,$query);
     
     if(mysqli_fetch_assoc($result)){
        $_SESSION['username']=$_POST['username'];
        header("location:index.php");
     }
     else{
         echo 'Invalid Values';
     }
 }

?>