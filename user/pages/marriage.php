<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Marriage Registration Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="email"],
        input[type="radio"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="radio"] {
            width: auto;
        }

        select {
            height: 35px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group:last-child {
            margin-bottom: 0;
        }

        .submit-button {
            text-align: center;
        }

        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
         background-color: #0056b3;
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
    <div class="container">
        <h1>Marriage Registration Application</h1>
        <form action="../action/marriagecertificate.php" method="post">
            <div class="form-group">
                <label for="bride_name">Full Name of Bride:</label>
                <input type="text" id="bride_name" name="bride_name" required>
            </div>
            <div class="form-group">
                <label for="groom_name">Full Name of Groom:</label>
                <input type="text" id="groom_name" name="groom_name" required>
            </div>
            <div class="form-group">
                <label for="bride_dob">Date of Birth (Bride):</label>
                <input type="date" id="bride_dob" name="bride_dob" required>
            </div>
            <div class="form-group">
                <label for="groom_dob">Date of Birth (Groom):</label>
                <input type="date" id="groom_dob" name="groom_dob" required>
            </div>
            <div class="form-group">
                <label for="bride_address">Residential Address (Bride):</label>
                <textarea id="bride_address" name="bride_address" rows="4"></textarea>
           
            </div>
            <div class="form-group">
                <label for="groom_address">Residential Address (Groom):</label>
                <textarea id="groom_address" name="groom_address" rows="4"></textarea>
               
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" id="contact_number" name="contact_number" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="bride_nationality">Nationality (Bride):</label>
                <input type="text" id="bride_nationality" name="bride_nationality" required>
            </div>
            <div class="form-group">
                <label for="groom_nationality">Nationality (Groom):</label>
                <input type="text" id="groom_nationality" name="groom_nationality" required>
            </div>
            <div class="form-group">
                <label for="marriage_date">Date of Marriage:</label>
                <input type="date" id="marriage_date" name="marriage_date" required>
            </div>
            <div class="form-group">
                <label for="marriage_location">Place of Marriage:</label>
                <input type="text" id="marriage_location" name="marriage_location" required>
            </div>
            <div class="form-group">
                <label>Type of Marriage (Religious/Civil):</label>
                <input type="radio" id="religious" name="marriage_type" value="Religious" required> Religious
                <input type="radio" id="civil" name="marriage_type" value="Civil" required> Civil
            </div>
            
            <div class="form-group">
                <label for="witness1_name">Name of Witness 1:</label>
                <input type="text" id="witness1_name" name="witness1_name" required>
            </div>
            <div class="form-group">
                <label for="witness1_address">Address of Witness 1:</label>
                <input type="text" id="witness1_address" name="witness1_address" required>
            </div>
            
            <div class="form-group">
                <label for="witness1_name">Name of Witness 2:</label>
                <input type="text" id="witness2_name" name="witness2_name" required>
            </div>
            <div class="form-group">
                <label for="witness1_address">Address of Witness 2:</label>
                <input type="text" id="witness2_address" name="witness2_address" required>
            </div>
            
           
            <div class="form-group">
                <label for="additional_info">Any other relevant information:</label>
                <textarea id="additional_info" name="additional_info" rows="4"></textarea>
            </div>
            <div class="form-group">
           
                <label for="declaration">Declaration:</label>
                <input type="checkbox" id="declaration" name="declaration">
                <p>
                    I hereby declare that the information provided in this application is true and accurate to the best of my knowledge. I understand that providing false information may lead to legal consequences.
                </p>
            </div>
           
            </div>
           
            <div class="submit-button">
                <button type="submit" name="insertinto">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>

