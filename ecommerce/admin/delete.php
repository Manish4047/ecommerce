<?php
$con=mysqli_connect('localhost','root','','ecommerce');
$id=$_GET['ID'];
$sql="delete FROM `tbluser` WHERE id='$id'";
mysqli_query($con,$sql);
header("location:user.php");

?>