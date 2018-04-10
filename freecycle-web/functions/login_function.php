<?php
require_once "../config/dbconnection.php";


$username = "";
$email = "";
$errors = array();

if(isset($_POST['submit'])){

    session_start();

    if (isset($_POST['username'])){
        $username = $_POST['username'];
    }


    if (isset($_POST['password'])){
        $password = md5($_POST['password']);
    }

//    if(count($errors) == 0){
//
//        $sql = "SELECT user_id,username,email,password,status from users where username='$username' and password='$password'";
//        $result = mysqli_query($conn,$sql);
//    }

    $sql = "SELECT user_id,username,email,password,status from users where username='$username' and password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)>0){

        $_SESSION["message"] = "Successfully logged in";
        header("Location: ../index.php");
    }

    else {
              $_SESSION["message"] = "Username and password are wrong";
              header("Location: ../login.php?message='Username and password are wrong'");

        }



}

//header("Location: ../index.php");

$i =0;
while ($row = mysqli_fetch_assoc($result)) {
    $i++;
    if ($row['status'] == 1) {
        $_SESSION["username"] = $row['username'];;
        $_SESSION["password"] = $row['password'];;
        $_SESSION["user_id"] = $row['user_id'];

        //set cookie
        $cookie_name = "user";
        $cookie_value = $username;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } else {
            echo "Cookie " . $cookie_name . " is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name];
        }
        header("Location: ../index.php"); /* Redirect browser */
        mysqli_close($conn);
        exit();
    }else {
        $_SESSION["user_id"] = $user_id;
        header("Location: verify.php");
    }


}