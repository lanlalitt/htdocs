<?php
	include_once "dbconnectt.php";

	if (isset($_POST['signup'])) {
		$name = $_POST['user-name'];
		$email = $_POST['user-email'];
		$passwd = $_POST['user-password'];
		$cpasswd = $_POST['user-cpassword'];

		$validate_error = false;
	
		$validate_msg = "";

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$validate_error = true;
			$validate_msg = "E-mail is not correct.";
		}

		if (strlen($passwd) < 6) {
			$validate_error = true;
			$validate_msg = "Password must be more than 6 characters.";
		}
			
		if ($passwd != $cpasswd) {
			$validate_error = true;
			$validate_msg = "Password and confirm password do not match.";
		}

		if (!$validate_error) {
			$sql = "INSERT INTO users(user_name, user_email, user_passwd)
			VALUES('" . $name . "', '" . $email ."', '" . md5($passwd) . "')";

			if(mysqli_query($con, $sql));{
                header("location: logon.php");
			}
		}	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> User Registration - LAMAI GARDREN </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">LAMAI GARDREN</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <button>
        <a class="nav-link" href="page.php" type="button" name="" value=""> BACK</a>
    </button>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 well">
                <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                    <fieldset>
                        <legend align="center"> Sign Up </legend>

                        <div class="form-group">
                            <label for="name"> Name </label>
                            <input type="text" name="user-name" placeholder="Enter Full Name" required value="" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="name"> E-mail </label>
                            <input type="text" name="user-email" placeholder="E-mail" required value="" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="name"> Password </label>
                            <input type="password" name="user-password" placeholder="Password" required class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="name"> Confirm Password </label>
                            <input type="password" name="user-cpassword" placeholder="Confirm Password" required class="form-control" />
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
                        </div>
                    </fieldset>
                </form>
                
                <?php
                    if (isset($validate_error)) {
                        if ($validate_error){
                            echo $validate_msg;
                        }
                    }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
            Already Registered? <a href="logon.php"> Logon Here </a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2"></div>
    </nav>
</body>
</html>