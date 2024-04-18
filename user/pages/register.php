<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


<?php
include('../../includes/config.php');
include('../../includes/session.php');
    if (isset($_GET['up_id'])) {
    $u_name = "";
    $u_email = "";
    $u_age = "";
    $u_password = "";

    $id = $_GET['up_id'];
    $sql = "SELECT * FROM `tbl_reg` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if ($row) {
        $u_name = $row['name'];
        $u_email = $row['email'];
        $u_age = $row['age'];
        $u_password = $row['password'];
    }
}
?>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign Up -USER
					</span>
				</div>

				<form class="login100-form validate-form" action="../action/regaction.php" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="uname is required">
					<input type="hidden" id="id" name="hid" value="<?php echo isset($_GET['up_id']) ?  $_GET['up_id'] : null ?>" >
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name="name" placeholder="Enter name" value="<?php echo isset($u_name) ?  $u_name: "" ?>" >
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="email is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Enter email" value="<?php echo isset($u_email) ?  $u_email: "" ?>">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-26" data-validate="age is required">
						<span class="label-input100">Age</span>
						<input class="input100" type="number" name="age" placeholder="Enter age" value="<?php echo isset($u_age) ?  $u_age: "" ?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="wardno is required">
						<span class="label-input100">Ward No</span>
						<select class="input100" name="wardno">
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

						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="taluk is required">
						<span class="label-input100">Taluk</span>
						<select class="input100" name="taluk">
							<?php
							include('../../includes/config.php');
							$sql = "SELECT `taluk` FROM `tbl_taluk`";
    $result = mysqli_query($conn, $sql);

    // Generate dropdown options
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['taluk'] . '">' . $row['taluk'] . '</option>';
    }
	?>
							<!-- Add more taluk options as needed -->
						</select>
						<span class="focus-input100"></span>
					</div>



					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password" value="<?php echo isset($u_password) ?  $u_password: "" ?>">
						<span class="focus-input100"></span>
					</div>



					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="signin">
							Register
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>