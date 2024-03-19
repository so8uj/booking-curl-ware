<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking Website Admin Panel</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('admin_assets') }}/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('admin_assets') }}/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{ asset('admin_assets') }}/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <style>
        .d-flex{
            display: flex;
        }
        .align-center{
            align-items: center
        }
        .justify-space{
            justify-content: space-between
        }
        .mx-auto{
            margin: auto
        }
    </style>

</head>

<body>



    <div id="wrapper">

        @include('admin.components.assets.sidebar')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">

                @yield('dash_content')
            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
        
    </div>
    <div class="footer">


        <div class="row">
            <div class="col-lg-12">
                &copy; 2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;"
                    target="_blank">www.binarytheme.com</a>
            </div>
        </div>
    </div>


    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('admin_assets') }}/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('admin_assets') }}/js/bootstrap.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('admin_assets') }}/js/custom.js"></script>


</body>

</html>
