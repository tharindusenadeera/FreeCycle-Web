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

    $sql = "SELECT id FROM users WHERE username = '$_loggedInUsername'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        while ($row = mysqli_fetch_assoc($result)){
            $userId = $row["id"];
        }
    }
}

$sql = "INSERT INTO items(item_title,location,item_description,price,posting_date,user_id) VALUES ('$item_title','$location','$item_description','$price','$posting_date','$user_id')";
mysqli_query($conn, $sql);

//image upload
if(isset($_POST["upload"])){

    $item_id = mysqli_insert_id($conn);
    if ($item_id) {
        // insert image into image table
        $image_name = $_FILES["file"]["name"];
        if (!empty($image_name)) {
            $image_tmp = addslashes(file_get_contents($_FILES['my_image']['tmp_name'])); //Get the content of the image and then add slashes to it
            $sql = "INSERT INTO images (image, item_id, caption) VALUES('$image_tmp','$item_id', '$image_name')"; //Insert the image name and image content in image_table
            mysqli_query($conn, $sql);
        }

        header("Location: index.php"); // record inserted and redirected to home page
        die();
    } else {
        $internal_error = "Error: " . $sql . " < br>" . mysqli_error($conn);
    }
}

