
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title') laravelmila admin</title>
    <link rel="icon" type="image/JPG" href="{{url('favicon.JPG')}}">
    <!-- Bootstrap core CSS-->
    <link href="{{url('theme-sbmila/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{url('theme-sbmila/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{url('theme-sbmila/css/sb-admin.css')}}" rel="stylesheet">
    @stack('css')
  </head>

  <body id="page-top">

    @include('admin.navbar')

    <div id="wrapper">

      <!-- Sidebar -->
    @include('admin.sidebar')

      <div id="content-wrapper">

        <div class="container-fluid">

<<<<<<< HEAD
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>

          <!-- Page Content -->
          <h1>Blank Page</h1>
          <hr>
          <p>This is a great starting point for new custom pages.</p>
=======
          <!-- Page Content -->
         @yield('content')
>>>>>>> video 1-5

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
<<<<<<< HEAD
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>
=======
        @include('admin.folder')
>>>>>>> video 1-5

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

<<<<<<< HEAD
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
=======
    <!--Modal-->
    @stack('modal')
>>>>>>> video 1-5

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('theme-sbmila/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('theme-sbmila/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('theme-sbmila/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('theme-sbmila/js/sb-admin.min.js')}}"></script>
<<<<<<< HEAD

=======
    <script type="text/javascript" src="{{url('theme-sbmila/js/navbar-nav.js')}}"></script>
    @stack('js')
>>>>>>> video 1-5
  </body>

</html>
