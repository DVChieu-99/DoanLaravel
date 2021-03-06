<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>CMS Quizz Games</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        @yield('css')

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}"rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />


        <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Navigation Bar-->
        @include('partials.navigation')
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Upvex</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Starter</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Starter</h4>
                        </div>
                    </div>  
                    
                </div>     
                <!-- end page title --> 
                @if(Session::has('flash_message'))
                <script type="text/javascript">
                function sesionn()
                {
                    Swal.fire({position:"middle-start",
                    type:"success",
                    title:"{{Session::get('flash_message')}}",
                    showConfirmButton:!1,
                    timer:1000
                })
                }
                </script>
                @endif

                @yield('main-content')
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

       
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!-- Footer Start -->
        <footer class="footer">
          </footer>
        <!-- /Right-bar -->
        @include('partials.right-bar')
        

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        @yield('js')

        <!-- App js-->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        <script src="{{ asset('assets/js/myscrip.js') }}"></script>
        <script src="{{ asset('assets/js/pages/toastr.int.js.js') }}"></script>
        <script src="{{ asset('assets/libs/jquery-toast/jquery.toast.min.js') }}"></script>
        
        <script src="{{ asset('assets/js/pages/sweet-alerts.init.js') }}"></script>
        <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
        <script>sesionn();</script>
    </body>
</html>