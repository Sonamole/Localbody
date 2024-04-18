<?php
include('../../includes/config.php');
include('../../includes/session.php');
 
if(isset($_POST['signin'])) {
   
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $wardno=$_POST['wardno'];
    $taluk=$_POST['taluk'];
    $password=$_POST['password'];
    $category='user';
     

    if($_POST['hid']!=null) {
        $hid=$_POST['hid'];
   
 
     $updtq="UPDATE `tbl_reg` set `name`='$name',`email` ='$email',`age`='$age',`wardno`='$wardno',`taluk`='$taluk',`password`='$password' WHERE `id`='$hid' ";
 
        $results=mysqli_query($conn,$updtq);
        if($results)
        {
            $update="UPDATE `tbl_login` set `uname`='$name',`password`='$password' WHERE  `id`='$hid' ";
 
            $res=mysqli_query($conn,$update);
            header('location:../pages/profile.php');
        }
    }

else{


$sql="INSERT INTO `tbl_reg`( `name`, `email`, `age`, `wardno`, `taluk`,`password`) VALUES ('$name','$email','$age','$wardno','$taluk','$password')";
$res=mysqli_query($conn,$sql);
if($res){
    header("location:../../index.html");
    $sql1="INSERT INTO `tbl_login`( `uname`, `password`,`category`) VALUES ('$name','$password','$category')";
    $res1=mysqli_query($conn,$sql1);
}
else{
    echo "error".$sql."<br>".mysqli_error($conn);
}
}
}
?> 

