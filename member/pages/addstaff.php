<?php
include('../../includes/config.php');
    if(isset($_GET['up_id'])){
        $u_name="";
        $u_age="";
        $u_qualifications="";
        $u_mobno="";
        $u_email="";
        $u_password="";
        
    
    $id=$_GET['up_id'];   
    $sql="SELECT * from `tbl_staff` WHERE `id`='$id'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    if($row){
    
        
        $u_name=$row['name'];
        $u_age=$row['age'];
        $u_qualifications=$row['qualifications'];
        $u_mobno=$row['mobno'];
        $u_email=$row['email'];
        $u_password=$row['password'];
    }
                                                    
    }
       
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        /* Internal CSS for styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        nav {
            background-color: #444;
            color: #fff;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .form-group select {
            flex: 2;
            
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
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
<body>
    <header>
        <h1>Add Staff</h1>
    </header>
    <a href="home.html" class="Goback-button">Go back</a>
    

    <div class="container">
        <h2>Add Staff</h2>
        <form action="../action/staff.php" method="post">
        <input type="hidden" name="hid" value="<?php echo isset($_GET['up_id']) ?  $_GET['up_id'] : null ?>" >
            <label for="name" >name:</label>
            <input type="text" id="name" name="name" required value="<?php echo isset($u_name) ?  $u_name: "" ?>">

            <label for="age">age:</label>
            <input type="text" id="age" name="age" required value="<?php echo isset($u_age) ?  $u_age: "" ?>">

            
            <label for="qualifications" >qualifications:</label>
            <input type="text" id="qualifications" name="qualifications" required value="<?php echo isset($u_qualifications) ?  $u_qualifications: "" ?>">

            <label for="mobno" >mob_no:</label>
            <input type="text" id="mobno" name="mobno" required  value="<?php echo isset($u_mobno) ?  $u_mobno: "" ?>">

            <label for="email" >email:</label>
            <input type="text" id="email" name="email" required value="<?php echo isset($u_email) ?  $u_email: "" ?>">

            <div class="form-group">
                <label for="wardno">Ward Number:</label>
                <select id="wardno" name="wardno" required>
                    <?php
                    include('../../includes/config.php');
                    $sql = "SELECT `wardno` FROM `tbl_wardno`";
                    $result = mysqli_query($conn, $sql);
                
                    // Generate dropdown options
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                        echo '<option value="' . $row['wardno'] . '">' . $row['wardno'] . '</option>';
                    }
                ?>
                </select>
            </div>

            <div class="form-group">
                <label for="wardno">Ward Name:</label>
                <select id="wardno" name="wardname" required>
                <?php
							include('../../includes/config.php');
							$sql = "SELECT `wardname` FROM `tbl_wardname`";
    $result = mysqli_query($conn, $sql);

    // Generate dropdown options
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['wardname'] . '">' . $row['wardname'] . '</option>';
    }
	?>
                </select>
            </div>

            
            <label for="maritialstatus" >maritial_status:</label>
            <input type="radio" id="maritialstatus" name="maritialstatus" value="maritialstatus" required> Yes
                <input type="radio" id="maritialstatus" name="maritialstatus" value="maritialstatus" required> No
            <label for="gender" >gender:</label>
            <input type="radio" id="gender" name="gender" value="gender" required>Male
                <input type="radio" id="gender" name="gender" value="gender" required>Female
            

            <label for="password" >password:</label>
            <input type="text" id="" name="password" required  value="<?php echo isset($u_password) ?  $u_password: "" ?>">


        
            <input type="submit"  name="submit" value="Submit">
        </form>
    </div>
</body>
</html>
