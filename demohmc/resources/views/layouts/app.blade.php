<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      <!-- meta tag -->
		<meta charset="utf-8">
		<title>Roofing - Konstruk - Construction & Building HTML Template</title>
		<meta name="description" content="">
        <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- responsive tag -->
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <x-head />



</head>
<body class="home-red-color">

    <div class="offwrap"></div>

    <!--Preloader start here-->
       <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="assets/images/fav.png" alt="Konstruk - Construction & Building Html Template "></div>
            </div>
        </div>
    </div>
    <!--Preloader area end here-->

    <!-- Main content Start -->
    <div class="main-content">

        <!--Full width header Start-->
        <x-header />
        <!--Full width header End-->

        @yield('content')


    </div>
    <!-- Main content End -->

    <!-- Footer Start -->
    <x-footer />
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp" class="red-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->
    <x-footer-script />


</body>
</html>
