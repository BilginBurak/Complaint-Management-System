
<aside class="sidebar">
  <div id="sidebar" class="nav-collapse" style="overflow: hidden; outline: none; margin-top:-50px;">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">

      <?php 
      $query=mysqli_query($bd, "select fullName,userImage from users where userEmail='".$_SESSION['login']."'");
      while($row=mysqli_fetch_array($query)) 
      {
      ?> 
              	  <p class="centered"><a href="profile.php"><img src="assets/img/ui-sam.jpg" class="rounded-circle" width="60"></a></p>
      <h5 class="centered"><?php echo htmlentities($row['fullName']);?></h5>
      <?php } ?>

      <li class="mt">
        <a href="dashboard.php">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-cogs"></i>
          <span>Account Setting</span>
        </a>
        <ul class="sub">
          <li class="text-black bg-info-subtle"><a href="profile.php">Profile</a></li>
          <li class="text-black bg-info-subtle"><a href="change-password.php">Change Password</a></li>
        </ul>
      </li>
      
      <li class="sub-menu">
        <a href="register-complaint.php">
          <i class="fa fa-book"></i>
          <span>Create Complaint</span>
        </a>
      </li>
      
      <li class="sub-menu">
        <a href="complaint-history.php">
          <i class="fa fa-tasks"></i>
          <span>Complaint History</span>
        </a>
      </li>
       
    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>