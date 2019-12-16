<?php
include("sidebar.php");
/**
 * Blind RCE
 */
class Rce {
    private $user_input;
    private $level;
    function __construct() {
        $this->user_input = isset($_POST['user_input']) ? $_POST['user_input'] : null;
        $this->level = isset($_POST['level']) ? $_POST['level'] : null;
    }

    function start() {
        if (empty($this->user_input)) {
            
        }

        else{
        		exec($this->user_input);
        }

    }
}

$rce = new Rce();
if(!empty($_POST))
{
    $rce->start();
}



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
                <h6 class="m-0 font-weight-bold text-primary">Remote Command Execution</h6>
              </div>
              <div class="card-body">
                <!-- vuln form -->
                    <form action="blind_rce.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Command</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="user_input" placeholder="Enter command">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>   
                    <p id="output"></p>                
              </div>
            </div>

          </div>

        </div>


          <?php include("description.php"); ?>
    </div>

</body>
</html>