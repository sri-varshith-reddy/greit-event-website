<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
      <!--bootstrap css link-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!--fontawesome cdn link-->
     <link rel="stylesheet" h   ref="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="style2.css">
</head>
<body>
      <!--bootstrap js link-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <section id="header">
    <a href="#"><img src="" class="logo" alt="logo"></a>
    <div>
        <ul id="navbar">
            <li><a class="active" href="index.php">Dashboard</a></li>
            <li><a href="index.php?addsponsors">Add Sponsors</a></li>
            <li><a href="addevent.php">Add Event</a></li>
            <li><a href="addcategories.php">Add Categories</a></li>
            <li><a href="signin.html">Sign-in</a></li>
            <li><a href="announcement.html"><i class="fa-solid fa-bullhorn"></i>   </a></li>    
        </ul>   
    </div> 
</section>
        <div class="container">
            <?php
            if(isset($_GET['addevent'])){
                include('addevent.php');
            }
            if(isset($_GET['addsponsors'])){
                include('addsponsors.php');
            }
            if(isset($_GET['addcategories'])){
                include('addcategories.php');
            }
            ?>
        </div>
</body>
</html>