<?php
session_start();
error_reporting(0);
include("include/config.php");
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$ret = mysqli_query($bd, "SELECT * FROM admin WHERE username='$username' and password='$password'");
	$num = mysqli_fetch_array($ret);
	if ($num > 0) {
		$extra = "user-logs.php"; //
		$_SESSION['alogin'] = $_POST['username'];
		$_SESSION['id'] = $num['id'];
		$host = $_SERVER['HTTP_HOST'];
		$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("location:http://$host$uri/$extra");
		exit();
	} else {
		$_SESSION['errmsg'] = "Invalid username or password";
		$extra = "index.php";
		$host = $_SERVER['HTTP_HOST'];
		$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("location:http://$host$uri/$extra");
		exit();
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CMS | Admin login</title>
	<link type="text/css" href="./css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
		rel='stylesheet'>
</head>

<body>



<header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark nav-underline">
        <div class="container-fluid ms-5 me-5">
            <a class="navbar-brand" href="../index.php">
                <img src="images\logo.png" height="30" alt="Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                 
                </ul>
                <div class="d-flex">
                                     
               
                        <a href="admin/" class="btn btn-primary d-inline-flex align-items-center rounded-pill ms-2"> Admin

                          <!--  <i class="bi bi-plus-circle ms-2"></i>   -->
                        </a>
                 
                            

                </div>
            </div>
        </div>
    </nav>
</header>




	<div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="module module-login">
          <form class="form-vertical" method="post">
            <div class="module-head">
              <h3>Sign In</h3>
            </div>
            <span style="color:red;">
              <?php echo htmlentities($_SESSION['errmsg']); ?>
              <?php echo htmlentities($_SESSION['errmsg'] = ""); ?>
            </span>
            <div class="module-body">
              <div class="mb-3">
                <label for="inputEmail" class="form-label">Username</label>
                <input class="form-control" type="text" id="inputEmail" name="username" placeholder="Username">
              </div>
              <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input class="form-control" type="password" id="inputPassword" name="password" placeholder="Password">
              </div>
            </div>
            <div class="module-foot">
              <div class="mb-3">
                <button type="submit" class="btn btn-primary float-end" name="submit">Login</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div><!--/.wrapper-->

	<?php @include 'footer.php'; ?>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>

</html>