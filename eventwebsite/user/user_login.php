<?php
// include("../includes/connect.php");

?>  

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" >
        <br>
        <label for="pass">password:</label>
        <input type="password" name="pass" id="pass">
        <br>
        <input type="submit" value="login" name="login">
        <p>Don't have an account?<a href="user_registration.php">Sign-in</a></p>
    </form> -->

    <?php
    // if(isset($_POST['login'])){
    //     $username=$_POST['username'];
    //     $password=$_POST['pass'];
    //     if($username=='' or $password==''){
    //         echo" <script> alert('Please fill all the fields') </script>";
    //     }
    //     else{
    //         $selectq_login="Select * from `user` where(username='$username')";
    //         $user_res_login=mysqli_query($con,$selectq_login);  
    //         $user_rows_login=mysqli_num_rows($user_res_login);
    //         $user_data_login=mysqli_fetch_assoc($user_res_login);
    //         if($user_rows_login>0){
    //             if(password_verify($password,$user_data_login['userpassword'])){
    //                 echo"<script>alert('Login Sucessful')</script>";
    //             }
    //             else{
    //             echo"<script>alert('Invalid Credentials')</script>";
    //         }
    //     }
    //         else{
    //             echo "<script>alert('invalid user credintials')</script>";
    //         }
            
    //     }


    // }
     


    ?>
<!--     
</body>
</html> -->



<?php
include("../includes/connect.php");

// Start the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <form action="" method="post">
    <form action="" method="post">
        <img src="images.png" alt="Logo">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass">
        <br>
        <input type="submit" value="Login" name="login">
        <p>Don't have an account? <a href="user_registration.php">Sign-in</a></p>
    </form>

    <?php   
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['pass'];
        if($username=='' or $password==''){
            echo" <script> alert('Please fill all the fields') </script>";
        }
        else{
            $selectq_login="SELECT * FROM `user` WHERE username='$username'";
            $user_res_login=mysqli_query($con,$selectq_login);  
            $user_rows_login=mysqli_num_rows($user_res_login);
            $user_data_login=mysqli_fetch_assoc($user_res_login);
            if($user_rows_login>0){
                if(password_verify($password,$user_data_login['userpassword'])){
                    // Start the session and set user data
                    $_SESSION['username'] = $username;
                    // Redirect to a new page after successful login
                    header("Location: ../index.php");
                    exit(); // Make sure that code below is not executed after redirection
                }
                else{
                    echo"<script>alert('Invalid Credentials')</script>";
                }
            }
            else{
                echo "<script>alert('Invalid user credentials')</script>";
            }
        }
    }
    ?>
</body>
</html>
<!-- <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Overpass+Mono" rel="stylesheet">

<div id="wrapper">
  <div class="main-content">
    <div class="header">
      <img src="https://i.imgur.com/zqpwkLQ.png" />
    </div>
    <div class="l-part">
      <input type="text" placeholder="Username" class="input-1" />
      <div class="overlap-text">
        <input type="password" placeholder="Password" class="input-2" />
        <a href="#">Forgot?</a>
      </div>
      <input type="button" value="Log in" class="btn" />
    </div>
  </div>
  <div class="sub-content">
    <div class="s-part">
      Don't have an account?<a href="#">Sign up</a>
    </div>
  </div>
</div>
 -->
