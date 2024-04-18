<!DOCTYPE html>
<html>

<head>
    <title>Notice Display</title>
    <style>

body {
            background-image: url('https://th.bing.com/th/id/R.f6d771c7fd8a38218a39fdc4e9acbc6c?rik=mmEmMCWzsdtO0A&riu=http%3a%2f%2fwww.emaildesignreview.com%2fwp-content%2fuploads%2f2018%2f12%2fabstract-background-1024x273.jpg&ehk=xgC1J%2fP3FKn6C%2fUmsFx1KrX1Lc7tdKqqW230BVHX6X0%3d&risl=&pid=ImgRaw&r=0');
            background-size: cover;
            background-position: center;
        }
        /* Internal CSS for styling the notice container */
        .notice-container {
            background-color: #f3f3f3;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
        }

        /* Internal CSS for styling the notice box */
        .notice-box {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px 0;
            background-color: #fff;
            transition: background-color 0.3s;
        }

        /* Internal CSS for styling the notice title */
        .notice-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        /* Internal CSS for styling the notice content */
        .notice-content {
            font-size: 18px;
            color: #666;
        }

        /* Add a hover effect */
        .notice-box:hover {
            background-color: #f0f0f0;
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
     <a href="home.php" class="Goback-button">Go back</a>
</head>

<body>
    <h1>Notices</h1>
    <div class="notice-container">

        <?php
        include('../../includes/config.php');
        $sql = "SELECT * FROM `tbl_notice`";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        while ($row = mysqli_fetch_array($result)) {
            echo "<div class='notice-box'>";
            echo "<div class='notice-title'>" . $row['event'] . "</div>";
            echo "<div class='notice-content'>" . $row['description'] . "</div>";
            echo "</div>";
        }
        ?>

    </div>
</body>

</html>
