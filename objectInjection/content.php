<?php
include("sidebar.php");
include("obj_injection.php");

if (isset($_POST['file']) && isset($_POST['data'])) {
	$test = new Foo($_POST['file'], $_POST['data']);
	$var = serialize($test);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
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
                  <h6 class="m-0 font-weight-bold text-primary">Object Injection</h6>
                </div>
                <div class="card-body">
                <?php 
					$object = new stdClass();
					$object->data = "Hey Dude!";
					$object->text = "upload shell if you can!!!";
					$cached = serialize($object);
				?>

<form action="content.php" method="POST">
	<!-- Filename:<input type="text" name="file" class="text">
	Data:<input type="text" name="data">
	<input type="submit" name=""> -->
    <a class="btn btn-primary" href='?object=<?php echo $cached; ?>' type="submit">SUBMIT</a>
</form>
<?php
if(isset($_REQUEST['object'])){  
$var1=unserialize($_REQUEST['object']);
echo "<br>";
echo($var1->data); 
echo "<br>";
echo($var1->text);
}

?>
                </div>
              </div>

            </div>
          </div>
          <?php include("description.php"); ?>
        </div>


</body>
</html>
