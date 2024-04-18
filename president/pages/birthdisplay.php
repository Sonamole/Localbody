<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #e6e6e6;
        }

        .approve {
            background-color: #27ae60;
            color: white;
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
<a href="home.html" class="Goback-button">Go back</a>
<body>
    <h1>Birth Certificate Requests</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Applicant Name</th>
            <th>Relationship</th>
            <th>Child Name</th>
            <th>Date of Birth</th>
            <th>Time of Birth</th>
            <th>Place of Birth</th>
            <th>Child Sex</th>
            <th>Mother Name</th>
            <th>Father Name</th>

            <th>City</th>
            <th>State</th>
            <th>Postal code</th>
        
            <th>Phone no</th>
            <th>Email</th>
            <th>Copytype</th>
            <th>Declaration</th>
            <th>Approve</th>
        </tr>




      
            <?php
                                include('../../includes/config.php');
                                $place="SELECT * FROM `tbl_birth` WHERE `status`='2'";
                                $place_run=mysqli_query($conn,$place);
                                
                                        if(mysqli_num_rows($place_run))
                                        {                                        
                                        while ($row=mysqli_fetch_assoc($place_run))
                                         {  
                                          
                                           
                                            echo"<tr>";
                                            
                                            echo"<td>".$row['id']."</td>";
                                                echo"<td>".$row['applicantname']."</td>";
                                                echo"<td>".$row['relationship']."</td>";
                                                echo"<td>".$row['childname']."</td>";
                                                echo"<td>".$row['dateofbirth']."</td>";
                                                echo"<td>".$row['timeofbirth']."</td>";
                                                echo"<td>".$row['placeofbirth']."</td>";
                                                echo"<td>".$row['childsex']."</td>";
                                                echo"<td>".$row['mothername']."</td>";
                                                echo"<td>".$row['fathername']."</td>";
                                                echo"<td>".$row['city']."</td>";
                                                echo"<td>".$row['state']."</td>";
                                                echo"<td>".$row['zipcode']."</td>";
                                                echo"<td>".$row['phonenumber']."</td>";
                                                echo"<td>".$row['emailaddress']."</td>";
                                                echo"<td>".$row['copytype']."</td>";
                                                echo"<td>".$row['declaration']."</td>";
                                                
                                              
                                             echo'<td class="approve"><a href="../action/approvebirth.php?id='.$row['id'].'"><button>Approve</button></a> </td>';
                                            echo"</tr>";
                                          
                                            
                                                                                                                           
                                         }
                                        }
                                          ?>
                                          




        
        <!-- Add more rows as needed -->
    </table>
</body>
</html>
