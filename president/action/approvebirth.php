<?php
include('../../includes/config.php');
include('../../includes/session.php');
$id=$_GET['id'];

$sql="UPDATE `tbl_birth` SET `status`='3'  WHERE `id`='$id'";
$res=mysqli_query($conn,$sql);
if($res)
{ 
    header("location:../pages/birthdisplay.php");
}
else{
    echo "error".$sql1."<br>".mysqli_error($conn);
}
?>

