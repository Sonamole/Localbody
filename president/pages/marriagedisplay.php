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
            background-color: #3498;
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
    <h1>Marriage Certificate Requests</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name of Bride</th>
            <th>Name of Groom</th>
            <th>DOB of Bride</th>
            <th>DOB of Groom</th>
            
            <th>Phone No</th>
            <th>Email</th>
            <th>Bride Nationality</th>
            <th>Groom Nationality</th>
            <th>Date of Marriage</th>
            <th>Place of marriage</th>        
            <th>Marriage type</th>
            <th>Witness1 name</th>
            <th>Witness1 address</th>
            <th>Witness2 name</th>
            <th>Witness2 address</th>
            <th>Information</th>
            <th>Approve</th>
        </tr>
     
            <?php
                                include('../../includes/config.php');
                                $place="SELECT * FROM `tbl_marriage` WHERE `status`='2'";
                                $place_run=mysqli_query($conn,$place);
                                
                                        if(mysqli_num_rows($place_run))
                                        {                                        
                                        while ($row=mysqli_fetch_assoc($place_run))
                                         {  
                                          
                                           
                                            echo"<tr>";
                                            
                                            echo"<td>".$row['id']."</td>";
                                                echo"<td>".$row['bride_name']."</td>";
                                                echo"<td>".$row['groom_name']."</td>";
                                                echo"<td>".$row['bride_dob']."</td>";
                                                echo"<td>".$row['groom_dob']."</td>";
                                                echo"<td>".$row['contactnumber']."</td>";
                                                echo"<td>".$row['email']."</td>";
                                                echo"<td>".$row['bride_nationality']."</td>";
                                                echo"<td>".$row['groom_nationality']."</td>";
                                                echo"<td>".$row['marriage_date']."</td>";
                                                echo"<td>".$row['marriage_location']."</td>";
                                                echo"<td>".$row['marriage_type']."</td>";
                                                echo"<td>".$row['witness1_name']."</td>";
                                                echo"<td>".$row['witness1_address']."</td>";
                                                echo"<td>".$row['witness2_name']."</td>";
                                                echo"<td>".$row['witness2_address']."</td>";
                                                echo"<td>".$row['additional_info']."</td>";
                                                
                                              
                                            echo'<td class="approve"><a href="../action/approvemarriage.php?id='.$row['id'].'"><button>Approve</button></a> </td>';
                                            echo"</tr>";
                                          
                                            
                                                                                                                           
                                         }
                                        }
                                          ?>
                                          




        
        <!-- Add more rows as needed -->
    </table>
</body>
</html>
