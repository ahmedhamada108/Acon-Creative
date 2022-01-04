<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acon-Creative | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../favicon_io/site.webmanifest">
    <link rel="mask-icon" href="../favicon_io/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
    <script src="../dist/js/ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="../dist/img/logo@2x.png" alt="AdminLTELogo" height="200" width="200">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('dashboard')}}" class="brand-link">
            <img src="../dist/img/logo@2xx.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Acon-creative</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="../dist/img/icons8-admin.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{route('dashboard')}}" class="d-block">Admin</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('dashboard')}}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('services')}}" class="nav-link">
                            <i class="nav-icon fab fa-product-hunt"></i>
                            <p>
                                Manage The Services
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Manage the Pages
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('maincontent')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>The main content</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('ourservices')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Our service</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('aboutus')}}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>About Us</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('ourworks')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Our works</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('feedback')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Feedback</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('contactinfo')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Contact Info</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('privacypolice')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Privacy Policy</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('terms')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Terms of use</p>
                                </a>
                            </li>
                        </ul>
                    <li class="nav-item">
                        <a href="{{route('admins')}}" class="nav-link">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>Manage The Admins </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('admin/logout')}}" class="nav-link">
                            <i class="fas fa-sign-out-alt"></i>
                            <p>Logout </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage The content of About Us</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">About Us Section</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        @foreach($AboutContent as $About_content)
                                        <form action="{{route('update.aboutus')}}" method="post">
                                            @csrf
                                            <div class="text-center">
                                                <div class="row">
                                                    <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <label class="control-label">the content of about us section (AR)</label>
                                                            <textarea class="form-control" id="message-text" name="aboutussectionAR">{{$About_content->AboutSection_ar}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <label class="control-label">the content of about us section (EN)</label>
                                                            <textarea class="form-control" id="message-text1" name="aboutussectionEN">{{$About_content->AboutSection_en}}</textarea>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <label class="control-label">the content of About Us page (AR)</label>
                                                            <textarea class="form-control" id="message-text2" name="aboutuspageAR">{{$About_content->about_ar}}</textarea>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-10">
                                                        <div class="form-group">
                                                            <label class="control-label">the content of About Us page (EN)</label>
                                                            <textarea class="form-control" id="message-text3" name="aboutuspageEN">{{$About_content->about_en}}</textarea>
                                                        </div>
                                                        <script>
                                                            CKEDITOR.replace('aboutussectionAR');
                                                            CKEDITOR.replace('aboutussectionEN');
                                                            CKEDITOR.replace('aboutuspageAR');
                                                            CKEDITOR.replace('aboutuspageEN');
                                                        </script>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary submit">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <footer class="footer  bg-white d-flex flex-column flex-md-row align-items-center justify-content-between" >
                    <strong>Copyright &copy; 2021 <a href="#">Acon creative</a>.</strong>
                    All rights reserved.
                </footer>

                <!-- Control Sidebar -->
                <aside class="control-sidebar control-sidebar-dark">
                    <!-- Control sidebar content goes here -->
                </aside>
                <!-- /.control-sidebar -->
            </div>
            <!-- ./wrapper -->

            <!-- jQuery -->
            <script src="../plugins/jquery/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- ChartJS -->
            <script src="../plugins/chart.js/Chart.min.js"></script>
            <!-- Sparkline -->
            <script src="../plugins/sparklines/sparkline.js"></script>
            <!-- JQVMap -->
            <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
            <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
            <!-- jQuery Knob Chart -->
            <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
            <!-- daterangepicker -->
            <script src="../plugins/moment/moment.min.js"></script>
            <script src="../plugins/daterangepicker/daterangepicker.js"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
            <!-- Summernote -->
            <script src="../plugins/summernote/summernote-bs4.min.js"></script>
            <!-- overlayScrollbars -->
            <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE App -->
            <script src="../dist/js/adminlte.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="../dist/js/demo.js"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="../dist/js/pages/dashboard.js"></script>
        </section>
    </div>
</div>
</body>
</html>
