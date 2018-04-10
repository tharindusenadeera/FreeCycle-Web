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
$action = "";


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


        //header("Location: ./index.php");
        //die();
    } else {
        $internal_error = "Error: " . $sql . " < br>" . mysqli_error($conn);
    }
}

$id = mysqli_insert_id($conn);
$sql =  "SELECT * FROM images where item_id ='$item_id'";
$result = mysqli_query($conn,$sql);

if(isset($_GET['action'])){

    $action = $_GET['action'];

    if($action = 2){
        $sql = "DELETE FROM images where id = '$id'";
        mysqli_query($conn,$sql);
        //headers("Location: ./index.php");

    }
    die();
    headers("Location: add-image.php");



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
                            <input type='hidden' name='itemId' value=''/>
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
                <?php
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_array($result)){
                        //header("Content-type: image/png");
                        //$image = $row['image'];
                          echo '               
                <tr>
                    <td>< data:image/jpeg;base64,' . base64_encode( $row['image'] ) .' </td>
                    <td><a href="add-image.php?action=2">Delete</a></td>
                </tr>';

                
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