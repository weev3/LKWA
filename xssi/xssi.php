<?php
session_start();
include("sidebar.php");
$file = "../api/user";
if(!isset($_SESSION['login_user'])){
header("location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="../jquery/jquery.min.js"></script>
    <script>
         function get(){
         	$.ajax(
         	{
         	 url:"../api/user",
         	 type:"GET",
         	 async:true,
         	 success:function(parse){
         	  for (var i in parse){

         	      $("#" + i).text(parse[i]);

         	  }
         	 }
         	}
         	);
         }
         get();
       </script>
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
                    <p>Username: <i><span id="name">USERNAME</span></i></p>
                    <p>Token: <i><span id="token">token</span> </i></p>
                    <a href="logout.php">Logout</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    
  </body>

</html>
