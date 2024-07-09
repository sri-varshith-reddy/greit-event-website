<?php
include('includes/connect.php');
include('functions/common_func.php');   
session_start();
?>
<?php
    if(isset($_SESSION['username'])){
        echo "<script>alert('Username: {$_SESSION['username']}')</script>";
    } else {
        echo "<script>alert('Session username not set')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming events in GRIET</title>
     <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!--fontawesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="style.css">


</head>
<body>
    
<script src="script.js"></script>
<script src="script2.js"></script>
    <!--bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <!--bootstr    ap js link-->
<section id="header">
    <a href=""><img src="admin/eventimage/greitlogo.jpg" class="logo" alt="logo"></a>
    <h3>Gokaraju Rangaraju Institute of Engineering & Technology
</h3>
    <div>
        <ul id="navbar">
            <li><a id="about" href="about.php" >About</a></li>
            <li><a id="sponsors" href="sponsors.php">Sponsors</a></li>
            <li><a id="contactus" href="contact.php">Contact Us</a></li>
            <li><a id="getinvovled" href="getinvovled">Get Invovled</a></li>
            <a href="#" id="close"><i class="fas fa-times"></i></a>
           
            <?php
if(isset($_SESSION['username'])){
    echo"<li class='nav-item'><a class='nav-link' href='user/logout.php'>Logout</a></li>";
}
else{
    echo"
    <li class='nav-item dropdown'>
        <a href='#' class='nav-link dropbtn'>Login</a>
        <div class='dropdown-content'>
            <a class='dropdown-item' href='user/user_login.php'>User Login</a>
            <a class='dropdown-item' href='admin/index.php'>Admin Login</a>
        </div>
    </li>";
}
?>

        <li id="announce"><a href="announcement.html"><i class='fa-solid fa-bullhorn'></i>   </a></li>
        </ul>
    </div> 
    <div class="mobile">
        <a href="announcement.html"><i class='fa-solid fa-bullhorn'></i>   </a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>

<i class="fa-solid fa-map-pin" id="icon"></i>
<div id="newheading">Explore by categories</div>

<div class='categories_container'>
    <?php
     newcategories();
     
    ?>
</div>
<marquee bgcolor="#ccc" loop="-1">Discover the Pulse of Our Community - Events that Transform Ordinary Days into Extraordinary Memories</marquee>

<i class="fa-solid fa-bookmark" id="icon"></i>
<div id="newheading">Featured Events</div>


<div class="card-container">
    <!--fetching products-->
    <?php
        newevent();
        unique_category();
    ?>   



 </div>

 <footer class="section-p1">
        <div class="col">
            <img class="logo" src="admin/eventimage/greitlogo.jpg" alt="">
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contacts</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign in</a>
            <a href="#">Help</a>
            <a href="#">Login</a>
        </div>
        <div class="col">
            <h4>Links</h4>
            <a href="#">Home</a>
            <a href="#">Services</a>
            <a href="#">Features</a>
        </div>
    </footer>
 </body>
 </html>