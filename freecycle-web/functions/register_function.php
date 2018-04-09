<?php

require_once "../config/dbconnection.php";


//global variables

$username = "";
$email = "";
$password = "";
$captcha = "";


function generateRandomString($length = 5) {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $chars[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

require_once('../recaptcha.php');
$privatekey = "6Lce6hoUAAAAAJ_ReODBIzNgG21SGHAfbYFX4ZZw";
$resp = recaptcha_check_answer($privatekey,
    $_SERVER["REMOTE_ADDR"],
    $_POST["recaptcha_challenge_field"],
    $_POST["recaptcha_response_field"]);



if (isset($_POST['submit'])) {

    if(isset($_POST['username'])){
        $username = strip_tags($_POST['username']);
    }

    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }

    if(isset($_POST['password'])){
        $password = md5($_POST['password']);
    }

    $status = 0;

    $captcha = $_POST['g-recaptcha-response'];
    if(!$resp = 'success'){
        echo '<p> Please go back and make sure you check the security Captcha box</p><br>';
    }



    $activation_code = generateRandomString();

    $sql = "INSERT INTO users(username,email,password,status,activation_code) VALUES ('$username','$email','$password','$status','$activation_code')";
    if (mysqli_query($conn, $sql)){

        header("Location: ../verify.php");

        $_SESSION["user_id"] = mysqli_insert_id($conn);
        $msg = "Your Activation Code Is\n".$activation_code;
        // send email
        $to = $email;
        $subject = "Account verify";
        $txt = $msg;
        $headers = "From: Test@gmail.com" . "\r\n";

        $res = mail($to,$subject,$txt,$headers);

        if ($res==true){
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["email"] = $email;
            header("Location: ../verify.php");
            exit();

        }
        else {
            $internal_error = "Server encountered with a problem while trying to send the activation code through email. Please try again later.";
        }

    }
    mysqli_close($conn);
}



