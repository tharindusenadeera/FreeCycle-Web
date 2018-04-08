<?php
require_once 'header.php';
require_once 'navbar.php';
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
        </div>
    </section>
<?php
require_once 'footer.php';
?>