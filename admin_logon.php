<?php
	//7.check admin username and password, set admin name as "admin" and password as "pass1234"
	session_start();
	if (isset($_POST['admin-logon'])){
		$admin_name = $_POST['admin-name'];
		$admin_passwd = $_POST['admin-password'];
		if ($admin_name == 'admin' && $admin_passwd == 'pass1234'){
			$_SESSION['id'] = 0;
			$_SESSION['name'] = "admin";
			header("location:show_user.php");
		} else {
			$error_msg = "Incorrect admin name or password.";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Admin Registration - LAMAAI GARDREN</title>
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
        <a class="nav-link" href="page.php" type="button" name="" value=""> BACK </a>
    </button>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 well">
                <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="logonform">
                    <fieldset>
                        <legend align="center">Logon</legend>

                        <div class="form-group">
                            <label for="name">Admin Name</label>
                            <input type="text" name="admin-name" placeholder="Admin Name" required class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="name">Password</label>
                            <input type="password" name="admin-password" placeholder="Your Password" required class="form-control" />
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="submit" name="admin-logon" value="Logon" class="btn btn-primary" />
                        </div>
                    </fieldset>
                </form>
                <!--8.display message -->
                <span class="text-danger">
                    <?php if (isset($error_msg)) { echo $error_msg; } ?>
                </span>
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
    <br>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2"></div>
    </nav>
</body>
</html>