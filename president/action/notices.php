<?php
include('../../includes/config.php');
if(isset($_POST['post']))
{
    $event=$_POST['noticetitle'];
    $description=$_POST['noticecontent'];
    if($_POST['hid']!=null) {
        $hid=$_POST['hid'];

     $updtq="UPDATE `tbl_notice` set  `event`='$event', `description` ='$description' WHERE  `id`='$hid'";
     $results=mysqli_query($conn,$updtq);
     
      
    if($results)
    {
             
        echo "<script>alert('Updated successfully')</script>";
    }

header('Location: ../pages/noticedisplay.php');

    }
    else{  
        $sql="INSERT INTO `tbl_notice`(`event`,`description`) VALUES ('$event','$description')";
    
        $result=mysqli_query($conn,$sql);
        
        if($result)
        {
           header('location:../pages/notice.php');
            
        }
    else
    {
        echo"error".$sql."<br>",mysqli_error($conn);
    }
}
// }
}
?>
