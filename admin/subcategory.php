
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{
	$category=$_POST['category'];
	$subcat=$_POST['subcategory'];
$sql=mysqli_query($bd, "insert into subcategory(categoryid,subcategory) values('$category','$subcat')");
$_SESSION['msg']="SubCategory Created !!";

}

if(isset($_GET['del']))
		  {
		          mysqli_query($bd, "delete from subcategory where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="SubCategory deleted !!";
		  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| SubCategory</title>
	<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<?php include('include/header.php');?>

<div class="wrapper">
  <div class="container">
    <div class="row">
      <?php include('include/sidebar.php'); ?>
      <div class="col-9">
        <div class="content">

          <div class="module">
            <div class="module-head">
              <h3>Sub Category</h3>
            </div>
            <div class="module-body">

              <?php if(isset($_POST['submit'])) { ?>
                <div class="alert alert-success">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']); ?><?php echo htmlentities($_SESSION['msg'] = ""); ?>
                </div>
              <?php } ?>

              <?php if(isset($_GET['del'])) { ?>
                <div class="alert alert-danger">
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  <strong>Oh snap!</strong> <?php echo htmlentities($_SESSION['delmsg']); ?><?php echo htmlentities($_SESSION['delmsg'] = ""); ?>
                </div>
              <?php } ?>

              <br />

              <form class="row" name="subcategory" method="post">
                <div class="col-md-6 mb-3">
                  <label class="form-label" for="category">Category</label>
                  <select name="category" class="form-select span8 tip" required>
                    <option value="">Select Category</option>
                    <?php
                    $query = mysqli_query($bd, "select * from category");
                    while($row = mysqli_fetch_array($query)) {
                      ?>
                      <option value="<?php echo $row['id']; ?>"><?php echo $row['categoryName']; ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label" for="subcategory">SubCategory Name</label>
                  <input type="text" class="form-control" id="subcategory" placeholder="Enter SubCategory Name" name="subcategory" required>
                </div>

                <div class="col-12">
                  <button type="submit" name="submit" class="btn btn-primary">Create</button>
                </div>
              </form>

            </div>
          </div>


          <div class="module">
            <div class="module-head">
              <h3>Sub Category</h3>
            </div>
            <div class="module-body table-responsive">
              <table class="datatable-1 table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Creation date</th>
                    <th>Last Updated</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $query = mysqli_query($bd, "select subcategory.id,category.categoryName,subcategory.subcategory,subcategory.creationDate,subcategory.updationDate from subcategory join category on category.id=subcategory.categoryid");
                  $cnt = 1;
                  while($row = mysqli_fetch_array($query)) {
                  ?>
                    <tr>
                      <td><?php echo htmlentities($cnt); ?></td>
                      <td><?php echo htmlentities($row['categoryName']); ?></td>
                      <td><?php echo htmlentities($row['subcategory']); ?></td>
                      <td><?php echo htmlentities($row['creationDate']); ?></td>
                      <td><?php echo htmlentities($row['updationDate']); ?></td>
                      <td>
                        <a href="edit-subcategory.php?id=<?php echo $row['id']; ?>" class="text-decoration-none"><i class="icon-edit"></i></a>
                        <a href="subcategory.php?id=<?php echo $row['id']; ?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="text-decoration-none"><i class="icon-remove-sign"></i></a>
                      </td>
                    </tr>
                    <?php $cnt = $cnt + 1; } ?>

                </tbody>
              </table>
            </div>
          </div>

        </div><!--/.content-->
      </div><!--/.col-9-->
    </div>
  </div><!--/.container-->
</div><!--/.wrapper-->

<?php include('footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php } ?>