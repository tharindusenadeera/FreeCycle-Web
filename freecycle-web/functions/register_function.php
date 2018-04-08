<?php

require_once "../config/dbconnection.php";


//global variables

$username = "";
$email = "";
$password = "";
$captcha = "";

if (isset($_POST['submit'])) {

    if(isset($_POST['username'])){
        $username = strip_tags($_POST['username']);
    }

    if(isset($_POST['email'])){
        $username = $_POST['email'];
    }

    if(isset($_POST['password'])){
        $username = md5($_POST['password']);
    }

    $captcha = post_captcha($_POST['g-recaptcha-response']);
    if(!res['sucsess']){
        echo '<p> Please go back and make sure you check the security Captcha box</p><br>';
    }

    else
        echo '<p> Captcha completed successfully</p>';
}