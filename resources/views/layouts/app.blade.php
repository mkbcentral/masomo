<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{setting('name_app')}} | App</title>

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{Auth::user()->school==null ? asset('logo.jpg') :
  Storage::url(Auth::user()->school->logo_url) }}">

  @livewireStyles
  @stack('styles')
</head>
</head>
<body class="hold-transition sidebar-mini {{setting('sidebar_collapse') ? 'sidebar-collapse':''}}">
    <!-- Site wrapper -->
    <div class="wrapper">
        @include('layouts.patials.navbar')
        @include('layouts.patials.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper py-2 px-2 {{setting('is_dark_mode') ? 'bg-dark':'bg-light'}}">
            {{$slot}}
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
    @stack('js')
</body>
</html>
