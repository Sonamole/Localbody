<?php
include('../../includes/config.php');

    $email=$_POST['email'];
    $password=$_POST['password'];   
    $sql="SELECT * FROM `tbl_reg` where `email`='$email' and `password`='$password'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    $select=mysqli_fetch_assoc($result);

    if($count>0)
    {
        // $_SESSION['user_id']= $select['id'];
        header('location:../pages/home.html');
    }
    else
    {
    echo "error".$sql."<br>".mysqli_error($conn);
    }
    ?>

    