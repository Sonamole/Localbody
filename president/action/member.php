<?php
include('../../includes/config.php');
if(isset($_POST['submit'])) {

    $name=$_POST['name'];
    $age=$_POST['age'];
    $qualifications=$_POST['qualifications'];
    $mobno=$_POST['mobno'];
    $email=$_POST['email'];
    $wardno=$_POST['wardno'];
    $wardname=$_POST['wardname'];
    $maritialstatus=$_POST['maritialstatus'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    $category='member';
   

    if($_POST['hid']!=null) {
        $hid=$_POST['hid'];
        $updtq="UPDATE `tbl_member` set  `name`='$name', `age` ='$age', `qualifications`='$qualifications', `mobno` ='$mobno',`email`='$email',`wardno`='$wardno',`wardname`='$wardname',`maritialstatus`='$maritialstatus',`gender`='$gender' ,  `password`='$password' WHERE  `id`='$hid'";
 
        $results=mysqli_query($conn,$updtq);
        if($results)
        {
       
?>
<script>alert("updated successfully");</script>

<?php
        header('location:../pages/memberdisplay.php');

        }
        
    }
    else{  
    $sql="INSERT INTO `tbl_member`(`name`,`age`,`qualifications`,`mobno`,`email`,`wardno`,`wardname`,`maritialstatus`,`gender`,`password`) VALUES ('$name','$age','$qualifications','$mobno','$email','$wardno','$wardname','$maritialstatus','$gender','$password')";

    $result=mysqli_query($conn,$sql);
    
    if($result)
    {
       header('location:../pages/addmember.php');
       $sql1="INSERT INTO `tbl_login`( `uname`, `password`,`category`) VALUES ('$name','$password','$category')";
       $res1=mysqli_query($conn,$sql1);
    }
    else{
        echo"error".$sql."<br>",mysqli_error($conn);
    }
}
    }

?>