<html>
<?php

$uname = $_REQUEST['username'];
$password = $_REQUEST['pwd'];

if ($uname === "foo" and $password === "bar") {
    echo "Welcome, " . $uname;
    if (isset($_REQUEST["remember"]) && $_REQUEST["remember"] == "ON") {
        echo "remember";
        setcookie("user", $uname, time()+3600);
    }
} else {
    echo "wrong username or password";
}
?>
</html>
