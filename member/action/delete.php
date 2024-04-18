<?php
include('../../includes/config.php');
$id=$_GET['id'];
$sql="DELETE FROM `tbl_staff` WHERE `id`='$id'";
$res=mysqli_query($conn,$sql);
if($res)
{ 
    header("location:../pages/memberdisplay.php");
}
else{
    echo "error".$sql1."<br>".mysqli_error($conn);
}
?>