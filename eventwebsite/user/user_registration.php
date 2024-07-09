<?php
include("../includes/connect.php");
?>  

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <div class="container" >
        <img src="https://upload.wikimedia.org/wikipedia/en/5/54/Gokaraju_Rangaraju_Institute_of_Engineering_and_Technology_logo.png" alt="GRIET Logo" class="logo">
        <form action="" method="post">
            <label for="newusername">Username:-</label>
            <input type="text" name="newusername" id="newusername" placeholder="username">
            <br>
            <label for="userpass">password:-</label>
            <input type="password" name="userpass" id="userpass" placeholder="password">
            <br>
            <label for="useremail">email:-</label>
            <input type ="email" placeholder="abc@gmail.com" name="useremail" id="useremail">
            <br>
            <label for="confirmpass">C  onfirm password:-</label>
            <input type="password" name="confirmpass" id="confirmpass" placeholder="confirmpassword">
            <br>
            <input type="submit" name="signin" value="sign-in"> 
            <p>Already have an account?<a href="user_login.php">Login</a></p>
        </form>
    </div>
</body>
</html>
    <?php
    if(isset($_POST['signin'])){
        $newusername=$_POST['newusername'];
        $userpass=$_POST['userpass'];
        $useremail=$_POST['useremail'];
        $confirmpassword=$_POST['confirmpass'];
        $hashpassword=password_hash($userpass,PASSWORD_DEFAULT);


        if($newusername=='' or $userpass=='' or $useremail==''or $confirmpassword=='' ){
            echo" <script>alert('Please fill all the fields')   </script>";
        }
        else{
            $selectq="Select * from `user` where(username='$newusername' or useremail='$useremail')";
            $user_res=mysqli_query($con,$selectq);  
            $user_rows=mysqli_num_rows($user_res);
            if($user_rows>0){
                echo"<script>alert('The existing username(or)email already exists')</script>";
            }
            else if($userpass!=$confirmpassword){
                echo "<script>alert('Password didn\'t match')</script>";

            }
            else{
            $insert_user="insert into `user`(username,useremail,userpassword,confirmpassword)
            values ('$newusername','$useremail','$hashpassword','$confirmpassword')";
            $user_execute=mysqli_query($con,$insert_user);
            if($user_execute){
                echo" <script>alert('sucess')</script>";
            }
            else{
                die(mysqli_error($con));    
            }
        }


    }
    }   


    ?>
    
</body>
</html>