<?php
    // require 'function.php';
   
    // if(!empty($_SESSION["id"])){
    //     header("Location: index.php");
    //   }
      
    //   $register = new Register();
      
    //   if(isset($_POST["submit"])){
    //     $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);
      
    //     if($result == 1){
    //       echo
    //       "<script> alert('Registration Successful'); </script>";
    //     }
    //     elseif($result == 10){
    //       echo
    //       "<script> alert('Username or Email Has Already Taken'); </script>";
    //     }
    //     elseif($result == 100){
    //       echo
    //       "<script> alert('Password Does Not Match'); </script>";
    //     }
    //   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    
<section>
    <h2>SIGN UP</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="">Name : </label>
      <input type="text" name="name" required value=""> <br>
      <label for="">Username : </label>
      <input type="text" name="username" required value=""> <br>
      <label for="">Email : </label>
      <input type="email" name="email" required value=""> <br>
      <label for="">Password : </label>
      <input type="password" name="password" required value=""> <br>
      <label for="">Confirm Password : </label>
      <input type="password" name="confirmpassword" required value=""> <br>
      <button type="submit" name="submit">Register</button>
    </form>
    <br> <br>
    <a href="login.php">Login</a>
</section>



</body>
</html>