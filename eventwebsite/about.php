<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <a href="#"><img src="" class="logo" alt="logo"></a>
    <div>
        <ul id="navbar">
            <li><a id="about" class="active" href="about.php" >About</a></li>
            <li><a id="sponsors" href="sponsors.html">Sponsors</a></li>
            <li><a id="contactus" href="contact.html">Contact Us</a></li>
            <li><a id="getinvovled" href="getinvovled">Get Invovled</a></li>
            <a href="#" id="close"><i class="fas fa-times"></i></a>
        <?php
        if(isset($_SESSION['username'])){
        //   echo"  <li><a href='user/user_login.php'>Login</a></li>";
          echo"<li><a href='user/logout.php'>Logout</a></li>";
        }
        else{
            // echo"<li><a href='sessions/logout.php'>Logout</a></li>";
            echo"  <li><a href='user/user_login.php'>Login</a></li>";
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
<section class="about_header">
    <h2>About Us</h2>
    <p>know us become part of out journey </p>
</section>  

<section id="about_head" calss="section-p1"> 
    <img src="admin/eventimage/aboutside2.jpg">
    <div id="aboutside">
        <h2>"We Innovate: Redefining Event Discovery for the College Community</h2>
        <p>
        Events are the pulse of our college, igniting the rhythm that drives our community forward.

        Fueled by our passion for innovation, we've cultivated a platform where each moment holds the promise of something extraordinary. Our commitment lies in curating experiences that resonate deeply, crafting memories that linger far beyond the event's end.

        Whether you're seeking excitement, inspiration, or connections within our college community, we're here to bring those moments to life. With local events just a click away, we ensure that your college experience is always vibrant and #Happening.

        As a trusted partner for college event organizers, we provide seamless ticketing and promotion solutions. Empowering organizers to breathe life into their events, we help them share their vision with the entire college community.
        </p>
        <marquee bgcolor="#ccc" loop="-1">Discover the Pulse of Our Community - Events that Transform Ordinary Days into Extraordinary Memories</marquee>
<div>        
</section>
</body>
</html>