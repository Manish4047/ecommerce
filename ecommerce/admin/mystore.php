<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin home-page</title>
       <!-- bootstrap cdn-->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     
<!--font awesome cdn-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    </head>
    <?php
    session_start();
    if(!$_SESSION['admin']){
      header("location:form/login.php");
    }
    ?>
<body>
<nav class="navbar  bg-dark text-light">
  <div class="container-fluid">
    <a class="navbar-brand text-light"><h1>mystore</h1></a>
    <span>
    <i class="fa-solid fa-user-tie"></i>
    Hello,<?php echo $_SESSION['admin']?>
    <i class="fa-solid fa-right-from-bracket"></i>
    <a href="form/logout.php" class="text-decoration-none text-white">logout</a>
    <a href="" class="text-decoration-none text-white">userpanel</a>
    </span>
  </div>
</nav>
           
<div>
  <h2 class="text-center">Dashboard</h2>
</div>
<div class=" col-md-6 bg-success text-center m-auto">
  <a href="product/index.php" class="text-white text-decoration-none fs-2 fw-bold px-5">Add post</a>
  <a href="user.php" class="text-white text-decoration-none fs-2 fw-bold px-5">Users</a>
  
</div>

</body>
</html>