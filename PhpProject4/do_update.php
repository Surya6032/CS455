<?php session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    // Make sure that code below does not get executed when we redirect.
    exit(0);
}

// TODO: connect to the database

// TODO: validate form data

// TODO: update the city and state based on the id
// NOTE: you can't update the school name

// TODO: communicate any errors using the session ('error' key)

// TODO: close the database connection


header("location:index.php");
?>
