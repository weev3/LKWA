<?php
/**
 * 
 */
include("sidebar.php");

class log
{
	public $filename="log.txt";
	public $data="log";
    function __wakeup(){
        file_put_contents($this->filename, $this->data);
    }
}

if (file_exists($_GET['file'])) {
 $var = new log();
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 mb-12">
			<!-- Approach -->
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">PHAR Deserialization</h6>
				</div>
				<div class="card-body">
					<form action="upload.php" method="post" enctype="multipart/form-data">
						Select PHAR file to upload:<br><br>
						<input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-secondary">
						<input type="submit" value="Upload PHAR" name="submit" class="btn btn-primary">
					</form>

				</div>
			</div>

		</div>
	</div>
	<?php include("description.php"); ?>
</div>
</body>


</html>