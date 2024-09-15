
<!-- <?php


//session_start();

?>
<?php
//  $product_name=$_POST['Pname'];
//  $product_price=$_POST['Pprice'];
// $product_quantity=$_POST['Pquantity'];

// $_SESSION['cart'][]=Array('productName'=>$product_name,
//                           'productPrice'=>$product_price,
//                            'productQuantity'=>$product_quantity);
                        
//                     header("location:viewCart.php"); 

?> -->





















<?php


session_start();

?>

 <?php
 if(isset($_SESSION['user'])){

$product_name=$_POST['Pname'];
   $product_price=$_POST['Pprice'];
   $product_quantity=$_POST['Pquantity'];

if(isset($_POST['addCart'])){
    $check_product=array_column($_SESSION['cart'],'productName');
    if(in_array($product_name,$check_product)){
      echo "
       <script>
       alert('product already added');
                          window.location.href='index.php';
                          </script>
                          "; 
    
    
    
    }

else{
   
                            $product_name=$_POST['Pname'];
                            $product_price=$_POST['Pprice'];
                           $product_quantity=$_POST['Pquantity'];
                       
                           $_SESSION['cart'][]=Array('productName'=>$product_name,
                                                     'productPrice'=>$product_price,
                                                      'productQuantity'=>$product_quantity);
                                                   
                                               header("location:viewCart.php"); 
}  
}


     //remove product
     if(isset($_POST['remove'])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['productName'] === $_POST['item']){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']= array_values($_SESSION['cart']);
                header('location:viewCart.php');
            }
        }
     }

      //update product
      if(isset($_POST['update'])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['productName'] === $_POST['item']){
                $_SESSION['cart'][$key]=Array('productName'=>$product_name,
                'productPrice'=>$product_price,
                 'productQuantity'=>$product_quantity);
              
          header("location:viewCart.php"); 
            }
        }
     }
    }
    else{
        header("location:form/login.php");
    }
?>
 
