@extends('sign')

@section('body-class')
    class="signup-page"
@stop

@section('form-sign-in')
    <div class="signup-box" >
        <div class="logo">
            <a href="javascript:void(0);"><b>Système de Gestion des Dossiers Correctionnels</b></a>
            <small>Tribunal de Grande Instance de Yaoundé</small>
        </div>
        <div class="card">
            <div class="body">
                <form class="sign_up" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                    <div class="input-group">
                        <span class="input-group-addon">
                          <i class="material-icons">person</i>
                        </span>
                        <div class="form-line{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="text" class="form-control" name="name" placeholder="Votre nom" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                          <i class="material-icons">email</i>
                        </span>
                        <div class="form-line{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control" name="email" placeholder="Votre email"  required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                          <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" name="password" placeholder="Votre mot de passe" required autofocus>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                     <div class="input-group">
                        <span class="input-group-addon">
                          <i class="material-icons">lock</i>
                        </span>

                        <div class="form-line">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmez le mot de passe" required autofocus>
                        </div>
                    </div>

                        <div class="form-group">
                            <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                            <label for="terms">Cochez Si c'est un Adminstrateur <a href="javascript:void(0);">SGDC</a>.</label>
                        </div>
                        <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>
                       <div class="m-t-25 m-b--5 align-center">
                        <a href="{{ url('#') }}">You already have a membership?</a>
                    </div>




                            </form>
                    </div>
            </div>
        </div>
@stop
