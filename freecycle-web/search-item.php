<?php
require_once 'header.php';
require_once 'navbar.php';
require_once './config/dbconnection.php';


                $keyword = "";
                $sort = "";

                if(isset($_POST['submit'])) {

                    if (isset($_POST['keyword'])){
                        $keyword = $_POST['keyword'];

                    }
                    if(isset($_POST['sort'])) {
                        $sort = $_POST['sort'];
                    }

                    $sql = "SELECT item_title,location,item_description,price,posting_date
                        FROM items WHERE item_title like '%$keyword%' OR 
                        item_description like '%$keyword%' ";
                    if ($sort == 1) {
                        $sql .= " ORDER BY price ASC ";
                    } else if ($sort == 0) {
                        $sql .= " ORDER BY price DESC ";
                    }
                    $result = mysqli_query($conn, $sql);

                }


?>
    <section class="my-advert-page">
        <div class="container">
            <form action=" " method="POST">
                <h2>SEARCH ITEMS</h2>
                <div class="search-box clearfix">
                    <input type="text" class="form-control" name="keyword" id="keyword" >
                    <button name="submit"><i class="fa fa-search"></i> Search</button>
                    <select class="form-control"  name="sort">
                        <option value="0">Sort By</option>
                        <option value="1">Price</option>
                    </select>

                </div>
            </form>


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

                <?php
                if (mysqli_num_rows($result)>0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "
                          <tr>
                            <td>" .$row["item_title"]. "</td>
                            <td>" .$row["location"]. "</td>
                            <td>" .$row["item_description"]. "</td>
                            <td>" .$row["price"]. "</td>
                            <td>" .$row["posting_date"]. "</td>
                            <td></td>
                          </tr>";
                    }
                }
                else {
                    echo "0 results";
                }
                ?>

                </tbody>
            </table>
        </div>
    </section>
<?php
require_once 'footer.php';
?>