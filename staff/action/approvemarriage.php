<?php
include('../../includes/config.php');
$id=$_GET['id'];

$sql="UPDATE `tbl_marriage` SET `status`='1'  WHERE `id`='$id'";
$res=mysqli_query($conn,$sql);
if($res)
{ 
    header("location:../pages/marriagedisplay.php");
}
else{
    echo "error".$sql1."<br>".mysqli_error($conn);
}
?>
