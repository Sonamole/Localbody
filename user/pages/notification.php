<?php
 include('../../includes/session.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #474e5d;
  font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
.Goback-button {
            display: inline-block;
            padding: 10px ;
            background-color: black;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
             
        }
</style>
</head>
<a href="home.php" class="Goback-button">Go back</a>
<body>

<?php
include('../../includes/config.php');
   echo"<div class='timeline'>";
   echo"<div class='container left'>";
   echo"<div class='content'>";
      // <!-- <h2 style="color:green">Birth Certificate is approved!!</h2> -->
      
   
                                
                                
                          
                                $place="SELECT * FROM `tbl_birth` WHERE `status`='3' AND `user_id`='$Uid'";
                                $place_run=mysqli_query($conn,$place);
                                                                                                                                     
                                        if(mysqli_num_rows($place_run))
                                        {                                        
                                        while ($row=mysqli_fetch_assoc($place_run))

                                         {
                                          echo"<h1 style='color:green'>Birth Certificate is approved!! </h1>";
      echo"<p>Applicant Name:".$row ['applicantname']."</p>";
      echo"<p>Child Name:".$row ['childname']."</p>";
      echo"<p>Date of Birth:".$row ['dateofbirth']."</p>";
                                         }
                                         }
                   ?>                       
      
    </div>
  </div>

  <div class="container right">
    <div class="content">
      <!-- <h2 style="color:green">Marriage Certificate is approved!!</h2> -->
      
      <?php
                                 
                          
                                $place="SELECT * FROM `tbl_marriage` WHERE `status`='3'  AND `user_id`='$Uid'";
                                $place_run=mysqli_query($conn,$place);
                                                                                                                                     
                                        if(mysqli_num_rows($place_run))
                                        {                                        
                                        while ($row=mysqli_fetch_assoc($place_run))

                                         {
                                          echo"<h1 style='color:green'>Marriage Certificate is approved!! </h1>";
      echo"<p>Name of Bride:".$row ['groom_name']."</p>";
      echo"<p>Name of Groom:".$row ['bride_name']."</p>";
      echo"<p>Date of Marriage:".$row ['marriage_date']."</p>";
                                         }
                                         }
                                         
      ?>
    </div>
  </div>

  <div class="container left">
    <div class="content">
      <!-- <h2 style="color:green">Death Certificate is approved!!</h2> -->
      
      <?php
                                
                          
                                $place="SELECT * FROM `tbl_death` WHERE `status`='3'  AND `user_id`='$Uid'";
                                $place_run=mysqli_query($conn,$place);
                                                                                                                                     
                                        if(mysqli_num_rows($place_run))
                                        {                                        
                                        while ($row=mysqli_fetch_assoc($place_run))

                                         {
                                          echo"<h1 style='color:green'>Death Certificate is approved!! </h1>";
                                         
      echo"<p>Applicant Name:".$row ['applicantname']."</p>";
      echo"<p>Deceased name:".$row ['deceasedname']."</p>";
      echo"<p>Date of death:".$row ['dateofdeath']."</p>";
                                         }
                                         }
                                         ?>
      
    </div>
  </div>
 
  
</div>

</body>
</html>






















 <!-- <div class="container right">
    <div class="content">
      <h2>2016</h2>
      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
    </div>
  </div> -->