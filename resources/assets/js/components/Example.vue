<template>
    <div class="login-box">
            <div class="logo">
                <a href="javascript:void(0);">Admin<b>BSB</b></a>
                <small>Admin BootStrap Based - Material Design</small>
            </div>
            <div class="card">
                <div class="body">
                            <form class="sign_up" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="msg">Sign in to start your session</div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <div class="form-line" :class="{'has-error' : errorsEmail}">
                                        <input id="email" type="email" class="form-control" name="email" v-model="loginDetails.email" placeholder="Votre email"
                                               required autofocus>
                                            <span v-if="errorsEmail" class="help-block">
                                                    <strong>{{ emailError }}</strong>
                                            </span>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock</i>
                                    </span>
                                        <div class="form-line" :class="{ 'has-error' : errorsPassword }">
                                            <input id="password" type="password" class="form-control" name="password" v-model="loginDetails.password" placeholder="Votre mot de passe" required>
                                        </div>
                                        <span v-if="errorsPassword" class="help-block">
                                                <strong>{{ passwordError }}</strong>
                                        </span>
                                </div>

                                <div class="row">
                                    <div class="col-xs-8 p-t-5">
                                        <input type="checkbox" name="rememberme" id="rememberme" v-model="loginDetails.remember" class="filled-in chk-col-pink">
                                        <label for="rememberme">Remember Me</label>
                                    </div>
                                    <div class="col-xs-4">
                                        <button @click.prevent="loginPost" class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                                    </div>
                                </div>

                                <div class="row m-t-15 m-b--20">
                                    <div class="col-xs-6">
                                        <a href={{url('register')}} >Register Now!</a>
                                    </div>
                                    <div class="col-xs-6 align-right">
                                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                                    </div>
                                </div>


                             </form>
                        </div>
                    </div>
                </div>
</template>

<script>
    export default {
        data(){
            return{
                loginDetails:{
                    email:'',
                    password:'',
                    remember:true
                },
                errorsEmail: false,
                errorsPassword: false,
                emailError:null,
                passwordError:null
            }
        },
        methods:{
            loginPost(){
                let vm = this;
                axios.post('/login', vm.loginDetails)
                .then(function(response){
                 console.log(response);
                })
                .catch(function(error){
                var errors = error.response
                consoloe
                })}

        }
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
