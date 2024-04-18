<?php
include('../../includes/config.php');
include('../../includes/session.php');
    $applicantname=$_POST['applicantname'];
    $relationshiptodeceased=$_POST['relationshiptodeceased'];   
    $address=$_POST['address'];
    $phoneno=$_POST['phoneno'];
    $email=$_POST['email'];
    $deceasedname=$_POST['deceasedname'];
    $dateofdeath=$_POST['dateofdeath'];
    $ageattimeofdeath=$_POST['ageattimeofdeath'];
    $gender=$_POST['gender'];
    $purpose=$_POST['purpose'];
    $declaration=$_POST['declaration'];
   
    $userid=$Uid;

    $sql="INSERT INTO `tbl_death`(`applicantname`,`relationshiptodeceased`,`address`,`phoneno`,`email`,`deceasedname`,`dateofdeath`,`ageattimeofdeath`,`gender`,`purpose`,`declaration`,`user_id`) VALUES ('$applicantname','$relationshiptodeceased','$address','$phoneno','$email','$deceasedname','$dateofdeath','$ageattimeofdeath','$gender','$purpose','$declaration','$Uid')";

    $result=mysqli_query($conn,$sql);
    if($result)
    { 
       header('Location: ../pages/death.php');

    }
    else
    {
        echo"error".$sql."<br>",mysqli_error($conn);
    }
?>