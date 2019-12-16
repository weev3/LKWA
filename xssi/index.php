<?php
session_start();
include("sidebar.php");
if(isset($_POST["username"])=="admin" && isset($_POST["password"]) =="password")
{
  $_SESSION['login_user']= $_POST["username"];
}
if(isset($_SESSION['login_user'])){
header("location: xssi.php");
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>XSSI</title>
  </head>
  <body>
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 mb-12">
              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">XSSI</h6>
                </div>
                <div class="card-body">
                <form action="index.php" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" placeholder="Enter username" name="username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <p class="text-danger"> Login with username=admin and password=password.</p>

                </form>
                </div>
              </div>
            </div>
          </div>
          <?php include("description.php"); ?>
      </div>

  </body>
</html>
