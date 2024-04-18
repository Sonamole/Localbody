<!DOCTYPE html>
<html>
<head>
  <style>
    /* Add your CSS styles here */
    body {
      font-family: Arial, sans-serif;
    }
    h2 {
      text-align: center;
    }
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      background-color: #f5f5f5;
    }
    label {
      display: block;
      margin-top: 10px;
    }
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    input[type="checkbox"] {
      margin-right: 5px;
    }

    label.radio-label {
      display: inline-block;
      margin-right: 15px;
    }
    input[type="radio"] {
      vertical-align: middle;
    }
    button {
      background-color: #007BFF;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
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
</head>
<a href="home.php" class="Goback-button">Go back</a>
<body>
  <h2>Birth Certificate Application Form</h2>
  <div class="form-container">
    <form action="../action/birthcertificate.php" method="post">
      <!-- Applicant Information -->
      <label for="applicantname">Full Name of Applicant:</label>
      <input type="text" id="applicantname" name="applicantname">
      
      <label for="relationship">Relationship to Child:</label>
      <input type="text" id="relationship" name="relationship">
      
      <!-- Child's Information -->
      <label for="childname">Full Name of Child:</label>
      <input type="text" id="childname" name="childname">
      
      <label for="dateofbirth">Date of Birth:</label>
      <input type="date" id="dateofbirth" name="dateofbirth">
      
      <label for="timeofbirth">Time of Birth:</label>
      <input type="time" id="timeofbirth" name="timeofbirth">
      
      <label for="placeofbirth">Place of Birth:</label>
      <input type="text" id="placeofbirth" name="placeofbirth">
      
      <label>Child's Sex:</label>
      <label class="radio-label" for="male">Male</label>
      <input type="radio" id="male" name="childsex" value="male">
      <label class="radio-label" for="female">Female</label>
      <input type="radio" id="female" name="childsex" value="female">

      <!-- Parent/Guardian Information -->
      <label for="mothername">Mother's Full Name:</label>
      <input type="text" id="mothername" name="mothername">
      
      <label for="fathername">Father's Full Name:</label>
      <input type="text" id="fathername" name="fathername">
      
      
      <label for="city">City:</label>
      <input type="text" id="city" name="city">
      
      <label for="state">State:</label>
      <input type="text" id="state" name="state">
      
      <label for="zipcode">Postal Code:</label>
      <input type="text" id="zipcode" name="zipcode">
      
      <label for="phonenumber">Phone Number:</label>
      <input type="tel" id="phonenumber" name="phonenumber">
      
      <label for="emailaddress">Email Address:</label>
      <input type="email" id="emailaddress" name="emailaddress">
      
      <!-- Additional Information -->
      <label>Please check one:</label>
      <input type="radio" id="certifiedcopy" name="copytype" value="certified">
      <label for="certifiedcopy">Certified Copy</label>
      <input type="radio" id="informationalcopy" name="copytype" value="informational">
      <label for="informationalcopy">Informational Copy</label>
      
      
      
      <!-- Declaration -->
      <label>Declaration:</label>
      <input type="checkbox" id="declaration" name="declaration">
      <label for="declaration">I declare under penalty of perjury that the information provided on this form is true and correct to the best of my knowledge.</label>
      
     
      
      <!-- Submit Button -->
      <button type="submit" name="insert">Submit</button>
    </form>
  </div>
</body>
</html>
