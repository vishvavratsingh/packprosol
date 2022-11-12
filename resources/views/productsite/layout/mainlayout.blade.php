<!DOCTYPE html>
<html lang="en">

<head>
 <!-- bootstrap css -->
 <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    @yield('componentHeaderContent')
</head>

<body>
    @include('productsite.inc.header')
    <main>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
                <div class="mobileNavAction">
                    <i class="bi bi-three-dots-vertical"></i>
                </div>

            </div>
            <div class="col-sm-12 col-md-12 col-lg-9">
                @yield('content')
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <!-- stored sweet alert -->
    <script src="{{url('/js/jobseeker/sweetAlert/index.js')}}"></script>
    
    <!--- Scripts Constants (GLOBAL CONSTANTS) -->
    <script>
        const BASE_URL = "{{url('/')}}";
        const CSRF_TOKEN = "{{csrf_token()}}";
    </script>
    <!--- Scripts Constants end -->

    <!--- common scripts-->
    <script src="{{url('/js/jobseeker/common.js')}}"></script>
    <script src="{{url('/js/jobseeker/sidebar.js')}}"></script>
    <!---component scripts-->
    @yield('componentFooterContent')
</body>

</html>