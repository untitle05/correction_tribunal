@extends('page_model')


   @section('css')
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
@endsection


@section('main_content')
    <div class="card">
        <div class="body">
            <form id="sign_up" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="msg">Nouveau Utilisateur</div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="name" placeholder="Name Surname" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                    <div class="form-line">
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" minlength="2" placeholder="Password" required>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password_confirmation" minlength="2" placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                    <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                </div>

                <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

                <div class="m-t-25 m-b--5 align-center">
                    <a href="sign-in.html">You already have a membership?</a>
                </div>
            </form>
        </div>
    </div>
</div>
    @endsection

@section('js')

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
<script src={{asset("bower_components/js/pages/examples/sign-up.js")}}></script>
    @endsection