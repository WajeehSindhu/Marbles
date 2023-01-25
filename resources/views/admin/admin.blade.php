<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
        <title>Admin Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <!-- SEARCH FORM -->
                <!-- Right navbar links -->
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="#" class="brand-link">
                    <img src="{{asset('images/logo.png')}}" alt="ourmarbles" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                    <span class="brand-text font-weight-light">Our Marbles</span>
                </a>
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="{{asset(Auth::user()->avatar)}}" style="height: 60px; width: 60px; border-radius: 50%; margin-right: 15px;">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open">
                                <a href="{{route('admin.design')}}" class="nav-link active">
                                    {{--<i class="nav-icon fas fa-tachometer-alt"></i>--}}
                                    <p>
                                        Design Request
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Users
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('admin.accounts')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Activated Users</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('user.trash')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Deactivated Users</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Shopkeepers
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('admin.Saccounts')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Activated Shopkeepers</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('shopkeeper.trash')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Deactivated Shopkeepers</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Profile
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('admin.password.change')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Change Password</p>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{route('admin.logout')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Logout</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>



                        </ul>
                    </nav>
                </div>
            </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Admin Dashboard</h1>
                                </div><!-- /.col -->
                                <div class="col-sm-6">
                                    </div><!-- /.col -->
                                    </div><!-- /.row -->
                                    </div><!-- /.container-fluid -->
                                </div>
                            </div>
                            <!-- /.content-wrapper -->
                            <footer class="main-footer">
                                <strong>Copyright &copy; 2019 <a href=#>ourmarbles.com</a>.</strong>
                                All rights reserved.
                                <div class="float-right d-none d-sm-inline-block">
                                    <b>Developed by Zain & Co.</b>
                                </div>
                            </footer>
                            <!-- Control Sidebar -->
                            <aside class="control-sidebar control-sidebar-dark">
                                <!-- Control sidebar content goes here -->
                            </aside>
                            <!-- /.control-sidebar -->
                        </div>
                        <!-- ./wrapper -->
                        <!-- jQuery -->
                        <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
                        <script>
                        $.widget.bridge('uibutton', $.ui.button)
                        </script>
                        <!-- Bootstrap 4 -->
                        <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
                        overlayScrollbars -->
                        <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
                        <!-- AdminLTE App -->
                        <script src="{{asset('dist/js/adminlte.js')}}"></script>
                        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                    </body>
                </html>
