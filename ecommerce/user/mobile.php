<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
    <?php
    include'header.php';
    ?>
</head>

<body>
    <div class="container-fluid">
       
            <div class="col-md-12">
            <div class="row">

        
    <h1 class="text-warning font-monospace text-center my-3">MOBILE</h1>
   
   
   
   <?php
include 'config.php';
$sql="select * from tblproduct";
$result=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($result))
  {
      $check_page=$row['pcategory'];
      if($check_page ==='Mobile'){

      

    echo "
<div class='col-md-6 col-lg-4 m-auto mb-3'>
 <form action='Insertcart.php' method='POST'>
<div class='card' style='width: 18rem;'>
  <img src='../admin/product/$row[pimage]'class='card-img-top' >
  <div class='card-body text-center'>
    <h5 class='card-title text-danger fs-4 fw-bold'>$row[pname]</h5>
   <p class='card-text text-danger fs-4 fw-bold'>";?>Rs: <?php echo number_format($row['pprice'],2)?>  <?php echo "</p>
    <input type='hidden' name='Pname' value='$row[pname]'>
    <input type='hidden' name='Pprice' value='$row[pprice]'>
    <input type='number' name='Pquantity' value='min='1'  max='20'' placeholder='Pquantity'><br><br>
    <input type='submit' name='addCart' class='btn btn-warning text-white w-100' value='Add to cart' >
  
  </div>
</div>
 </form>
 </div>
";


  }
}


?>

</div>
</div>
</div>
<?php
include 'footer.php';

?>
</body>

</html>