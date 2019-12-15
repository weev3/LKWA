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
            echo "Please enter something.....!!!";
        }

        else{
        	if($this->level == "1")
        	{
        		exec($this->user_input);
        	}
            else{
            	if(preg_match('/"|\'\&\|/', $this->user_input)){
            		echo "Hacking Detected";
            	}
            	else
            		exec($this->user_input);
            	
            }
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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-12">
              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Blind RCE</h6>
                </div>
                <div class="card-body">
                  <form action="blind_rce.php" method="POST">
                    <select name="level">
                        <option value="1">
                            Level 1
                        </option>
                        <option value="2">
                            Level 2
                        </option>
                    </select>
                    <div data-tip="This is the text of the tooltip2">
                    <input type="text" name="user_input" placeholder="Enter command">
                    <input type="submit" name="">
                </form>
                </div>
              </div>

            </div>
          </div>
          <?php include("description.php"); ?>
        </div>


</body>
</html>