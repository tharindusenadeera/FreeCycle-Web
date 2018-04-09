<?php

$id = $_GET['id'];

$sql = "DELETE FROM items where id = '$id'";
$result = mysqli_query($conn,$sql);

header("Location: ./view-advert.php");