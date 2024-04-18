<?php
include('../../includes/config.php');
include('../../includes/session.php');

$sql="UPDATE `tbl_login` SET `user_type`='Tax paid'  WHERE `id`='$Uid'";

$res=mysqli_query($conn,$sql);
if($res)
{ 
    header('location:../pages/taxpayment.php');
}
else{
    echo "error".$sql1."<br>".mysqli_error($conn);
}

?>

