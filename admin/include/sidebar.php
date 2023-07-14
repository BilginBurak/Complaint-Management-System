<div class="col-md-3">
  <div class="sidebar">

    <ul class="widget widget-menu list-group ">
      <li>
        <a class="collapsed" data-bs-toggle="collapse" href="#togglePages">
          <i class="menu-icon icon-cog"></i>
          <i class="bi bi-chevron-down pull-right"></i>
          <i class="bi bi-chevron-up pull-right"></i>
          Manage Complaint
        </a>
        <ul id="togglePages" class="collapse list-group mb-1">
          <li class="bg-dark-subtle">
            <a href="notprocess-complaint.php">
              <i class="icon-tasks"></i>
              Not Process Yet Complaint
              <?php
              $rt = mysqli_query($bd, "SELECT * FROM tblcomplaints where status is null");
              $num1 = mysqli_num_rows($rt);
              if ($num1 > 0) {
              ?>
                <b class="label orange pull-end"><?php echo htmlentities($num1); ?></b>
              <?php } ?>
            </a>
          </li>
          <li class="bg-dark-subtle">
            <a href="inprocess-complaint.php">
              <i class="icon-tasks"></i>
              Pending Complaint
              <?php
              $status = "in Process";
              $rt = mysqli_query($bd, "SELECT * FROM tblcomplaints where status='$status'");
              $num1 = mysqli_num_rows($rt);
              if ($num1 > 0) {
              ?>
                <b class="label bg-warning pull-end"><?php echo htmlentities($num1); ?></b>
              <?php } ?>
            </a>
          </li>
          <li class="bg-dark-subtle">
            <a href="closed-complaint.php">
              <i class="icon-inbox"></i>
              Closed Complaints
              <?php
              $status = "closed";
              $rt = mysqli_query($bd, "SELECT * FROM tblcomplaints where status='$status'");
              $num1 = mysqli_num_rows($rt);
              if ($num1 > 0) {
              ?>
                <b class="label green pull-end"><?php echo htmlentities($num1); ?></b>
              <?php } ?>
            </a>
          </li>
        </ul>
      </li>

      <li>
        <a href="manage-users.php">
          <i class="menu-icon icon-group"></i>
          Manage users
        </a>
      </li>
    </ul>

    <ul class="widget widget-menu list-group">
      <li><a href="category.php"><i class="menu-icon icon-tasks"></i> Add Category </a></li>
      <li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i> Add Sub-Category </a></li>
      <li><a href="state.php"><i class="menu-icon icon-paste"></i> Add State</a></li>
    </ul><!--/.widget-nav-->

    <ul class="widget widget-menu list-group">
      <li><a href="user-logs.php"><i class="menu-icon icon-tasks"></i> User Login Log </a></li>

      <li>
        <a href="logout.php">
          <i class="menu-icon icon-signout"></i>
          Logout
        </a>
      </li>
    </ul>

  </div><!--/.sidebar-->
</div><!--/.col-md-3-->

<style>
  .list-group{
    margin-top: 3px;
  }
</style>