<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{config('app.name')}}</title>

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  @livewireStyles
  @stack('styles')
</head>
</head>
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('layouts.patials.navbar')
        @include('layouts.patials.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
                @yield('content')
        </div>
        <!-- /.content-wrapper -->

        @include('layouts.patials.footer')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/toast.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/dialog.js') }}"></script>
    @livewireScripts
</body>
</html>
