<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Profile - Panchayat Portal</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color:#42469d;
            color: white;
            text-align: center;
            padding: 1em;
        }

        section {
            max-width: 600px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        .user-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .user-details div {
            flex: 1;
        }

        .user-details label {
            font-weight: bold;
            color: #555;
        }

        .user-details p {
            margin: 0;
        }

        .edit-profile-btn {
            background-color: #42469d;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .edit-profile-btn:hover {
            background-color:#42469d;

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
        <h1> Profile</h1>
        <a href="home.php" class="Goback-button">Go back</a>
    </header>

    <section>
        <h1>User Profile</h1>

        <?php
include('../../includes/config.php');
include('../../includes/session.php');
$place = "SELECT * FROM `tbl_login`WHERE `id`='$Uid' ";
$place_run = mysqli_query($conn, $place);

if (mysqli_num_rows($place_run)) {
    while ($row = mysqli_fetch_assoc($place_run)) {
        // echo "<div class='user-details'>";
         echo "<h4> <b>Name:</b>" . $row['uname'] . "</h4>";
        // echo "<h4> <b>Email:</b>" . $row['email'] . "</h4>";
        // echo "<h4> <b>Age:</b>" . $row['age'] . "</h4>";
        // echo "<h4> <b>Ward No:</b>" . $row['wardno'] . "</h4>";
       // echo "<h4> <b>Taluk:</b>" . $row['taluk'] . "</h4> ";
        echo "<h4> <b>Password:</b>" . $row['password'] . "</h4> ";

        // echo "</div>";
         echo '<button class="edit-profile-btn"><a href="register.php?up_id=' . $row['id'] . '">Edit Profile</a></button>';


    }
}
?>


    </section>


</body>
</html>
