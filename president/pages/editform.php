<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
include('../../includes/config.php');
include('../../includes/session.php');  
    if (isset($_GET['up_id'])) {
    $u_name = "";
   
    $u_password = "";

    $id = $_GET['up_id'];
    $sql = "SELECT * FROM `tbl_login` WHERE  `category`='admin'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($row) {
        $u_name = $row['uname'];
      
        $u_password = $row['password'];
    }
}
?>
<?php
include("../../includes/config.php");
 
if(isset($_POST['submit'])) {
    $name=$_POST['name'];
   
    $password=$_POST['password'];
    

     $updtq="UPDATE `tbl_login` set uname='$name', password ='$password' WHERE  `category`='admin'  ";
 
        $results=mysqli_query($conn,$updtq);
        if($results)
        {
       
?>
<script>alert("updated successfully");</script>

<?php
          header('location:profile.php');

          }
    }

 ?>

    <form action="editform.php" method="post">
    <input type="hidden" id="id"   value="<?php echo isset($_GET['up_id']) ?  $_GET['up_id'] : null ?>" >
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required  value="<?php echo isset($u_name) ?  $u_name: "" ?>">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required  value="<?php echo isset($u_password) ?  $u_password: "" ?>">

        <button type="submit" name="submit">Update</button>
    </form>

</body>
</html>
