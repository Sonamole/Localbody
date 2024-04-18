<?php
session_start();
include('../../includes/config.php');
$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$wardno=$_POST['wardno'];
$taluk=$_POST['taluk'];
$password=$_POST['password'];
$category='member';

$sql="INSERT INTO `tbl_memberreg`( `name`, `email`, `age`, `wardno`, `taluk`,`password`) VALUES ('$name','$email','$age','$wardno','$taluk','$password')";
$res=mysqli_query($conn,$sql);
if($res){
    header("location:../../index.html");
    $sql1="INSERT INTO `tbl_login`( `uname`, `password`,`category`) VALUES ('$name','$password','$category')";
$res1=mysqli_query($conn,$sql1);
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
?> 
