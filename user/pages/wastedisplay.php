<?php
 include('../../includes/session.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waste Management Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .field {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        p {
            margin: 0;
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
    <div class="container">
    
        <?php
        include('../../includes/config.php');
        $place="SELECT * FROM `tbl_waste` WHERE `status`='2'  AND `user_id`='$Uid'";
        $place_run=mysqli_query($conn,$place);
        
                if(mysqli_num_rows($place_run))
                {                                        
                while ($row=mysqli_fetch_assoc($place_run))
                 {  
                     echo"<h1>Waste Management Details</h1>";
                     echo '<h1 style="color:green; font-size:20px;">Your waste is Collected!!</h1>';

                    echo"<p><b>Name:".$row ['name']."</b></p><br>";
                    echo"<p><b>Ward no:".$row ['wardno']."</b></p><br>";
                    echo"<p><b>Waste type:".$row ['wastetype']."<b></p>";

            
                 }
                }
                ?>
        
    </div>
</body>
</html>
