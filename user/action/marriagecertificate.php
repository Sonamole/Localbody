<?php
include('../../includes/config.php');
include('../../includes/session.php');

    $bride_name=$_POST['bride_name'];
    $groom_name=$_POST['groom_name'];
    $bride_dob=$_POST['bride_dob'];
    $groom_dob=$_POST['groom_dob'];
    $contact_number=$_POST['contact_number'];
    $email=$_POST['email'];
    $bride_nationality=$_POST['bride_nationality'];
    $groom_nationality=$_POST['groom_nationality'];
    $marriage_date=$_POST['marriage_date'];
    $marriage_location=$_POST['marriage_location'];
    $marriage_type=$_POST['marriage_type'];
    $witness1_name=$_POST['witness1_name'];
    $witness1_address=$_POST['witness1_address'];
    $witness2_name=$_POST['witness2_name'];
    $witness2_address=$_POST['witness2_address'];
    $additional_info=$_POST['additional_info'];
    
    $userid=$Uid;

    $sql="INSERT INTO `tbl_marriage`(`bride_name`,`groom_name`,`bride_dob`,`groom_dob`,`contactnumber`,`email`,`bride_nationality`,`groom_nationality`,`marriage_date`,`marriage_location`,`marriage_type`,`witness1_name`,`witness1_address`,`witness2_name`,`witness2_address`,`additional_info`,`user_id`) VALUES ('$bride_name','$groom_name','$bride_dob','$groom_dob','$contact_number','$email','$bride_nationality','$groom_nationality','$marriage_date','$marriage_location','$marriage_type','$witness1_name','$witness1_address','$witness2_name','$witness2_address','$additional_info','$Uid')";

    $result=mysqli_query($conn,$sql);
    if($result)
    {
       header('Location:../pages/marriage.php');

    }
    else
    {
        echo"error".$sql."<br>",mysqli_error($conn);
    }

?>