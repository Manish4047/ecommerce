<?php
include 'config.php';

$A_name=$_POST['username'];
$A_password=$_POST['userpassword'];
 

$sql="SELECT * FROM `admin` WHERE username='$A_name' AND userpassword='$A_password'";
$result=mysqli_query($con,$sql);
session_start();

if(mysqli_num_rows($result))
{
    $_SESSION['admin']=$A_name;
    echo "
    <script>
    alert('Login successfuly');
    window.location.href='../mystore.php';
    </script>

    ";
}
else
{
    echo "
    <script>
    alert('invalid username and password');
    window.location.href='login.php';
    </script>

    ";
}

?>