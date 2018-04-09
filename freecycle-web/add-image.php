<?php
require_once 'header.php';
require_once 'navbar.php';
require_once './config/dbconnection.php';
//require_once './config/session.php';

if(!isset($_SESSION["username"])){
    header("Location: index.php");
    exit();
}

$item_id = $_GET['id'];
//image upload
if(isset($_POST["upload"])){


    //$item_id = mysqli_insert_id($conn);
    if ($item_id) {
        // insert image into image table
        $image_name = $_FILES["fileToUpload"]["name"];

        // echo $image_name;
        // die();

        if (!empty($image_name)) {$image_tmp = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));
            $sql = "INSERT INTO images (image, item_id) VALUES('$image_tmp','$item_id')";
            mysqli_query($conn, $sql);
        }

        header("Location: ./index.php"); // record inserted and redirected to home page
        die();
    } else {
        $internal_error = "Error: " . $sql . " < br>" . mysqli_error($conn);
    }
}


?>
    <section class="my-advert-page">
        <div class="container">
            <form action="add-image.php?id=<?php echo  $item_id; ?>" method="post"  enctype="multipart/form-data">
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
                            <input type='file' id="fileToUpload" name='fileToUpload'/>
                            <input type='hidden' name='itemId'value=''/>
                        </td>
                        <td><button type="submit" name="upload">Upload</button></td>
                    </tr>
                    </tbody>
                </table>
            </form>
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