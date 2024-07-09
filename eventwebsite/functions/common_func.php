<?php 
include('./includes/connect.php');
function newevent(){
    global $con;
    //isset
    if(!isset($_GET['category'])){
        $select_query="Select * from `newevent` order by rand()";
        $result_query=mysqli_query($con,$select_query);
        while($row=mysqli_fetch_assoc($result_query)){
            $eventid=$row['eventid'];
            $eventname=$row['eventname'];
            $eventdetails=$row['eventdetails'];
            $eventdate=$row['eventdate'];
            $price=$row['price'];
            $categoryid=$row['categoryid'];
            $image1=$row['image1'];
            $about=$row['about'];
            // $eventorganised=$row['eventorganised']
            $image2=$row['image2'];
            echo"<div class='card'>
            <img src='./admin/eventimage/$image1'>
            <div class='card-content'>
            <h3>$eventname</h3>
            <p>$about</p>
            <a href='' class='readmore' >Read More</a>
                <div class='bottom'>
                    <div class='date'>$eventdate</div>
                        <div class='price-container'>
                                <span class='price'>
                                    <i>$price$</i>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            ";      
        }
   }
}

// UNIQUE CATEGORYS
function unique_category(){
    global $con;
    //isset
    if(isset($_GET['category'])){
        $categoryid=$_GET['category'];
        $select_query="Select * from `newevent` where categoryid=$categoryid";
        $result_query=mysqli_query($con,$select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows==0){
            echo"<h2>At present, there are no scheduled events within this category<h2>";
        }
        while($row=mysqli_fetch_assoc($result_query)){
            $eventid=$row['eventid'];
            $eventname=$row['eventname'];
            $eventdetails=$row['eventdetails'];
            $eventdate=$row['eventdate'];
            $price=$row['price'];
            $categoryid=$row['categoryid'];
            $image1=$row['image1'];
            $image2=$row['image2'];
            echo"<div class='card'>
            <img src='./admin/eventimage/$image1'>
            <div class='card-content'>
            <h3>$eventname</h3>
            <p>$eventname</p>
            <a href='' class='readmore' >Read More</a>
                <div class='bottom'>
                    <div class='date'>$eventdate</div>
                        <div class='price-container'>
                                <span class='price'>
                                    <i>$price$</i>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            ";      
        }
   }
}





function newcategories(){
    global $con;
    $selectquery="Select * from `newcategories` order by rand()";
    $result=mysqli_query($con,$selectquery);
    while($rows=mysqli_fetch_assoc($result)){
        $catname=$rows['categoriename'];
        $catpic=$rows['categoriepic'];
        $categoryid=$rows['categoryid'];
        echo"
            <a href='index.php?category=$categoryid' class='categories'>
                <img src='./admin/eventimage/$catpic' alt='' class='cat_image'>
                <span class='cat_name'> $catname</span>
            </a>
        
        ";
    }
}




?>