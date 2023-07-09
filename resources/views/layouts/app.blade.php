<html>
<head>

<head>
	<title>@yield('title')</title>
	<link rel="shortcut icon" href="{{ asset('') }}assets/images/logo2.png">
    @include('includes.meta')

    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>

	<div id="page">

    
        @include('includes.navbar')
		
                    @yield('content')    

		@include('includes.footer')


		
<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Sign In</h3>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="sign-in-wrapper">
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
     
            <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
            <div class="text-center">
                Belum Punya Akun? <a href="{{ url('daftar') }}">Daftar</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Popup -->

<div id="toTop"></div><!-- Back to top button -->
       
 
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
	
</body>

</html>
