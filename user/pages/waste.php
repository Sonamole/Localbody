<!DOCTYPE html>
<html>
<head>
    <title>Waste Management Application Form</title>
    <style>
        /* Internal CSS Code */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
            
        }
        .form-no{
            width: 100%;
            

        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="email"], select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Waste Management Application Form</h1>
        <form action="../action/wastecertificate.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address"> Address:</label>
                <input type="text" id="email" name="address" required>
            </div>
            <div class="form-group">
                <label for="address">Phoneno:</label>
                <input type="text" id="phoneno" name="phoneno" required>
            </div>
            
            <div>

            <label for="wardnumber" >Ward Number:</label>
      <select id="wardno" name="wardno">
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
                <label for="wastetype">Waste Type:</label>
                <select id="wastetype" name="wastetype" required>
                <?php
	include('../../includes/config.php');
    $sql = "SELECT `wastetype` FROM `tbl_wastetype`";
    $result = mysqli_query($conn, $sql);

    // Generate dropdown options
    while ($row = mysqli_fetch_assoc($result)) 
	{
		echo '<option value="' . $row['wastetype'] . '">' . $row['wastetype'] . '</option>';
	}
?>
                    <!-- Add more waste types as needed -->
                </select>
            </div>
            <!-- Add more form fields for applicant details as needed -->
            <div class="form-group">
                <input type="submit" value="submit" name="insert">
            </div>
        </form>
    </div>
</body>
</html>
