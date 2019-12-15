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
    <title>Json HiJacking</title>
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
                  <h6 class="m-0 font-weight-bold text-primary">XSSI</h6>
                </div>
                <div class="card-body">
                <form action="index.php" method="post">
                  <p class="text-danger"> Login with username=admin and password=password.</p>
                  User Name: <input type="text" name="username">
                  Password : <input type="password" name="password">
                  <input type="submit" value="LogIn">
                </form>
                </div>
              </div>
            </div>
          </div>
          <?php include("description.php"); ?>
      </div>
 
  </body>
</html>
