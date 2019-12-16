<?php
include("sidebar.php");
class Object
{
  var $guess;
  var $secretCode;
}

// Hint
// O:8:"stdClass":2:{s:5:"guess";N;s:10:"secretCode";R:2;}
// http://localhost:8082/LKWA/objectref/objectref.php?input=O:8:"stdClass":2:{s:10:"secretCode";N;s:5:"guess";R:2;}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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
                <h6 class="m-0 font-weight-bold text-primary">Object Reference</h6>
              </div>
              <div class="card-body">
              <form action="objectref.php" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Guess</label>
                  <input type="text" class="form-control" placeholder="Enter number" name="guess">
                  <input type="hidden" name="input" value='O:8:"stdClass":2:{s:5:"guess";N;s:10:"secretCode";R:1;}'>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <p>
                <p class="text-danger"> Can you win this?.</p>
                  <?php
                  // vuln code
                  if (isset($_POST['guess'])) {
                    // code...
                    $obj = unserialize($_POST['input']);
                    if($obj) {
                        $obj->guess = $_POST['guess'];
                        $obj->secretCode = rand(500000,999999);
                        if($obj->guess === $obj->secretCode) {
                            echo "<p class='text-success'>You Win !!!!!</p>";
                        }
                        else{
                        	echo "<p class='text-danger'>Loser!!!!</p>";
                        }
                    }
                  }
                  ?>
                <p>


              </form>
              </div>
            </div>
          </div>
        </div>
        <?php include("description.php"); ?>
    </div>
  </body>
</html>
