<?php
session_start();
include('includes/config.php');
$name=$_POST['name'];
$password=$_POST['password'];

$sql="SELECT * FROM `tbl_login` WHERE `uname`='$name' AND `password`='$password'";
$res=mysqli_query($conn,$sql);
$count=mysqli_num_rows($res);
$select=mysqli_fetch_assoc($res);

if($count>0)
{
    $_SESSION["user_id"]=$select['id'];
    $_SESSION["user_type"]=$select['user_type'];

    if($select['category']=='user'){
        header('Location:user/pages/home.php');
    }
    else if($select['category']=='staff'){
        header('Location:staff/pages/home.html');
    }
    else if($select['category']=='member'){
        header('Location:member/pages/home.html');
    }
    else if($select['category']=='admin'){
        header('Location:president/pages/home.html');
    }
}
else{
    echo "<script>alert('Invalid username or password');</script>";
    // header('Location:index.html');

}
?>



