<?php
include('../includes/connect.php'); 
?>
        
<?php
// Assume $username is obtained from a login form
$username = $_POST['username'];

// Store username in the session
$_SESSION['username'] = $username; // where $username is the username of the logged-in user

$_SESSION['password']=$userpassword;
echo"Session data saved";                                                       
?>