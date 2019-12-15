<?php
include("sidebar.php");
include("obj_injection.php");

if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $object = new stdClass();
  $object->user = $username;
  $data = serialize($object);
  if($username === "admin" && $password === "password")
	setcookie("username", $data, time() + (86400 * 30), "/"); // 86400 = 1 day
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
<form action="content.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" placeholder="Enter username" name="username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
if(isset($_COOKIE['username']))
{

  $var = unserialize($_COOKIE['username']);
  echo "<br> Welcome ".$var->user;
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
