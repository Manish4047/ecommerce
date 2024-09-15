<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewcart</title>
</head>
<body>

 <?php
include 'header.php';
?>
    
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center bg-light mb-5 rounded">
            <h1 class="text-warning">My Cart</h1>
        </div>
    </div>
</div>

<div class="container-fluid">
<div class="row justify-content-around">
    <div class="col-sm-12 col-md-6 col-lg-9">
        <table class="table table-bordered text-center">
            <thead class="text-white fs-5 bs-warning">
               <th>serial No.</th>
               <th>Product Name</th>
               <th>Product Price</th>
               <th>Product Quantity</th>
               <th>Total price</th>
               <th>Update</th>
               <th>Delete</th> 
            </thead>
       
<tbody>


    <?php
 
//session_start();
$total=0;
$ftotal=0;
$i=0;
if(isset($_SESSION['cart'])){
  foreach($_SESSION['cart'] as $key => $value){
       $total= $value['productPrice']*$value['productQuantity'];
       $ftotal+= $value['productPrice']*$value['productQuantity'];
        $i=$key+1;
       echo "
       <form action='Insertcart.php' method='POST'>
       <tr>
        <td>$i</td>
        <td><input type='hidden' name='Pname' value='$value[productName]'>$value[productName]</td>
        <td><input type='hidden' name='Pprice' value='$value[productPrice]'>$value[productPrice]</td>
        <td><input type='text' name='Pquantity' value='$value[productQuantity]'></td>
        <td>$total</td>
        <td><button name='update' class='btn-warning'>Update</button></td>
        <td><button name='remove' class='btn-danger'>Delete</button></td>
        <td><input type='hidden' name='item' value='$value[productName]'></td>
        </tr>
        </form>
        ";
       
    }
}
?>
</table>
</tbody>
    </div>
    <div class="col-lg-3 text-center">
        <h3>Total</h3>
        <h1 class="bg-danger text-white "><?php echo number_format($ftotal,2)  ?></h1>
    </div>
</div>
</div>

</body>
</html>