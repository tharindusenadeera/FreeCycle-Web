<?php

require_once "../config/dbconnection.php";
require_once "../config/session.php";

$item_title = "";
$location = "";
$item_description = "";
$price = "";
$posting_date = "";
$user_id = "";


if (isset($_POST['submit'])) {

    if(isset($_POST['item_title'])){
        $item_title = $_POST['item_title'];
    }

    if(isset($_POST['location'])){
        $location = $_POST['location'];
    }

    if(isset($_POST['item_description'])){
        $item_description = $_POST['item_description'];
    }

    if(isset($_POST['price'])){
        $price = $_POST['price'];
    }

    if(isset($_POST['posting_date'])){
        $posting_date = $_POST['posting_date'];
    }

    $user_id = $_SESSION["user_id"];


//    $sql = "SELECT id FROM users WHERE username = '$_loggedInUsername'";
//    $result = mysqli_query($conn, $sql);
//
//    if(mysqli_num_rows($result) > 0){
//
//        while ($row = mysqli_fetch_assoc($result)){
//            $userId = $row["id"];
//        }
//    }
}

$sql = "INSERT INTO items(item_title,location,item_description,price,posting_date,user_id) VALUES ('$item_title','$location','$item_description','$price','$posting_date','$user_id')";
mysqli_query($conn, $sql);
$id = mysqli_insert_id($conn);
header("Location: ../view-adverts.php?id=$id"); // record inserted and redirected to home page
die();


