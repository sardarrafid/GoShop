<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techzaa.in/larkon/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Dec 2025 15:54:30 GMT -->
<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Dashboard | Larkon - Responsive Admin Dashboard Template</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="A fully responsive premium admin dashboard template" />
     <meta name="author" content="Techzaa" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <!-- App favicon -->
     <link rel="shortcut icon" href="assets/images/favicon.ico">

     <!-- Vendor css (Require in all Page) -->
     <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

     <!-- Icons css (Require in all Page) -->
     <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

  


     <!-- App css (Require in all Page) -->
     <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

     <!-- Theme Config js (Require in all Page) -->
     <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body>
    
       <!-- START Wrapper -->
     <div class="wrapper">
            <!-- START Header -->
            {{-- @include('Dashboard.Parth.header') --}}
            <!-- END Header -->
    
            <!-- START Left Sidebar -->
            @include('Dashboard.Parth.sidebar')
            <!-- END Left Sidebar -->
    
            <!-- START Content Area -->
            @include('Dashboard.Parth.navebar')
            <!-- ==================================================== -->
        