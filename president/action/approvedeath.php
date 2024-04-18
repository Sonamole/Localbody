<?php
include('../../includes/config.php');
include('../../includes/config.php');

$id=$_GET['id'];

$sql="UPDATE `tbl_death` SET `status`='3'  WHERE `id`='$id' ";
$res=mysqli_query($conn,$sql);
if($res)
{ 
    header("location:../pages/deathdisplay.php");
}
else{
    echo "error".$sql1."<br>".mysqli_error($conn);
}
?>

