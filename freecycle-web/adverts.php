<?php

require_once 'header.php';
if(!isset($_SESSION["username"])){
    header("Location: index.php");
    exit();
}
require_once 'navbar.php';

?>
<section class="main-advert-page">
    <form action="./functions/adverts_function.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="add-advert-form">
                        <h2>ADD ITEMS</h2>
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
                            <input type="date" name="posting_date" required>
                        </div>
                        <button type="submit" name="submit">Add Item</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="view-box">
                        <p><a href="view-adverts.php">VIEW MY<br> ADVERTS <i class="fa fa-newspaper-o"></i></a></p>
                    </div>
                </div>
            </div>
    </form>


    </div>
</section>
<?php
require_once 'footer.php';
?>