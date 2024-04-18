<?php
include('../../includes/config.php');
include('../../includes/session.php');
    $applicantname=$_POST['applicantname'];
    $relationship=$_POST['relationship'];
    $childname=$_POST['childname'];
    $dateofbirth=$_POST['dateofbirth']; 
    $timeofbirth=$_POST['timeofbirth'];
    $placeofbirth=$_POST['placeofbirth'];
    $childsex=$_POST['childsex'];
    $mothername=$_POST['mothername'];
    $fathername=$_POST['fathername'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zipcode=$_POST['zipcode'];
    $phonenumber=$_POST['phonenumber'];
    $emailaddress=$_POST['emailaddress'];
    $copytype=$_POST['copytype'];
    $declaration=$_POST['declaration'];
    
    $userid=$Uid;

    $sql="INSERT INTO `tbl_birth`(`applicantname`,`relationship`,`childname`,`dateofbirth`,`timeofbirth`,`placeofbirth`,`childsex`,`mothername`,`fathername`,`city`,`state`,`zipcode`,`phonenumber`,`emailaddress`,`copytype`,`declaration`,`user_id`)VALUES('$applicantname',' $relationship','$childname','$dateofbirth','$timeofbirth','$placeofbirth','$childsex','$mothername','$fathername','$city','$state','$zipcode','$phonenumber','$emailaddress','$copytype','$declaration','$Uid')";
    
    $result=mysqli_query($conn,$sql);
    if($result)
    {
header('Location: ../pages/birth.php');
    }
    else
    {
        echo"error".$sql."<br>",mysqli_error($conn);
    }

?>



