<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('https://infrastructure.aecom.com/hubfs/proj-sg-recycling.jpeg#keepProtocol'); /* Replace with your image URL */
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 0;
    }
    
    header {
      background-color: ;
      color: #000;
      text-align: center;
      padding: 20px;
    }
    
    .container {
      width: 80%;
      margin: 0 auto;
      padding: 20px;
      background-color: rgba(255, 255, 250, 0.8);
      border-radius: 100px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
      color: ;
    }
    
    .details {
      padding: 20px;
    }
    
    .item {
      margin-bottom: 20px;
      border: 1px solid #ddd;
      padding: 10px;
      border-radius: 5px;
    }

    .action-buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }

    .action-buttons button {
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px;
      cursor: pointer;
      font-weight: bold;
    }

    .action-buttons button:hover {
      background-color: #0056b3;
    }

    .verify-button {
      background-color: #28a745; /* Green for "Verify" */
    }

    .collected-button {
      background-color: #dc3545; /* Red for "Collected" */
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
  <header>
    <h1>Waste Management Details</h1>
  </header>
  
  <div class="container">
    <div class="details">
      
      <div class="item">
      <?php
        include('../../includes/config.php');
        $sql = "SELECT * FROM `tbl_waste` WHERE `status`='0'";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
            
            
           while ($row = mysqli_fetch_array($result)) {
            
          
                 echo"<div class='item'>";
                 echo"<h3><u>ITEM 1</u></h3>";

                 echo" <p>Name: ". $row['name'] . "</p>";
                 echo"  <p>Email: ".$row['email']."</p>";
                 echo"  <p>Address: ".$row['address']."</p>";
                 echo"  <p>Phone no: ".$row['phoneno']."</p>";
                 echo" <p>Ward no: ".$row['wardno']."</p>";
                 echo" <p>Waste type: ".$row['wastetype']."</p>";
                 
                  echo "<div class='action-buttons'>";
                  echo'<a href="../action/collectwaste.php?id='.$row['id'].'"><button name="approve" class="approve-button">Collect the waste</button></a>';
                 echo "</div>";
                 
              //    <script>
              //    const verifyButtons = document.querySelectorAll('.verify-button');
              //    verifyButtons.forEach(button => {
              //      button.addEventListener('click', () => {
              //        const collectedButton = button.parentElement.querySelector('.collected-button');
              //        collectedButton.style.display = 'block';
              //        button.style.display = 'none';
              //      });
              //    });
              //  </script>           
}

?>
    </div>
  </div>
</body>
</html>
