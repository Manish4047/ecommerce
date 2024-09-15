<?php

$con=mysqli_connect('localhost','root','','ecommerce');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['password'];


//for validation name and email 
$sql1="SELECT * FROM `tbluser` WHERE username='$name'";
$sql2="SELECT * FROM `tbluser` WHERE email='$email'";
$dup_name=mysqli_query($con,$sql1);
$dup_email=mysqli_query($con,$sql2);
if(mysqli_num_rows($dup_name)){
    echo "
    <script>
    alert('this name is already taken');
    window.location.href='register.php';
    </script>
    
    ";
}

if(mysqli_num_rows($dup_email)){
    echo "
    <script>
    alert('this Email is already taken');
    window.location.href='register.php';
    </script>
    
    ";
}
else{

    $sql="INSERT INTO `tbluser`(`username`, `email`, `number`, `password`) VALUES ('$name','$email','$number','$password')";
mysqli_query($con,$sql);

echo "
    <script>
    alert('record addded successfully');
    //window.location.href='login.php';
    </script>
    
    ";

}




}
?>