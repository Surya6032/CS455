<?php session_start();

// TODO: create a database connection

// TODO: create variables for the input form data

// TODO: validate form data

// TODO: query the database for the input user's credentials

// TODO: authenticate the user using password_verify
// if the input credentials are valid, put the user in the SESSION 
// (using the key "username") and clear the "error" in the session
// otherwise, put "invalid username or password" in the session using 
// the "error" key

// TODO: close the database connection

// TODO: remove this line of code that mimics a valid user
$_SESSION['username'] = "Bogus Unauthenicated User";

header("location:index.php");
?>
