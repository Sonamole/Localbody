<?php
include('../../includes/config.php');
$id=$_GET['id'];

$sql="UPDATE `tbl_waste` SET `status`='1'  WHERE `id`='$id' ";
$res=mysqli_query($conn,$sql);
if($res)
{ 
    header("location:../pages/wastedisplay.php");
}
else{
    echo "error".$sql1."<br>".mysqli_error($conn);
}
?>

