@extends('admin.login_master')

@section('pagelevelcss')

@stop

@section('content')
<div class="col-md-6 login-container bs-reset" style="background-color: #F0F0F0;">
    <img class="login-logo login-6" src="{!! asset('public/adminpanel/pages/img/logo.png') !!}" />
    <div class="login-content">
        <h1>HealthPlusForU Admin Panel</h1>
        <p>Please enter right pair of Email and password for logged into Admin Panel.</p>
        {!! Form::open(array('route' => array('common.check.login'), 'id' => 'user_login', 'class' => 'login-form'))  !!}
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>Enter any username and password. </span>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Username" name="username" required/> 
                </div>
                <div class="col-xs-6">
                    <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" required/> 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <label class="rememberme mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" /> Remember me
                        <span></span>
                    </label>
                </div>
                <div class="col-sm-8 text-right">
                    <div class="forgot-password">
                        <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn blue" type="submit">Sign In</button>
                </div>
            </div>
        </form>
        <!-- BEGIN FORGOT PASSWORD FORM -->
        <form class="forget-form" action="javascript:;" method="post">
            <h3>Forgot Password ?</h3>
            <p> Enter your e-mail address below to reset your password. </p>
            <div class="form-group">
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
            <div class="form-actions">
                <button type="button" id="back-btn" class="btn blue btn-outline">Back</button>
                <button type="submit" class="btn blue uppercase pull-right">Submit</button>
            </div>
        </form>
        <!-- END FORGOT PASSWORD FORM -->
    </div>
    <div class="login-footer">
        <div class="row bs-reset">
            <div class="col-xs-5 bs-reset">
                <ul class="login-social">
                    <li>
                        <a href="javascript:;">
                            <i class="icon-social-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-social-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-social-dribbble"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-7 bs-reset">
                <div class="login-copyright text-right">
                    <p>Copyright &copy; Keenthemes 2015</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 bs-reset">
    <div class="login-bg"> </div>
</div>
@stop

@section('pageleveljs')
<script type="text/javascript" charset="utf-8">
    @if (count(Session::get('error')) > 0)
        bootbox.alert('{!! Session::get('error') !!}');
    @endif

    var Login = function() {

    var handleLogin = function() {

        $('.login-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            rules: {
                username: {
                    required: true, 
                    email : true
                },
                password: {
                    required: true
                }
            },

            messages: {
                username: {
                    required: "Username is required."
                },
                password: {
                    required: "Password is required."
                }
            },

            invalidHandler: function(event, validator) { //display error alert on form submit   
                $('.alert-danger', $('.login-form')).show();
            },

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function(error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },

            submitHandler: function(form) {
                form.submit(); // form validation success, call ajax form submit
            }
        });

        $('.login-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.login-form').validate().form()) {
                    $('.login-form').submit(); //form validation success, call ajax form submit
                }
                return false;
            }
        });

        $('.forget-form input').keypress(function(e) {
            if (e.which == 13) {
                if ($('.forget-form').validate().form()) {
                    $('.forget-form').submit();
                }
                return false;
            }
        });

        $('#forget-password').click(function(){
            $('.login-form').hide();
            $('.forget-form').show();
        });

        $('#back-btn').click(function(){
            $('.login-form').show();
            $('.forget-form').hide();
        });
    }

 
  

    return {
        //main function to initiate the module
        init: function() {

            handleLogin();

            // init background slide images
            $('.login-bg').backstretch([
                "{!! asset('public/adminpanel/pages/img/login/bg1.jpg') !!}",
                "{!! asset('public/adminpanel/pages/img/login/bg2.jpg') !!}",
                "{!! asset('public/adminpanel/pages/img/login/bg3.jpg') !!}"
                ], {
                  fade: 1000,
                  duration: 8000
                }
            );

            $('.forget-form').hide();

        }

    };

}();

jQuery(document).ready(function() {
    Login.init();
});
</script>
@stop