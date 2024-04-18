<!DOCTYPE html>
<html>
<head>
    <title>Panchayat Member Details</title>
    <style>
        /* Example CSS for styling the table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #f9f9f9;
        }

        tr:nth-child(even) {
            background-color: #e0e0e0;
        }

        tr:hover {
            background-color: #d0d0d0;
        }

        /* CSS for the image */
        img {
            max-width: 100px;
            max-height: 100px;
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
     <!-- <a href="home.html" class="Goback-button">Go back</a> -->
</head>
<body>
    <table>
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Age</th>
                <th>Qualifications</th>
                <th>Mob no</th>
                <th>Ward no</th>
                <th>Ward name   </th>
                <th>Maritial Status</th>
                <th>gender</th>
            </tr>
        </thead>
        <tbody>
            
        <h1>MEMBERS</h1>
    <div class="notice-container">

        <?php
        include('../../includes/config.php');
        $sql = "SELECT * FROM `tbl_member`";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
            
            
           while ($row = mysqli_fetch_array($result)) {
            
           echo" <tr>";
                 
               echo" <td>". $row['name'] . "</td>";
               echo"  <td>".$row['age']."</td>";
              echo"  <td>".$row['qualifications']."</td>";
              echo"  <td>".$row['mobno']."</td>";
               echo" <td>".$row['wardno']."</td>";
               echo" <td>".$row['wardname']."</td>";
               echo" <td>".$row['maritialstatus']."</td>";
               echo" <td>".$row['gender']."</td>";
            echo"</tr>";


            
}
?>
            <!-- Add more member details in additional rows as needed -->
        </tbody>
    </table>
</body>
</html>
