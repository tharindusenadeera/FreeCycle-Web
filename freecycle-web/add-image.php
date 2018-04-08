<?php
require_once 'header.php';
require_once 'navbar.php';
require_once './config/dbconnection.php';
require_once './config/session.php';


?>
    <section class="my-advert-page">
        <div class="container">
            <h2>ADD IMAGE</h2>
            <table class="table table-responsive">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Posting Date</th>
                    <th>Choose Image</th>
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
                    <td>
                        <input type='file' name='file'/>
                        <input type='hidden' name='itemId'value=''/>
                    </td>
                    <td><button name="upload">Upload</button></td>
                </tr>
                </tbody>
            </table>
            <table class="table">
                <thead>
                <th>Image</th>
                <th>Action</th>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td><a>Delete</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
<?php
require_once 'footer.php';
?>