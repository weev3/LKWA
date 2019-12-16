<?php include("sidebar.php"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LKWA</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lesser Known Web Application</h1>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-12">
              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">LKWA</h6>
                </div>
                <div class="card-body">
                  <p>Lesser Known Web Application is for intermediate pentester. It contains variety of lesser known web attacks. Since these vulnerabilities cannot practice easily, so I created LKWA.</p>
                  <p class="mb-0">Attack Lists</p>
                  <ul>
                    <li>Blind RCE</li>
                    <li>XSSI</li>
                    <li>PHAR Deserialization</li>
                    <li>PHP Object Injection</li>
                    <li>PHP Object Injection via Cookies</li>
                    <li>PHP Object Injection (Object Reference)</li>
                    <li>PHP Object Injection via Cookies</li>
                    <li>SSRF</li>
                    <li>Variables variable</li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 mb-12">
              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Note</h6>
                </div>
                <div class="card-body">
                  <p>You don't need to install anything since LKWA doesn't interact with database.</p>
                  <p>Before testing PHAR Deserialization, you need to change `phar.readonly = On` to `phar.readonly = Off` in php.ini setting.</p>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include("footer.php"); ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
