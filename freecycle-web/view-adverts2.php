<?php
require_once 'header.php';
require_once 'navbar.php';
require_once './config/dbconnection.php';
//require_once './config/session.php';

if(!isset($_SESSION["username"])){
    header("Location: index.php");
    exit();
}


$username = $_SESSION['username'];
$user_id = $_SESSION['user_id'];


$sql = "SELECT item_title,location,item_description,price,posting_date FROM items where user_id = '$user_id'";
$result = mysqli_query($conn,$sql);


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
                   </tr>";
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