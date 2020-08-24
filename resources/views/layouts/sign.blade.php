<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::to('/')}}/theme/assets/images/favicon.png">
    <title>{{ __('messages.title') }}</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{URL::to('/')}}/theme/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{URL::to('/')}}/theme/assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{URL::to('/')}}/theme/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{URL::to('/')}}/theme/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
@yield('content')
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{URL::to('/')}}/theme/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{URL::to('/')}}/theme/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{URL::to('/')}}/theme/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{URL::to('/')}}/theme/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="{{URL::to('/')}}/theme/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{URL::to('/')}}/theme/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="{{URL::to('/')}}/theme/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="{{URL::to('/')}}/theme/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="{{URL::to('/')}}/theme/js/custom.min.js"></script>

<script>
    $(document).ready(function() {
        if ($('html')[0].lang === 'cn') {
            $("#flag-country-icon").attr('class', 'flag-icon flag-icon-cn');            
        }
    });
</script>

<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="{{URL::to('/')}}/theme/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
