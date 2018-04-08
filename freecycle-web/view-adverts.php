<?php
require_once 'header.php';
require_once 'navbar.php';
//require_once './config/dbconnection.php';
//require_once './config/session.php';

$item_id = mysqli_insert_id($conn);
$sql = "SELECT item_title,location,item_description,price,posting_date FROM items where id = '$item_id'";
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
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href="edit-advert.php">Edit|</a> <a href="#">Delete|</a><a href="add-image.php">Add or View Image</a></td>
                </tr>
                </tbody>
            </table>

<?php
//
//           if(mysqli_num_rows($result) > 0){
//
//                echo"
//                <table class=\"table table-responsive\">
//                    <thead>
//                        <tr>
//                            <th>Title</th>
//                            <th>Location</th>
//                            <th>Description</th>
//                            <th>Price</th>
//                            <th>Posting Date</th>
//                            <th>Action</th>
//                        </tr>
//                    </thead>
//                ";
//                while($row = mysqli_fetch_assoc($result)){
//                    echo"<tbody>
//                            <tr>
//                                <td>" . $row["item_title"]. "</td>
//                                <td>" . $row["location"]."</td>
//                                <td>" . $row["item_description"]."</td>
//                                <td>" . $row["price"]."</td>
//                                <td>" . $row["posting_date"]."</td>
//                                <td><a href=\"edit-advert.php\">Edit|</a> <a href=\"#\">Delete|</a><a href=\"add-image.php\">Add or View Image</a></td></tr></tbody></table>";
//                }
//            }
//
//
//
//
//             ?>
        </div>
    </section>
<?php
require_once 'footer.php';
?>