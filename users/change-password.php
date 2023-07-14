<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
$sql=mysqli_query($bd, "SELECT password FROM  users where password='".md5($_POST['password'])."' && userEmail='".$_SESSION['login']."'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $con=mysqli_query($bd, "update users set password='".md5($_POST['newpassword'])."', updationDate='$currentTime' where userEmail='".$_SESSION['login']."'");
$successmsg="Password Changed Successfully !!";
}
else
{
$errormsg="Old Password not match !!";
}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>CMS | User Change Password</title>

    <!-- Bootstrap core CSS -->
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

  <script type="text/javascript">
function valid()
{
if(document.chngpwd.password.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.password.focus();
return false;
}
else if(document.chngpwd.newpassword.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.newpassword.focus();
return false;
}
else if(document.chngpwd.confirmpassword.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.confirmpassword.focus();
return false;
}
else if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
  </head>

  <body>

  <section id="container">
  <?php include("includes/header.php");?>
  <?php include("includes/sidebar.php");?>
  <section id="main-content">
    <section class="wrapper pb-5">
      <h3><i class="fa fa-angle-right"></i> Change Password</h3>
      <!-- BASIC FORM ELEMENTS -->
      <div class="row mt">
        <div class="col-lg-12">
          <div class="card" style="height:auto;">
            <div class="card-body">
              <h4 class="card-title"><i class="fa fa-angle-right"></i> User Change Password</h4>
              <?php if($successmsg) { ?>
                <div class="alert alert-success alert-dismissable">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  <b>Well done!</b> <?php echo htmlentities($successmsg);?>
                </div>
              <?php } ?>
              <?php if($errormsg) { ?>
                <div class="alert alert-danger alert-dismissable">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  <b>Oh snap!</b> <?php echo htmlentities($errormsg);?>
                </div>
              <?php } ?>
              <form class="row g-3 p-3" method="post" name="chngpwd" onSubmit="return valid();">
                <div class="col-md-6">
                  <label for="current-password" class="form-label">Current Password</label>
                  <input type="password" name="password" required="required" class="form-control" id="current-password">
                </div>
                <div class="col-md-6">
                  <label for="new-password" class="form-label">New Password</label>
                  <input type="password" name="newpassword" required="required" class="form-control" id="new-password">
                </div>
                <div class="col-md-6">
                  <label for="confirm-password" class="form-label">Confirm Password</label>
                  <input type="password" name="confirmpassword" required="required" class="form-control" id="confirm-password">
                </div>
                <div class="col-12">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!--/wrapper -->
  </section><!--/MAIN CONTENT -->
  <?php include("footer.php");?>
</section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>
