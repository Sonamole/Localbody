<?php
include('../../includes/config.php');
include('../../includes/session.php');

?>


<!DOCTYPE html>
<html>
<head>
<title>GRAMA PANCHAYATH-User</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
  .logout-button {
    display: inline-block;
    padding: 10px ;
    background-color:grey;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    /* padding-left:60px; */
    width:70px;
}
</style>
</head>
<body id="top">

<div class="wrapper row0">
  
</div>

<div class="wrapper row1">
  <header id="header" class="clear"> 
   
    <div id="logo" class="fl_left">
      <h1><a href="">Grama panchayath-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User</a></h1>
      <p></p>
    </div>
 
    
  </header>
</div>
<a href="../../includes/logout.php" class="logout-button">Log Out</a>
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
   
      <ul class="clear">
        <li class="active"><a href="profile.php">Profile</a></li>
        <li><a class="drop" href="">Applications</a>
          <ul>
            
            <li><a href="birth.php">Birth certificates</a></li>
            <li><a href="marriage.php">Marriage certificates</a></li>
            <li><a href="death.php">Death certificates</a></li>
            <li><a href="waste.php">Waste apply</a></li>

          </ul>
        </li>
        
        
      
        <li><a href="wastedisplay.php">Waste management</a></li>
<!-- ///////////////////////////////////////// -->

<?php
include('../../includes/config.php');
// include('../../includes/session.php');

$place = "SELECT * FROM `tbl_login` WHERE `id`='$Uid'";
$place_run = mysqli_query($conn, $place);
$row = mysqli_fetch_assoc($place_run);
$tax=$row['user_type'];
if($tax=='Tax not paid')
 
    { 
      echo "<li><a href='taxpayment.php'>Tax payment</a></li>";
    }
 

?>








       
       <!-- <li><a href="taxpayment.php">Tax payment</a></li> -->
       <button style="background-color: green ;color:white;"><?php echo $Utype; ?></button>


        
      </ul>
      
    </nav>
  </div>
</div>

<div class="wrapper">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 
      
      <figure id="slide-1"><a class="view" href=""><img src="https://images.firstpost.com/wp-content/uploads/2019/07/File-image-of-Kerala-Legislative-Assembly-in-Thiruvananthapuram.-Wiki-Commons-social.jpg           " alt=""></a>
        <!-- <figcaption>
          <h2>ABOUT</h2>
          <p>A Grama Panchayat, also known as a village panchayat or rural local body, is a key administrative and governing unit in the decentralized system of rural governance in India. </p>
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption> -->
      </figure>

      <ul id="slide-tabs">
        
        <li><a href="checkstatus.php">Check Status</a></li>
        <li><a href="notification.php">Notifications</a></li>
        <li><a href="memberdisplay.php">Elected Members</a></li>
        <li><a href="staffdisplay.php">Elected Staff</a></li>
        <li><a href="noticedisplay.php">Latest News &amp; Events</a></li>
      </ul>
      
    </div>
  </div>
</div>
 
<!-- JAVASCRIPTS --> 
<script src="layout/scripts/jquery.min.js"></script> 
<script src="layout/scripts/jquery.fitvids.min.js"></script> 
<script src="layout/scripts/jquery.mobilemenu.js"></script> 
<script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>
</html>