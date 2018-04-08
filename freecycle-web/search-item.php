<?php
require_once 'header.php';
require_once 'navbar.php';
require_once './config/dbconnection.php';
?>
    <section class="my-advert-page">
        <div class="container">
            <h2>SEARCH ITEMS</h2>
            <div class="search-box">
                <div class="col-sm-6">
                    <select class="form-control"  name="sor">
                        <option value="0">Sort By</option>
                        <option value="1">Price</option>
                    </select>
                </div>
                <div class="col-sm-6 right">
                    <input type="text"><button><i class="fa fa-search"></i> Search</button>
                </div>
            </div>

            <table class="table">
                <thead>
                <th>Title</th>
                <th>Location</th>
                <th>Description</th>
                <th>Price</th>
                <th>Posting Date</th>
                <th>Image</th>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
<?php
require_once 'footer.php';
?>