<?php
$con = mysqli_connect('localhost','root','','ajax');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con, "ajax");
$sql = "DELETE FROM users WHERE id='$_GET[id]'";
if(mysqli_query($con, $sql))
{
    header("refresh:1; url=index.php");
}
else
{
    echo "Not Deleted";
}
?>