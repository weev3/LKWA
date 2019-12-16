<?php
include("sidebar.php");
if (isset($_GET['image'])) {
	# code...
	file_get_contents($_GET['image'], true);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800"></h1>
        </div>

        <div class="row">
          <div class="col-lg-12 mb-12">
            <!-- Approach -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SSRF</h6>
              </div>
              <div class="card-body">
              <form action="index.php" method="GET">
                <div class="form-group">
                  <label for="exampleInputEmail1">Image URL</label>
                  <input type="text" class="form-control" placeholder="Enter url" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <p>
              </form>
              <img src="<?php echo $_GET['image']; ?>">
              </div>
            </div>
          </div>
        </div>
        <?php include("description.php"); ?>
    </div>
</body>
</html>