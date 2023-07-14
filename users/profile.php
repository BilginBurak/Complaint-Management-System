<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
date_default_timezone_set('Europe/Istanbul');
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
$fname=$_POST['fullname'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
$state=$_POST['state'];
$country=$_POST['country'];
$pincode=$_POST['pincode'];
$query=mysqli_query($bd, "update users set fullName='$fname',contactNo='$contactno',address='$address',State='$state',country='$country',pincode='$pincode' where userEmail='".$_SESSION['login']."'");
if($query)
{
$successmsg="Profile Successfully !!";
}
else
{
$errormsg="Profile not updated !!";
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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  
  </head>

  <body>

  <section id="container">
  <?php include("includes/header.php");?>
  <?php include("includes/sidebar.php");?>
  <section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Profile Info</h3>
      <!-- BASIC FORM ELEMENTS -->
      <div class="row mt">
        <div class="col-lg-12">
          <div class="card" style="height: auto;">
            <div class="card-body" >
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
              <?php $query=mysqli_query($bd, "select * from users where userEmail='".$_SESSION['login']."'");
              while($row=mysqli_fetch_array($query)) {
              ?>
                <h4 class="card-title"><i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo htmlentities($row['fullName']);?>'s Profile</h4>
                <h5><b>Last Updated at :</b>&nbsp;&nbsp;<?php echo htmlentities($row['updationDate']);?></h5>
                <form class="row g-3" method="post" name="profile" >
                  <div class="col-md-6">
                    <label for="full-name" class="form-label">Full Name</label>
                    <input type="text" name="fullname" required="required" value="<?php echo htmlentities($row['fullName']);?>" class="form-control" id="full-name">
                  </div>
                  <div class="col-md-6">
                    <label for="user-email" class="form-label">User Email</label>
                    <input type="email" name="useremail" required="required" value="<?php echo htmlentities($row['userEmail']);?>" class="form-control" id="user-email" readonly>
                  </div>
                  <div class="col-md-6">
                    <label for="contact-no" class="form-label">Contact</label>
                    <input type="text" name="contactno" required="required" value="<?php echo htmlentities($row['contactNo']);?>" class="form-control" id="contact-no">
                  </div>
                  <div class="col-md-6">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" required="required" class="form-control" id="address"><?php echo htmlentities($row['address']);?></textarea>
                  </div>
                  <div class="col-md-6">
                    <label for="state" class="form-label">State</label>
                    <select name="state" required="required" class="form-control" id="state">
                      <option value="<?php echo htmlentities($row['State']);?>"><?php echo htmlentities($st=$row['State']);?></option>
                      <?php $sql=mysqli_query($bd, "select stateName from state ");
                      while ($rw=mysqli_fetch_array($sql)) {
                        if($rw['stateName']==$st) {
                          continue;
                        } else { ?>
                          <option value="<?php echo htmlentities($rw['stateName']);?>"><?php echo htmlentities($rw['stateName']);?></option>
                        <?php }
                      }?>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" name="country" required="required" value="<?php echo htmlentities($row['country']);?>" class="form-control" id="country">
                  </div>
                  <div class="col-md-6">
                    <label for="pincode" class="form-label">Pincode</label>
                    <input type="text" name="pincode" maxlength="6" required="required" value="<?php echo htmlentities($row['pincode']);?>" class="form-control" id="pincode">
                  </div>
                  <div class="col-md-6">
                    <label for="reg-date" class="form-label">Reg Date</label>
                    <input type="text" name="regdate" required="required" value="<?php echo htmlentities($row['regDate']);?>" class="form-control" id="reg-date" readonly>
                  </div>
                  <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
</section>
<?php include("footer.php");?>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
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
