<?php
	session_start();
	include_once 'dbconnectt.php';

	if (isset($_POST['logon'])) {
		$email = $_POST['logon-email'];
		$passwd = $_POST['logon-password'];

		$sql = "SELECT * FROM users WHERE user_email = '". $email . "'
		AND user_passwd = '" . md5($passwd) . "'";
		
		
		$result = mysqli_query($con, $sql);
		
		if ($row = mysqli_fetch_array($result)) {
			$_SESSION['id'] = $row['user_id'];
			$_SESSION['name'] = $row['user_name'];
			header("location: index.php");
		} else {
			$error_msg = "Incorrect e-mail or password.";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Logon - LAMAI GARDREN </title>
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
                <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="logonform">
                    <fieldset>
                        <legend align="center"> Logon </legend>

                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" name="logon-email" placeholder="Your Email" required class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="name"> Password </label>
                            <input type="password" name="logon-password" placeholder="Your Password" required class="form-control" />
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" name="logon" value="Logon" class="btn btn-primary" />
                        </div>
                    </fieldset>
                </form>
               
                <span class="text-danger">
                    <?php
                        if(isset($error_msg)){
                            echo $error_msg;
                        }
                    ?>
                </span>
		    </div>
	    </div>
	    <div class="row">
		    <div class="col-md-4 col-md-offset-4 text-center">
		    New User? <a href="registerr.php"> Sign Up Here </a>
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
