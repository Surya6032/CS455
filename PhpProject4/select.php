<?php session_start();
    if (!isset($_SESSION['username'])) {
        header("location:index.php");
        // Make sure that code below does not get executed when we redirect.
        exit(0);
    }
    
    // TODO: connect to the database
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <!-- TODO: display all opponent data except id -->

        <!-- TODO: create a navigational link to the main menu -->
    </body>
</html>
