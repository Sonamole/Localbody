<?php
include('../../includes/config.php');
include('../../includes/session.php');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phoneno=$_POST['phoneno'];
    $wardno=$_POST['wardno'];
    $wastetype=$_POST['wastetype'];
    $userid=$Uid;
    

   
    $sql="INSERT INTO `tbl_waste`(`name`,`email`,`address`,`phoneno`,`wardno`,`wastetype`,`user_id`) VALUES ('$name','$email','$address','$phoneno','$wardno','$wastetype','$Uid')";

    $result=mysqli_query($conn,$sql);
    if($result)
    {
       
header('Location: ../pages/waste.php');

    }
    else
    {
        echo"error".$sql."<br>",mysqli_error($conn);
    }

?>