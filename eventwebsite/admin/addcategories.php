<?php
include('../includes/connect.php');
?>
<?php

if(isset($_POST['upload_cat'])){
    $catname=$_POST['cat_name'];
    $catpic=$_FILES['cat_pic']['name'];
    $temppic=$_FILES['cat_pic']['temp_name'];
    if($catname=='' or  $catpic==''){
        echo"<script> alert('please fill all the available fields')</script>";
        exit();
    }
    else{
        $selectquery="Select * from `newcategories` where categoriename='$catname' ";
        $res=mysqli_query($con,$selectquery);
        $number=mysqli_num_rows($res);
        if($number>0){
            echo"<script> alert('the categorie name is existing already in categories')</script>";
        }
        else{
        move_uploaded_file($temppic,"./eventimage/$catpic");
        $insert_cat="insert into `newcategories` (categoriename,categoriepic) 
        values('$catname','$catpic')";
        $res_query=mysqli_query($con,$insert_cat);
        if($res_query){
            echo"<script> alert('SUCESS')</script>";           
         }
    }   
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="" method="post" enctype="multipart/form-data" >
        <div >
        <label for="cat_name">CATEGORIE NAME</label>
        <input type="text" name="cat_name" id="cat_name" placeholder="cat_name">
        <br>
        <label for="cat_pic">UPLOAD CATEGORIES PHOTO</label>
        <input type="file" name="cat_pic" id="cat_pic"   >
        <br>
        <input type="submit" id="upload_cat" name="upload_cat" class="btn btn-info" value="Upload newCategories" >
        </div>
    </form> 
</body>
</html>



