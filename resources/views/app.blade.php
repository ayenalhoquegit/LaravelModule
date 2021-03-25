<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Smart School</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <div id="app">
                <App/>
            </div>
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                  <b>Version</b> 3.0.5
                </div>
                <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
                reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- jQuery -->
        <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('AdminLTE/dist/js/demo.js')}}"></script>
        <script type="text/javascript">
            window.baseUrl = '{{url('/')}}';
            window.appUrl = '{{url('/')}}';
            window.publicPath = '{{url('/')}}/public';
            window.storagePath = 'storage/app/public';
            window.token = '{{@csrf_token()}}';
            window.panel = 'user';
        </script>
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>
