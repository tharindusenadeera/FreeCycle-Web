<?php
require_once "../config/dbconnection.php";

session_start();


if(isset($_POST['submit'])){

    if(isset($_POST['activation_code'])){
        //$user_id = $_SESSION['user_id'];
        $activation_code = $_POST['activation_code'];

    }

    $sql = "UPDATE users SET status= 1 WHERE activation_code = '$activation_code' ";
    $result = mysqli_query($conn,$sql);

    $res = mysqli_affected_rows($conn);
    if ($res > 0) {
        header("Location: ../login.php"); /* Redirect browser */
        exit();

    }
    else {
            echo "Please provide verification code..!";
        }
}