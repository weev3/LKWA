<?php 
include("sidebar.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Blind RCE</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 mb-12">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Variables variable</h6>
              </div>
              <div class="card-body">
                <!-- vuln form -->
                    <form action="variable.php" method="GET">
                      <div class="form-group">
                        <label for="exampleInputPassword1">String to dump</label>
                        <input type="hidden" name="func" value="var_dump">
                        <input type="text" class="form-control" id="exampleInputPassword1" name="input" placeholder="string">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>   
                    <br>
                    <p class="text-danger">Output:</p>
                    <p id="output">
                    	<?php 
							if (isset($_GET['func']) && isset($_GET['input'])) {
								$var = $_GET['func'];
								${"var"}($_GET['input']);
							}
                    	?>

                    </p>                
              </div>
            </div>

          </div>

        </div>


          <?php include("description.php"); ?>
    </div>

</body>
</html>