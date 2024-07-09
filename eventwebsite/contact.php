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
            <li><a id="about" href="about.php" >About</a></li>
            <li><a id="sponsors" href="sponsors.html">Sponsors</a></li>
            <li><a id="contactus" classs="active" href="contact.php">Contact Us</a></li>
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
<section class="page_header">
    <h2>Contact Us</h2>
    <p>know us become part of out journey </p>
</section>  

<section class="contactus">
    <div class="title">
        <h2>Get in touch</h2>
       
    </div>
    <div class="box">
        <!--from-->
        <div class="contact form">
            <h3>Send a Message</h3>
        </div>
        <div class="formbox">
            <div class="row50">
                <div class="inputbox">
                    <span>Firstname</span> 
                    <input type="text" placeholder="Firstname">
                </div>
                <div class="inputbox">
                    <span>Lastname</span> 
                    <input type="text" placeholder="Lastname">
                </div>
                <div class="row100">
                <div class="inputbox">
                    <span>Email</span> 
                    <input type="email" placeholder="abc@gmail.com">
                </div>
                </div>
                <div class="row100">
                <div class="inputbox">
                    <span>Mobile</span> 
                    <input type="text" placeholder="91XXXXXXXXX">
                </div>
                </div>
                <div class="row100">
                <div class="inputbox">
                    <span>Message</span> 
                   <textarea placeholder="Write ur message here..."></textarea>t
                </div>
                </div>
        </div>
        <div class="contact info"></div>
        <div class="contact map"></div>
    
    </div>



</section>


</body>
</html>