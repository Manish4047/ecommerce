
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product page</title>
    <!-- bootstrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
<?php
//$id=$_GET['ID'];
include 'config.php';
$id=$_GET['ID'];
$sql="select * from tblproduct where id='$id'";
$record=mysqli_query($con,$sql);
$data=mysqli_fetch_array($record);


?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border-primary mt-3">


                <form action="update.php" method="POST" enctype="multipart/form-data">


                    <div class="mb-3">
                        <p class="tet-center fw-bold fs-3 text-warning">Product Update:</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Name:</label>
                        <input type="text" value="<?php echo $data['pname'] ?>" name="pname" class="form-control" placeholder="Enter product name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Price:</label>
                        <input type="text" value="<?php echo $data['pprice'] ?>" name="pprice" class="form-control" placeholder="Enter product name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Add Product Image:</label>
                        <input type="file" name="pimage" class="form-control"><br>
                        <img src="<?php echo $data['pimage'] ?>" alt="" style="height:100px">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select Product Category:</label>
                        <select class="form-select" name="pages">
                            <option value="Home">Home</option>
                            <option value="laptop">laptop</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Bags">Bags</option>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $data['id']?>" >
                    <button name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-white">update</button>


                </form>
            </div>
        </div>
    </div>

           <!-- php update code -->
<?php
if(isset($_POST['update'])){
     $id=$_POST['id'];
    $product_name=$_POST['pname'];
    $product_price=$_POST['pprice'];
    $product_image=$_FILES['pimage'];
    $image_loc=$_FILES['pimage']['tmp_name'];
    $image_name=$_FILES['pimage']['name'];
    $img_des="uploadimage/".$image_name;
    move_uploaded_file($image_loc,$img_des);
    $product_category=$_POST['pages'];

    include 'config.php';
    $sql="UPDATE `tblproduct` SET `pname`='$product_name',`pprice`='$product_price',`pimage`='$img_des',`pcategory`='$product_category' WHERE id='$id'";
    mysqli_query($con,$sql);
    header("location:index.php");


} 
?>

  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>










