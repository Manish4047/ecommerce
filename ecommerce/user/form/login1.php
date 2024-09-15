<?php

$con=mysqli_connect('localhost','root','','ecommerce');


$name=$_POST['name'];
$password=$_POST['password'];
$sql="SELECT * FROM `tbluser` WHERE (username='$name' or email='$name') and password='$password'";
$result=mysqli_query($con,$sql);

session_start();
if(mysqli_num_rows($result)){

    $_SESSION['user']=$name;
    echo "
    <script>
    alert('successfuly login');
    window.location.href='../index.php';
    </script>
    ";
}
else{
   
    echo "
    <script>
    alert('incorrect email/user/password');
    window.location.href='login.php';
    </script>
    ";
}
?>