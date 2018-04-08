<?php

require_once "../config/dbconnection.php";


//global variables

$username = "";
$email = "";
$password = "";
$captcha = "";
$status = "";

function generateRandomString($length = 5) {
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($chars);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $chars[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$activation_code = generateRandomString();

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

    $captcha = post_captcha($_POST['g-recaptcha-response']);
    if(!res['sucsess']){
        echo '<p> Please go back and make sure you check the security Captcha box</p><br>';
    }

    else
        echo '<p> Captcha completed successfully</p>';

    $sql = "INSERT INTO users(username,email,password,status,activation_code) VALUES ('$username','$email','$password','$status','$activation_code')";
    mysqli_query($conn, $sql);
}


$_SESSION["user_id"] = mysqli_insert_id($sql);
echo "Activation Code : ".$code;
//echo "stmt->insert_id ".$stmt->insert_id;
$msg = "Your Activation Code Is\n".$code;
//$stmt->close();
close($conn);
// send email
$to = $email;
$subject = "Account verify";
$txt = $msg;
$headers = "From: Test@gmail.com" . "\r\n";

$res = mail($to,$subject,$txt,$headers);

header("Location: verify.php");
exit();