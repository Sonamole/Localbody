<!DOCTYPE html>
<html>
<head>
    <style>
        /* Internal CSS Code */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
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
        input[type="checkbox"] {
            margin-right: 5px;
        }
        .declaration {
            font-style: italic;
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
    <div class="form-container">
        <h1>Death Certificate Application Form</h1>
        <form action="../action/deathcertificate.php" method="post">
           
            <div class="form-group">
                <label for="applicantname">Applicant's Full Name:</label>
                <input type="text" id="applicantname" name="applicantname">

                <label for="relationshiptodeceased">Relationship To Deceased:</label>
                <input type="text" id="relationshiptodeceased" name="relationshiptodeceased">

                <label for="address">Address:</label>
                <input type="text" id="address" name="address">

                <label for="phoneno">Phone No:</label>
                <input type="text" id="phoneno" name="phoneno">

<div>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email">
</div>



            </div>
            
            <div class="form-group">
                <label for="deceasedname">Deceased Person's Full Name:</label>
                <input type="text" id="deceasedname" name="deceasedname">

                <label for="dateofdeath">Date of death:</label>
                <input type="date" id="dateofdeath" name="dateofdeath">

<div>
                <label for="ageattimeofdeath">Age at time of death :</label>
                <input type="text" id="ageattimeofdeath" name="ageattimeofdeath">
                </div>
                <div class="form-group">
                <label>Gender:</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                
            </div>

 </div>
           
            <div class="form-group">
                <label>Purpose of Request:</label>
                <input type="radio" id="legal" name="purpose" value="legal">
                <label for="legal">Legal purposes</label>
                <input type="radio" id="genealogy" name="purpose" value="genealogy">
                <label for="genealogy">Genealogy research</label>
                
            </div>

          
            
            <div class="form-group">
                <label>Declaration:</label>
                <input type="checkbox" id="declaration" name="declaration" value="on">
                <label for="declaration">I hereby certify that the information provided in this application is true and correct to the best of my knowledge and belief.</label>
            </div>
            
        
            
           
            <div class="submit-button">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
