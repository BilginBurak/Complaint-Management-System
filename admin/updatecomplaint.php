<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else {
  if(isset($_POST['update']))
  {
$complaintnumber=$_GET['cid'];
$status=$_POST['status'];
$remark=$_POST['remark'];
$query=mysqli_query($bd, "insert into complaintremark(complaintNumber,status,remark) values('$complaintnumber','$status','$remark')");
$sql=mysqli_query($bd, "update tblcomplaints set status='$status' where complaintNumber='$complaintnumber'");

echo "<script>alert('Complaint details updated successfully');</script>";

  }

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
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="anuj.css" rel="stylesheet" type="text/css">
</head>
<body>

<div style="margin: 10px 25px;">
  <form name="updateticket" id="updatecomplaint" method="post"> 
    <div class="mb-3">
      <label class="form-label" for="complaint-number">Complaint Number</label>
      <input class="form-control" id="complaint-number" type="text" value="<?php echo htmlentities($_GET['cid']); ?>" readonly>
    </div>
    <div class="mb-3">
      <label class="form-label" for="status">Status</label>
      <select class="form-select" id="status" name="status" required>
        <option value="">Select Status</option>
        <option value="in process">In Process</option>
        <option value="closed">Closed</option>
      </select>
    </div>
    <div class="mb-3">
      <label class="form-label" for="remark">Remark</label>
      <textarea class="form-control" id="remark" name="remark" rows="10" required></textarea>
    </div>
    <div class="mb-3">
      <button class="btn btn-primary" type="submit" name="update">Submit</button>
    </div>
    <div class="mb-3">
      <button class="btn btn-secondary" type="submit" name="Submit2" onClick="return f2();">Close this window</button>
    </div>
  </form>
</div>

</body>
</html>

     <?php } ?>