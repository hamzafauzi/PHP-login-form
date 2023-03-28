<?php

include "conn.php";



if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    
   
   


    $sql= "insert into `login`(name,email,password) 
    values('$name', '$email', '$password')";
    $result= mysqli_query($con, $sql);
    if($result){
     echo "Data inserted"; 
     echo "</br>";
     echo "Name:" ;echo $name;
     echo "</br>";   
     echo "Email:"; echo $email;
     
     
    


    }else{
        die(mysqli_error($con));
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <h1>Registration Form</h1>
    <form action="" form id="registration-form" method="post" enctype="multipart/form-data">
    

    <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registration</p>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" value="">
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="">
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                        <label for="password">Password:</label>
                        <input type="password" name="password">
                    </div>
                  </div>

                  

                  

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                     <button type="submit" id="submit" name="submit">Submit</button> 
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

           
              <a href="login.php">Already Registered? Login here</a>
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </form>



</body>
</html>
