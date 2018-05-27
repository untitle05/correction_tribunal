<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href={{asset("css/font_material_design.css")}} rel="stylesheet">
    <link href={{asset("css/icon_material_design.css")}} rel="stylesheet">
    <!-- Bootstrap Core Css -->
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/bootstrap/css/bootstrap.css")}} rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/node-waves/waves.css")}} rel="stylesheet" />

    <!-- Animation Css -->
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/animate-css/animate.css")}} rel="stylesheet" />

    <!-- Custom Css -->
    <link href={{asset("bower_components/adminbsb-materialdesign/css/style.css")}} rel="stylesheet">
</head>

<body @yield('body-class')>
<div style="width:175%; position: relative; left: -35%">
        @yield('form-sign-in')
            </div>

    <!-- Jquery Core Js -->
    <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jquery/jquery.min.js")}}></script>

    <!-- Bootstrap Core Js -->
    <script src={{asset("bower_components/adminbsb-materialdesign/plugins/bootstrap/js/bootstrap.js")}}></script>


    <!-- Waves Effect Plugin Js -->
    <script src={{asset("bower_components/adminbsb-materialdesign/plugins/node-waves/waves.js")}}></script>

    <!-- Validation Plugin Js -->
    <script src={{asset("bower_components/adminbsb-materialdesign/plugins/jquery-validation/jquery.validate.js")}}></script>

    <!-- Custom Js -->
    <script src={{asset("bower_components/adminbsb-materialdesign/js/admin.js")}}></script>
    <script src={{asset("bower_components/adminbsb-materialdesign/js/pages/examples/sign-in.js")}}></script>
</body>

</html>