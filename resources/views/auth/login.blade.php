<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/bootstrap/css/bootstrap.css")}} rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/node-waves/waves.css")}} rel="stylesheet" />

    <!-- Animation Css -->
    <link href={{asset("bower_components/adminbsb-materialdesign/plugins/animate-css/animate.css")}} rel="stylesheet" />

    <!-- Morris Chart Css-->

    <!-- Custom Css -->
    <link href={{asset("bower_components/adminbsb-materialdesign/css/style.css")}} rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->

</head>

<body class="login-page">
<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);"><h3>TRIBUNAL DE GRANDE INSTANCE DU NFOUNDI</h3><b> <BIG> YAOUNDE </BIG></b></a>
        <small>ADMINISTRATION NUMERIQUE DES DOSSIERS CORECTIONNEL </small>
        <img src="/uploads/minjust.jpg" style="width:250px; height:100px; position:absolute; top:10px; left:10px; border-radius:50%">

    </div>
    <div class="card">

        <div class="body">
            <form id="sign_in" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="msg">Entrez vos paramètres de Connexion</div>
                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Se souvernir de Moi</label>
                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit">CONNEXION</button>
                    </div>
                </div>
                <div class="row m-t-15 m-b--20">
                    <div class="col-xs-6">
                        <a href="#">Register Now!</a>
                    </div>
                    <div class="col-xs-6 align-right">
                        <a href="#">Forgot Password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
<script src={{asset("bower_components/js/pages/examples/sign-in.js")}}></script>



</body>

</html>