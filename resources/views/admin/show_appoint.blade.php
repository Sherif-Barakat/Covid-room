<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              
            </div>
            
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.navbar')
      @include('admin.sidebar')
      <div class="container-fluid page-body-wrapper">

      <div align="center" style="padding-top:100px;">
      <table>

        <tr style="background-color:black;">
            <th style="padding:10px; font-size: 20px; color:white;">Patient name</th>
            <th style="padding:10px; font-size: 20px; color:white;">Email</th>
            <th style="padding:10px; font-size: 20px; color:white;">Phone number</th>
            <th style="padding:10px; font-size: 20px; color:white;">Doctor name</th>
            <th style="padding:10px; font-size: 20px; color:white;">Date</th>
            <th style="padding:10px; font-size: 20px; color:white;">Message</th>
            <th style="padding:10px; font-size: 20px; color:white;">Status</th>
            <th style="padding:10px; font-size: 20px; color:white;">Approve appointment</th>
            <th style="padding:10px; font-size: 20px; color:white;">Deny appointment</th>
        </tr>

        @foreach($appoint as $appoints)
        <tr style="background-color:black;" align="center">
            <td style="padding:10px;  color:white;">{{$appoints->name}}</td>
            <td style="padding:10px;  color:white;">{{$appoints->email}}</td>
            <td style="padding:10px;  color:white;">{{$appoints->phone}}</td>
            <td style="padding:10px;  color:white;">{{$appoints->doctor}}</td>
            <td style="padding:10px;  color:white;">{{$appoints->date}}</td>
            <td style="padding:10px;  color:white;">{{$appoints->message}}</td>
            <td style="padding:10px;  color:white;">{{$appoints->status}}</td>
            <td><a class="bt btn-success" href="{{url('approve_appoint',$appoints->id)}}">Approve</a></td>
            <td><a class="bt btn-danger" onclick="return confirm('Are you sure you want to deny this?')"
                href="{{url('deny_appoint',$appoints->id)}}">Deny</a></td>

        </tr>
        @endforeach


      </table>


      </div>
      <!-- partial -->
        
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>