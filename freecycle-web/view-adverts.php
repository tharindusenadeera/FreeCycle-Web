<?php
require_once 'header.php';
require_once 'navbar.php';
require_once './config/dbconnection.php';
//require_once './config/session.php';

if(!isset($_SESSION["username"])){
    header("Location: index.php");
    exit();
}

session_start();
$item_id = $_GET['id'];
$user_id = $_SESSION["user_id"];
if(isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $item_id = $_GET['id'];
    if ($action == 1) {
        $sql = "DELETE FROM items WHERE id='$item_id' and user_id ='$user_id'";
        $result = mysqli_query($conn, $sql);
    }
}


$item_id = mysqli_real_escape_string($conn,$item_id);


$sql = "SELECT item_title,location,item_description,price,posting_date FROM items where id ='$item_id'";
$result = mysqli_query($conn, $sql);



?>
    <section class="my-advert-page">
        <div class="container">
            <h2>MY ADVERTS</h2>

            <table class="table table-responsive">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Posting Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>


<?php

           if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                            <tr>
                                <td>" . $row['item_title'] . "</td>
                                <td>" . $row['location'] . "</td>
                                <td>" . $row['item_description'] . "</td>
                                <td>" . $row['price'] . "</td>
                                <td>" . $row['posting_date'] . "</td>
                                <td><a href='./edit-advert.php?id=$item_id'>Edit</a>| 
                                    <a href='view-adverts.php?action=1&item_id=$item_id'>Delete</a>|
                                    <a href='add-image.php?id=$item_id'>Add or View Image</a>
                                    </td></tr>";
                }
            }

             ?>
                </tbody>
            </table>
        </div>
    </section>
<?php
require_once 'footer.php';
?>