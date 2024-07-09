<?php
include('includes/connect.php');
?>  
<?php
session_start();    
session_unset();
session_destroy();// or unset($_SESSION['username']);
// echo "<script>window.open('./index.php','_self')</script>";
header("Location: ../index.php");
exit; 

?>