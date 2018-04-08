<?php

require_once('dbconnection.php');

global $_loggedIn, $_loggedInUsername;
$_loggedIn = true;

session_start();
if (!isset($_SESSION['username']) || (!isset($_SESSION['password']))) {
    $_loggedIn = false;
} else {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $session_sql = mysqli_query($conn, "select username from users where username = '$username' AND password = '$password'");
    $row = mysqli_fetch_array($session_sql, MYSQLI_ASSOC);
    if (!mysqli_num_rows($session_sql)) {
        $_loggedIn = false;
    } else {
        $_loggedIn = true;
        $_loggedInUsername = $username;
    }
}