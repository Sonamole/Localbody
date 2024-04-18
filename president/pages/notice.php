<?php
include('../../includes/config.php');
    if(isset($_GET['up_id'])){
        $u_event="";
        $u_description="";
         
        
    
    $id=$_GET['up_id'];   
    $sql="SELECT * from `tbl_notice` WHERE `id`='$id'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    if($row){
    
        
        $u_event=$row['event'];
        $u_description=$row['description'];
        
    }
                                                    
    }
       
    ?>





<!DOCTYPE html>
<html>
<head>
    <title>Notice Entry Form</title> 
    <style>
         .Goback-button {
            display: inline-block;
            padding: 10px ;
            background-color: black;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
             
        }
        </style>
        <a href="home.html" class="Goback-button">Go back</a>
</head>
<!-- <a href="home.html" class="Goback-button">Go back</a> -->
<body style="background-color: #f0f0f0; font-family: Arial, sans-serif; text-align: center; padding: 20px;">
<form action="../action/notices.php" method="post"  style="max-width: 400px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);">
<input type="hidden" name="hid" value="<?php echo isset($_GET['up_id']) ?  $_GET['up_id'] : null ?>" >
    <h1 style="color: #007BFF;">Enter a Notice</h1>

    <form style="max-width: 400px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);">

        <label for="noticetitle" style="display: block; margin-bottom: 10px; font-weight: bold;">Notice Title:</label>
        <input type="text" id="noticetitle" name="noticetitle" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;" required value="<?php echo isset($u_event) ?  $u_event: "" ?>">

        <label for="noticecontent" style="display: block; margin-bottom: 10px; font-weight: bold;">Notice Content:</label>
        <textarea id="noticecontent" name="noticecontent" style="width: 100%; height: 150px; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;" required><?php echo isset($u_description) ?  $u_description: "" ?></textarea>

        <button type="submit" name="post" style="background-color: #007BFF; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Submit Notice</button>
    </form>

</body>
</html>
