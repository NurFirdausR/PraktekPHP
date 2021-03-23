<?php 
include_once "connect.php";
// include_once "controller/productController.php.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="asset/vendors/feather/feather.css">
  <link rel="stylesheet" href="asset/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="asset/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="asset/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="asset/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="asset/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="asset/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="asset/images/favicon.png" />
</head>
<style>
</style>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include_once "partial/navbar.php" ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
    <?php include_once "partial/rsetting-rightbar.php" ?>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include_once "partial/sidebar.php" ?>
      <!-- partial -->


      
      <div class="main-panel">
        <div class="content-wrapper">
       
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <?php
                if (isset($_GET['halaman'])) {
                    if ($_GET['halaman'] == "dashboard_product") {
                        include "dashboard.php";
                    } elseif ($_GET['halaman'] == "product_tambah") {
                        include "product_tambah.php";
                    } elseif ($_GET['halaman'] == "categories") {
                      include "categories.php";
                  }
                    

                } else {
                    include "home.php";
                }
                ?>
                </div>
              </div>
            </div>
            
          </div>
       
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->

  </div>
  <!-- container-scroller -->
      <?php include_once "partial/footer.php" ?>

  <!-- plugins:js -->
  <script src="asset/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="asset/vendors/chart.js/Chart.min.js"></script>
  <script src="asset/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="asset/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="asset/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="asset/js/off-canvas.js"></script>
  <script src="asset/js/hoverable-collapse.js"></script>
  <script src="asset/js/template.js"></script>
  <script src="asset/js/settings.js"></script>
  <script src="asset/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="asset/js/dashboard.js"></script>
  <script src="asset/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

