<?php
require_once 'header.php';
require_once 'navbar.php';
require_once './config/dbconnection.php';
if(!isset($_SESSION["username"])){
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];
if (isset($_POST['submit'])){

    if (isset($_POST['item_title'])){
        $item_title = $_POST['item_title'];

    }

    if (isset($_POST['location'])){
        $location = $_POST['location'];
    }

    if (isset($_POST['item_description'])){
        $item_description = $_POST['item_description'];
    }

    if (isset($_POST['price'])){
        $price = $_POST['price'];
    }

    if (isset($_POST['posting_date'])){
        $posting_date = $_POST['posting_date'];
    }



    $sql = "UPDATE items SET
            item_title = '$item_title',
            location   = '$location',
            item_description = '$item_description',
            price = '$price',
            posting_date = '$posting_date'
            where id ='$id'";
    $result = mysqli_query($conn,$sql);

}


?>
    <section class="main-advert-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <form action=" " method="POST">
                    <div class="add-advert-form">
                        <h2>EDIT ITEMS</h2>
                        <div class="input-field">
                            <span>Item Title</span><br>
                            <input type="text" name="item_title" required>
                        </div>
                        <div class="input-field">
                            <span>Location</span><br>
                            <input type="text" name="location" required>
                        </div>
                        <div class="input-field">
                            <span>Item Description</span><br>
                            <textarea rows="5" name="item_description" required></textarea>
                        </div>
                        <div class="input-field">
                            <span>Price</span><br>
                            <input type="text" name="price" required>
                        </div>
                        <div class="input-field">
                            <span>Posting Date</span><br>
                            <input type="text" name="posting_date" required>
                        </div>
                        <button name="submit">Edit Item</button>
                    </div>
                    </form>
                </div>

            </div>

        </div>
    </section>
<?php


require_once 'footer.php';
?>