<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{

 ?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>User Profile</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="anuj.css" rel="stylesheet" type="text/css">
</head>
<body>

<div style="margin:10px 25px;">
<form name="updateticket" id="updateticket" method="post"> 
    <div class="table-responsive">
      <table class="table table-bordered">
        <?php 
        $ret1 = mysqli_query($bd, "select * FROM users where id='" . $_GET['uid'] . "'");
        while ($row = mysqli_fetch_array($ret1)) {
        ?>
          <tr>
            <td colspan="2"><b><?php echo $row['fullName']; ?>'s profile</b></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><b>Reg Date:</b></td>
            <td><?php echo htmlentities($row['regDate']); ?></td>
          </tr>
          <tr>
            <td><b>User Email:</b></td>
            <td><?php echo htmlentities($row['userEmail']); ?></td>
          </tr>
          <tr>
            <td><b>User Contact no:</b></td>
            <td><?php echo htmlentities($row['contactNo']); ?></td>
          </tr>
          <tr>
            <td><b>Address:</b></td>
            <td><?php echo htmlentities($row['address']); ?></td>
          </tr>
          <tr>
            <td><b>State:</b></td>
            <td><?php echo htmlentities($row['State']); ?></td>
          </tr>
          <tr>
            <td><b>Country:</b></td>
            <td><?php echo htmlentities($row['country']); ?></td>
          </tr>
          <tr>
            <td><b>Pincode:</b></td>
            <td><?php echo htmlentities($row['pincode']); ?></td>
          </tr>
          <tr>
            <td><b>Last Updation:</b></td>
            <td><?php echo htmlentities($row['updationDate']); ?></td>
          </tr>
          <tr>
            <td><b>Status:</b></td>
            <td>
              <?php
              if ($row['status'] == 1) {
                echo "Active";
              } else {
                echo "Block";
              }
              ?>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <button class="btn btn-secondary" name="Submit2" type="submit" onClick="return f2();">Close this window</button>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>
  </form>
</div>

</body>
</html>

     <?php } ?>