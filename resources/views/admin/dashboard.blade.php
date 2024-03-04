<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Zanex - Bootstrap 5 Premium Admin & Dashboard Template </title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="bootstrap template, template dashboard bootstrap, admin template, html admin panel template, bootstrap admin template, html and css templates, bootstrap, bootstrap html template, html admin dashboard template, bootstrap dashboard, admin panel html template">
    
    <!-- Favicon -->
    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('admin/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >

    <!-- Style Css -->
    <link href="{{ asset('admin/assets/css/styles.min.css') }}" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="{{ asset('admin/assets/libs/node-waves/waves.min.css') }}" rel="stylesheet" > 

    <!-- Simplebar Css -->
    <link href="{{ asset('admin/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet" >
    
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

    <!-- Your Favicon -->
    <link rel="icon" href="{{ asset('admin/assets/images/brand-logos/favicon.ico') }}" type="image/x-icon">

</head>


<body>
     @include('admin.partials.header')
   <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('admin.partials.sidebar')
            </div>
            
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    @include('admin.partials.footer')
  </div>
<!-- Popper JS -->
<script src="{{ asset('admin/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/main.js') }}"></script>
<script src="{{ asset('admin/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/defaultmenu.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/sticky.js') }}"></script>
<script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/simplebar.js') }}"></script>
<script src="{{ asset('admin/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/index.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom-switcher.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/custom.js') }}"></script>

</body>