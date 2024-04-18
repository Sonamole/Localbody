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
<!-- style="background-image: url(../layout/image/birth.jpg) ;background-size:'cover'" -->
    <h1>Death Certificate Requests</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Applicant Name</th>
            <th>Relationship</th>
            <th>Address</th>
            <th>Phone no</th>
            <th>Email</th>
            <th>Deaceased name</th>
            <th>Date of death</th>
            <th>Age at time of death</th>
            <th>Gender</th>

            <th>Purpose</th>
            <th>Declaration</th>
           
            <th>Approve</th>
        </tr>




      
            <?php
                                include('../../includes/config.php');
                                $place="SELECT * FROM `tbl_death` WHERE `status`='2'";
                                $place_run=mysqli_query($conn,$place);
                                
                                        if(mysqli_num_rows($place_run))
                                        {                                        
                                        while ($row=mysqli_fetch_assoc($place_run))
                                         {  
                                          
                                           
                                            echo"<tr>";
                                            
                                            echo"<td>".$row['id']."</td>";
                                                echo"<td>".$row['applicantname']."</td>";
                                                echo"<td>".$row['relationshiptodeceased']."</td>";
                                                echo"<td>".$row['address']."</td>";
                                                echo"<td>".$row['phoneno']."</td>";
                                                echo"<td>".$row['email']."</td>";
                                                echo"<td>".$row['deceasedname']."</td>";
                                                echo"<td>".$row['dateofdeath']."</td>";
                                                echo"<td>".$row['ageattimeofdeath']."</td>";
                                                echo"<td>".$row['gender']."</td>";
                                                echo"<td>".$row['purpose']."</td>";
                                                echo"<td>".$row['declaration']."</td>";
                                                
                                                
                                              
                                            echo'<td class="approve"><a href="../action/approvedeath.php?id='.$row['id'].'"><button>Approve</button></a> </td>';
                                            echo"</tr>";
                                          
                                            
                                                                                                                           
                                         }
                                        }
                                          ?>
                                          




        
        <!-- Add more rows as needed -->
    </table>
</body>
</html>
