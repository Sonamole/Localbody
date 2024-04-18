<?php
include('../../includes/config.php');
include('../../includes/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tracking Status</title>
    <style>
        body {
            min-height: 50vh;
            font-family: 'Exo 2';
            font-size: 14px;
            color: #fff;
            background: #eee;
        }

        .modal-content {
            background-color: #42469d;
            border-color: #42469d;
            border-radius: 1rem;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 750px;
                margin: 1.75rem auto;
            }
        }

        .show {
            padding: 0;
        }

        .modal-header {
            border-bottom: none;
            text-align: center;
        }

        .modal-header .close {
            padding: 1rem 1rem;
            margin: -1rem -1rem -1rem 0;
            color: #fff;
        }

        :-moz-any-link:focus {
            outline: none;
        }

        .modal-title {
            line-height: 3rem;
        }

        .modal-body {
            padding: 1rem;
        }

        #progressbar {
            margin-bottom: 3vh;
            overflow: hidden;
            color: white;
            padding-left: 0px;
            margin-top: 3vh;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 0.8rem;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400;
            color: white;
        }

        #progressbar #step1:before {
            content: "";
            color: white;
            width: 20px;
            height: 20px;
            margin-left: 0px !important;
        }

        #progressbar #step2:before {
            content: "";
            color: #fff;
            width: 20px;
            height: 20px;
            margin-left: 32%;
        }

        #progressbar #step3:before {
            content: "";
            color: #fff;
            width: 20px;
            height: 20px;
            margin-right: 32%;
        }

        #progressbar #step4:before {
            content: "";
            color: rgba(151, 149, 149, 0.651);
            width: 20px;
            height: 20px;
            margin-right: 0px !important;
        }

        #progressbar li:before {
            line-height: 29px;
            display: block;
            font-size: 12px;
            background: rgba(151, 149, 149);
            border-radius: 50%;
            margin: auto;
            z-index: -1;
            margin-bottom: 1vh;
        }

        #progressbar li:after {
            content: '';
            height: 3px;
            background: rgba(151, 149, 149, 0.651);
            position: absolute;
            left: 0%;
            right: 0%;
            margin-bottom: 2vh;
            top: 8px;
            z-index: 1;
        }

        .progress-track {
            padding: 0 8%;
        }

        #progressbar li:nth-child(2):after {
            margin-right: auto;
        }

        #progressbar li:nth-child(1):after {
            margin: auto;
        }

        #progressbar li:nth-child(3):after {
            float: left;
            width: 68%;
        }

        #progressbar li:nth-child(4):after {
            margin-left: auto;
            width: 132%;
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: white;
        }

        #three {
            font-size: 1.2rem;
        }

        @media (max-width: 767px) {
            #three {
                font-size: 1rem;
            }
        }

        .details {
            padding: 2rem;
            font-size: 1.4rem;
            line-height: 3.5rem;
        }

        @media (max-width: 767px) {
            .details {
                padding: 2rem 0;
                font-size: 1rem;
                line-height: 2.5rem;
            }
        }

        .d-table {
            width: 100%;
        }

        .d-table-row {
            width: 100%;
        }

        .d-table-cell {
            padding-left: 3rem;
        }

        @media (max-width: 767px) {
            .d-table-cell {
                padding-left: 1rem;
            }
        }

        .col-3 {
            display: grid;
            text-align: end;
        }

        .col-3 .d-table-row {
            align-self: flex-end;
        }

        .fa {
            font-size: xx-large;
            text-align: center;
            width: 3rem;
            padding: 0.5rem;
            color: #42469d;
            background-color: #fff;
            border-radius: 2rem;
            bottom: 0;
            right: 0;
        }

        button:active {
            outline: none;
        }

        button:focus {
            outline: none;
        }

        button {
            margin-top: 50vh;
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
     <a href="home.php" class="Goback-button">Go back</a>
</head>
<body>
    <?php 
    $a='';
    $b='';
    $c='';
    $d='';
    $status='';
    $place = "SELECT * FROM `tbl_birth` WHERE `user_id`='$Uid'";
    $place_run = mysqli_query($conn, $place);
    
    
    if ($place_run) {
    
        while ($row = mysqli_fetch_assoc($place_run)) {
            $status = $row['status'];
        }
        
        mysqli_free_result($place_run);
    } else {
    
        echo 'Error executing query: ' . mysqli_error($conn);
    }
     if($status==0)
     {
        $a='active';
     }
     if($status==1)
     
     {
        $a='active';
        $b='active';
     }
     if($status==2)
     {
        $a='active';
        $b='active';
        $c='active';
     }
     if($status==3)
     {
        $a='active';
        $b='active';
        $c='active';  
        $d='active';
     }
      
       ?>
   
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            
                 
                <div class="modal-header">
                    <h4 class="modal-title mx-auto">CERTIFICATE REQUEST<br>Birth Cerficate</h4>
                   
                </div>
                
                
                <div class="modal-body">
                    <div class="progress-track">
                        <ul id="progressbar">
                            <li class="<?php echo $a; ?>" id="step1"><span id="three"> Application Submitted </li>
                            <li class="<?php echo $b; ?>" id="step2"><span id="three"> Staff </li>
                            <li class="<?php echo $c; ?>" id="step3"><span id="three"> Member</span></li>
                            <li class="<?php echo $d; ?>" id="step4"><span id="three"> President</span></li>
                           
                        </ul>
                    </div>
                                 
            </div>
        </div>
    </div>





    <?php 
    $a='';
    $b='';
    $c='';
    $d='';
    $status='';
    $place = "SELECT * FROM `tbl_marriage` WHERE `user_id`='$Uid'";
    $place_run = mysqli_query($conn, $place);
    
    
    if ($place_run) {
    
        while ($row = mysqli_fetch_assoc($place_run)) {
            $status = $row['status'];
        }
        
        mysqli_free_result($place_run);
    } else {
    
        echo 'Error executing query: ' . mysqli_error($conn);
    }
     if($status==0)
     {
        $a='active';
     }
     if($status==1)
     
     {
        $a='active';
        $b='active';
     }
     if($status==2)
     {
        $a='active';
        $b='active';
        $c='active';
     }
     if($status==3)
     {
        $a='active';
        $b='active';
        $c='active';  
        $d='active';
     }
      
       ?>
   
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            
                 
                <div class="modal-header">
                    <h4 class="modal-title mx-auto">CERTIFICATE REQUEST<br> Marriage Cerficate</h4>
                   
                </div>
                
                
                <div class="modal-body">
                    <div class="progress-track">
                        <ul id="progressbar">
                            <li class="<?php echo $a; ?>" id="step1"><span id="three"> Application Submitted </li>
                            <li class="<?php echo $b; ?>" id="step2"><span id="three"> Staff </li>
                            <li class="<?php echo $c; ?>" id="step3"><span id="three"> Member</span></li>
                            <li class="<?php echo $d; ?>" id="step4"><span id="three"> President</span></li>
                           
                        </ul>
                    </div>
                                 
            </div>
        </div>
    </div>


    <?php 
    $a='';
    $b='';
    $c='';
    $d='';
    $status='';
    $place = "SELECT * FROM `tbl_death` WHERE `user_id`='$Uid'";
    $place_run = mysqli_query($conn, $place);
    
    
    if ($place_run) {
    
        while ($row = mysqli_fetch_assoc($place_run)) {
            $status = $row['status'];
        }
        
        mysqli_free_result($place_run);
    } else {
    
        echo 'Error executing query: ' . mysqli_error($conn);
    }
     if($status==0)
     {
        $a='active';
     }
     if($status==1)
     
     {
        $a='active';
        $b='active';
     }
     if($status==2)
     {
        $a='active';
        $b='active';
        $c='active';
     }
     if($status==3)
     {
        $a='active';
        $b='active';
        $c='active';  
        $d='active';
     }
      
       ?>
   


    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            
                 
                <div class="modal-header">
                    <h4 class="modal-title mx-auto">CERTIFICATE REQUEST<br> Death Certificate  </h4>
                   
                </div>
                
                
                <div class="modal-body">
                    <div class="progress-track">
                        <ul id="progressbar">
                            <li class="<?php echo $a; ?>" id="step1"><span id="three"> Application Submitted </li>
                            <li class="<?php echo $b; ?>" id="step2"><span id="three"> Staff </li>
                            <li class="<?php echo $c; ?>" id="step3"><span id="three"> Member</span></li>
                            <li class="<?php echo $d; ?>" id="step4"><span id="three"> President</span></li>
                           
                        </ul>
                    </div>
                                 
            </div>
        </div>
    </div>

    
</body>
</html>
