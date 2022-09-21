<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.css')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      @include('admin.rightSidebar')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Appointments</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Full Name
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Service
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Time
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ( $data as $appointment )
                        <tr>
                            <td>{{ $appointment->name }}</td>
                            <td>{{ $appointment->email }}</td>
                            <td>{{ $appointment->service }}</td>
                            <td>{{ $appointment->date }}</td>
                            <td>{{ $appointment->time }}</td>
                            <td>{{ $appointment->status }}</td>
                            <td></td>
                        </tr>
                        @endforeach                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="css/admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="css/admin/vendors/chart.js/Chart.min.js"></script>
  <script src="css/admin/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="css/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="css/admin/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="css/admin/js/off-canvas.js"></script>
  <script src="css/admin/js/hoverable-collapse.js"></script>
  <script src="css/admin/js/template.js"></script>
  <script src="css/admin/js/settings.js"></script>
  <script src="css/admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="css/admin/js/dashboard.js"></script>
  <script src="css/admin/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

