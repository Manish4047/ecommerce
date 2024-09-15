<?php
include 'config.php';

$id=$_GET['ID'];
$sql="delete from tblproduct where id='$id'";
mysqli_query($con,$sql);
header("location:index.php");
?>