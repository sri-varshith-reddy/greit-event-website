<?php
include('../includes/connect.php');
if(isset($_POST['eventsubmit'])){
   $eventname=mysqli_real_escape_string($con, $_POST['eventname']);
   $eventdetails=mysqli_real_escape_string($con, $_POST['eventdetails']);
   $eventdate=mysqli_real_escape_string($con, $_POST['eventdate']);
   $eventprice=mysqli_real_escape_string($con, $_POST['eventprice']);
   $eventcategories=mysqli_real_escape_string($con, $_POST['eventcategories']);
   $eventabout=mysqli_real_escape_string($con, $_POST['eventabout']);
   
   // Accessing images
   $eventimage1=$_FILES['eventimage1']['name'];
   $eventimage2=$_FILES['eventimage2']['name'];
   
   // Accessing images temp name  
   $tempimage1=$_FILES['eventimage1']['tmp_name'];
   $tempimage2=$_FILES['eventimage2']['tmp_name'];
   
   $eventstatus='true';
   
   // Required
   if($eventname=='' || $eventdetails=='' || $eventdate=='' || $eventprice=='' || $eventcategories=='' || $eventimage1=='' || $eventabout=='') {
      echo"<script> alert('Please fill all the available fields')</script>";
      exit();
   } else {  
      echo "Event Categories: $eventcategories";
      
      // Move uploaded files
      move_uploaded_file($tempimage1, "./eventimage/$eventimage1");
      if ($eventimage2 != '') {
         move_uploaded_file($tempimage2, "./eventimage/$eventimage2");
      }
      
      // Insertion
      if ($eventimage2 != '') {
         $insert_event="INSERT INTO `newevent` (eventname, eventdetails, eventdate, price, categoryid, image1, about, image2, status) 
         VALUES ('$eventname', '$eventdetails', '$eventdate', '$eventprice', '$eventcategories', '$eventimage1', '$eventabout', '$eventimage2', '$eventstatus')";
      } else {
         $insert_event="INSERT INTO `newevent` (eventname, eventdetails, eventdate, price, categoryid, image1, about, status) 
         VALUES ('$eventname', '$eventdetails', '$eventdate', '$eventprice', '$eventcategories', '$eventimage1', '$eventabout', '$eventstatus')";
      }
      
      $result_query=mysqli_query($con, $insert_event);
      if($result_query){
         echo "Event Categories: $eventcategories";
         echo"<script> 
         alert('SUCCESS id:-$eventcategories')</script>";
      } else {
         echo "Error: " . mysqli_error($con);
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Event details</title>
   <!--bootstrap css link-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!--fontawesome cdn link-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <h1>ADD NEW EVENT</h1>
      <form action="" method="post" enctype="multipart/form-data">
      <div class="form-outline mb-4 w-50 m-auto">
         <label for="eventname">Add name of event:</label>
         <input type="text" name="eventname" placeholder="Add the name of your event" id="eventname" autocomplete="off" required="required">
         <br>
         <label for="eventdetails">Event details:</label>
         <input type="text" name="eventdetails" placeholder="Event details" id="eventdetails" autocomplete="off" required="required">
         <br>
         <label for="eventdate">Date:</label>
         <input type="date" id="eventdate" name="eventdate" autocomplete="off" required="required">
         <br>
         <label for="eventprice">Price:</label>
         <input type="text" name="eventprice" id="eventprice" placeholder="Event price" autocomplete="off" required="required">
         <br>
         <select name="eventcategories" id="">
            <option>Select a Category</option>
            <?php 
            $selectquery="SELECT * FROM `newcategories`";
            $result=mysqli_query($con,$selectquery);
            while($rows=mysqli_fetch_assoc($result)){
               $catname=$rows['categoriename'];
               $categoryid=$rows['categoryid']; 
               echo"<option value='$categoryid'>$catname</option>";
            }
            ?> 
         </select>
         <br>
         <label for="eventimage1">Image 1:</label>
         <input type="file" id="eventimage1" name="eventimage1" required="required">
         <br>
         <label for="eventabout">Event About:</label>
         <input type="text" id="eventabout" name="eventabout" required="required">
         <br>
         <label for="eventimage2">Image 2:</label>
         <input type="file" id="eventimage2" name="eventimage2">
         <br>
         <input type="submit" name="eventsubmit" class="btn btn-info" value="Add Event">
      </div>
      </form>
</body>
</html>
