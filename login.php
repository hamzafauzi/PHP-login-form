<?php
session_start();
require 'conn.php';
if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $password=$_POST['password'];

    $result= mysqli_query($con, "SELECT * FROM `login` WHERE email='$email' ");
    $row= mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){

        if($password ==$row["password"]){
            $_SESSION["login"]= true;
            $_SESSION["id"]= $row["id"];
            header("Location: table.php");
        }


    }
    else{

        echo "<script> alert('User Not registered');</script>";
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>






<div class="row">
  <div class="mx-auto col-10 col-md-8 col-lg-6">
    <!-- Form -->
    <form class="" action="" method="post">
      <h1>Login Page</h1>
      
      <!-- Input fields -->
      <div class="form-group">
        <label for="email">Email:</label>
        <input
          type="text"
          class="form-control username"
          id="email"
          placeholder="write your email"
          name="email"
        />
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input
          type="password"
          class="form-control password"
          id="password"
          placeholder="Password..."
          name="password"
        />
      </div>

      <button type="submit" name="submit" class="btn btn-primary btn-customized mt-4">
        Login
      </button>
      <br>
      
    <a href= "register.php">Registration</a>
    </form>
    <!-- Form end -->
  </div>
</div>

</body>
</html>