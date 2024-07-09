<?php
session_start();
if(isset($_SESSION['username']))
{
echo"WELCOME  ".$_SESSION['username'];
echo"<br>";
echo"And your password is ".$_SESSION['password'];
}
else{
    echo"login again";
}   


?>