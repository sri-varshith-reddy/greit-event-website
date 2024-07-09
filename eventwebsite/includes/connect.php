<?php 
$con=mysqli_connect('localhost:3307','root','','events');
// if($con){
//     echo"<script>alert('connected')</script>";
// }

if(!$con){
    die(mysqli_error($con));
}
?>  