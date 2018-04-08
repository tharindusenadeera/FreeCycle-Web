<?php

$db_host = "localhost";
$db_username = "lakshan";
$db_password = "qazzaq";
$db_name = "free_cycle";

//create connection
$conn = mysqli_connect("$db_host","$db_username","$db_password","$db_name");

if (mysqli_connect_error()){
    die("Database connection failed:". mysqli_connect_error());
}