<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Laravel')</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('public/assets2/bootstrap/dist/css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('public/css/custom.css')}}">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" href="{{asset('public/assets2/global/plugins/pace/themes/pace-theme-flash.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/global/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/global/plugins/simple-line-icons/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/global/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}">
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link rel="stylesheet" href="{{asset('public/assets2/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/global/plugins/morris/morris.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/global/plugins/fullcalendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/global/plugins/jqvmap/jqvmap/jqvmap.css')}}">
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- HEADER PLUGINS -->
    <link rel="stylesheet" href="{{asset('public/assets2/global/plugins/fancybox/source/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/global/plugins/jquery-file-upload/css/jquery.fileupload.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/apps/css/inbox.min.css')}}">
    <!-- END HEADER PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link rel="stylesheet" href="{{asset('public/assets2/global/css/components-rounded.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/global/css/plugins.min.css')}}">
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link rel="stylesheet" href="{{asset('public/assets2/layouts/layout/css/layout.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/layouts/layout/css/themes/darkblue.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets2/layouts/layout/css/custom.min.css')}}">
    <!-- END THEME LAYOUT STYLES -->
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <div class="page-wrapper">
        @include('includes.header')
    </div>
    <div class="container mt-5">
        @yield('content')
    </div>

    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <!-- BEGIN CORE PLUGINS 6 -->
    <script src="{{asset('public/assets2/global/plugins/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/js.cookie.min.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/jquery.blockui.min.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PROFILE PLUGINS -->
    <script src="{{asset('public/assets2/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/gmaps/gmaps.min.js')}}"></script>
    <!-- END PROFILE PLUGINS -->
    <script src="{{asset('public/assets2/global/plugins/fancybox/source/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/jquery-file-upload/js/vendor/load-image.min.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/jquery-file-upload/js/jquery.fileupload.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS 30 -->
    <script src="{{asset('public/assets2/global/plugins/moment.min.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/morris/raphael-min.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/counterup/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('public/assets2/global/plugins/counterup/jquery.counterup.min.js')}}"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{asset('public/assets2/global/scripts/app.min.js')}}"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="{{asset('public/assets2/layouts/layout/scripts/layout.min.js')}}"></script>
    <script src="{{asset('public/assets2/layouts/layout/scripts/demo.min.js')}}"></script>
    <script src="{{asset('public/assets2/layouts/global/scripts/quick-sidebar.min.js')}}"></script>
    <script src="{{asset('public/assets2/layouts/global/scripts/quick-nav.min.js')}}"></script>

</body>
</html>
