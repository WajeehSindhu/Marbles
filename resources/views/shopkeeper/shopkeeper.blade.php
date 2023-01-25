<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
        <title>Shopkeeper Dashboard</title>
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
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                @include('shopkeeper.partials.navbar')
            </nav>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Shopkeeper Dashboard</h1>
                                </div><!-- /.col -->
                                @section('content')
                                <div class="row d-block">
                                    <div class="col-sm-12">
                                        @if (session()->has('message'))
                                        <div class="alert alert-success">
                                            {{session('message')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
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
                        <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
                        <!-- AdminLTE App -->
                        <script src="{{asset('dist/js/adminlte.js')}}"></script>
                        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                    </body>
                </html>
