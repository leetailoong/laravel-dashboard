<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{URL:: asset('img/favicon.png') }}">

    <title>@yield('title')</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/jqueryui/jquery-ui.min.css')}}">
    <link href="{{url(asset('plugins/bootstrap/css/bootstrap.min.css'))}}" rel="stylesheet">
    <link href="{{url('plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <!-- This page CSS -->
    <link href="{{url('plugins/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{url('css/admin/style.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{url('css/admin/pages/dashboard1.css')}}" rel="stylesheet">

    @yield('styles')

    <!-- You can change the theme colors from here -->
    <link href="{{url('css/admin/colors/green-dark.css')}}" rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{url('css/admin/custom.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    {{-- <script src="https://cdn.rawgit.com/samsonjs/strftime/master/strftime-min.js"></script>
    <script src="//js.pusher.com/3.0/pusher.min.js"></script> --}}
</head>

<body class="card-no-border mini-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Loading ...</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('components.left-sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                @yield('content')
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('components.footer')
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script src="{{url(asset('plugins/jquery/jquery.min.js'))}}"></script>
    <script src="{{url(asset('plugins/jqueryui/jquery-ui.min.js'))}}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{url(asset('plugins/bootstrap/js/popper.min.js'))}}"></script>
    <script src="{{url(asset('plugins/bootstrap/js/bootstrap.min.js'))}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{url(asset('plugins/ps/perfect-scrollbar.jquery.min.js'))}}"></script>
    <!--Wave Effects -->
    <script src="{{url(asset('js/admin/waves.js'))}}"></script>
    <!--Menu sidebar -->
    <script src="{{url(asset('js/admin/sidebarmenu.js'))}}"></script>
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="{{url(asset('plugins/toast-master/js/jquery.toast.js'))}}"></script>
    
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{url(asset('plugins/styleswitcher/jQuery.style.switcher.js'))}}"></script>
    {{-- <script src="{{url(asset('js/app.js'))}}"></script> --}}
    <!--Custom JavaScript -->
    <!-- ============================================================== -->
    <script src="{{url(asset('js/client/custom.js'))}}"></script>

        @yield('page_scripts')

    <script type="text/javascript">
        var cluster = "{{ config('broadcasting.connections.pusher.options.cluster') }}"
        var app_key = "{{ config('broadcasting.connections.pusher.key')}}"
        var id = "{{Auth::id()}}"
        
    </script>

        @yield('scripts')

    <script type="text/javascript">

        var status = '{!! Request::session()->get('status') !!}'
        var description = '{!! Request::session()->get('description') !!}'
        if(status != '' && description != '' ){
            // handleToaster(status, description)
        }

    </script>
    
</body>

</html>