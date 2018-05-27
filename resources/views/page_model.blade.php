<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SGDC</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href={{asset("css/font_material_design.css")}} rel="stylesheet">
    <link href={{asset("css/icon_material_design.css")}} rel="stylesheet">


    <!-- Bootstrap Core Css -->
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">

<!-- <link href={{asset("bower_components/adminbsb-materialdesign/css/font2.css")}} rel="stylesheet">
        <link href={{asset("bower_components/adminbsb-materialdesign/css/fonts.css")}} rel="stylesheet">-->

    <!-- Bootstrap Core Css -->
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/bootstrap/css/bootstrap.css")}} rel="stylesheet">

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

@if (Auth::guest())
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
@else

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">

            @include('nav_bar.nav_bar')

        </div>
    </nav>
    <!-- #Top Bar

  <section>-->
    <!-- Left Sidebar -->


    <section>

        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            {{--@include('side_bar.infos_user')--}}
            <div class="user-info">

                <div class="image">
                    <!--<img src="/uploads/avatars/profile.png" style="width:50px; height:50px; positèion:absolute; top:10px; left:10px; border-radius:50%">-->
                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:80px; height:80px; position:absolute; top:10px; left:10px; border-radius:50%">
                    <!-- <img src="bower_components/adminbsb-materialdesign/images/user.png" width="48" height="48" alt="User" />-->
                </div>

                <div class="info-container">
                    <br><br>
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-sign-in"></i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="material-icons">input</i>Deconnexion
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <!-- #User Info -->
            <!-- Menu -->
        @include('side_bar.menu')
        <!-- #Menu -->
            <!-- Footer -->
        @include('side_bar.footer')
        <!-- #Footer -->
        </aside>

        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar pour le parametrage des couleur-->
        @include('side_bar.nav_bar_rigth_seting')

    </section>

    <!-- #END# Right Sidebar
    </section>-->

    <!-- dashbord -->

@endif

@yield('main_content')

<!-- fin -->

<!-- Jquery Core Js
-->
<!-- Jquery Core Js -->
@yield('modal_content')


@yield('script')

<script src={{asset("bower_components/adminbsb-materialdesign/plugins/jquery/jquery.min.js")}}></script>

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


<script>
    @if(isset($hideSidebar) && $hideSidebar == true)
            breakpointWidth = 2560;
    @else
            breakpointWidth = 1170;
    @endif
</script>

<!-- Custom Js -->
<script src={{asset("bower_components/adminbsb-materialdesign/js/admin.js")}}></script>
<!--<script src={{asset("bower_components/adminbsb-materialdesign/js/pages/index.js")}}></script>-->

<!-- Demo Js -->


@yield('js')

</body>

</html>

