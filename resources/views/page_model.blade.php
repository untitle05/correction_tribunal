<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href={{asset("css/font_material_design.css")}} rel="stylesheet">
        <link href={{asset("css/icon_material_design.css")}} rel="stylesheet">


        <!-- Bootstrap Core Css -->
        <link href={{asset("bower_components/adminbsb-materialdesign/plugins/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href={{asset("bower_components/adminbsb-materialdesign/plugins/node-waves/waves.css")}} rel="stylesheet" />

        <!-- Animation Css -->
        <link href={{asset("bower_components/adminbsb-materialdesign/plugins/animate-css/animate.css")}} rel="stylesheet" />

        <!-- Morris Chart Css-->
        <link href={{asset("bower_components/adminbsb-materialdesign/plugins/morrisjs/morris.css")}} rel="stylesheet" />

        <!-- Custom Css -->
        <link href={{asset("bower_components/adminbsb-materialdesign/css/style.css")}} rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href={{asset("bower_components/adminbsb-materialdesign/css/themes/all-themes.css")}} rel="stylesheet" />


        @yield('css')


    </head>


    <body class="theme-red">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->


        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->


        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <!-- #END# Search Bar -->


        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">

                @include('nav_bar.nav_bar')

            </div>
        </nav>
          <!-- #Top Bar

        <section>-->
        <!-- Left Sidebar -->

        @include('side_bar.side_bar')

        <!-- #END# Right Sidebar
        </section>-->

        <!-- dashbord -->

        @yield('main_content')

        <!-- fin -->

        <!-- Jquery Core Js
        -->
        <!-- Jquery Core Js -->

        <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jquery/jquery.min.js")}}></script>

        @yield('script')


        <!-- Bootstrap Core Js -->
        <script src={{asset("bower_components/adminbsb-materialdesign/plugins/bootstrap/js/bootstrap.js")}}></script>

        <!-- Select Plugin Js -->
        <script src={{asset("bower_components/adminbsb-materialdesign/plugins/bootstrap-select/js/bootstrap-select.js")}}></script>

        <!-- Slimscroll Plugin Js -->
        <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jquery-slimscroll/jquery.slimscroll.js")}}></script>

        <!-- Waves Effect Plugin Js -->
        <script src={{asset("bower_components/adminbsb-materialdesign/plugins/node-waves/waves.js")}}></script>

        <!-- Jquery CountTo Plugin Js -->
        <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jquery-countto/jquery.countTo.js")}}></script>

        <!-- Morris Plugin Js -->
        <script src={{asset("bower_components/adminbsb-materialdesign/plugins/raphael/raphael.min.js")}}></script>
        <script src={{asset("bower_components/adminbsb-materialdesign/plugins/morrisjs/morris.js")}}></script>

        <!-- ChartJs -->
        <script src={{asset("bower_components/adminbsb-materialdesign/plugins/chartjs/Chart.bundle.js")}}></script>



        <!-- Sparkline Chart Plugin Js -->
        <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jquery-sparkline/jquery.sparkline.js")}}></script>

        <!-- Custom Js -->
        <script src={{asset("bower_components/adminbsb-materialdesign/js/admin.js")}}></script>
        <!--<script src={{asset("bower_components/adminbsb-materialdesign/js/pages/index.js")}}></script>-->

        <!-- Demo Js -->
        <script src={{asset("bower_components/adminbsb-materialdesign/js/demo.js")}}></script>

        @yield('js')

    </body>

</html>

@yield('modal_content')