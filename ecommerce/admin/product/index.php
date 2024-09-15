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
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border-primary mt-3">


                <form action="insert.php" method="POST" enctype="multipart/form-data">


                    <div class="mb-3">
                        <p class="tet-center fw-bold fs-3 text-warning">Product Detail:</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Name:</label>
                        <input type="text" name="pname" class="form-control" placeholder="Enter product name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Price:</label>
                        <input type="text" name="pprice" class="form-control" placeholder="Enter product name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Add Product Image:</label>
                        <input type="file" name="pimage" class="form-control">
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

                    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">upload</button>


                </form>
            </div>
        </div>
    </div>



    <!--fetch data -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">


                <table class="table border border-warning table-hover border my-5">
                    <thead class="text-white fs-5 font-monospace text-center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>category</th>
                        <th>update</th>
                        <th>Delete</th>
                    
                        <?php
include 'config.php';
//$sql="select * from tblproduct";
$result=mysqli_query($con,"select * from tblproduct");
while($row=mysqli_fetch_array($result))
echo "
<tr>
  <td>$row[id]</td>
  <td>$row[pname]</td>
  <td>$row[pprice]</td>
  <td><img src='$row[pimage]' alt='img' height='90px' width='100px'></td>
  <td>$row[pcategory]</td>
  <td><a href='update.php? ID=$row[id]' class='btn btn-warning'>update</a></td>
  <td><a href='delete.php? ID=$row[id]' class='btn btn-danger'>delete</a></td>


</tr>

";
  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>