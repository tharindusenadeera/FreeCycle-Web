<?php
require_once 'header.php';
require_once 'navbar.php';
?>
    <section class="main-advert-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="add-advert-form">
                        <h2>EDIT ITEMS</h2>
                        <div class="input-field">
                            <span>Item Title</span><br>
                            <input type="text" >
                        </div>
                        <div class="input-field">
                            <span>Location</span><br>
                            <input type="text" >
                        </div>
                        <div class="input-field">
                            <span>Item Description</span><br>
                            <textarea rows="5"></textarea>
                        </div>
                        <div class="input-field">
                            <span>Price</span><br>
                            <input type="text" >
                        </div>
                        <div class="input-field">
                            <span>Posting Date</span><br>
                            <input type="text" >
                        </div>
                        <button>Edit Item</button>
                    </div>
                </div>

            </div>

        </div>
    </section>
<?php
require_once 'footer.php';
?>