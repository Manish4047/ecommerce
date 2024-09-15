<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap cdn-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     
</head>
<body>

<?php
include 'mystore.php';
$con=mysqli_connect('localhost','root','','ecommerce');
$sql="SELECT * FROM `tbluser`";
$result=mysqli_query($con,$sql);
$row_count=mysqli_num_rows($result);


?>
<div class="container mt-5">
    <div class="row">
       <div class="col-md-10">

     
 

    <table class="table table-secondary table-bordered">
        <thead class="text-center">
            <th>Sno</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Delete</th>
          
           
        </thead>
        <tbody class="text-center">
            <?php
            $i=0;
          while($row=mysqli_fetch_array($result)){
            echo " 
            <tr>
            <td> ";?> <?php echo ++$i; ?><?php echo "</td>
            <td>$row[username]</td>
            <td>$row[email]</td>
            <td>$row[number]</td>
            <td>  <a href='delete.php? ID=$row[id]' class='btn btn-outline-danger'>Delete</a></td>
        </tr>
        ";
          }

            ?>
        </tbody>
    </table>
    </div> 
    <div class="col-md-2 pr-5 text-center">
        <h3n class="text-danger">Total</h3n>
        <h1 class="bg-danger text-white"> <?php echo $row_count;    ?></h1>
    </div>
    </div>
    </div>
</body>
</html>